<?php
namespace Ashsmith\HelloWorld\Controller;

class Index extends \Magento\Framework\App\Action\Action
{

    public function testAction()
    {
        die('hello world');
    }
    /**
     * Default customer account page
     *
     * @return void
     */
    public function execute()
    {
        die('Hahaha');
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}
