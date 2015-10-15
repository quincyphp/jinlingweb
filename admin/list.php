<?php
require_once('../config.php');
require_once('../common.php');
$admin_info = $mysql->get_all("select * from `admin` order by `register_time` asc");

$count_sql = 'select count(`admin_id`) as num from `admin`';
$count_nums = count_nums($count_sql);

$admin_info = get_all("select * from `admin` limit $start,$limit");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
<!-- Reset Stylesheet -->
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
  
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
	
	<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
	<link rel="stylesheet" href="css/invalid.css" type="text/css" media="screen" />	
	<link rel="stylesheet" type="text/css" href="../css/page/css.css" >

</head>
<style type="text/css">
.makesure{
	width:60px;
	height:25px;
	text-align:center;
	background:url("./images/b.png");
	border-radius:10px;
	position:relative;
	top:-46px;
}
.add{
	position:relative;
	margin:-10px 40px 0px 0px;
}
body{
	background:#f0f0f0;
}
</style>
<body>
<div id="main-content"> <!-- Main Content Section with everything -->

	<div class="clear"></div> <!-- End .clear -->
	
	<div class="content-box"><!-- Start Content Box -->
		
		<div class="content-box-header">
			
			
			<ul class="content-box-tabs">
				<li><p class="add"><a href="add.php" title="添加"><img src="images/icons/pencil.png" alt="Edit"/></a></p></li>
				<li><a href="###" class="default-tab">列表页</a></li> <!-- href must be unique and match the id of target div -->
			</ul>
			
			<div class="clear"></div>
			
		</div> <!-- End .content-box-header -->
		
		<div class="content-box-content">
			<form id="add_admin">
			<div>
				账号：<input type="text" value="" id="user" />
				密码：<input type="password" value="" id="pwd" />
				<input type="button" value="添加" id="btn" />
			</div>
			</form>

			<div class="tab-content default-tab" id="tab1"> 
				<form action="" method="post">
				<table id="alist">
					<thead>
						<tr>
						   <th><input class="check-all" type="checkbox" /></th>
						   <th>管理员名称</th>
						   <th>注册ip</th>
						   <th>注册时间</th>
						   <th>操作</th>
						</tr>
						
					</thead>
				 
					<tbody>
						<?php foreach($admin_info as $key=>$value){?>
						<tr>
							<td><input type="checkbox" name="know[]" value=""/></td>
							<td><?php echo $value['admin_name'];?></td>
							<td><?php echo $_SERVER["REMOTE_ADDR"];?></td>
							<td><?php echo date('Y-m-d H:i:s',$value['register_time']);?></td>
							<td>
								<!-- Icons -->
								 <a href="edit.php" title="更改">
									<img src="images/icons/hammer_screwdriver.png" alt="Edit Meta" />
								</a>
							</td>
						</tr>
						<?php }?>
					</tbody>

					<tfoot>
						<tr>
							<td colspan="6">
								<!--页码-->
								<div class="pagination">
									<?php echo page($page,$count_nums,$limit,3);?>
								</div> <!-- End .pagination -->
								
								<div class="clear"></div>
							</td>
						</tr>
					</tfoot>
				</table>
				<input type="submit" value="确 定" class="makesure"/>
				</form>
			</div> <!-- End #tab1 -->      
			
		</div> <!-- End .content-box-content -->
		
	</div> <!-- End .content-box -->	
	
	<div class="clear"></div>
	
	
	<!-- Start Notifications -->
	
	<!-- End Notifications -->
	
	<div id="footer">
		<small> <!-- Remove this notice or replace it with whatever you want -->
				&#169; Copyright 2009 Your Company | 版权所有 <a href="" >逗比公司</a>
		</small>
	</div><!-- End #footer -->
	
</div> <!-- End #main-content -->
	
</div>
</body>
<script type="text/javascript" src="scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="scripts/simpla.jquery.configuration.js"></script>

<script type="text/javascript">
$("#btn").click(function(){
	//接收账号、密码
	var u_val = $('#user').val();
	var p_val = $('#pwd').val();
	
	if(u_val=='' || p_val == ''){
		alert('请输入账号或者密码！');
		return false;
	}

	$.ajax({
	   type: "POST",  //GET
	   url: "add_admin.php",  //请求的php文件
	   data: "user="+u_val+"&pwd="+p_val,  //发送的数据
	   dataType:"json",
	   success: function(msg){   //接收php文件响应的结果
		 if(msg.res=='has'){
		 	alert('账号已存在！');
		 }else if(msg.res!=='no'){
			//在列表追加一条管理员记录(tr)
			if($('#alist tbody tr').length%2==0){
				var str = '<tr class="alt-row">';
			}else{
				var str = '<tr>';
			}
			      str += '<td><input type="checkbox" name="know[]" value=""/></td>';
				  str += '<td>'+msg.res.admin_name+'</td>';
				  str += '<td>'+msg.res.register_ip+'</td>';
				  str += '<td>'+msg.res.register_time+'</td>';
                  str += '<td><a href="edit.php?id='+msg.res.admin_id+'" title="更改"><img src="images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a></td>';
				  str += '</tr>';

			$('#alist tbody').append(str);
			$('#add_admin').get(0).reset();
		 }else{
			alert('添加失败！');
		 }
	   },
	   error: function (XMLHttpRequest, textStatus, errorThrown) {  //显示错误
				alert(errorThrown); 
		} 
	});
});
</script>
</html>
