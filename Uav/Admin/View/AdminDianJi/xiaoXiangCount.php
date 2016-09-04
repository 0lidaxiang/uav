<?php
$Xiaoxiang = new \Common\Model\XiaoxiangModel();
$xiaoXiangResult = $Xiaoxiang->field(' xiaoxiang.id as xiaoxiang_id,xiaoxiang.name as xiaoxiang_name,xiaoxiang.type as xiaoxiang_type,xiaoxiang.principal_stu_id as student_id,student.name as student_name,student.class_id as student_class_id, student.telphone as student_telphone,xiaoxiang.teacher1_id as teacher1_id,xiaoxiang.teacher2_id as teacher2_id')->table('xiaoxiang')->where("student.shenfen = 'student'")->join('__STUDENT__ ON __XIAOXIANG__.principal_stu_id = __STUDENT__.id')->select();

// foreach ($xiaoXiangResult as $key => $value) {
//   echo $key.":".$value."       ";
//   foreach ($value as $k => $v) {
//     echo  $k.":".$v."   ";
//   }
//   echo "<br>";

// }
//   echo "<br>";
// echo $Xiaoxiang->getLastSql();
?>

<!DOCTYPE html>
<html>
<head>
	<title>校项统计和下载</title>
  <link href="__PUBLIC__/bootstrap/css/bootstrap.min.css " rel="stylesheet ">
  <script src="__PUBLIC__/js/jquery-2.2.4.min.js "></script>
  <script src="__PUBLIC__/js/jquery.md5.js"></script>
  <script src="__PUBLIC__/bootstrap/js/bootstrap.min.js "></script>
  <!-- Bootstrap Core CSS -->
  <link href="__PUBLIC__/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- MetisMenu CSS -->
  <link href="__PUBLIC__/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
  <!-- Timeline CSS -->
  <link href="__PUBLIC__/dist/css/timeline.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="__PUBLIC__/dist/css/sb-admin-2.css" rel="stylesheet">
  <!-- Morris Charts CSS -->
  <!-- <link href="__PUBLIC__/bower_components/morrisjs/morris.css" rel="stylesheet"> -->
  <!-- Custom Fonts -->
  <link href="__PUBLIC__/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Metis Menu Plugin JavaScript -->
  <script src="__PUBLIC__/bower_components/metisMenu/dist/metisMenu.min.js"></script>
  <!-- Morris Charts JavaScript -->
  <!-- <script src="__PUBLIC__/bower_components/raphael/raphael-min.js"></script> -->
  <!-- <script src="__PUBLIC__/bower_components/morrisjs/morris.min.js"></script> -->
  <!-- <script src="__PUBLIC__/js/morris-data.js"></script> -->

  <!-- Custom Theme JavaScript -->
  <script src="__PUBLIC__/dist/js/sb-admin-2.js"></script>
