<?php

return [
    'paths' => [
        'Application',
        'Application/Http',
        'Application/Http/Controllers',
        'Application/Http/Middleware',
        'Application/Http/Requests',
        'Application/Http/Resources',
        'Application/Policies',
        'Contracts',
        'Contracts/DataTransferObjects',
        'Contracts/Exceptions',
        'Domain',
        'Domain/Events',
        'Domain/Jobs',
        'Domain/Models',
        'Domain/Rules',
        'Domain/Services',
        'Infrastructure',
        'Infrastructure/Database',
        'Infrastructure/Database/Factories',
        'Infrastructure/Database/Migrations',
        'Infrastructure/Database/Seeders',
        'Infrastructure/Repositories',
        'Infrastructure/Services',
        'Providers',
        'Tests',
        'Tests/Feature',
        'Tests/Unit',
        'Routes',
    ],

    'provider_path' => 'Providers',

    'service_provider_location' => 'Providers',

    'routes_file_location' => 'Routes/web.php',
];
