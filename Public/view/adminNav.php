<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index.php/Admin/Admin/adminIndex"><strong>南京工程学院机械科协后台管理</strong></a>
        </div> <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> 修改密码</a>
                    </li>
                    <li class="divider"></li> -->
                    <li><a href="/index.php/Admin/Admin/logout"><i class="fa fa-sign-out fa-fw"></i> 退出登录</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>

        <div class="navbar-default sidebar" role="navigation"><!-- 左侧功能栏 -->
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </li>

                    <li>
                        <a href="zhuceshenhe">
                            <i class="fa fa-wrench fa-fw"></i> 注册审核
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/index.php/Admin/AdminZhuCe/stuZhuCeShenHe">学生注册审核</a>
                            </li>

                            <li>
                                <a href="/index.php/Admin/AdminZhuCe/teaZhuCeShenHe">教师注册审核</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> 大创校项 <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/index.php/Admin/AdminCount/xiaoXiangCount">校项统计下载</a>
                            </li>

                            <!-- <li>
                                <a href="#">指定审核人</a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="/index.php/Admin/AdminAssgin/liXiangAssgin">立项指定</a>
                                    </li>
                                    <li>
                                        <a href="/index.php/Admin/AdminAssgin/zhongQiAssgin">中期指定</a>
                                    </li>
                                    <li>
                                        <a href="/index.php/Admin/AdminAssgin/jieTiAssgin">结题指定</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/index.php/Admin/AdminXiaoXiang/lixiangguanli">立项申报管理</a>
                            </li>
                            <li>
                                <a href="/index.php/Admin/AdminXiaoXiang/zhongqiguanli">中期验收管理</a>
                            </li>
                            <li>
                                <a href="/index.php/Admin/AdminXiaoXiang/jietiguanli">结题报告管理</a>
                            </li> -->
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> 大赛管理 <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/index.php/Admin/AdminCad/adminCadIndex">CAD大赛</a>
                            </li>
                            <li>
                                <a href="/index.php/Admin/AdminErp/adminErpIndex">ERP大赛</a>
                            </li>
                            <li>
                                <a href="/index.php/Admin/AdminDesign/adminDesignIndex">机械设计大赛</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> 活动管理 <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/index.php/Admin/AdminSHJ/adminSHJIndex">水火箭比赛</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> 义务维修管理 <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/index.php/Admin/AdminProgress/adminProIndex">统计下载</a>
                            </li>

                            <li>
                                <a href="/index.php/Admin/AdminProgress/adminProSetPro">设置进度</a>
                            </li>

                            <!-- <li>
                                <a href="/index.php/Admin/AdminProgress/adminProSetPro">重设密码</a>
                            </li> -->
                        </ul>
                    </li>

                </ul>
            </div>
        </div>

    </nav>

</div>