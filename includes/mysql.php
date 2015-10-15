<?php
header('Content-Type:text/html;charset=utf-8');

#数据库操作类
class Mysql{
	#定义属性
	protected $link_id; #用受保护、私有的（注：使用public，那跟全局变量没什么区别）
	
	#定义构造方法
	function __construct($host,$root,$pwd,$db){
		#业务逻辑（数据操作：调数  据）
		$this->link_id = @mysql_connect($host,$root,$pwd);
		if(!$this->link_id){
			exit('数据库服务器链接失败！错误为:'.mysql_error());
		}
		$select_db = @mysql_select_db($db,$this->link_id);
		if(!$select_db){
			exit('数据库'.$db.'不存在！');
		}
		mysql_query('set names utf8');//设置传输编码
	}

	#定义方法
	/**
	 *  查询一条记录
	 *  @param string $sql 查询语句
	 *  @return array  二维数组
	 *  @author teacher lin
	 *  @email lin_wengdo@qq.com 
	 */
	public function get_one($sql){
	
		$res = mysql_query($sql,$this->link_id);
		if($res){
			$data_info = mysql_fetch_assoc($res);
		}else{
			exit('查询不到记录，错误为：'.mysql_error());
		}

		return $data_info;
	}

	/**
	 *  查询多条记录
	 *  @param string $sql 查询语句
	 *  @return array  二维数组
	 *  @author teacher lin
	 *  @email lin_wengdo@qq.com 
	 */
	public function get_all($sql){

		$res = mysql_query($sql,$this->link_id);
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
	 *  统计记录总数
	 *  @param string $sql 查询语句（要写该格式：select count(`主键id`) as num from `表名` where 条件...）
	 *  @return int 总数
	 *  @author teacher lin
	 *  @email lin_wengdo@qq.com 
	 */
	public function count_nums($sql){
		$res = mysql_query($sql,$this->link_id);
		//mysql_num_rows($res);
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
	 *  @author teacher lin
	 *  @email lin_wengdo@qq.com 
	 */
	public function update($data,$table,$where)
	{
		$str = '';
		foreach ($data as $key => $value) {
			$str .= "`$key`='$value',";
		}
		$str = rtrim($str,',');
		
		$update_sql = "update $table set $str where $where";
		mysql_query($update_sql,$this->link_id);
		return mysql_affected_rows(); //影响行数
	}

	/**
	 *  添加记录函数
	 *  @param array $data 关联数组(一维)
	 *  @param string $table 数据表
	 *  @return int 插入的主键id
	 *  @author teacher lin
	 *  @email lin_wengdo@qq.com 
	 */
	public function insert($data,$table)
	{
		$k = '';
		$v = '';
		foreach ($data as $key => $value) {
			$k .= '`'.$key.'`,';
			$v .= "'$value',";
		}
		$k = rtrim($k,',');
		$v = rtrim($v,',');  

		$insert_sql = "insert into $table($k) values($v)";
		mysql_query($insert_sql,$this->link_id);
		return mysql_insert_id(); //插入的主键id
	} 

	/**
	 *  删除记录函数
	 *  @param string $table 数据表
	 *  @param string $where 条件（格式：`字段`=值）
	 *  @return int 影响行数
	 *  @author teacher lin
	 *  @email lin_wengdo@qq.com 
	 */
	public function delete($table,$where)
	{
		$sql = "delete from $table where $where";
		mysql_query($sql,$this->link_id);
		return mysql_affected_rows();
	}

	#析构方法（关闭数据库链接）
	function __destruct(){
		mysql_close($this->link_id); #可加可不加（不过加了之后性能更优）
	}

}

?>