<?php
/**
* GridPHP Memcache基础类
* @author ZhuShunqing
* @package def
*/
class gridphp_memcd extends gridphp_module{

	/**
	* 加载指定单元数据库对象
	* @param string $unit 数据库单元
	* @return memcd_cache cache引用
	*/
	public function loadMemc($unit){ return $this->_callImplements(); }

	/**
	* 设置指定单元数据库配置
	* @param string $unit 数据库单元
	* @return memcd_cache cache引用
	*/
	public function setMemc($unit){ return $this->_callImplements(); }

	/**
	* 不管key存不存在都保存
	* @param string $k key
	* @param mixed $v value
	* @param string $e expire 过期时间(默认最大30天)
	* @return bool
	*/
	public function set($k, $v, $e = 2592000){ return $this->_callImplements(); }

	public function setByKey($s, $k, $v, $e = 2592000){ return $this->_callImplements(); }

	public function setMulti($kv, $e = 2592000){ return $this->_callImplements(); }

	public function setMultiByKey($s, $kv, $e = 2592000){ return $this->_callImplements(); }

	/**
	* 取值
	* @param string $k key
	* @return mixed
	*/
	public function get($k){ return $this->_callImplements(); }

	public function getMulti($ks){ return $this->_callImplements(); }

	public function getByKey($s, $k){ return $this->_callImplements(); }

	public function getMultiByKey($s, $ks){ return $this->_callImplements(); }

	/**
	* 当key不存在时才保存
	* @param string $k key
	* @param mixed $v value
	* @param string $e expire 过期时间(默认最大30天)
	* @return bool
	*/
	public function add($k, $v, $e = 2592000){ return $this->_callImplements(); }

	public function addByKey($s, $k, $v, $e = 2592000){ return $this->_callImplements(); }

	/**
	* 当key存在时才更新保存
	* @param string $k key
	* @param mixed $v value
	* @param string $e expire 过期时间(默认最大30天)
	* @return bool
	*/
	public function replace($k, $v, $e = 2592000){ return $this->_callImplements(); }

	public function replaceByKey($s, $k, $v, $e = 2592000){ return $this->_callImplements(); }

	/**
	* 删除key值
	* @param string $k key
	* @param int $t timeout 延时删除
	* @return bool
	*/
	public function delete($k, $t = 0){ return $this->_callImplements(); }

	public function deleteByKey($s, $k, $t = 0){ return $this->_callImplements(); }

	/**
	* 增量
	* @param string $k key
	* @param int $v 增量值
	* @param string $e expire 过期时间(默认最大30天)
	* @return int
	*/
	public function increment($k, $v = 1, $e = 2592000){ return $this->_callImplements(); }

	/**
	* 减量
	* @param string $k key
	* @param int $v 减量值
	* @return int
	*/
	public function decrement($k, $v = 1){ return $this->_callImplements(); }

	/**
	* 关闭连接
	* @return void
	*/
	public function close(){ return $this->_callImplements(); }

//Simple list queue function
//-------------------------------------------------------------------------------

	/**
	* 推进队列
	* @param int $k key
	* @param int $v value
	* @param bool $uniq value唯一
	* @param string $e expire 过期时间(默认最大30天)
	* @return int
	*/
	public function listPush($k, $v, $uniq = 0, $e = 2592000){ return $this->_callImplements(); }

	/**
	* 删除指定位置
	* @param int $k key
	* @param int $idx 位置
	* @return int
	*/
	public function listDel($k, $idx){ return $this->_callImplements(); }

	/**
	* Value Count 如果listPush时$uniq＝1，则可以取出该value被Push过的次数
	*/
	public function listValueCount($k, $v){ return $this->_callImplements(); }

	/**
	* 队列长度
	* @param int $k key
	* @return int
	*/
	public function listCount($k){ return $this->_callImplements(); }
	
	/**
	* 弹出1条队列
	* @param $k
	* @return mixed === null表示队列已清空 === false表示队列值为空
	*/
	public function listPop($k){ return $this->_callImplements(); }

	/**
	* 取出底部队列
	* @param $k
	* @return mixed === null表示队列已清空 === false表示队列值为空
	*/
	public function listShift($k){ return $this->_callImplements(); }

	/**
	* 取出队列
	* @param int $k key
	* @param int $offs 起始位置
	* @param int $length 条数
	* @return array 结果集
	*/
	public function listGet($k, $offs = 0, $length = 100){ return $this->_callImplements(); }

	/**
	* 重整理队列序号
	* @param int $k key
	* @param string $e expire 过期时间(默认最大30天)
	* @return int
	*/
	public function listOptimize($k, $e = 2592000){ return $this->_callImplements(); }

	/**
	* 销毁队列
	* @param int $k key
	* @return bool
	*/
	public function listDestroy($k){ return $this->_callImplements(); }

}

?>