<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5CPmMz0\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5CPmMz0/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container5CPmMz0.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container5CPmMz0\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container5CPmMz0\srcDevDebugProjectContainer(array(
    'container.build_hash' => '5CPmMz0',
    'container.build_id' => 'dae52fe4',
    'container.build_time' => 1526605732,
), __DIR__.\DIRECTORY_SEPARATOR.'Container5CPmMz0');