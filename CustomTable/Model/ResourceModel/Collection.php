<?php 
namespace Chanikyahub\CustomTable\Model\ResourceModel\DataExample;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{
	public function _construct(){
		$this->_init("Chanikyahub\CustomTable\Model\DataExample","Chanikyahub\CustomTable\Model\ResourceModel\DataExample");
	}
}
 ?>