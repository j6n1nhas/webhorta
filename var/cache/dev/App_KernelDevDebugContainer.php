<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDHPE6xW\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDHPE6xW/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDHPE6xW.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDHPE6xW\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDHPE6xW\App_KernelDevDebugContainer([
    'container.build_hash' => 'DHPE6xW',
    'container.build_id' => '4cacebbc',
    'container.build_time' => 1640537113,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDHPE6xW');
