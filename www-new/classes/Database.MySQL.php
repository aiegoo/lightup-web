<?php
//
// Common Web Development Platform for PHP - DPX-IV
// Database.MySQL.php : for MySQL 4.0 and later (Production Use)
//

class Database_MYSQL
{
	// connection stored in here
	var $connection;

	function Connect($dbConfig)
	{
		$connection = mysql_connect($dbConfig['hostname'], $dbConfig['username'], $dbConfig['password']);
		$selectResult = mysql_select_db($dbConfig['database'], $connection);

		if(!$connection || !$selectResult)
		{
			Message::Alert("[Database Connection Failure on {$this->dbConfig['name']}]\\n"
					."Please contact your system administrator.", true, "");
			exit;
		}

		@mysql_query("SET NAMES utf8", $connection);

		$this->connection = $connection;
	}

	function Close()
	{
		$return = @mysql_close($this->connection);
		//$this->connection = null;

		return $return;
	}

	function Query($queryString)
	{
		$return = mysql_query($queryString, $this->connection);
		return $return;
	}

	function Fetch($queryResult)
	{
		$return = Database_MYSQL::FetchArray($queryResult);
		return $return;
	}

	function FetchArray($queryResult)
	{
		$return = @mysql_fetch_array($queryResult);
		return $return;
	}

	function FetchAssoc($queryResult)
	{
		$return = @mysql_fetch_assoc($queryResult);
		return $return;
	}

	function FreeResult(&$queryResult)
	{
		@mysql_free_result($queryResult);
	}
	
	function Count($queryResult)
	{
		return @mysql_num_rows($queryResult);
	}

	function Commit()
	{
		// ...
		return 0;
	}

	function EscapeString($str)
	{
		return @mysql_real_escape_string($str);
	}
}
?>