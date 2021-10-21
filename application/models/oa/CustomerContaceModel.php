<?php
namespace app\oa\model;

use think\Db;
use think\Model;

class CustomerContaceModel extends Model {
	public function getList() {
		/**
		 * [$result description]
		 * @var [type]
		 */
		$result = Db::table('cmf_linkman')->select();
		return $result;
	}
}
?>