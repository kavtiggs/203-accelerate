<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2fc54eabf22b1e7f835d4c04433e2d56
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NinjaForms\\Blocks\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NinjaForms\\Blocks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/blocks/views/includes',
        ),
    );

    public static $classMap = array (
        'NinjaForms\\Blocks\\Authentication\\KeyFactory' => __DIR__ . '/../..' . '/blocks/views/includes/Authentication/KeyFactory.php',
        'NinjaForms\\Blocks\\Authentication\\SecretStore' => __DIR__ . '/../..' . '/blocks/views/includes/Authentication/SecretStore.php',
        'NinjaForms\\Blocks\\Authentication\\Token' => __DIR__ . '/../..' . '/blocks/views/includes/Authentication/Token.php',
        'NinjaForms\\Blocks\\Authentication\\TokenFactory' => __DIR__ . '/../..' . '/blocks/views/includes/Authentication/TokenFactory.php',
        'NinjaForms\\Blocks\\DataBuilder\\FieldsBuilder' => __DIR__ . '/../..' . '/blocks/views/includes/DataBuilder/FieldsBuilder.php',
        'NinjaForms\\Blocks\\DataBuilder\\FieldsBuilderFactory' => __DIR__ . '/../..' . '/blocks/views/includes/DataBuilder/FieldsBuilderFactory.php',
        'NinjaForms\\Blocks\\DataBuilder\\FormsBuilder' => __DIR__ . '/../..' . '/blocks/views/includes/DataBuilder/FormsBuilder.php',
        'NinjaForms\\Blocks\\DataBuilder\\FormsBuilderFactory' => __DIR__ . '/../..' . '/blocks/views/includes/DataBuilder/FormsBuilderFactory.php',
        'NinjaForms\\Blocks\\DataBuilder\\SubmissionsBuilder' => __DIR__ . '/../..' . '/blocks/views/includes/DataBuilder/SubmissionsBuilder.php',
        'NinjaForms\\Blocks\\DataBuilder\\SubmissionsBuilderFactory' => __DIR__ . '/../..' . '/blocks/views/includes/DataBuilder/SubmissionsBuilderFactory.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2fc54eabf22b1e7f835d4c04433e2d56::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2fc54eabf22b1e7f835d4c04433e2d56::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2fc54eabf22b1e7f835d4c04433e2d56::$classMap;

        }, null, ClassLoader::class);
    }
}
