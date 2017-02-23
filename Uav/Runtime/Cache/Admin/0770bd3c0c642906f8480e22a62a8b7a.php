<?php if (!defined('THINK_PATH')) exit(); $DianJi = new \Common\Model\DianjiModel(); $dianJiResult = $DianJi->where('id='.$dianJiId)->limit(1)->select(); ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <title>管理员添加电机</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" ">
  <link href="/Public/bootstrap/css/bootstrap.min.css " rel="stylesheet ">

</head>
<body>
  <div class="col-lg-12">
    <div style="text-align: center; ">
      <h1>管理员修改电机型号</h1>
    </div>

    <!-- 注册信息填写 -->
    <div class="col-lg-5 col-lg-offset-3 ">


      <form class="form-horizontal " role="form">
        <div class="form-group ">
          <label for="dianJiId " class="col-sm-6 control-label ">电机ID:</label>
          <div class="col-sm-6 ">
            <input type="text" class="form-control " id="dianJiId" name="dianJiId" value=<?php echo $dianJiId; ?> disabled="disabled">
          </div>
        </div>

        <div class="form-group ">
          <label for="style " class="col-sm-6 control-label ">品牌(style):</label>
          <div class="col-sm-6 ">
            <input type="text" class="form-control " id="style" name="style" value="<?php echo $dianJiResult[0]['style']; ?>">
          </div>
        </div>

        <div class="form-group ">
          <label for="item_no " class="col-sm-6 control-label ">型号(item_no):</label>
          <div class="col-sm-6 ">
            <input type="number" class="form-control " id="item_no" name="item_no" value="<?php echo $dianJiResult[0]['item_no']; ?>">
          </div>
        </div>

        <div class="form-group ">
          <label for="kv " class="col-sm-6 control-label ">KV值:</label>
          <div class="col-sm-6 ">
            <input type="number" class="form-control " id="kv" name="kv" value="<?php echo $dianJiResult[0]['kv']; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="amps" class="col-sm-6 control-label ">电流(amps):</label>
          <div class="col-sm-6 ">
            <input type="number" class="form-control" id="amps" name="text" placeholder="单位为A,最高5位数" oninput="computePower(), computeEfficiency()" value="<?php echo $dianJiResult[0]['amps']; ?>">
          </div>
        </div>

        <div class="form-group ">
          <label for="volts " class="col-sm-6 control-label ">电压(volts):</label>

          <div class="col-sm-6 ">
            <div class="radio">
            <label>
              <input type="radio" id="volts4" name="volts" value="4"  onclick="computePower(), computeBestPower(), computeEfficiency(), computeBestEfficiency()">4s
            </label>
          </div>

          <div class="radio">
            <label>
              <input type="radio" id="volts5" name="volts" value="5"  onclick="computePower(), computeBestPower(), computeEfficiency(), computeBestEfficiency()">5s
            </label>
          </div>

          <div class="radio">
            <label>
              <input type="radio" id="volts6" name="volts" value="6"  onclick="computePower(), computeBestPower(), computeEfficiency(), computeBestEfficiency()">6s
            </label>
          </div>

          </div>
        </div>

        <div class="form-group ">
          <label for="power " class="col-sm-6 control-label ">功率(power):</label>
          <div class="col-sm-6 ">
            <input type="number" class="form-control " id="power" name="power" placeholder="0 W" readonly="readonly">
          </div>
        </div>

        <div class="form-group ">
          <label for="force " class="col-sm-6 control-label ">拉力(force):</label>
          <div class="col-sm-6 ">
            <input type="number" class="form-control " id="force" name="force" placeholder="单位为G,最高5位数" oninput="computeEfficiency()" value="<?php echo $dianJiResult[0]['force']; ?>">
          </div>
        </div>

        <div class="form-group ">
          <label for="efficiency " class="col-sm-6 control-label ">效率(efficiency):</label>
          <div class="col-sm-6 ">
            <input type="number" class="form-control " id="efficiency" name="efficiency" placeholder="0 G/W" readonly="readonly">
          </div>
        </div>

        <hr>

        <div class="form-group">
          <label for="bestAmps" class="col-sm-6 control-label ">最佳电流(bestAmps):</label>
          <div class="col-sm-6 ">
            <input type="number" class="form-control" id="bestAmps" name="text" placeholder="单位为A,最高5位数" oninput="computeBestPower(), computeBestEfficiency()" value="<?php echo $dianJiResult[0]['bestamps']; ?>">
          </div>
        </div>

        <div class="form-group ">
          <label for="bestPower " class="col-sm-6 control-label ">最佳功率(bestPower):</label>
          <div class="col-sm-6 ">
            <input type="number" class="form-control " id="bestPower" name="bestPower" placeholder="0 W" readonly="readonly" oninput="computeBestEfficiency()">
          </div>
        </div>

        <div class="form-group ">
          <label for="bestForce " class="col-sm-6 control-label ">最佳拉力(bestForce):</label>
          <div class="col-sm-6 ">
            <input type="number" class="form-control " id="bestForce" name="bestForce" placeholder="单位为g,最高5位数" oninput="computeBestEfficiency()" value="<?php echo $dianJiResult[0]['bestforce']; ?>">
          </div>
        </div>

        <div class="form-group ">
          <label for="bestEfficiency " class="col-sm-6 control-label ">最佳效率(bestEfficiency):</label>
          <div class="col-sm-6 ">
            <input type="number" class="form-control " id="bestEfficiency" name="bestEfficiency" placeholder="0 G/W" readonly="readonly">
          </div>
        </div>

        <div class="form-group ">
          <label for="oper_temperature " class="col-sm-6 control-label ">工作温度(oper_temperature):</label>
          <div class="col-sm-6 ">
            <input type="number" class="form-control " id="oper_temperature" name="oper_temperature" placeholder="单位为℃,最高3位数" oninput="checkTemperatureLength()" value="<?php echo $dianJiResult[0]['oper_temperature']; ?>">
          </div>
        </div>

        <div class="form-group ">
        <label for="oper_temperature " class="col-sm-6 control-label ">推荐浆(size):</label>
         <div class="col-sm-6 ">
          <div class="radio">
            <label>
              <input type="radio" name="jiangSize" id="jiangSize1" value="11*5.5">11*5.5
            </label>
          </div>

          <div class="radio">
            <label>
              <input type="radio" name="jiangSize" id="jiangSize2" value="12*3.8">12*3.8
            </label>
          </div>

          <div class="radio">
            <label>
              <input type="radio" name="jiangSize" id="jiangSize3" value="14*5.5">14*5.5
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="jiangSize" id="jiangSize4" value="15*5.5">15*5.5
            </label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-lg-12 ">
          <a href="/index.php/Admin/AdminDianJi/adminDianJiIndex" class="btn btn-default col-lg-4 ">回主页</a>
          <a href="javascript: modifyDianJiStyle()" class="btn btn-default col-lg-4 ">提交修改</a>
          <a href="/index.php/Admin/AdminLogin/logout" class="btn btn-default col-lg-4 ">退出登录</a>
        </div>
      </div>
    </form>
  </div>

