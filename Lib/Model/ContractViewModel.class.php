<?php
class ContractViewModel extends ViewModel {
	/**
	 +----------------------------------------------------------
	 * contract組合staff、customer的視圖模型
	 +----------------------------------------------------------
	 * @access public
	 +----------------------------------------------------------
	 */
	public $viewFields = array(
		'zz_contract' => array('id', 'bh', 'customerId', 'staffId', 'startDate', 'endDate','price','doPay','orderDate','updatetime'),
		'zz_yscustomer' => array('name'=>'customerName','hospital','birthday','expectedDay','address', '_on' => 'zz_contract.customerId=zz_yscustomer.id'),
		'zz_staff' => array('name'=>'staffName','ysLevel', '_on' => 'zz_contract.staffId=zz_staff.staffId')
	);
}
?>