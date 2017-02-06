<?php
namespace DianJi\Controller;
use Think\Controller;
class DianJiController extends Controller {
	public function dianJiIndex()
	{
		$this->display();
	}

	public function completeDianJi($value='')
	{
		$batteryCapacity = 30000.0;
		$voltage = 14.8;
		$current = 4;
		$numOfDianJi = 2;
		$bestCatchWeight = 540;//这个从数据库根据电机型号读取
		$flyTime = $batteryCapacity /($voltage * $current * $numOfDianJi);

		$this->assign('flyTime' , number_format($flyTime ,2));
		$this->assign('bestCatchWeight' , number_format($bestCatchWeight ,2));
		$this->assign('dianJiModel' , '12345678');
		$this->assign('batteryModel' , '12345678');

		$this->display('result');
	}

	public function result()
	{

	}

}