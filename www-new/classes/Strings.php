<?php
//
// Common Web Development Platform for PHP - DPX-IV
// Strings.php : String functions for unicode environment
//

class Strings
{
	function Cut($str, $length=30, $tail="...")
	{
		$len = strlen($str);
		if ($len <= $length)
		{
			return $str;
		}

		$len = $length;

		while ($len > 0 && ($ch = ord($str[$len])) >= 128 && ($ch < 192))
		{
			$len--;
		}

		return substr($str, 0, $len) .$tail;
	}

	function SplitString($str, $size)
	{
		$len = strlen($str);
		if($size >= $len) return array($str);
	
		$rtn = array();
		$flag = 0;
		$start = 0;
		$end = $size-1;
	
		for($i=0;$i<$len;$i++)
		{
			if(ord($str[$i]) > 127) $flag++;
			if($end == $i)
			{
				if($flag%2 == 1)
				{
					array_push($rtn,substr($str,$start,$size-1));
					$start += $size - 1;
				}
				else
				{
					array_push($rtn,substr($str,$start,$size));
					$start += $size;
				}

				$end = $start + $size - 1;
			}
		}
		if($len>=$start)
		{
			array_push($rtn,substr($str,$start,$len-$start));
		}
	
		return $rtn;
	}

	function RemoveHtml($string)
	{
		$return = str_replace("<", "&lt;", $string);

		return $return;
	}

	function FormatDateToYYMMDDWW($string, $split="/")
	{
		$time = strtotime($string);

		$week = array("일", "월", "화", "수", "목", "금", "토");
		$s = $week[date("w", $time)];

		return date("y{$split}m{$split}d({$s})", $time);
	}
	
	function FormatDateToMMDDWW($string, $split="/")
	{
		$return = Strings::FormatDateToYYMMDDWW($string, $split);
		return substr($return, 3);
	}

	/*
	function ConvertJunBan($_Text)
	{	
        $_Text = preg_replace_callback("/[\x{ff01}-\x{ff5e}]/u", function($c) {
				   $code = ((ord($c[0][0]) & 0xf) << 12) | ((ord($c[0][1]) & 0x3f) << 6)| (ord($c[0][2]) & 0x3f);
	                return chr($code - 0xffe0);
                }, $_Text);

        return $_Text;
	}
	*/
}
?>