<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMEzTtE5\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMEzTtE5/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMEzTtE5.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMEzTtE5\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerMEzTtE5\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'MEzTtE5',
    'container.build_id' => '0aa13cd9',
    'container.build_time' => 1554020851,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMEzTtE5');
