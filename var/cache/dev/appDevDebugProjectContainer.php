<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDgcayhw\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDgcayhw/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerDgcayhw.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerDgcayhw\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerDgcayhw\appDevDebugProjectContainer([
    'container.build_hash' => 'Dgcayhw',
    'container.build_id' => '974a286e',
    'container.build_time' => 1552474530,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDgcayhw');