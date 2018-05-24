<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Links;
use App\Repository\LinksRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Form\AddLinkType;

/** controller pour afficher, rajouter et éditer les liens */
class LinksController extends Controller
{
/** Méthode pour afficher tous les liens sur page accueil */
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $links = $em->getRepository(Links::class)->findAll();

        return $this->render('links/index.html.twig', [
            'links' => $links,
        ]);
    }

/** Méthode pour afficher le détail d'un lien */
    /**
     * @Route("/view/{id}", name="view")
     */
    public function view(Links $link)
    {
        return $this->render('links/view.html.twig', [
            'link'  =>  $link
        ]);
    }

/** Méthode pour rajouter un lien dans mysql
 *  si ok redirection vers page accueil
 */
    /**
     * @Route("/add", name="add")
     */
    public function add(Request $request)
    {
        $link = new Links();
        $form = $this->createForm(AddLinkType::class, $link);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
	        $em = $this->getDoctrine()->getManager();
	        $em->persist($link);
	        $em->flush();

	        return $this->redirectToRoute('home');
	    }

        return $this->render('links/add.html.twig', [
	        'form'  =>  $form->createView()
        ]);
    }

/** Méthode pour éditer le lien
 *  si ok redirection vers le détail du lien
 */
    /**
	 * @Route("/edit/{id}", name="edit")
	 */ 
	public function edit(Links $link, Request $request){
	    $form = $this->createForm(AddLinkType::class, $link);

	    $form->handleRequest($request);
	    
	    if($form->isSubmitted() && $form->isValid()){
	        $em = $this->getDoctrine()->getManager();
	        $em->persist($link);
	        $em->flush();

            return $this->render('links/view.html.twig', [
                'link'  =>  $link
            ]);
	    }

	    return $this->render('links/add.html.twig', [
	        'form'  =>  $form->createView()
	    ]);
    }
    
    /** Méthode pour effacer le lien
 *  si ok redirection vers page accueil
 */
    /**
	 * @Route("/erase/{id}", name="erase")
	 */ 
	public function erase(Links $link, Request $request){
	    $form = $this->createForm(AddLinkType::class, $link);

	    $form->handleRequest($request);
	    
	    if($form->isSubmitted() && $form->isValid()){
	        $em = $this->getDoctrine()->getManager();
	        $em->remove($link);
	        $em->flush();

            return $this->render('links/view.html.twig', [
                'link'  =>  $link
            ]);
	    }

	    return $this->render('links/erase.html.twig', [
	        'form'  =>  $form->createView()
	    ]);
	}
}
