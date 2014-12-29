<?php
namespace Ashsmith\HelloWorld\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{

    /**
     * Default customer account page
     *
     * @return void
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}
