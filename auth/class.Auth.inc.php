<?php
class Auth {
	
	function isAuth()
	{
		if ( (isset($_SESSION['auth'])) && (isset($_SESSION['admin'])) && ( $_SESSION['admin'] == TRUE ) )
		{
			return TRUE;	
		}
		else
		{
			return FALSE;
		}

	}
	
	function authenticate( $usr, $pwd )
	{
		$user = 'd033e22ae348aeb5660fc2140aec35850c4da997';
		$pass = '37fa265330ad83eaa879efb1e2db6380896cf639';
		
		if ( ( $user == $this->encrypt($usr) ) && ( $pass == $this->encrypt($pwd) ) )
		{
			$_SESSION['auth'] = TRUE;
			$_SESSION['admin'] = TRUE;
			
			return TRUE;
		}
	}
	
	function disconnect()
	{
		session_destroy();
		$this->redirect( 'index' );
	}
	
	function redirect( $parm )
	{
		header('location:'.$parm.'.php');
	}
	
	function encrypt( $str )
	{
		return sha1( $str );
	}
}

// EOF.