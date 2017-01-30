<!DOCTYPE html>
<html lang="zh-CN">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=7" >
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" >
	<meta name="robots" content="nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>无人机配置计算</title>

	<link href="__PUBLIC__/bootstrap/css/bootstrap.min.css " rel="stylesheet ">
  <script src="__PUBLIC__/js/jquery-2.2.4.min.js "></script>
  <script src="__PUBLIC__/js/jquery.md5.js"></script>
  <script src="__PUBLIC__/bootstrap/js/bootstrap.min.js "></script>
  <link href="__PUBLIC__/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="/uav/Common/images/uav.ico" rel="shortcut icon"  type="x-icon">
  <!-- <link href="__PUBLIC__/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet"> -->
  <link href="__PUBLIC__/dist/css/sb-admin-2.css" rel="stylesheet">
  <link href="__PUBLIC__/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script src="__PUBLIC__/bower_components/metisMenu/dist/metisMenu.min.js"></script>
  <script src="__PUBLIC__/dist/js/sb-admin-2.js"></script>

  <style type="text/css">
    body
    {
      /* background-image: url("__PUBLIC__/images/uavLogo.jpg"); */
      background-color: #fff;
    }
  </style>
</head>

<body>
  <?php include("__PUBLIC__/view/nav.html"); ?>

  <div class="col-xs-12 page-header">
    <div style="text-align: center;font-size: 1.5em;">
      <b>多轴飞行器参数设定</b>
    </div>
  </div>

  <div class="container">
    <div class="row col-sm-12">

      <form class="form-horizontal " role="form">

      <div class="form-group col-sm-12">
        <label for="name" class="col-sm-4 control-label">选择用途</label>
        <div class="col-sm-8">
          <select class="form-control">
            <option>竞速穿越（机架尺寸180-280）</option>
            <option>普通航拍（机架尺寸350-450）</option>
            <option>专业级摄影设备（机架尺寸550-1000）</option>
            <option>专业植保机（机架尺寸1000-2000）</option>
          </select>
        </div>
      </div>

      <div class="form-group col-sm-12">
        <label for="name" class="col-sm-4 control-label">指定机架轴数</label>
        <div class="col-sm-8">
          <select class="form-control">
            <option>4轴</option>
            <option>6轴</option>
            <option>8轴</option>
          </select>
        </div>
      </div>

      <div class="form-group col-sm-12">
        <label for="name" class="col-sm-4 control-label">选择重量</label>
        <div class="col-sm-8">
          <select class="form-control">
            <option>200-600 克</option>
            <option>600-1200 克</option>
            <option>1200-2500 克</option>
            <option>2500-4000 克</option>
          </select>
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

  function toJSDianji() {
    location.href = "/index.php/DianJi/DianJi/dianJiIndex"
  }

  function tijiao() {
    alert("提交数据");
  }
</script>
</html>