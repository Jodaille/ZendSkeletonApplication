<?php
// IndexControllerFactory.php
namespace Application\Controller\Factory;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface,
    Zend\ServiceManager\Exception\ServiceNotCreatedException,
    Application\Controller\IndexController;

class IndexControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        $sm = $serviceLocator->getServiceLocator();

        $controller = new IndexController();

        return $controller;
    }
}
