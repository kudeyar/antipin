<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function mainAction()
    {
        
    }

    public function answerAction()
    {
        
    }

    public function servicesAction()
    {
        
    }

    public function aboutAction()
    {
        
    }

    public function guestbookAction()
    {
        
    }

    public function contactAction()
    {
        $this->_helper->layout->disableLayout();
    }
    
    public function contactsAction()
    {
        
    }

    public function commentsAction()
    {
        $this->_helper->layout->disableLayout();
        $commentService = new Application_Model_Guestbook();
        if ($this->getParam('add') == 1) {
            $name = trim(htmlspecialchars($this->getParam('name')));
            $komment = trim(htmlspecialchars($this->getParam('comment')));
            $created = date('Y-m-d H:i:s');
            $commentService->addComment($name, $komment, $created);
        }
        $this->view->entries = $commentService->getItemBook();
    }

}
