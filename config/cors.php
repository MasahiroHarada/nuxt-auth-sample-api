<?php

return [
    'supportsCredentials' => true,
    'allowedOrigins' => [env('CORS_ALLOWED_ORIGIN')],
    'allowedOriginsPatterns' => [],
    'allowedHeaders' => ['*'],
    'allowedMethods' => ['*'],
    'exposedHeaders' => [],
    'maxAge' => 0,
];
