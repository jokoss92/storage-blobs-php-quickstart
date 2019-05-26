<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a496f2fa1492aa88adaceb0e6c9ccf0
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WindowsAzure\\' => 13,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'M' => 
        array (
            'MicrosoftAzure\\Storage\\Common\\' => 30,
            'MicrosoftAzure\\Storage\\Blob\\' => 28,
            'MicrosoftAzure\\Storage\\' => 23,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WindowsAzure\\' => 
        array (
            0 => __DIR__ . '/..' . '/microsoft/windowsazure/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'MicrosoftAzure\\Storage\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/microsoft/azure-storage-common/src/Common',
        ),
        'MicrosoftAzure\\Storage\\Blob\\' => 
        array (
            0 => __DIR__ . '/..' . '/microsoft/azure-storage-blob/src/Blob',
        ),
        'MicrosoftAzure\\Storage\\' => 
        array (
            0 => __DIR__ . '/..' . '/microsoft/azure-storage/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PEAR' => 
            array (
                0 => __DIR__ . '/..' . '/pear/pear_exception',
            ),
        ),
        'M' => 
        array (
            'Mail_mimeDecode' => 
            array (
                0 => __DIR__ . '/..' . '/pear/mail_mime-decode',
            ),
            'Mail' => 
            array (
                0 => __DIR__ . '/..' . '/pear/mail_mime',
            ),
        ),
        'H' => 
        array (
            'HTTP_Request2' => 
            array (
                0 => __DIR__ . '/..' . '/pear/http_request2',
            ),
        ),
        'C' => 
        array (
            'Console' => 
            array (
                0 => __DIR__ . '/..' . '/pear/console_getopt',
            ),
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/..' . '/pear/pear-core-minimal/src',
    );

    public static $classMap = array (
        'Net_URL2' => __DIR__ . '/..' . '/pear/net_url2/Net/URL2.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a496f2fa1492aa88adaceb0e6c9ccf0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a496f2fa1492aa88adaceb0e6c9ccf0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6a496f2fa1492aa88adaceb0e6c9ccf0::$prefixesPsr0;
            $loader->fallbackDirsPsr0 = ComposerStaticInit6a496f2fa1492aa88adaceb0e6c9ccf0::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInit6a496f2fa1492aa88adaceb0e6c9ccf0::$classMap;

        }, null, ClassLoader::class);
    }
}
