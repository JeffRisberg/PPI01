<?php
namespace Application\Controller;

use PPI\Module\Controller as BaseController;

class Index extends BaseController
{
    public function indexAction()
    {
        return $this->render('Application:index:index.html.php');
    }

    public function aboutAction()
    {
        return $this->render('Application:index:about.html.php');
    }

    public function indexWithFlashesAction() {
        $this->setFlash('warning', 'This is your warning, don\'t let the dogs out again !!');
//        $this->setFlash('error', 'This is your error, someone let the dogs out !!');
//        $this->setFlash('success', 'You successfully kept the dogs inside !!');
        return $this->render('Application:index:index.html.php');
    }

}