</head>
<body>
    <?php include("__PUBLIC__/view/adminNav.php"); ?>

    <div id="page-wrapper"><!-- 右侧主体内容 -->

      <div class="row">
        <div class="col-lg-12">
          <h2 class="page-header">校项统计和下载</h2>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->

      <!-- 多选的功能面板和表格 -->
      <div class="row">
        <div class="col-lg-12">
         <!-- 面板 -->
         <div class="panel panel-default">
          <!-- 多选情况下操作 -->
          <div class="panel-heading" style="padding:2px;">
           <a class="btn btn-default" style="" href="javascript:xiaoXiangDownload()"
           role="button">下载Excel</a>
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
                                    <th style="text-align: center">校项Id</th>
                                    <th style="text-align: center">校项名称</th>
                                    <th style="text-align: center">类型</th>
                                    <th style="text-align: center">负责学生学号</th>
                                    <th style="text-align: center">姓名</th>
                                    <th style="text-align: center">班级</th>
                                    <th style="text-align: center">电话</th>
                                    <th style="text-align: center">组员</th>
                                    <th style="text-align: center">指导老师1</th>
                                    <th style="text-align: center">指导老师2</th>
                                    <!-- <th style="text-align: center">科协审核结果</th> -->
                                    <!-- <th style="text-align: center">教师审核结果</th> -->
                                    <th style="text-align: center">经费预算</th>
                                    <th style="text-align:center;">操作</th>
                                </tr>
                            </thead>

                            <tbody>

                            <?php
                            // 列出项目参与学生
                              for ($i=0; $i < count($xiaoXiangResult); $i++) {
                            ?>
                            <tr>
                              <td><?php echo $i+1; ?></td>
                              <td><?php echo $xiaoXiangResult[$i]['xiaoxiang_id']; ?></td>
                              <td><?php echo $xiaoXiangResult[$i]['xiaoxiang_name']; ?></td>
                              <td><?php echo $xiaoXiangResult[$i]['xiaoxiang_type']; ?></td>
                              <td><?php echo $xiaoXiangResult[$i]['student_id']; ?></td>
                              <td><?php echo $xiaoXiangResult[$i]['student_name']; ?></td>
                              <td><?php echo $xiaoXiangResult[$i]['student_class_id']; ?></td>
                              <td><?php echo $xiaoXiangResult[$i]['student_telphone']; ?></td>
                              <td>
                              <?php
                                $Student = new \Common\Model\StudentModel();
                                $studentResult = $Student->field('id,name')->where("xiaoxiang_id="."'".$xiaoXiangResult[$i]['xiaoxiang_id']."' AND shenfen='crewStudent'")->select();
                                foreach ($studentResult as $key => $value) {
                                  echo $value['name'].",";
                                }
                              ?>
                              </td>
                              <td><?php echo $xiaoXiangResult[$i]['teacher1_id']; ?></td>
                              <td><?php echo $xiaoXiangResult[$i]['teacher2_id']; ?></td>
                              <td>
                              <?php
                                $LiXiang = new \Common\Model\LixiangModel();
                                $lixiangResult = $LiXiang->field('totalbudget')->where("xiaoXiang_id="."'".$xiaoXiangResult[$i]['xiaoxiang_id']."'")->limit(1)->select();
                                // echo $LiXiang->getLastSql();
                                echo $lixiangResult[0]['totalbudget'];
                              ?>
                              </td>
                                <td>
                                  <a href="javascript:setLoginType('abuse','<?php echo $xiaoXiangResult[$i]['id'];?>')">审核</a>
                                  <a href="javascript:setLoginType('abuse','<?php echo $xiaoXiangResult[$i]['id'];?>')">详情</a>
                                  <a href="javascript:setLoginType('abuse','<?php echo $xiaoXiangResult[$i]['id'];?>')">附件</a>
                                </td>
                            </tr>
                            <?php
                              }
                            ?>
                            </tbody>
                        </table>
                    </div><!-- /div.class="table-responsive" -->

                </div><!-- /div.class="col-lg-12" -->
            </div><!-- /div.class="row" -->
    </div><!-- /div.class="page-wrapper " -->
</body>

<script type="text/javascript">
    // 允许和登录前确定一下，防止误操作
    function setLoginType(type,studentId) {
        if (type == "admit") {
            var confirmResult = confirm("确定要允许该用户登录吗");
            if (confirmResult) {
                admitLogin(studentId);
            }
        }
        else if (type == "abuse") {
            var confirmResult = confirm("确定要禁止该用户登录吗");

            if (confirmResult) {
                abuseLogin(studentId);
            }
        }
    }

    // 允许登录
    function admitLogin(studentId){
      var parms = {
        'studentId' : studentId,
      }

      $.ajax({
        url: '/index.php/Admin/AdminZhuCe/admitStuLogin',
        type: 'POST',
        data: parms,
      })
      .done(function(resp) {
        // console.log("success");
        if (resp == 0) {
            window.location.href="/index.php/Admin/AdminZhuCe/stuZhuCeShenHe";
        }
        else if(resp == 10){
            alert("操作失败10！请重新尝试");
            window.location.href="/index.php/Admin/AdminZhuCe/stuZhuCeShenHe";
        }
      })
      .fail(function(resp) {
        alert("操作失败30！请重新尝试");
        console.log("error:");
        console.log(resp);
      });
    }

    // 禁止登录
    function abuseLogin(studentId){
      var parms = {
        'studentId' : studentId,
      }

      $.ajax({
        url: '/index.php/Admin/AdminZhuCe/abuseStuLogin',
        type: 'POST',
        data: parms,
      })
      .done(function(resp) {
        // console.log("success");
        if (resp == 0) {
            window.location.href="/index.php/Admin/AdminZhuCe/stuZhuCeShenHe";
        }
        else if(resp == 10){
            alert("操作失败！请重新尝试");
            window.location.href="/index.php/Admin/AdminZhuCe/stuZhuCeShenHe";
        }
        else if(resp == 30){
            alert("服务器异常！请稍后尝试");
            window.location.href="/index.php/Admin/AdminZhuCe/stuZhuCeShenHe";
        }
      })
      .fail(function(resp) {
        alert("操作失败！请重新尝试");
        console.log("error:");
        console.log(resp);
      });
    }

    var numberOfXiaoXiangDownload = 0;
    function xiaoXiangDownload() {
      numberOfXiaoXiangDownload = numberOfXiaoXiangDownload + 1;

      var userSelect = confirm("您是否要下载校项统计表");
      if (userSelect) {
        window.location.href = "/index.php/Admin/XiaoXiangDownload/downloadXiaoXiang";
      }
    }
</script>
</html>