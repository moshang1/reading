<?php
namespace app\index\model;
use think\Model;


class Leaveword extends Model
{
	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}
}