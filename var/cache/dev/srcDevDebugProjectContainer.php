<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerC5FNWYA\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerC5FNWYA/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerC5FNWYA.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerC5FNWYA\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerC5FNWYA\srcDevDebugProjectContainer();
