<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Application;

class IndexController extends AbstractActionController
{
    protected $_application;

    public function __construct(Application $application = null)
    {
        if (!is_null($application)) {
            $this->_application = $application;
        }
    }

    public function indexAction()
    {
        $view = new ViewModel();
        if($this->_application)
        {
            $view->AppTitle = $this->_application->getTitle();
        }
        return $view;
    }
}
