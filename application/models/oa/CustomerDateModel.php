<?php
namespace app\oa\model;

use think\Db;
use think\Model;

class CustomerDateModel extends Model {
	/**
	 * [getList description]
	 * @return [type] [description]
	 */
	public function getList() {
		$result = Db::table('cmf_crm_remember')->select();
		return $result;
	}
}
?>