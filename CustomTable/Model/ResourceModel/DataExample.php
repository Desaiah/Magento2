<?php 
namespace Chanikyahub\CustomTable\Model\ResourceModel;
class DataExample extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{
 public function _construct(){
 $this->_init("data_example","id");
 }
}
 ?>