<?php
header('Content-Type:text/html;charset=UTF-8');
#链接mysql数据库
$link = mysql_connect('localhost','root','');
if($link==false){
	exit('链接mysql数据库失败！');
}
//var_dump($link);
#选择操作的数据库
$db = 'jinlingweb';
$select = mysql_select_db($db,$link);
//print_r($select);
if(!$select){
	exit('您选择的数据库 '.$db.' 不存在!');
}

if(!empty($_POST)){
	$username = trim($_POST['username']);
	$content = trim($_POST['content']);
	
	$sql = "insert into `message`('username','content') values('$username','$content')";
	mysql_query($sql);
	$insert = mysql_insert_id();
	if($insert){
		echo '<srcipt>alert("ok");</srcipt>';
	}else{
		echo '<srcipt>alert("no");</srcipt>';
	}
	
}else{
	$message = 'select * from `message`';
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
</head>
<body>
	<div>
		<?php foreach($message as $key=>$value){ ?>
		<p><?php echo $value['useranme'];?></p>
		<p><?php echo $value['content'];?></p>
		<?php }?>
	</div>
	<form action="">
		<table>
			<tr>
				<td>名称</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>内容</td>
				<td><input type="text" name="content"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="提交"></td>
			</tr>
		</table>
	</form>
</body>
</html>