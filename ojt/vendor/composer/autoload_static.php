<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite524cb83b272c1381817f2380307d5f2
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'R' => 
        array (
            'Renderrer\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'PhpOffice\\PhpSpreadsheet\\' => 25,
        ),
        'F' => 
        array (
            'FontLib\\' => 8,
        ),
        'D' => 
        array (
            'Dompdf\\' => 7,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/sources',
        ),
        'Renderrer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/renderrer',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'PhpOffice\\PhpSpreadsheet\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/phpspreadsheet/src/PhpSpreadsheet',
        ),
        'FontLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib',
        ),
        'Dompdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/dompdf/dompdf/src',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Svg\\' => 
            array (
                0 => __DIR__ . '/..' . '/phenx/php-svg-lib/src',
            ),
            'Sabberworm\\CSS' => 
            array (
                0 => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Cpdf' => __DIR__ . '/..' . '/dompdf/dompdf/lib/Cpdf.php',
        'HTML5_Data' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Data.php',
        'HTML5_InputStream' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/InputStream.php',
        'HTML5_Parser' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Parser.php',
        'HTML5_Tokenizer' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Tokenizer.php',
        'HTML5_TreeBuilder' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/TreeBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite524cb83b272c1381817f2380307d5f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite524cb83b272c1381817f2380307d5f2::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite524cb83b272c1381817f2380307d5f2::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite524cb83b272c1381817f2380307d5f2::$classMap;

        }, null, ClassLoader::class);
    }
}
