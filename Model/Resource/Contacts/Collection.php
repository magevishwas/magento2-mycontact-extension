<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Vishwas\Mycontact\Model\Resource\Contacts;
 
class Collection extends \Magento\Framework\Model\Resource\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Vishwas\Mycontact\Model\Contacts', 'Vishwas\Mycontact\Model\Resource\Contacts');
        //$this->_map['fields']['page_id'] = 'main_table.page_id';
    }
 
    
}
