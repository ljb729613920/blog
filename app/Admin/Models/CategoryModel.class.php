<?php
namespace app\Admin\Models;

use frame\core\Model;

class CategoryModel extends Model{
	/**
	 * /获取所有专区的详情
	 * @return array|false     返回一个二维数组
	 */
	public function get_cate(){
		$sql="select * from blog_category where c_del=1";
		return $this->dbh->my_fetchAll($sql);
	}
	/**
	 * /获取专区所有的数据
	 * @return array|false   返回一个二维数组|查找失败
 	 */
	public function get_all(){
		$sql="select * from blog_category where c_del=1";
		return $this->dbh->my_fetchAll($sql);
	}
	/**
	 * /获取某个专区的详情
	 * @param  int $id 专区id
	 * @return array|false     返回一个数组
	 */
	public function get_one($id){
		$sql="select c_id,c_name,c_sort,c_desc from blog_category where c_id='$id' and c_del=1";
		return $this->dbh->my_fetch($sql);
	}

	/**
	 * /创建新的专区
	 * @param array   $arr   创建专区所需的字段值
	 * @return int    0|1|false      无任何修改|更新成功|更新失败
	 */
	public function add($arr){
		// 取出关联数组
		$time=time();
		$sql="insert into blog_category(c_name,c_desc,c_sort,c_create_time) values('$arr[c_name]','$arr[c_desc]','$arr[c_sort]','$time')";
		return $this-> dbh ->my_exec($sql);
	}
	/**
	 * /更新专区的删除状态
	 * @param  int $id 被删除的专区id值
	 * @return int    0|1|false      无任何修改|更新成功|更新失败
	 */
	public function update_del($id){
		$time=time();
		$sql="update blog_category set c_del=(c_del+1)%2,c_del_time='$time' where c_id in ($id)";
		return $this-> dbh ->my_exec($sql);
	}
	/**
	 * /更新专区详细信息
	 * @param  array $arr 更新的数据组
	 * @return int    0|1|false      无任何修改|更新成功|更新失败
	 */
	public function update_one($arr){
		// 将关联数组解析
		extract($arr);
		$time=time();
		$sql="update blog_category set c_name='$c_name',c_sort='$c_sort',c_desc='$c_desc',c_del_time='$time' where c_id ='$c_id' ";
		return $this-> dbh ->my_exec($sql);
	}
}

