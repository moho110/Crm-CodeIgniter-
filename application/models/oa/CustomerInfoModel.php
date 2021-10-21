<?php
namespace app\oa\model;

use think\Db;
use think\Model;

class CustomerInfoModel extends Model {
	/**
	 * [getList description]
	 * @return [type] [description]
	 */
	public function getList() {
		$result = Db::table('cmf_customer')->select();
		return $result;
	}
}
?>