<?php
/**
* GridPHP database agent基础类
* @author ZhuShunqing
* @package def
*/
class gridphp_dba extends gridphp_module{

	/**
	* 加载指定单元数据库对象
	* @param string $unit 数据库单元
	* @return dba_conn DB引用
	*/
	public function &loadDB($unit){ return $this->_callImplements(); }

	/**
	* 设置指定单元数据库配置
	* @param string $unit 数据库单元
	* @return dba_conn DB引用
	*/
	public function &setDB($unit){ return $this->_callImplements(); }

	/**
	* 选择数据库
	* @param string $dbname 数据库名
	* @return bool
	*/
	public function &selectdb($dbname){ return $this->_callImplements(); }
	
	/**
	* 数据库开始事务 boolean begin()
	* @return boolean
	*/
	public function &begin(){ return $this->_callImplements(); }
	
	/**
	* 回滚数据库 boolean rollback()
	* @return boolean
	*/
	public function &rollback(){ return $this->_callImplements(); }
	
	/**
	* 提交数据库事务 boolean commit()
	* @return boolean
	*/
	public function &commit() { return $this->_callImplements(); }

	/**
	* 关闭连接
	* @return void
	*/
	public function &close(){ return $this->_callImplements(); }

	/**
	* sql查询
	* @param string $sql 查询语句
	* @return resource link
	*/
	public function &query($sql){ return $this->_callImplements(); }

	/**
	* 受影响行数
	* @param string $sql 查询语句
	* @return resource link
	*/
	public function &query_affected_rows(){ return $this->_callImplements(); }

	/**
	* 高级查询测试
	* @param string $table 表名
	* @param array $fields 选择字段
	* @param array $condition 查询条件 array('uid' => array('>', 1000010)[,...]) 字段 => (运算符, 比较值),
	* @return string sql
	*/
	public function &query_test($table, $fields, $condition){ return $this->_callImplements(); }

	/**
	* sql高级查询-多条记录
	* @param string $table 表名
	* @param array $fields 选择字段
	* @param array $condition 查询条件 array('uid' => array('>', 1000010)[,...]) 字段 => (运算符, 比较值),
	* @return resource link
	*/
	public function &query_all($table, $fields, $condition, $cachetime = null){ return $this->_callImplements(); }

	/**
	* sql高级查询-单条记录
	* @param string $table 表名
	* @param array $fields 选择字段
	* @param array $condition 查询条件 array('uid' => array('>', 1000010)[,...]) 字段 => (运算符, 比较值),
	* @return resource link
	*/
	public function &query_one($table, $fields, $condition, $cachetime = null){ return $this->_callImplements(); }

	/**
	* 查询记录数
	* @param string $table 表名
	* @param array $condition 查询条件
	* @param string $cachetime 缓存时间
	* @return int
	*/
	public function &query_count($table, $condition, $cachetime = null){ return $this->_callImplements(); }

	/**
	* 取出一条结果
	* @param string $sql 查询语句
	* @param string $cachetime 缓存时间
	* @return array
	*/
	public function &fetch($sql = null, $cachetime = null){ return $this->_callImplements(); }

	/**
	* 取回全部结果
	* @param string $sql 查询语句
	* @param string $cachetime 缓存时间
	* @return array
	*/
	public function &fetch_all($sql = null, $cachetime = null){ return $this->_callImplements(); }

	/**
	* 插入一条记录
	* @param string $table 表名
	* @param array $row 记录值
	* @param array $duprow 主键重复时覆盖值
	* @return resource link
	*/
	public function &insert($table, $row, $duprow = null){ return $this->_callImplements(); }

	/**
	* 插入一条记录
	* @param string $table 表名
	* @param array $row 记录值
	* @param array $condition 查询条件
	* @return resource link
	*/
	public function &update($table, $row, $condition){ return $this->_callImplements(); }

	/**
	* 替换一条记录replace into方法
	* @param string $table 表名
	* @param array $row 记录值
	* @return resource link
	*/
	public function &replace($table, $row){ return $this->_callImplements(); }

	/**
	* 删除一条记录
	* @param string $table 表名
	* @param array $condition 查询条件
	* @return resource link
	*/
	public function &delete($table, $condition){ return $this->_callImplements(); }

	/**
	* 返回最后插入记录ID
	* @return int
	*/
	public function &insert_id(){ return $this->_callImplements(); }

	/**
	* get errors info
	* @return array
	*/
	public function &get_error(){ return $this->_callImplements(); }

}

?>
