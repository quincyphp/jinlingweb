<?php
//函数库
/**
 * 字符截取（对中文、英文都可以进行截取）
 * @param string $string   字符串
 * @param int $start       字符串截取开始位置
 * @param int $length      字符串截取长度(多少个中文、英文)
 * @param string $charset  字符串编码
 * @param string $dot      截取操作发生时，在被截取字符串最后边增加的字符串
 * @param author chen teacher
 * @return string
 */

function str_cut(&$string, $start, $length, $charset = "utf-8", $dot = '...') {
	if(function_exists('mb_substr')) {
		if(mb_strlen($string, $charset) > $length) {//按字符获取长度
			return mb_substr ($string, $start, $length, $charset) . $dot;
		}
		return mb_substr ($string, $start, $length, $charset);//按字符截取字符串
		
	}else if(function_exists('iconv_substr')) {
		if(iconv_strlen($string, $charset) > $length) {//
			return iconv_substr($string, $start, $length, $charset) . $dot;
		}
		return iconv_substr($string, $start, $length, $charset);
	}

	$charset = strtolower($charset);
	switch ($charset) {
		case "utf-8" :
			preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/", $string, $ar);
			if(func_num_args() >= 3) { //func_num_args()  返回函数的参数个数
				if (count($ar[0]) > $length) {
					return join("", array_slice($ar[0], $start, $length)) . $dot;
				}
				return join("", array_slice($ar[0], $start, $length));
			} else {
				return join("", array_slice($ar[0], $start));//join()=>implode()
			}
			break;
		default:
			$start = $start * 2;
			$length   = $length * 2;
			$strlen = strlen($string);
			for ( $i = 0; $i < $strlen; $i++ ) {
				if ( $i >= $start && $i < ( $start + $length ) ) {
					if ( ord(substr($string, $i, 1)) > 129 ) $tmpstr .= substr($string, $i, 2);
					else $tmpstr .= substr($string, $i, 1);
				}
				if ( ord(substr($string, $i, 1)) > 129 ) $i++; //返回字符的 ASCII 码值 
			}
			if ( strlen($tmpstr) < $strlen ) $tmpstr .= $dot;
			
			return $tmpstr;
	}
}
#定义函数=》显示不同单位的文件大小(字节、KB、MB、GB、TB)
/**
 * @param string
 * @return string
 * @param author chen teacher
 * 
 */

function file_size($file){
	$size = filesize($file);
	if($size<1024){ //字节
		return $size.'字节';
	}else if($size>=1024 && $size<pow(1024,2)){  //KB

		return sprintf('%.1f',$size/1024).'KB';

	}else if($size>=pow(1024,2) && $size<pow(1024,3)){  //MB
		
		return sprintf('%.1f',$size/pow(1024,2)).'MB';

	}else if($size>=pow(1024,3) && $size<pow(1024,4)){  //GB
		
		return sprintf('%.1f',$size/pow(1024,3)).'GB';

	}else if($size>=pow(1024,4) && $size<pow(1024,5)){  //TB
		
		return sprintf('%.1f',$size/pow(1024,4)).'TB';

	}
}
	//页面跳转函数
function show_msg($msg="", $url=""){
	@header("Content-Type:text/html;charset=utf-8");
	echo '<script type="text/javascript">';
	echo 'alert("'.$msg.'");';
	
	if(!empty($url)){
		echo 'location.href = "'.$url.'"';
	}else{
		echo 'history.go(-1);';
	}
	
	echo '</script>';
	exit;
}
/**
 *  函数命名：get_all  getAll
 *  封装函数：把功能代码复制到function里面，再定义参数（不确定的内容）
 *  一个函数一个功能（查询所有记录、统计记录总数是两个不同的功能）
 */
/**
 *  查询多条记录
 *  @param string $sql 查询语句
 *  @return array  二维数组
 *  @author teacher chen
 *  @email chen_wengdo@qq.com 
 */
function get_all($sql){
	$res = mysql_query($sql);
	$data_info = array();
	if($res){
		while($data = mysql_fetch_assoc($res)){
			$data_info[] = $data;
		}
	}else{
		exit('查询不到记录，错误为：'.mysql_error());
	}

	return $data_info;
}


