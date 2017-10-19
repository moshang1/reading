<?php
namespace app\index\model;
use think\Model;
use traits\model\SoftDelete;

class User extends Model
{
	// protected $auto = ['status'=>1];
	protected $autoWriteTimestamp = true;

	use SoftDelete;

	public function getSTatusAttr($value) 
	{
		$status = [-1 =>'删除', 0 =>'禁用', 1 =>'正常', 2 =>'待审核'];
		return $status[$value];
	}
	public function profile()
	{
		return $this->hasOne('profile')->bind('adds'); 
	}
	public function leaveword()
	{
		return $this->hasMany('leaveword'); 
	}
	public function role()
	{
		return $this->belongsToMany('role');
	}
}
