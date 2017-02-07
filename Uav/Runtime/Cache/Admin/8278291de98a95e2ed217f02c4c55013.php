<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>管理后台登录</title>
    <link href="/Public/bootstrap/css/bootstrap.min.css " rel="stylesheet ">
    <script src="/Public/js/jquery-2.2.4.min.js "></script>
    <script src="/Public/js/jquery.md5.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="/Public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/dist/css/sb-admin-2.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading" style="text-align: center;">
                        <h2>无人机配置计算管理平台</h2>
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <input id="loginUserId" name="loginUserId" class="form-control" placeholder="LoginName" type="text" autofocus>
                        </div>
                        <div class="form-group">
                            <input id="password" name="password" class="form-control" placeholder="Password" type="password" value=''>
                        </div>

                        <a href="javascript:login()" class="btn btn-lg btn-success btn-block">登录</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
    // 登录
    function login() {
        var loginUserId = $.trim($("#loginUserId ").val());
        var password = $.trim($("#password ").val());

        if (loginUserId == " " || loginUserId==null) {
            alert("用户名不能为空！ ");
        }
        else if (password == " " || loginUserId==null) {
            alert("密码没有输入！ ");
        }
        else{
            // 对密码进行md5单向加密
            var md5Password = $.md5(password);
            var parms = {
              'userId' : loginUserId,
              'password' : md5Password
            }

            console.log(loginUserId + "    " + md5Password);
            $.ajax({
                url: '/index.php/Admin/AdminLogin/login',
                type: 'POST',
                data: parms,
                success:function(responseData){
                    // console.log("responseData:" + responseData);
                    if(responseData==0){
                        window.location.href="/index.php/Admin/AdminDianJi/adminAddDianJi";
                    }
                    else if(responseData==5){
                        alert("该账号正在审核中!\r\n请稍后再尝试登录或联系我们！ ");
                    }
                    else if(responseData==1){
                        alert("密码输入错误! ");
                    }
                    else if(responseData==12){
                      window.location.href="/index.php/Home/Home/index ";
                      alert("用户名错误!查无此人 ");
                    }
                    else if(responseData==3){
                        alert("登录异常!请联系管理员！ ");
                        console.log(responseData);
                    }
                    else if(responseData==4){
                        alert("您已经被禁止登录!\r\n请联系管理员！ ");
                    }
                    else if(responseData==2){
                        alert("该账号未注册!\r\n请先注册！ ");
                    }
                    else{
                        alert("错误：" + responseData);
                    }
                }
            });
        }
    }
</script>
</body>

</html>