<!DOCTYPE html>
<html lang="zh-CN">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=7" >
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" >
	<meta name="robots" content="nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>无人机配置结果</title>

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
      background-color: #fff;
    }
  </style>
</head>

<body>
  <?php include("__PUBLIC__/view/nav.html"); ?>

  <div class="col-xs-12 page-header">
    <div style="text-align: center;font-size: 1.5em;">
      <b>多轴飞行器配置结果</b>
    </div>
  </div>

  <div class="container">
    <div class="row col-sm-12">

      <div class="form-group col-sm-12">
        <!-- <h4>悬停时间(minutes)</h4> -->
        <label class="col-sm-4 control-label">悬停时间(minutes)</label>
        <div class="col-sm-8">
          <?php echo $flyTime; ?>
        </div>
      </div>


      <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label">最佳效率载重(g)</label>
        <div class="col-sm-8">
          <?php echo $bestCatchWeight; ?>
        </div>
      </div>

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