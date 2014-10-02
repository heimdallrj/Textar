<?php 
include_once( 'header.php' );
if ( $authObj->isAuth() ) { $authObj->redirect( 'index' ); }

if ( (isset($_REQUEST['action'])) && ($_REQUEST['action']=='auth') )
{	
	if ( $authObj->authenticate( $_REQUEST['auth-user'], $_REQUEST['auth-pwd'] ) )
	{
		print 'YY';
	}
	else
	{
		print 'XX';
	}
}
?>

<h1>ADMIN - Textar</h1>

<form method="post" action="auth.php" enctype="application/x-www-form-urlencoded">

	<table>
    
    	<tr> <td>USER NAME</td> <td><input type="text" name="auth-user" id="auth-user" value="" /></td> </tr>
        
        <tr> <td>PASSWORD</td> <td><input type="password" name="auth-pwd" id="auth-pwd" value="" /></td> </tr>
    
    	<tr> 
        	<td><input type="hidden" name="action" value="auth" /></td> 
            <td><input type="submit" name="submit-auth" id="submit-auth" value="LOGIN" /></td> 
       	</tr>
    
    </table>

</form>

<?php include_once( 'footer.php' ); ?>