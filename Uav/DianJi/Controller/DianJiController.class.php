<?php
namespace DianJi\Controller;
use Think\Controller;
class DianJiController extends Controller {
	public function dianJiIndex()
	{
		$this->display();
	}

	public function computeDianJi($result, $numberOfDianJi, $batteryCapacity)
	{
		$bestPower = $result['bestamps'] * $result['volts'] * 3.2;
		$flyTime = number_format($batteryCapacity / ($bestPower * $numberOfDianJi), 2);
		$safeForce = $result['force'] * $numberOfDianJi * 0.5;
		$efficiency = number_format($result['bestforce'] / $bestPower, 2);
		$adviseAmps = ((int)($result['amps'] / 10) + 1) * 10 ;

		$this->assign('batteryCapacity' , $batteryCapacity);
		$this->assign('volts' , $result['volts']);
		$this->assign('bestPower' , $bestPower);
		$this->assign('flyTime' , $flyTime);
		$this->assign('safeForce' , $safeForce);
		$this->assign('efficiency' , $efficiency);

		$this->assign('dianJiStyle' , $result['style']);
		$this->assign('item_no' , $result['item_no']);
		$this->assign('amps' , $result['amps']);
		$this->assign('kv' , $result['kv']);
		$this->assign('oper_temperature' , $result['oper_temperature']);
		$this->assign('jiangSize' , $result['jiangsize']);
		$this->assign('adviseAmps' , $adviseAmps);

		$this->display('result');
	}

	public function computeDianJiStyle()
	{
		$numberOfDianJi = $_GET['numberOfDianJi'];
		$batteryCapacity = $_GET['batteryCapacity'];
		$allUserBesyForce = $_GET['catchWeight'];

		$userBestForce = $allUserBesyForce / $numberOfDianJi;

		try {
			$Dianji = new \Common\Model\DianjiModel();
			//挑选最接近最佳拉力的结果
			$result = $Dianji->query("SELECT* FROM dianji WHERE ABS(bestForce-".$userBestForce.") < 200 order by ABS(bestForce-".$userBestForce.") ASC LIMIT 1");

			// echo $Dianji->getLastSql();
			if (count($result) == 1) {
				$this->computeDianJi($result[0], $numberOfDianJi, $batteryCapacity);
			}
			else{
				echo "没有找到符合您条件的类型";
			}
		} catch (Exception $e) {
			echo "ERROR! \n Please Return!";
		}
	}

}