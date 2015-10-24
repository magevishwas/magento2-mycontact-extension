<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Vishwas\Mycontact\Model;

class Contacts extends \Magento\Framework\Model\AbstractModel
{
	public function __construct(
	        \Magento\Framework\Model\Context $context,
	        \Magento\Framework\Registry $registry,
	        \Magento\Framework\Model\Resource\AbstractResource $resource = null,
	        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
	        array $data = []
	) 
	{
	    parent::__construct($context, $registry, $resource, $resourceCollection, $data);
	}

	public function _construct()
	{
	    $this->_init('Vishwas\Mycontact\Model\Resource\Contacts');
	}
}