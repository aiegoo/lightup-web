<?php
//
// Common Web Development Platform for PHP - DPX-IV
// Message.php : Common user-message printing functions
//

class Message
{
	function Alert($messageString, $printHeader=false, $nextCode=null)
	{
		global $appPath;

		if($printHeader)
		{
			@include $appPath ."layout/CommonHtmlTop.php";

			echo Message::AlertJavascript($messageString, $nextCode);

			@include $appPath ."layout/CommonHtmlBottom.php";
		}
		else
		{
			echo Message::AlertJavascript($messageString, $nextCode);
		}
	}

	function AlertJavascript($messageString, $nextCode)
	{
		$return = "<script type=\"text/javascript\">\n"
				."alert(\"" .$messageString ."\");\n"
				.$nextCode ."\n"
				."</script>\n";

		return $return;
	}

	function AlertHtml($messageString, $nextCode)
	{
		$return = "<a href=\"" .$nextCode ."\">" .$messageString ."</a>\n";

		return $return;
	}

	function AlertXml($type, $r_type, $message)
	{
		$return = "<{$type}>\n";
		$return .= " <type>{$r_type}</type>\n";
		$return .= " <message>{$message}</message>\n";
		$return .= "</{$type}>\n";

		return $return;
	}

	function AlertYellowBox($messageString, $headString)
	{
		$return = "<div style=\"color:#990000; width:630px; background-color:#FFFFC6; border-width:1px; border-style:solid; border-color:#996600; padding:3px;\">\n<span class=\"boldfont\">{$headString}:</span>\n{$messageString}\n</div>\n<br />";

		return $return;
	}
}
?>