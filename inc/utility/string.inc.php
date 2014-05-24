<?php
/*
* GridPHP 字符工具类
* @author ZhuShunqing
*/
class utility_string{

	/*
	* 以字符串起始
	* @param string $s1 被查找字符
	* @param string $s2 查找字符
	* @param bool $icase 区别大小写
	* @return bool
	*/
	function startWith($s1, $s2, $icase = false){
		if($s1== "" || $s2 == "")
			return false;
		if($icase)
			return stripos($s1, $s2)."" == "0";
		else
			return strpos($s1, $s2)."" == "0";
	}

	/*
	* 以字符串结束
	* @param string $s1 被查找字符
	* @param string $s2 查找字符
	* @param bool $icase 区别大小写
	* @return bool
	*/
	function endWith($s1, $s2, $icase = false){
		if($s1== "" || $s2 == "")
			return false;
		if($icase)
			return strripos($s1, $s2) == strlen($s1) - strlen($s2);
		else
			return strrpos($s1, $s2) == strlen($s1) - strlen($s2);
	}


	/*
	* 截取字符串
	* @param string $str 被截字符串
	* @param string $length 截取字数，中文为*3
	* @param bool $flag 控制超长后是否加省略号，默认加上，true时则不加
	* @return string
	*/
	function sub_str_chn($str, $length,$flag=false)
	{
		$p	=	0;
		$j	=	0;
		if($str == "")
		{
			return "(空)";
		}
		preg_match_all('/([x80-xff]{2,2})/',$str,$letter); //字母
		$length_tmp	=	strlen($str)+(count($letter[0])/2);

		if($length_tmp > $length)
		{
			for ($k=0;$k<=($length-3);$k++)
			{
				$j++;
				if($j	>	($length-3))
				{
					break;
				}
				if (ord(substr($str,$k,1)) >= 129)
				{
					$k+=2;
					$j+=2;
				}
				else
				{
					$p++;
				}
				if($p	==	2)
				{
					$j++;
					$p	=	0;
				}
			}
			if(!$flag){
				$str = substr($str,0,$k)."…";
			}else{
				$str = substr($str,0,$k+3);
			}
			
		}
		$str	=	str_replace("<BR…","<BR>…",$str);
		$str	=	str_replace("<B…","<BR>…",$str);
		$str	=	str_replace("<…","<BR>…",$str);
		return $str;
	}

}

?>