<?php

$config = [
    'id' => 'console',
    'controllerNamespace' => 'App\Console\Controllers',
    'controllerMap' => [
        'migrate' => [
            'class' => 'yii\console\controllers\MigrateController',
            'migrationPath' => SRC_PATH . '/migrations',
            'templateFile' => SRC_PATH . '/templates/migration.php',
            'generatorTemplateFiles' => [
                'create_table' => SRC_PATH . '/templates/createTableMigration.php',
                'drop_table' => SRC_PATH . '/templates/dropTableMigration.php',
                'add_column' => SRC_PATH . '/templates/addColumnMigration.php',
                'drop_column' => SRC_PATH . '/templates/dropColumnMigration.php',
                'create_junction' =>SRC_PATH .  '/templates/createJunctionMigration.php'
            ]
        ]
    ]
];

return $config;