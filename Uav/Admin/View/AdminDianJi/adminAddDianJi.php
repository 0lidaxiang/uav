
<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <title>管理员添加电机</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" ">
  <link href="__PUBLIC__/bootstrap/css/bootstrap.min.css " rel="stylesheet ">

</head>
<body>
  <div class="col-lg-12">
    <div style="text-align: center; ">
      <h1>管理员添加电机</h1>
    </div>

    <div class="col-lg-5 col-lg-offset-3 ">
      <form class="form-horizontal" role="form">
        <div class="form-group ">
          <label for="dianJiId " class="col-sm-6 control-label ">电机ID:</label>
          <div class="col-sm-6 ">
            <input type="text" class="form-control " id="dianJiId" name="dianJiId" disabled="disabled">
          </div>
        </div>

        <div class="form-group ">
          <label for="style " class="col-sm-6 control-label ">品牌(style):</label>
          <div class="col-sm-6 ">
            <input type="text" class="form-control " id="style" name="style" >
          </div>
        </div>

        <div class="form-group ">
          <label for="item_no " class="col-sm-6 control-label ">型号(item_no):</label>
          <div class="col-sm-6 ">
            <input type="text" class="form-control" id="item_no" name="item_no">
          </div>
        </div>

        <div class="form-group ">
          <label for="kv " class="col-sm-6 control-label ">KV值:</label>
          <div class="col-sm-6 ">
            <input type="number" class="form-control " id="kv" name="kv" >
          </div>
        </div>

        <div class="form-group">
          <label for="amps" class="col-sm-6 control-label ">电流(amps):</label>
          <div class="col-sm-6 ">
            <input type="number" class="form-control" id="amps" name="text" placeholder="单位为A,最高5位数" oninput="computePower(), computeEfficiency()">
          </div>
        </div>

        <div class="form-group ">
          <label for="volts " class="col-sm-6 control-label ">电压(volts):</label>

          <div class="col-sm-6 ">
            <div class="radio">
              <label>
                <input type="radio" name="volts" value="4"  onclick="computePower(), computeBestPower(), computeEfficiency(), computeBestEfficiency()" checked>4s
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="volts" value="5"  onclick="computePower(), computeBestPower(), computeEfficiency(), computeBestEfficiency()">5s
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="volts" value="6"  onclick="computePower(), computeBestPower(), computeEfficiency(), computeBestEfficiency()">6s
              </label>
            </div>
            <!-- <input type="number" class="form-control " id="volts" name="volts"  placeholder="单位为V,最高5位数" oninput="computePower(), computeBestPower(), computeEfficiency(), computeBestEfficiency()"> -->

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
            <input type="number" class="form-control " id="force" name="force" placeholder="单位为G,最高5位数" oninput="computeEfficiency()">
          </div>
        </div>

        <div class="form-group ">
          <label for="efficiency " class="col-sm-6 control-label ">效率(efficiency):</label>
          <div class="col-sm-6 ">
            <input type="number" class="form-control " id="efficiency" name="efficiency" placeholder="0 G/W" readonly="readonly">
          </div>
        </div>

        <div class="form-group ">
          <label for="oper_temperature " class="col-sm-6 control-label ">工作温度(oper_temperature):</label>
          <div class="col-sm-6 ">
            <input type="number" class="form-control " id="oper_temperature" name="oper_temperature" placeholder="单位为℃,最高3位数" oninput="checkTemperatureLength()">
          </div>
        </div>

        <hr>

        <div class="form-group">
          <label for="bestAmps" class="col-sm-6 control-label ">最佳电流(bestAmps):</label>
          <div class="col-sm-6 ">
            <input type="number" class="form-control" id="bestAmps" name="text" placeholder="单位为A,最高5位数" oninput="computeBestPower(), computeBestEfficiency()">
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
            <input type="number" class="form-control " id="bestForce" name="bestForce" placeholder="单位为g,最高5位数" oninput="computeBestEfficiency()">
          </div>
        </div>

        <div class="form-group ">
          <label for="bestEfficiency " class="col-sm-6 control-label ">最佳效率(bestEfficiency):</label>
          <div class="col-sm-6 ">
            <input type="number" class="form-control " id="bestEfficiency" name="bestEfficiency" placeholder="0 G/W" readonly="readonly">
          </div>
        </div>

        <div class="form-group ">
          <label for="oper_temperature " class="col-sm-6 control-label ">推荐浆(size):</label>
          <div class="col-sm-6 ">
            <div class="radio">
              <label>
                <input type="radio" name="jiangSize" value="11*5.5" checked>11*5.5
              </label>
            </div>

            <div class="radio">
              <label>
                <input type="radio" name="jiangSize" value="12*3.8">12*3.8
              </label>
            </div>

            <div class="radio">
              <label>
                <input type="radio" name="jiangSize" value="13*5.5">13*5.5
              </label>
            </div>

            <div class="radio">
              <label>
                <input type="radio" name="jiangSize" value="14*5.5">14*5.5
              </label>
            </div>

            <div class="radio">
              <label>
                <input type="radio" name="jiangSize" value="15*5.5">15*5.5
              </label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-12 ">
            <a href="/index.php/Admin/AdminDianJi/adminDianJiIndex" class="btn btn-default col-lg-4 ">回主页</a>
            <a href="javascript: addDianJiStyle()" class="btn btn-default col-lg-4 ">确认提交</a>
            <a href="/index.php/Admin/AdminLogin/logout" class="btn btn-default col-lg-4 ">退出登录</a>
          </div>
        </div>
      </form>
    </div>

  </div>
</body>

<script src="__PUBLIC__/js/jquery-2.2.4.min.js "></script>
<script src="__PUBLIC__/bootstrap/js/bootstrap.min.js "></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $.ajax({
      url: '/index.php/Admin/AdminDianJi/createDianJiId',
      type: 'POST',
      data: {adminName: <?php echo "'".$adminName."'"; ?>},
    })
    .done(function(responseData) {
      if (responseData != 1) {
                    // console.log(responseData);
                    $("#dianJiId").val(responseData);
                  }else{
                   // console.log(responseData);
                    alert("系统生成的id已被使用，请刷新后重新生成！");
                    location.href = "./adminAddDianJi";
                  }
                })
    .fail(function() {
      alert("创建电机id错误！请联系管理员！");
    });

  });
</script>

<script type="text/javascript ">
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

  function addDianJiStyle(){
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
      url: '/index.php/Admin/AdminDianJi/addDianJiStyle',
      type: 'POST',
      data: parms,
      success:function(responseData){
        // console.log(responseData);
        if(responseData == 0){
          window.location.href="/index.php/Admin/AdminDianJi/adminAddDianJi";
          alert("添加成功! ");
        }else if(responseData==3){
          // window.location.href="/index.php/Home/Home/index ";
          alert("操作异常!请联系管理员！ ");
        }
        else if(responseData==2){
          alert("已经存在该型号!请确认数据库中的信息一致 ");
        }
        else{
          alert("错误：" +responseData);
        }
      }
    });
  }

</script>

</html>
