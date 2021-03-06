<!DOCTYPE HTML>
<html>
    <head>
        <title>攻防培训平台</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
        <!-- 新 Bootstrap 核心 CSS 文件 -->
        <!--<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">-->
		<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css')?>">
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <h1>攻防培训和演练平台<small>——管理员</small></h1>
            </div>
            
            
            <div>
                <div class="row">
                    <div class="col-xs-2">
                        <ul class="nav nav-pills nav-stacked">
                            <li role="presentation"><a href="<?php echo site_url('/admin/admin')?>">系统概况</a></li>
                            <li role="presentation"><a href="<?php echo site_url('/admin/user_manager')?>">用户管理</a></li>
                            <li role="presentation"><a href="<?php echo site_url('/admin/course_manager')?>">课程管理</a></li>
                            <li role="presentation"><a href="<?php echo site_url('/admin/image_manager')?>">镜像管理</a></li>
                            <li role="presentation" class="dropdown active"><a  class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">个人设定<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"  class="active"><a href="<?php echo site_url('/admin/profile')?>">个人信息</a></li>                
                                    <li role="presentation"><a href="<?php echo site_url('/admin/reset_pswd')?>">修改密码</a></li>
                                </ul>
                            </li>
							<li role="presentation"><a href="<?php echo site_url('/login/logout')?>">退出登陆</a></li>
						</ul>
                    </div>
					
                    <div class="col-xs-10">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">用户个人信息</h3>
							</div>
							<div class="panel-body">
								<form class="form-horizontal" method="post" action="<?php echo site_url('/admin/edit_profile')?>">
									<div class="form-group">
										<label for="userNum" class="col-sm-4 control-label">工号</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" id="userNum" name="userNum" value="<?php echo $data[0]->UserNum?>" disabled>
										</div>
										<label class="col-sm-4"></label>
									</div>
									<div class="form-group">
										<label for="userName" class="col-sm-4 control-label">用户名</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" id="userName" name="userName" value="<?php echo $data[0]->UserName?>">
										</div>
										<label class="col-sm-4"></label>
									</div>
									<div class="form-group">
										<label for="Email" class="col-sm-4 control-label">Email</label>
										<div class="col-sm-4">
											<input type="email" class="form-control" id="Email"  name="Email" value="<?php echo $data[0]->Email?>">
										</div>
										<label class="col-sm-4"></label>
									</div>
									<div class="form-group">
										<label for="Section" class="col-sm-4 control-label">部门</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" id="Section" name="Section" value="<?php echo $data[0]->Section?>">
										</div>
										<label class="col-sm-4"></label>
									</div>
									<div class="form-group">
										<label for="Gender" class="col-sm-4 control-label">性别</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" id="Gender" name="Gender" value="<?php echo $data[0]->Gender?>">
										</div>
										<label class="col-sm-4"></label>
									</div>
									<div class="form-group">
										<label for="Type" class="col-sm-4 control-label">类型</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" id="Type" name="Type" value="<?php echo ($data[0]->Type==0)?'管理员':(($data[0]->Type==1)?'教师':'学生')?>" disabled>
										</div>
										<label class="col-sm-4"></label>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-6" align="right">
											<button type="submit" class="btn btn-defualt">提交修改</button>
										</div>
									</div>                              
								</form> 
							</div>
						</div>
					</div>

                </div>   
            </div>
                
        </div>
    </body>
</html>