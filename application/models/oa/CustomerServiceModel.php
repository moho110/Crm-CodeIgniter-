<?php
namespace app\oa\model;

use think\Db;
use think\Model;

class CustomerServiceModel extends Model {
	/**
	 * [getList description]
	 * @return [type] [description]
	 */
	public function getList() {
		$result = Db::table('cmf_crm_service')->select();
		return $result;
	}
}
?>