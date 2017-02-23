<?php if (!defined('THINK_PATH')) exit(); $DianJi = new \Common\Model\DianjiModel(); $dianJiResult = $DianJi->where(1)->order('create_time desc')->select(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>电机管理</title>
  <link href="/Public/bootstrap/css/bootstrap.min.css " rel="stylesheet ">
</head>

<body>
  <div class="container">
    <div class="col-lg-12">
      <h2 class="page-header">管理员后台</h2>
    </div><!-- /.col-lg-12 -->


  <div class="row">
    <div class="col-lg-12">
     <div class="panel panel-default">
      <div class="panel-heading" style="padding:2px;">
       <a class="btn btn-default" href="javascript:addDianJi()">添加</a>
     </div>
   </div><!-- /.panel ./panel-default -->
 </div><!-- /.col-lg-12 -->
</div><!-- /.row -->

<div class="row"><!-- 表格载入已经填写的组员 -->
  <div class="col-lg-12">
    <div class="table-responsive">
      <table  class="table table-bordered table-hover table-striped table-condensed" style="text-align: center">
        <thead>
          <tr>
            <th style="text-align: center">编号</th>
            <th style="text-align: center">型号</th>
            <th style="text-align: center">品牌</th>
            <th style="text-align: center">KV值</th>
            <th style="text-align: center">电流</th>
            <th style="text-align: center">电压</th>
            <th style="text-align: center">拉力</th>
            <th style="text-align: center">最佳电流</th>
            <th style="text-align: center">最佳拉力</th>
            <th style="text-align: center">工作温度</th>
            <th style="text-align: center">推荐浆</th>
            <th style="text-align: center">修改时间</th>
            <th style="text-align:center;">操作</th>
          </tr>
        </thead>

        <tbody>

          <?php
 for ($i=0; $i < count($dianJiResult); $i++) { ?>
            <tr>
              <td><?php echo $i+1; ?></td>
              <td><?php echo $dianJiResult[$i]['item_no']; ?></td>
              <td><?php echo $dianJiResult[$i]['style']; ?></td>
              <td><?php echo $dianJiResult[$i]['kv']; ?></td>
              <td><?php echo $dianJiResult[$i]['amps']; ?></td>
              <td><?php echo $dianJiResult[$i]['volts']; ?></td>
              <td><?php echo $dianJiResult[$i]['force']; ?></td>
              <td><?php echo $dianJiResult[$i]['bestamps']; ?></td>
              <td><?php echo $dianJiResult[$i]['bestforce']; ?> </td>
              <td><?php echo $dianJiResult[$i]['oper_temperature']; ?></td>
              <td><?php echo $dianJiResult[$i]['jiangsize']; ?></td>
              <td><?php echo $dianJiResult[$i]['create_time']; ?>
              </td>
              <td>
                <a href="javascript:deleteDianJi('<?php echo $dianJiResult[$i]['id'];?>')">删除</a>
                <a href="/index.php/Admin/AdminDianJi/adminModifyDianJi?dianJiId='<?php echo $dianJiResult[$i]['id'];?>'">修改</a>
              </td>
            </tr>
            <?php
 } ?>
        </tbody>
      </table>
    </div><!-- /div.class="table-responsive" -->

  </div><!-- /div.class="col-lg-12" -->
</div><!-- /div.class="row" -->
</div><!-- /.row -->
</body>

<script src="/Public/js/jquery-2.2.4.min.js "></script>
<script type="text/javascript">
    function addDianJi() {
      window.location.href="/index.php/Admin/AdminDianJi/adminAddDianJi";
    }

    function deleteDianJi(dianJiId){
      var parms = {
        'dianJiId' : dianJiId,
      }

      $.ajax({
        url: '/index.php/Admin/AdminDianJi/delteDianJi',
        type: 'POST',
        data: parms,
      })
      .done(function(resp) {
        if (resp == 10) {
          window.location.href="/index.php/Admin/AdminDianJi/adminDianJiIndex";
        }
        else if(resp == 20){
          alert("操作失败！请重新尝试");
          window.location.href="/index.php/Admin/AdminDianJi/adminDianJiIndex";
        }
        else if(resp == 30){
          alert("服务器异常！请稍后尝试");
          window.location.href="/index.php/Admin/AdminDianJi/adminDianJiIndex";
        }
      })
      .fail(function(resp) {
        alert("操作失败！请重新尝试");
        console.log("error:");
        console.log(resp);
      });
    }

  </script>
  </html>