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
                <input type="radio" name="use" value="option2">普通航拍 (机架尺寸350-450)
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="use" value="option2">专业级摄影设备 (机架尺寸550-1000)
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="use" value="option2">专业植保机 (机架尺寸1000-2000)
              </label>
            </div>
          </div>
        </div>

        <div class="form-group col-sm-12">
          <label for="numberOfDianJi" class="col-sm-4 control-label">指定机架轴数</label>
          <div class="col-sm-8">
            <div class="radio">
              <label>
                <input type="radio" name="numberOfDianJi" value="4" checked>4轴
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="numberOfDianJi" value="6">6轴
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="numberOfDianJi" value="8">8轴
              </label>
            </div>
          </div>
        </div>

        <div class="form-group col-sm-12">
          <label for="batteryCapacity" class="col-sm-4 control-label">电池容量</label>
          <div class="col-sm-8">
            <div class="radio">
              <label>
                <input type="radio" name="batteryCapacity" value="5" checked>5000毫安
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="batteryCapacity" value="6">6000毫安
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="batteryCapacity" value="8">8000毫安
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="batteryCapacity" value="10">10000毫安
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="batteryCapacity" value="22">22000毫安
              </label>
            </div>
          </div>
        </div>

        <div class="form-group col-sm-12">
          <label for="catchWeight" class="col-sm-4 control-label">电机总重量</label>
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

<script src="__PUBLIC__/js/jquery-2.2.4.min.js "></script>
<script src="__PUBLIC__/bootstrap/js/bootstrap.min.js "></script>
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
    var batteryCapacity = $.trim($('input[name=batteryCapacity]:checked').val());

    if (catchWeight == '') {
      alert("电机总重量不能为空");
      return false;
    }

    var parms = {
      'numberOfDianJi' : numberOfDianJi,
      'batteryCapacity' : batteryCapacity,
      'catchWeight' : catchWeight
    };

    window.location.href = "/index.php/DianJi/DianJi/computeDianJiStyle?numberOfDianJi="+numberOfDianJi + "&catchWeight=" + catchWeight +"&batteryCapacity=" + batteryCapacity;
  }
</script>
</html>