</div>
</body>

<script src="/Public/js/jquery-2.2.4.min.js "></script>
<script src="/Public/bootstrap/js/bootstrap.min.js "></script>

<script type="text/javascript ">
$(document).ready(function() {
   var volts = <?php echo $dianJiResult[0]['volts']?>;
   var jiangSizeVal = <?php echo $dianJiResult[0]['jiangsize']?>;

   $("#volts"+volts).attr("checked","checked");

   if (jiangSizeVal == (11*5.50)) {
      $("#jiangSize1").attr("checked","checked");
   }
   else if (jiangSizeVal == (12*3.8)) {
      $("#jiangSize2").attr("checked","checked");
   }
   else if (jiangSizeVal == (14*5.5)) {
      $("#jiangSize3").attr("checked","checked");
   }
   else if (jiangSizeVal == (15*5.5)) {
      $("#jiangSize4").attr("checked","checked");
   }

});
  function computePower() {
    //compute power
    // 负责只计算三位数
    var amps = $('#amps').val().slice(0, 5);
    var volts = $('input[name=volts]:checked').val().slice(0, 5);
    //负责只显示三位数
    if ($('#amps').val().length > 5) {
      $('#amps').val(amps);
    }

    var power = amps * volts * 3.6;
    $('#power').val(power.toFixed(2));
  }

  function computeEfficiency() {
    //compute power
    // 负责只计算三位数
    var power = $('#power').val().slice(0, 5);
    var force = $('#force').val().slice(0, 5);
    //负责只显示三位数

    if ($('#force').val().length > 5) {
      $('#force').val(force);
    }

    var eff = force / power;
    $('#efficiency').val(eff.toFixed(2));
  }

  function computeBestPower() {
  //compute bestPower
  // 负责只计算三位数
  var bestAmps = $('#bestAmps').val().slice(0, 5);
  var volts = $('input[name=volts]:checked').val().slice(0, 5);
  //负责只显示三位数
  if ($('#bestAmps').val().length > 5) {
    $('#bestAmps').val(bestAmps);
  }

  var bestPower = bestAmps * volts * 3.6;
  $('#bestPower').val(bestPower.toFixed(2));
}

