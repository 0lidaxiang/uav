<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=7" >
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" >
	<meta name="robots" content="nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>无人机配置计算</title>

	<link href="/Public/bootstrap/css/bootstrap.min.css " rel="stylesheet ">
  <script src="/Public/js/jquery-2.2.4.min.js "></script>
  <script src="/Public/js/jquery.md5.js"></script>
  <script src="/Public/bootstrap/js/bootstrap.min.js "></script>
  <link href="/Public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="/uav/Common/images/uav.ico" rel="shortcut icon"  type="x-icon">
  <!-- <link href="/Public/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet"> -->
  <link href="/Public/dist/css/sb-admin-2.css" rel="stylesheet">
  <link href="/Public/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script src="/Public/bower_components/metisMenu/dist/metisMenu.min.js"></script>
  <script src="/Public/dist/js/sb-admin-2.js"></script>

  <style type="text/css">
    body
    {
      /* background-image: url("/Public/images/uavLogo.jpg"); */
      background-color: #fff;
    }
  </style>
</head>

<body>
  <?php include("/Public/view/nav.html"); ?>

  <div class="col-xs-12 page-header">
    <div style="text-align: center;font-size: 1.5em;">
      <b>多轴飞行器参数设定</b>
    </div>
  </div>

  <div class="container">
    <div class="row col-sm-12">

      <form class="form-horizontal " role="form">

        <div class="form-group col-sm-12">
          <label for="use" class="col-sm-4 control-label">选择用途</label>
          <div class="col-sm-8">
            <div class="radio">
              <label>
                <input type="radio" name="use" id="optionsRadios1" value="option1" checked>竞速穿越 (机架尺寸180-280)
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="use" id="optionsRadios2" value="option2">普通航拍 (机架尺寸350-450)
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="use" id="optionsRadios2" value="option2">专业级摄影设备 (机架尺寸550-1000)
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="use" id="optionsRadios2" value="option2">专业植保机 (机架尺寸1000-2000)
              </label>
            </div>
          </div>
        </div>

        <div class="form-group col-sm-12">
          <label for="numberOfDianJi" class="col-sm-4 control-label">指定机架轴数</label>
          <div class="col-sm-8">
            <div class="radio">
              <label>
                <input type="radio" name="numberOfDianJi" id="optionsRadios2" value="4" checked>4轴
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="numberOfDianJi" id="optionsRadios2" value="6">6轴
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="numberOfDianJi" id="optionsRadios2" value="8">8轴
              </label>
            </div>
          </div>
        </div>

        <div class="form-group col-sm-12">
          <label for="catchWeight" class="col-sm-4 control-label">选择重量</label>
          <div class="col-sm-4">
            <input type="number" class="form-control " id="catchWeight" name="catchWeight" placeholder="单位为g,最高5位数" oninput="limit5()">
          </div>
        </div>

        <div class="form-group col-sm-12">
          <div class="col-sm-offset-4 col-lg-4 ">
            <a href="javascript:tijiao()" class="btn btn-default col-sm-10 col-lg-12">提交</a>
          </div>
        </div>

      </form>
    </div>
  </div>
</body>

<script type="text/javascript">
  $(document).ready(function() {
    $('.dropdown').removeClass('active');
  });

  function limit5() {
    //负责只显示三位数
    var catchWeight = $('#catchWeight').val().slice(0, 5);
    if ($('#catchWeight').val().length > 5 ) {
      $('#catchWeight').val(catchWeight);
    }
  }

  function toJSDianji() {
    location.href = "/index.php/DianJi/DianJi/dianJiIndex"
  }

  function tijiao() {
    var catchWeight = $.trim($("#catchWeight").val());
    var numberOfDianJi = $.trim($('input[name=numberOfDianJi]:checked').val());

    var parms = {
      'numberOfDianJi' : numberOfDianJi,
      'catchWeight' : catchWeight
    };

    window.location.href = "/index.php/DianJi/DianJi/computeDianJiStyle?numberOfDianJi="+numberOfDianJi+"&catchWeight=" + catchWeight

    // $.ajax({
    //   url: '/index.php/DianJi/DianJi/computeDianJiStyle',
    //   type: 'POST',
    //   data: parms,
    //   success:function(responseData){
    //     console.log(responseData);
    //     if(responseData==3){
    //       alert("操作异常!请联系管理员！ ");
    //     }
    //     else if(responseData==2){
    //       alert("没有您要找的类型!");
    //     }
    //     // else{
    //     //   window.location.href = "/index.php/DianJi/DianJi/result"
    //     // }
    //   }
    // });
  }
</script>
</html>