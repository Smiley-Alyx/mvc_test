<?php

return [
    '~^$~' => [\Project\Controllers\MainController::class, 'main'],
    '~^articles/(\d+)$~' => [\Project\Controllers\ArticlesController::class, 'view'],
    '~^articles/(\d+)/edit$~' => [\Project\Controllers\ArticlesController::class, 'edit'],
    '~^articles/add$~' => [\Project\Controllers\ArticlesController::class, 'add'],
    '~^articles/(\d+)/delete~' => [\Project\Controllers\ArticlesController::class, 'delete'],
];
