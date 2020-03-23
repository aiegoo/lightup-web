<?php
//
// Common Web Development Platform for PHP - DPX-IV
// Security.php : Common security controlling module
//

class Security
{
	//
	// INFO: You MUST use $database = new Database() statement at your host script
	// before constructing this class & methods.
	// If anyone has better idea for this, please contact us <greatymh@parans.co.kr>.
	//

	// login information (user idx) and whole cookies of client
	var $userIdx;
	var $cookie;

	// database statement and session configurations
	var $database;
	var $sessConfig;

	//
	// Standard constructor. default is autoCheckLogin=true
	//
	function Security($database, $autoCheckLogin=true)
	{
		global $appPath;

		require_once $appPath ."config/Session.php";
		$this->sessConfig = $sessConfig;
		
		global $_COOKIE;
		$this->cookie = &$_COOKIE;

		$this->database = $database;

		if($autoCheckLogin == true)
		{
			$this->userIdx = Security::CheckLogin();
		}
	}

	//
	// Check if current user is logged in
	//
	function CheckLogin()
	{
		$sessionNumber = $this->cookie['s3_sessionidx'];
		$sessionKey = $this->cookie['s3_sessionkey'];

		if(empty($sessionNumber) || empty($sessionKey))
		{
			return false;
		}

		$userInfo = Security::GetUserInfo($sessionNumber);

		if(substr($userInfo['status'], 0, 1) != "a")
		{
			return false;
		}

		$sessionKeyTarget = md5($userInfo['password'] .$this->sessConfig['key']);

		if($sessionKey != $sessionKeyTarget)
		{
			return false;
		}

		return $sessionNumber;
	}

	//
	// Generate cookie content for this session (login phase)
	//
	function GenerateSessionKey($password)
	{
		$return = md5($password .$this->sessConfig['key']);

		return $return;
	}
	
	//
	// Get single member information from database (by USER_IDX)
	//
	function GetUserInfo($userIdx)
	{
		$fetch = $this->database->Query("SELECT * FROM `Member` WHERE memberIndex='{$userIdx}'");
		$userInfo = $this->database->Fetch($fetch);
		$this->database->FreeResult($fetch);
 
		return $userInfo;
	}
	
	//
	// Get single member information from database (by ID)
	//
	function GetUserInfoByID($id)
	{
		$fetch = $this->database->Query("SELECT * FROM `Member` WHERE id='{$id}'");
		$userInfo = $this->database->Fetch($fetch);
		$this->database->FreeResult($fetch);
 
		return $userInfo;
	}

	//
	// Get single group information from database (by GROUP_IDX)
	//
	function GetGroupInfo($groupIdx)
	{
		$fetch = $this->database->Query("SELECT * FROM `Group` WHERE groupIndex='{$groupIdx}'");
		$groupInfo = $this->database->Fetch($fetch);
		$this->database->FreeResult($fetch);

		return $groupInfo;
	}

}
?>