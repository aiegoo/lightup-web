<?php
//
// Common Web Development Platform for PHP - DPX-IV
// Database.php : returns specified DBMS connection object at Create().
//

class Database
{
    function Create($dbConfig, $autoConnect=true)
    {
		global $appPath;

        if(empty($dbConfig))
        {
            exit;
        }

        $database = null;

        if($dbConfig['dbmstype'] == "MYSQL")
        {
            @include_once $appPath ."classes/Database.MySQL.php";
            $database = new Database_MYSQL();
        }
        else
        {
            echo "Unsupported DBMS, exiting.";
            exit;
        }

		// AutoConnect.
		$database->Connect($dbConfig);

        return $database;
    }
}
?>