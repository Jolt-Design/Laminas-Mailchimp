<?php
namespace Mailchimp;

class Module
{
    // Autoload classes from classmap and src folder
    public function getAutoloaderConfig()
    {
        return array(
            'Laminas\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    // Get default module configration file
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

}