/**
 *  查询一条记录
 *  @param string $sql 查询语句
 *  @return array  二维数组
 *  @author teacher chen
 *  @email chen_wengdo@qq.com 
 */

function get_one($sql){
	$res = mysql_query($sql);
	if($res){
		$data_info = mysql_fetch_assoc($res);
	}else{
		exit('查询不到记录'.mysql_error());
	}
	return $data_info;
}

/**
 *  统计记录总数
 *  @param string $sql 查询语句（要写该格式：select count(`主键id`) as num from `表名` where 条件...）
 *  @return int 总数
 *  @author teacher chen
 *  @email chen_wengdo@qq.com 
 */
function count_nums($sql){
	$res = mysql_query($sql);
	if($res){
		$data = mysql_fetch_assoc($res);
	}else{
		exit('查询不到记录，错误为：'.mysql_error());
	}
	return $data['num'];
}

/**
 *  修改记录函数
 *  @param array $data 关联数组(一维)
 *  @param string $table 数据表
 *  @param string $where 条件（格式：`字段`=值）
 *  @return int 影响行数
 *  @author teacher chen
 *  @email chen_wengdo@qq.com 
 */
function update($data,$table,$where)
{
	$str = '';
    foreach ($data as $key => $value) {
        $str .= '`'.$key.'`="'.$value.'",';
    }
    $str = rtrim($str,',');
    
    $update_sql = "update $table set $str where $where";
    mysql_query($update_sql);
    return mysql_affected_rows(); //影响行数
}
/**
 *  添加记录函数
 *  @param array $data 关联数组(一维)
 *  @param string $table 数据表
 *  @return int 插入的主键id
 *  @author teacher cehn
 *  @email chen_wengdo@qq.com 
 */

function insert($date,$table){
	$k = '';
	$v = '';
	foreach($date as $key=>$value){
		$k .= '`'.$key.'`,';
        $v .= '"'.$value.'",';
	}
	$k = rtrim($k,',');
    $v = rtrim($v,',');  

    $insert_sql = "insert into $table($k) values($v)";
    mysql_query($insert_sql);
    return mysql_insert_id(); //插入的主键id
}

/**
 * 自动获取url+参数，除了page分页参数
 */
function get_param(){
	$str = $_SERVER['PHP_SELF'].'?';//如：/news_list.php?page=1
	if(isset($_GET)){
		foreach($_GET as $key=>$value){
			if($key!='page'){
				$str .= $key.'='.$value.'&';
			}
		}
	}
	return $str;
}

/**
 * 分页函数
 * @param int $page 页码
 * @param int $count_nums 总数录数
 * @param int $limit 每页显示多少记录
 * @param int $size 显示多少页码
 * @param int $string $class_anme 分页样式的class名
 */

function page($page,$count_nums,$limit,$size,$class_name='msdn'){

	#总页数
	$page_total = ceil($count_nums/$limit); #进一法取整（取大于2.3的最小整数）

	$str = '<div class="'.$class_name.'">';
	if($page!=1){
		$str .= '<a href="'.get_param().'page=1">第一页</a>';
		$str .= '<a href="'.get_param().'page='.($page-1).'">上一页</a>';
	}else{
		$str .= '<span class="disabled">第一页</span>';
		$str .= '<span class="disabled">上一页</span>';
	}

	if($page<=floor($size/2)){  //第1种情况
	    $first = 1;
	    $last = $page_total>$size ? $size : $page_total;
	}else if($page>$page_total-floor($size/2)){ //第3种情况
	    $first = $page_total-$size+1<=0 ? 1 : $page_total-$size+1;
	    $last = $page_total;
	}else{ //第2种情况
	    $first = $page - floor($size/2);
	    $last = $page + floor($size/2);
	}

	for($i=$first; $i<=$last; $i++){
	    if($i==$page){
	        $str .= "<span class='current'>$i</span>";
	    }else{
	        $str .= "<a href='".get_param()."page=$i'>$i</a>";
	    }   
	}

	if($page!=$page_total){
		$str .= '<a href="'.get_param().'page='.($page+1).'">下一页</a>';
		$str .= '<a href="'.get_param().'page='.$page_total.'">最后一页</a>';
	}else{
		$str .= '<span class="disabled">下一页</span>';
		$str .= '<span class="disabled">最后一页</span>';
	}
	$str .= '</div>';

	return $str;
}

