<?php
namespace Common\Model;
use Think\Model;
class DianjiModel extends Model {

    //严重警告，这个地方的connection只能用这个名称而且必须定义这个变量，否则不识别报错。见鬼。
    protected $connection = 'DB_CONFIG';
		// protected $trueTableName = 'activity_par';

    protected $fields = array(
    	 'id','item_no', 'style','kv', 'amps', 'volts','force', 'bestAmps', 'bestForce', 'oper_temperature','jiangSize','create_time'
    );
}