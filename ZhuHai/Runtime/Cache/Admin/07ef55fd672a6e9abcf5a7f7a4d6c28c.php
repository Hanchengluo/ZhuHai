<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/ZhuHai/Public/Css/bootstrap.min.css" rel="stylesheet"/>
<script src="/ZhuHai/Public/Js/jquery.min.js"></script>
<script src="/ZhuHai/Public/Js/bootstrap.min.js"></script>
<link href="/ZhuHai/Public/Css/public.css" rel="stylesheet"/>

<title>文章列表</title>
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			
			<ul class="nav nav-tabs">
				<li >
					 <a href="#">个人信息修改页</a>
				</li>
				<li>
					 <a href="#">添加文章</a>
				</li>
				<li >
					 <a href="../Login/login">退出登录导航</a>
				</li>
				
			</ul>
			<div class="row clearfix">
				<div class="col-md-2 column">
					<ul class="nav nav-stacked nav-tabs">
						<li >
							 <a href="index.html">信息概论</a>
						</li>
						<li>
							 <a href="b2.html">文章列表</a>
						</li>
						<li class="active">
							 <a href="#">用户信息管理</a>
						</li>
					</ul>
				</div>
                
				<div class="col-md-10 column">
					<table class="table">
						<thead>
							<tr>
								<th>
									编号
								</th>
								<th>
									产品
								</th>
								<th>
									交付时间
								</th>
								<th>
									状态
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									1
								</td>
								<td>
									TB - Monthly
								</td>
								<td>
									01/04/2012
								</td>
								<td>
									Default
								</td>
							</tr>
							<tr class="success">
								<td>
									1
								</td>
								<td>
									TB - Monthly
								</td>
								<td>
									01/04/2012
								</td>
								<td>
									Approved
								</td>
							</tr>
							<tr class="error">
								<td>
									2
								</td>
								<td>
									TB - Monthly
								</td>
								<td>
									02/04/2012
								</td>
								<td>
									Declined
								</td>
							</tr>
							<tr class="warning">
								<td>
									3
								</td>
								<td>
									TB - Monthly
								</td>
								<td>
									03/04/2012
								</td>
								<td>
									Pending
								</td>
							</tr>
							<tr class="info">
								<td>
									4
								</td>
								<td>
									TB - Monthly
								</td>
								<td>
									04/04/2012
								</td>
								<td>
									Call in to confirm
								</td>
							</tr>
						</tbody>
					</table> <button type="button" class="btn btn-default">按钮</button>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="jumbotron">
						<h1>
							Hello, world!
						</h1>
						<p>
							This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
						</p>
						<p>
							 <a class="btn btn-primary btn-large" href="#">Learn more</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>