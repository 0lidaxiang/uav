<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <title>管理员添加电机</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" ">
  <link href="__PUBLIC__/bootstrap/css/bootstrap.min.css " rel="stylesheet ">

</head>
<body>
  <!-- 导入导航栏-->
  <?php //include("__PUBLIC__/view/nav.html"); ?>

  <!-- 网页主体内容 -->
  <div class="col-lg-12">
    <div style="text-align: center; ">
      <h1>管理员添加电机型号</h1>
    </div>

    <!-- 注册信息填写 -->
    <div class="col-lg-5 col-lg-offset-3 ">


      <form class="form-horizontal " role="form">
        <div class="form-group ">
          <label for="item_no " class="col-sm-6 control-label ">型号(item_no):</label>
          <div class="col-sm-6 ">
            <input type="text" class="form-control " id="item_no" name="item_no">
          </div>
        </div>
        <div class="form-group ">
          <label for="volts " class="col-sm-6 control-label ">电压(volts):</label>
          <div class="col-sm-6 ">
            <input type="text" class="form-control " id="volts" name="volts"  placeholder="单位为V">
          </div>
        </div>

        <div class="form-group ">
          <label for="prop" class="col-sm-6 control-label ">试验浆(prop):</label>
          <div class="col-sm-6 ">
            <input type="text" class="form-control " id="prop" name="prop" >
          </div>
        </div>

        <div class="form-group">
          <label for="throttle" class="col-sm-6 control-label ">油门(throttle):</label>
          <div class="col-sm-6 ">
            <input type="text" class="form-control " id="throttle" name="text">
          </div>
        </div>

        <div class="form-group">
          <label for="amps" class="col-sm-6 control-label ">电流(amps):</label>
          <div class="col-sm-6 ">
              <input type="text" class="form-control" id="amps" name="text" placeholder="单位为A">
          </div>
        </div>

        <div class="form-group ">
          <label for="watts " class="col-sm-6 control-label ">拉力(watts):</label>
          <div class="col-sm-6 ">
            <input type="text" class="form-control " id="watts" name="watts" placeholder="单位为G">
          </div>
        </div>

        <div class="form-group ">
          <label for="thrust " class="col-sm-6 control-label ">转速(thrust):</label>
          <div class="col-sm-6 ">
            <input type="text" class="form-control " id="thrust" name="thrust" >
          </div>
        </div>

        <div class="form-group ">
          <label for="rpm " class="col-sm-6 control-label ">功率(rpm):</label>
          <div class="col-sm-6 ">
            <input type="text" class="form-control " id="rpm" name="rpm" placeholder="单位为W">
          </div>
        </div>

        <div class="form-group ">
          <label for="efficiency " class="col-sm-6 control-label ">效率(efficiency):</label>
          <div class="col-sm-6 ">
            <input type="text" class="form-control " id="efficiency" name="efficiency" placeholder="单位为G/W">
          </div>
        </div>

        <div class="form-group ">
          <label for="kv " class="col-sm-6 control-label ">KV值:</label>
          <div class="col-sm-6 ">
            <input type="text" class="form-control " id="kv" name="kv" >
          </div>
        </div>

        <div class="form-group ">
          <label for="oper_temperature " class="col-sm-6 control-label ">工作温度(oper_temperature):</label>
          <div class="col-sm-6 ">
            <input type="text" class="form-control " id="oper_temperature" name="oper_temperature" placeholder="单位为℃">
          </div>
        </div>

        <div class="form-group">
        <div class="col-sm-offset-5 col-lg-5 ">
            <a href="javascript:baoming()" class="btn btn-default col-lg-6 ">确认提交</a>
            <a href="/index.php/Admin/AdminLogin/logout" class="btn btn-default col-lg-6 ">退出登录</a>
          </div>
        </div>
      </form>
    </div>

  </div>
</body>

<script src="__PUBLIC__/js/jquery-2.2.4.min.js "></script>
<script src="__PUBLIC__/bootstrap/js/bootstrap.min.js "></script>

<script type="text/javascript ">
  function baoming(){
    var item_no = $.trim($("#item_no").val());
    var volts = $.trim($("#volts").val());
    var prop = $.trim($("#prop").val());
    var throttle = $.trim($("#throttle").val());
    var amps = $.trim($("#amps").val());
    var watts = $.trim($("#watts").val());
    var thrust = $.trim($("#thrust").val());
    var rpm = $.trim($("#rpm").val());
    var efficiency = $.trim($("#efficiency").val());
    var kv = $.trim($("#kv").val());
    var oper_temperature = $.trim($("#oper_temperature").val());

    var parms = {
      'item_no' : item_no,
      'volts' : volts,
      'prop' : prop,
      'throttle' : throttle,
      'amps' : amps,
      'watts' : watts,
      'thrust' : thrust,
      'rpm' : rpm,
      'efficiency' : efficiency,
      'kv' : kv,
      'oper_temperature' : oper_temperature
    }

    $.ajax({
      url: '/index.php/Admin/AdminDianJi/baoming',
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
