<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit45e3c32fa8da5f960483830fe884f852
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '3f8bdd3b35094c73a26f0106e3c0f8b2' => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/SendGrid.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Validator\\' => 15,
            'Zend\\Uri\\' => 9,
            'Zend\\Stdlib\\' => 12,
            'Zend\\ServiceManager\\' => 20,
            'Zend\\Mime\\' => 10,
            'Zend\\Mail\\' => 10,
            'Zend\\Loader\\' => 12,
            'Zend\\Http\\' => 10,
            'Zend\\Escaper\\' => 13,
        ),
        'T' => 
        array (
            'Twilio\\' => 7,
            'TrueBV\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'SendGrid\\Stats\\' => 15,
            'SendGrid\\Mail\\' => 14,
            'SendGrid\\Contacts\\' => 18,
            'SendGrid\\' => 9,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-validator/src',
        ),
        'Zend\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-uri/src',
        ),
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\ServiceManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-servicemanager/src',
        ),
        'Zend\\Mime\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-mime/src',
        ),
        'Zend\\Mail\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-mail/src',
        ),
        'Zend\\Loader\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-loader/src',
        ),
        'Zend\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-http/src',
        ),
        'Zend\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-escaper/src',
        ),
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
        'TrueBV\\' => 
        array (
            0 => __DIR__ . '/..' . '/true/punycode/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'SendGrid\\Stats\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/stats',
        ),
        'SendGrid\\Mail\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/mail',
        ),
        'SendGrid\\Contacts\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/contacts',
        ),
        'SendGrid\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/php-http-client/lib',
            1 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Smtpapi' => 
            array (
                0 => __DIR__ . '/..' . '/sendgrid/smtpapi/lib',
            ),
            'SlmMail\\' => 
            array (
                0 => __DIR__ . '/..' . '/slm/mail/src',
            ),
            'SlmMailTest\\' => 
            array (
                0 => __DIR__ . '/..' . '/slm/mail/tests',
            ),
        ),
    );

    public static $classMap = array (
        'SlmMailTest\\Asset\\SimpleMailService' => __DIR__ . '/..' . '/slm/mail/tests/SlmMailTest/Asset/SimpleMailService.php',
        'SlmMailTest\\Http\\ClientTest' => __DIR__ . '/..' . '/slm/mail/tests/SlmMailTest/Http/ClientTest.php',
        'SlmMailTest\\Service\\ElasticEmailServiceTest' => __DIR__ . '/..' . '/slm/mail/tests/SlmMailTest/Service/ElasticEmailServiceTest.php',
        'SlmMailTest\\Service\\MailServiceInterfaceTest' => __DIR__ . '/..' . '/slm/mail/tests/SlmMailTest/Service/MailServiceInterfaceTest.php',
        'SlmMailTest\\Service\\MailgunServiceTest' => __DIR__ . '/..' . '/slm/mail/tests/SlmMailTest/Service/MailgunServiceTest.php',
        'SlmMailTest\\Service\\MandrillServiceTest' => __DIR__ . '/..' . '/slm/mail/tests/SlmMailTest/Service/MandrillServiceTest.php',
        'SlmMailTest\\Service\\PostageServiceTest' => __DIR__ . '/..' . '/slm/mail/tests/SlmMailTest/Service/PostageServiceTest.php',
        'SlmMailTest\\Service\\PostmarkServiceTest' => __DIR__ . '/..' . '/slm/mail/tests/SlmMailTest/Service/PostmarkServiceTest.php',
        'SlmMailTest\\Service\\SendGridServiceTest' => __DIR__ . '/..' . '/slm/mail/tests/SlmMailTest/Service/SendGridServiceTest.php',
        'SlmMailTest\\Util\\ServiceManagerFactory' => __DIR__ . '/..' . '/slm/mail/tests/SlmMailTest/Util/ServiceManagerFactory.php',
        'SlmMail\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Exception/ExceptionInterface.php',
        'SlmMail\\Factory\\ElasticEmailServiceFactory' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Factory/ElasticEmailServiceFactory.php',
        'SlmMail\\Factory\\ElasticEmailTransportFactory' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Factory/ElasticEmailTransportFactory.php',
        'SlmMail\\Factory\\Exception\\RuntimeException' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Factory/Exception/RuntimeException.php',
        'SlmMail\\Factory\\HttpClientFactory' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Factory/HttpClientFactory.php',
        'SlmMail\\Factory\\MailgunServiceFactory' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Factory/MailgunServiceFactory.php',
        'SlmMail\\Factory\\MailgunTransportFactory' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Factory/MailgunTransportFactory.php',
        'SlmMail\\Factory\\MandrillServiceFactory' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Factory/MandrillServiceFactory.php',
        'SlmMail\\Factory\\MandrillTransportFactory' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Factory/MandrillTransportFactory.php',
        'SlmMail\\Factory\\PostageServiceFactory' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Factory/PostageServiceFactory.php',
        'SlmMail\\Factory\\PostageTransportFactory' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Factory/PostageTransportFactory.php',
        'SlmMail\\Factory\\PostmarkServiceFactory' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Factory/PostmarkServiceFactory.php',
        'SlmMail\\Factory\\PostmarkTransportFactory' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Factory/PostmarkTransportFactory.php',
        'SlmMail\\Factory\\SendGridServiceFactory' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Factory/SendGridServiceFactory.php',
        'SlmMail\\Factory\\SendGridTransportFactory' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Factory/SendGridTransportFactory.php',
        'SlmMail\\Factory\\SesServiceFactory' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Factory/SesServiceFactory.php',
        'SlmMail\\Factory\\SesTransportFactory' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Factory/SesTransportFactory.php',
        'SlmMail\\Mail\\Message\\ElasticEmail' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Mail/Message/ElasticEmail.php',
        'SlmMail\\Mail\\Message\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Mail/Message/Exception/InvalidArgumentException.php',
        'SlmMail\\Mail\\Message\\Mailgun' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Mail/Message/Mailgun.php',
        'SlmMail\\Mail\\Message\\Mandrill' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Mail/Message/Mandrill.php',
        'SlmMail\\Mail\\Message\\Postage' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Mail/Message/Postage.php',
        'SlmMail\\Mail\\Message\\Postmark' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Mail/Message/Postmark.php',
        'SlmMail\\Mail\\Transport\\ElasticEmailTransportTest' => __DIR__ . '/..' . '/slm/mail/tests/SlmMailTest/Mail/Transport/ElasticEmailTransportTest.php',
        'SlmMail\\Mail\\Transport\\HttpTransport' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Mail/Transport/HttpTransport.php',
        'SlmMail\\Mail\\Transport\\MailgunTransportTest' => __DIR__ . '/..' . '/slm/mail/tests/SlmMailTest/Mail/Transport/MailgunTransportTest.php',
        'SlmMail\\Mail\\Transport\\MandrillTransportTest' => __DIR__ . '/..' . '/slm/mail/tests/SlmMailTest/Mail/Transport/MandrillTransportTest.php',
        'SlmMail\\Mail\\Transport\\PostageTransportTest' => __DIR__ . '/..' . '/slm/mail/tests/SlmMailTest/Mail/Transport/PostageTransportTest.php',
        'SlmMail\\Mail\\Transport\\PostmarkTransportTest' => __DIR__ . '/..' . '/slm/mail/tests/SlmMailTest/Mail/Transport/PostmarkTransportTest.php',
        'SlmMail\\Mail\\Transport\\SendGridTransportTest' => __DIR__ . '/..' . '/slm/mail/tests/SlmMailTest/Mail/Transport/SendGridTransportTest.php',
        'SlmMail\\Mail\\Transport\\SesTransportTest' => __DIR__ . '/..' . '/slm/mail/tests/SlmMailTest/Mail/Transport/SesTransportTest.php',
        'SlmMail\\Module' => __DIR__ . '/..' . '/slm/mail/Module.php',
        'SlmMail\\Service\\AbstractMailService' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Service/AbstractMailService.php',
        'SlmMail\\Service\\ElasticEmailService' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Service/ElasticEmailService.php',
        'SlmMail\\Service\\Exception\\InvalidCredentialsException' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Service/Exception/InvalidCredentialsException.php',
        'SlmMail\\Service\\Exception\\RuntimeException' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Service/Exception/RuntimeException.php',
        'SlmMail\\Service\\Exception\\UnknownTemplateException' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Service/Exception/UnknownTemplateException.php',
        'SlmMail\\Service\\Exception\\ValidationErrorException' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Service/Exception/ValidationErrorException.php',
        'SlmMail\\Service\\MailServiceInterface' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Service/MailServiceInterface.php',
        'SlmMail\\Service\\MailgunService' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Service/MailgunService.php',
        'SlmMail\\Service\\MandrillService' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Service/MandrillService.php',
        'SlmMail\\Service\\PostageService' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Service/PostageService.php',
        'SlmMail\\Service\\PostmarkService' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Service/PostmarkService.php',
        'SlmMail\\Service\\SendGridService' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Service/SendGridService.php',
        'SlmMail\\Service\\SesService' => __DIR__ . '/..' . '/slm/mail/src/SlmMail/Service/SesService.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit45e3c32fa8da5f960483830fe884f852::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit45e3c32fa8da5f960483830fe884f852::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit45e3c32fa8da5f960483830fe884f852::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit45e3c32fa8da5f960483830fe884f852::$classMap;

        }, null, ClassLoader::class);
    }
}