<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\User as UserModel;
use app\index\model\Profile;
use app\index\model\Leaveword;

class User extends Controller
{
	protected $user;

	public function _initialize() 
	{
		$this->user = new UserModel;
	} 
	public function add()
	{
		// $user = new UserModel;
		//第一种：
		// $user->name = 'wangerxiao';
		// $user->status = '1';
		// $user->save();
		//第二种：
		// $this->user->data(['name'=>'001','status'=>1]);
		// $this->user->save();
		dump($this->user);
		//第三种办法：
		//$user->save(['name'=>'hahah','status'=>1]);	
		//$user = new UserModel(['name'=>'hahah','status'=>1]);
		//$user->save();
		//UserModel::create(['name'=>'hahah','status'=>1]);
		/*$data = [
			['name'=>'www','status'=>1],
			['name'=>'dd','status'=>1],
			['name'=>'ww','status'=>1]
		];*/
		//$user->saveAll($data);
		// dump($user->id);
	}
	public function info() 
	{
		// $info = $this->user->where('id','>=',3)->select();
		// $this->user->save(['name'=>'004', 'status'=>1]);
		// $info = $this->user->where('name','002')->select();
		// $info[0]->status = 2;
		// $info[0]->save();
		// dump($info[0]->getData('status'));
	}
	// 软删除
	public function suppleRemove() 
	{
		// UserModel::destroy(1,true);
		$info = UserModel::onlyTrashed()->find();
		// $info->delete_time = NULL;
		// $info->save();
		dump($info);
	}
	public function oneToOne()
	{
		// $info = $this->user->get(7);
		// $info->profile()->adds = 'moshang';
		// $info->profile()->save(['adds'=>'moshang']);
		// dump($info->profile->save(['adds'=>'huakai']));
		// $info = Profile::get(1);
		// return $info->user->save(['name'=>'004']);
	}
	public function oneToMany()
	{
		// $info = UserModel::get(6);
		// $info->leaveword()->saveAll([
		// 		['leavewords'=>'jifei'],
		// 		['leavewords'=>'danda'],
			
		// 	]);
		// dump($info->leaveword[1]['leavewords']);
		// $info = UserModel::find(1);
		// dump($info);
		// $info = Leaveword::get(2);
		// return $info->user->save(['name'=>'004']);
	}
	public function manyToMany()
	{
		$info = $this->user->get(7);
		dump($info->role);	
		// $info->role()->saveAll([
		// 	['position'=> '前台'],
		// 	['position'=> '运营'],
		// 	]);
	}
}