<?php
//
// Common Web Development Platform for PHP - DPX-IV
// Paging.php : Paging function generator (note: migrated for oracle and microsoft sql server)
//

class Paging
{
	// 
	// Generate single line of paging tag (not perfect)
	//
	function GenerateTag($currentPage, $totalPage, $fileName, $arguments="")
	{
        // If argument is exist, add '?{$arguments}' after $filename
        if($arguments != "")
        {
            $fileName = $fileName ."?" .$arguments ."&";
        }
        else
        {
            $fileName = $fileName ."?";
        }

		$return = "";

		if($currentPage > 10)
		{
			$prevPage = $currentPage - 10;
			$return .= " <a href=\"{$fileName}page={$prevPage}\"><img alt='이전페이지' src='/images/sub/btn_prev.png' /></a>";
		}

		for($i=($currentPage-4); $i<$currentPage; $i++)
		{
			if($i >= 1 && $i <= $totalPage)
			{
				$return .= " <a href=\"{$fileName}page={$i}\">{$i}</a>";
			}
		}

		$return .= "<a href='#'>{$currentPage}</a> ";

		for($i=($currentPage+1); $i<=($currentPage+4); $i++)
		{
			if($i >= 1 && $i <= $totalPage)
			{
				$return .= "<a href=\"{$fileName}page={$i}\">{$i}</a>";
			}
		}

		if($currentPage < ($totalPage-10))
		{
			$nextPage = $currentPage + 10;
			$return .= "<a href=\"{$fileName}page={$nextPage}\"><img alt='다음페이지' src='/images/sub/btn_next.png' /></a> ";
		}
        
		return $return;
	}


	function GenerateCommentTag($currentPage, $totalPage, $command="")
	{
        // Go...
        if($currentPage > 1)
        {
			$command_first = str_replace(":page:", 1, $command);
            $return = "<a href=\"{$command_first}\"><img alt='처음페이지' src='/images/sub/btn_first.png' /></a> ";
        }
        else
        {
            $return = "<img alt='처음페이지' src='/images/sub/btn_first.png' />";
        }

		if($currentPage > 10)
		{
			$prevPage = $currentPage - 10;
			$command_prv = str_replace(":page:", $prevPage, $command);
			$return .= "<a href=\"{$command_prv}\"><img alt='이전페이지' src='/images/sub/btn_prev.png' /></a> ";
		}

		for($i=($currentPage-4); $i<$currentPage; $i++)
		{
			if($i >= 1 && $i <= $totalPage)
			{
				unset($command_t);
				$command_t = str_replace(":page:", $i, $command);
				$return .= "<a href=\"{$command_t}\">{$i}</a> ";
			}
		}

		$return .= "<a href='#'>{$currentPage}</a> ";

		for($i=($currentPage+1); $i<=($currentPage+4); $i++)
		{
			if($i >= 1 && $i <= $totalPage)
			{
				unset($command_t);
				$command_t = str_replace(":page:", $i, $command);
				$return .= "<a href=\"{$command_t}\">{$i}</a> ";
			}
		}

		if($currentPage < ($totalPage-10))
		{
			$nextPage = $currentPage + 10;
			$command_next = str_replace(":page:", $nextPage, $command);
			$return .= "<a href=\"{$command_next}\"><img alt='다음페이지' src='/images/sub/btn_next.png' /></a> ";
		}
        
        if($currentPage < $totalPage)
        {
			$command_final = str_replace(":page:", $totalPage, $command);
            $return .= "<a href=\"{$command_final}\"><img alt='마지막페이지' src='/images/sub/btn_back.png' /></a> ";
        }
        else
        {
            $return .= "<img alt='마지막페이지' src='/images/sub/btn_back.png' /> ";
        }

		return $return;
	}

}
?>