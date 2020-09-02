<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce89c86d009403d09a33eba54f45b7bc
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\Controller\\StudentController' => __DIR__ . '/../..' . '/src/Controller/StudentController.php',
        'App\\Model\\DBconnect' => __DIR__ . '/../..' . '/src/Model/DBconnect.php',
        'App\\Model\\Student' => __DIR__ . '/../..' . '/src/Model/Student.php',
        'App\\Model\\StudentManager' => __DIR__ . '/../..' . '/src/Model/StudentManager.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitce89c86d009403d09a33eba54f45b7bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitce89c86d009403d09a33eba54f45b7bc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitce89c86d009403d09a33eba54f45b7bc::$classMap;

        }, null, ClassLoader::class);
    }
}