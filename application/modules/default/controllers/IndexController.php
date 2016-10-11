<?php

class Default_IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
        $layoutPath = APPLICATION_PATH . '/templates/default';
        $options = array('layout'=>'index',
            'layoutPath'=>$layoutPath);

        Zend_Layout::startMvc($options);
    }

    public function indexAction()
    {
        // action body
    }


}