/**
* @author  陈老师（个人版）
* @param string $path 上传文件的存放路径（为空白存放到当前工作目录下）
* param int $size 上传文件的限制大小（单位：字节）
* parm int $style 上传的类型（1 图片 2 Flash 3 3 视频   4 多媒体   5 文本   6 可执行文件   7 不限制）
* @param string $old_file 旧文件的路径加名字（如果有新文件上传，这个旧文件将被删除）
* @return string 文件名（有新文件就是新文件的路径加名字，否则有旧文件还是旧文件的路径加名字，否则就是空）
*
**/
/**function 文件上传**/

function uploadFile($path, $size = 10241000, $type = 1, $old_file = '')
{
	$path = $path ? $path : './';
	
	//如果路径没有以 / 结束，自动加上 /
	$path = rtrim($path, '/') . '/';
	
	//如果路径不存在
	if(!is_dir($path))
	{
		mkdir($path, 0777, true);
	}

	//允许上传的文件类型
	$fileType = array(
	 	1 => array('gif','png','jpg','jpeg','bmp'),
		2 => array('swf','flv'),
		3 => array('rm','rmvb','avi','wmv','mpg','asf','mp3','wma','wmv','mid'),
		5 => array('txt','doc','xls','ppt','pdf','xml','rar','zip','gzip','cab','iso','sql'),
		6 => array('exe','com','scr','bat')
	);
	$fileType[4] = array_merge($fileType[2], $fileType[3]);

	//获得$_FILES数组的所有key
	$arr_key = array_keys($_FILES);
	//获得要上传的文件的数组
	$file = $_FILES[$arr_key[0]]; //$arr_key[0]是文件上传输入框的名字
	
	//没有文件上传
	if($file['size']<=0){return str_replace(array('../', './'), '', $old_file);}

	//获得此文件的扩展名
	$exten = strtolower( pathinfo($file['name'], PATHINFO_EXTENSION) );

	if($type < 7 && ! in_array($exten, $fileType[$type]))
	{
		die('<script>alert("'.$file['name'].'的文件类型不符合要求!"); window.history.go(-1);</script>');
	}

	if($file['size'] > $size)
	{
		die('<script>alert("'.$file['name'].'的文件大小不能超过'.$size.'字节"); window.history.go(-1);</script>');
	}

	//开始上传文件，保留文件的原来名字
	//move_uploaded_file($file['tmp_name'], $path.$file['name']);

	//为避免覆盖，重命名该文件，用当前时间戳 $_SERVER['REQUEST_TIME'] 加上一个随机数做为文件名
	$newname = $path. date('YmdHis',$_SERVER['REQUEST_TIME']) . mt_rand(1000, 9999) . '.' . $exten;
	//上传文件
	move_uploaded_file($file['tmp_name'], $newname);
	
	//改变文件权限（主要针对linux，windows系统此句没啥作用）
	chmod($newname, 0777);

	//删除旧文件
	//例如：$old_file = '../abc/old_file.jpg';
	is_file($old_file) && unlink($old_file);

	return str_replace(array('../', './'), '', $newname);
}

function jump($msg,$url='')
{
	$str = '<script type="text/javascript">';
	$str .= 'alert("'.$msg.'");';
	
	if($url!=''){
		$str .= 'location.href="'.$url.'";';
	}else{
		$str .= 'history.go(-1);';
	}
	
	$str .= '</script>';

	exit($str);
}

/**
 * 关于我们
 * @param int $type 单页类型
 * $return string 
 * 
 */

function about_us($type){
	switch ($type){
		case 1:
			return 'CEO致辞';
			break;
		case 2:
			return '公司历史';
			break;
		case 3:
			return '企业文化';
			break;
		case 4:
			return '组织结构';
			break;
		case 5:
			return '合作伙伴';
			break;
		case 6:
			return '联系我们';
			break;
	}

}

/**
 * 后台验证是否已登入
 * @return string
 * @author chen
 * 
 */
function check_login(){
	session_start();
	if(!isset($_SESSION['admin_name'])){
		header('location:login.php');
	}
}

?>