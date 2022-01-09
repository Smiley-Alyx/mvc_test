<?php

return [
    '~^hello/(.*)$~' => [\Project\Controllers\MainController::class, 'sayHello'],
    '~^$~' => [\Project\Controllers\MainController::class, 'main'],
];
