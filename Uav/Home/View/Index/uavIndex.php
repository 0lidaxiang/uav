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
  <link href="/uav/Common/images/uav.ico" rel="shortcut icon"  type="x-icon">
  <style type="text/css">
    body
    {
      background-color: #fff;
    }
  </style>
</head>

<body>
  <?php include("__PUBLIC__/view/nav.html"); ?>

  <div class="container">
    <div class="row">

      <div class="col-xs-12" style="z-index: -1;">
        <img src="__PUBLIC__/images/uavLogo.jpg" class="img-responsive" alt="Cinque Terre" style="height: auto;margin: 0px auto;">
      </div>

      <div class="col-sm-12">
        <div class="col-sm-4 col-sm-offset-4">
         <a href="javascript:toJSDianji()" class="btn btn-primary btn-lg col-xs-12" role="button">进入计算</a>
       </div>
     </div>
   </div>

 </div>
</body>

<script src="__PUBLIC__/js/jquery-2.2.4.min.js "></script>
<script src="__PUBLIC__/bootstrap/js/bootstrap.min.js "></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.dropdown').removeClass('active');
  });

  function toJSDianji() {
    location.href = "/index.php/DianJi/DianJi/dianJiIndex"
  }
</script>
</html>