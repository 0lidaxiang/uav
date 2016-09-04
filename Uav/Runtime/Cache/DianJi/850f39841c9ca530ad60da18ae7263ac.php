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
      <b>电机配置计算</b>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <form class="form-horizontal " role="form">
       <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">姓名</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="lastname" placeholder="请输入姓名">
        </div>
      </div>

      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">选择用途</label>
        <div class="col-sm-10">
          <select class="form-control">
            <option>航拍</option>
            <option>纯飞行</option>
            <option>大型摄影</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">选择重量</label>
        <div class="col-sm-10">
          <select class="form-control">
            <option>1KG</option>
            <option>2KG</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">选择体积</label>
        <div class="col-sm-10">
          <select class="form-control">
            <option>100立方厘米</option>
            <option>200</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-4 col-lg-4 ">
          <a href="javascript:tijiao()" class="btn btn-default col-lg-12 ">提交</a>
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
    alert("进化中！憋个大招给你看！");
  }
</script>
</html>