function computeBestEfficiency() {
    //compute bestEfficiency
    // 负责只计算三位数
    var bestPower = $('#bestPower').val().slice(0, 5);
    var bestForce = $('#bestForce').val().slice(0, 5);
    //负责只显示三位数
    if ($('#bestForce').val().length > 5 ) {
      $('#bestForce').val(bestForce);
    }

    var bestEff = bestForce / bestPower;
    $('#bestEfficiency').val(bestEff.toFixed(2));
  }

  function checkTemperatureLength() {
    var oper_temperature = $('#oper_temperature').val().slice(0, 3);
    //限制该input只有三位
    if ($('#oper_temperature').val().length > 5 ) {
      $('#oper_temperature').val(oper_temperature.toFixed(2));
    }
  }

  function modifyDianJiStyle(){
    var dianJiId = $.trim($("#dianJiId").val());
    var style = $.trim($("#style").val());
    var item_no = $.trim($("#item_no").val());
    var kv = $.trim($("#kv").val());
    var amps = $.trim($("#amps").val());
    var volts = $.trim($('input[name=volts]:checked').val());
    var force = $.trim($("#force").val());

    var bestAmps = $.trim($("#bestAmps").val());
    var bestForce = $.trim($("#bestForce").val());
    var oper_temperature = $.trim($("#oper_temperature").val());
    var jiangSize = $('input[name=jiangSize]:checked').val();

    if (style == '') {
      alert("品牌不能为空");
      return false;
    }
    if (item_no == '') {
      alert("型号不能为空");
      return false;
    }
    if (kv == '') {
      alert("KV值不能为空");
      return false;
    }
    if (amps == '') {
      alert("电流不能为空");
      return false;
    }
    if (force == '') {
      alert("拉力不能为空");
      return false;
    }
    if (bestAmps == '') {
      alert("最佳电流不能为空");
      return false;
    }
    if (bestForce == '') {
      alert("最佳拉力不能为空");
      return false;
    }
    if (oper_temperature == '') {
      alert("工作温度不能为空");
      return false;
    }

    var parms = {
      'dianJiId' : dianJiId,
      'style' : style,
      'item_no' : item_no,
      'kv' : kv,
      'amps' : amps,
      'volts' : volts,
      'force' : force,
      'bestAmps' : bestAmps,
      'bestForce' : bestForce,
      'oper_temperature' : oper_temperature,
      'jiangSize' : jiangSize
    }

    $.ajax({
      url: '/index.php/Admin/AdminDianJi/modifyDianJi',
      type: 'POST',
      data: parms,
      success:function(responseData){
        if(responseData == 10){
          window.location.href="/index.php/Admin/AdminDianJi/adminDianJiIndex";
          alert("修改成功! ");
        }else if(responseData==30){
          alert("服务器异常!请联系管理员！ ");
        }
        else if(responseData==20){
          alert("没有更新任何数据!");
        }
        else{
          alert("错误：" +responseData);
        }
      }
    });
  }

</script>

</html>