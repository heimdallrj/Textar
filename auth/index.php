<?php 
include_once( 'header.php' ); 
if ( ! $authObj->isAuth() ) { $authObj->redirect( 'auth' ); }
?>

<?php include_once( 'footer.php' ); ?>