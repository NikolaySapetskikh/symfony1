<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCc7ejui\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCc7ejui/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCc7ejui.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCc7ejui\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerCc7ejui\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Cc7ejui',
    'container.build_id' => '7b7ecbb2',
    'container.build_time' => 1553794947,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCc7ejui');
