<?php

class AdminController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        if ( $this->getRequest()->isPost() ) {
            $data       = Outside_Form_FilterText::filterData($this->getAllParams());
            $admin_data = Zend_Registry::get('config')->admin->toArray();
            if ( $data['name'] == $admin_data['name'] && $data['password'] == $admin_data['password'] ) {
                $this->_redirect('/');
            } else {
                $this->view->error = 'Неверные имя или пароль.';
            }
        }
    }

    
}
