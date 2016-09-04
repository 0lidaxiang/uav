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
    <!-- 注册信息填写 -->
    <div class="col-lg-4 col-lg-offset-4 ">
      <div style="text-align: center; ">
        <h1>管理员添加电机型号</h1>
      </div>

      <form class="form-horizontal " role="form">
        <div class="form-group ">
          <label for="item_no " class="col-sm-3 control-label ">item_no:</label>
          <div class="col-sm-8 ">
            <input type="text" class="form-control " id="item_no" name="item_no">
          </div>
        </div>
        <div class="form-group ">
          <label for="volts " class="col-sm-3 control-label ">volts:</label>
          <div class="col-sm-8 ">
            <input type="text" class="form-control " id="volts" name="volts" >
          </div>
        </div>

        <div class="form-group ">
          <label for="prop" class="col-sm-3 control-label ">prop:</label>
          <div class="col-sm-8 ">
            <input type="text" class="form-control " id="prop" name="prop" >
          </div>
        </div>

        <div class="form-group">
          <label for="throttle" class="col-sm-3 control-label ">throttle:</label>
          <div class="col-sm-8 ">
            <input type="text" class="form-control " id="throttle" name="text">
          </div>
        </div>

        <div class="form-group">
          <label for="amps" class="col-sm-3 control-label ">amps:</label>
          <div class="col-sm-8 ">
            <input type="text" class="form-control " id="amps" name="text">
          </div>
        </div>

        <div class="form-group ">
          <label for="watts " class="col-sm-3 control-label ">watts:</label>
          <div class="col-sm-8 ">
            <input type="text" class="form-control " id="watts" name="watts" >
          </div>
        </div>

        <div class="form-group ">
          <label for="thrust " class="col-sm-3 control-label ">thrust:</label>
          <div class="col-sm-8 ">
            <input type="text" class="form-control " id="thrust" name="thrust" >
          </div>
        </div>

        <div class="form-group ">
          <label for="rpm " class="col-sm-3 control-label ">rpm:</label>
          <div class="col-sm-8 ">
            <input type="text" class="form-control " id="rpm" name="rpm" >
          </div>
        </div>

        <div class="form-group ">
          <label for="efficiency " class="col-sm-3 control-label ">efficiency:</label>
          <div class="col-sm-8 ">
            <input type="text" class="form-control " id="efficiency" name="efficiency" >
          </div>
        </div>

        <div class="form-group ">
          <label for="torque " class="col-sm-3 control-label ">torque:</label>
          <div class="col-sm-8 ">
            <input type="text" class="form-control " id="torque" name="torque" >
          </div>
        </div>

        <div class="form-group ">
          <label for="oper_temperature " class="col-sm-3 control-label ">oper_temperature:</label>
          <div class="col-sm-8 ">
            <input type="text" class="form-control " id="oper_temperature" name="oper_temperature" >
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-4 col-lg-4 ">
            <a href="javascript:baoming()" class="btn btn-default col-lg-12 ">确认提交</a>
            <a href="/index.php/Admin/AdminLogin/logout" class="btn btn-default col-lg-12 ">退出登录</a>
          </div>
        </div>
      </form>
    </div>

  </div>
</body>

<script src="__PUBLIC__/js/jquery-2.2.4.min.js "></script>
<script src="__PUBLIC__/bootstrap/js/bootstrap.min.js "></script>

<script type="text/javascript ">
  function confirmBaoMing() {
    var res = confirm("您确定参加该比赛报名吗？");

    if (!res) {
      return false;
    }
  }

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
    var torque = $.trim($("#torque").val());
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
      'torque' : torque,
      'oper_temperature' : oper_temperature
    }

    // confirmBaoMing();
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
