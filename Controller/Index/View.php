<?php
/**
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Vishwas\Mycontact\Controller\Index;

class View extends \Magento\Contact\Controller\Index
{
    /**
     * Show Contact Us page
     *
     * @return void
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->getLayout()->getBlock('mycontactnew');
        $this->_view->renderLayout();
    }
}
