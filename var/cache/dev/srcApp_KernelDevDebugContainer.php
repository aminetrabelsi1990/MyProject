<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKsuG16Q\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKsuG16Q/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKsuG16Q.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKsuG16Q\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerKsuG16Q\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'KsuG16Q',
    'container.build_id' => '94e7e93a',
    'container.build_time' => 1609001806,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKsuG16Q');
