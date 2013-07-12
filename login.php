<?php
/* author: Prithviraj Billa
   website : blog.prithvirajbilla.com
*/
    //LDAP server settings
    $ldap_host = 'ldap.iitb.ac.in';
    $ldap_port = 389;
    $baseDN = 'dc=iitb,dc=ac,dc=in';
    $error_login = "";
    $error_room = "";
    $login = true;
    // LDAP password
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
    	if($_POST['submitted'] == '0')
    	//supressing warnings by adding @
    	{
		    $ldap_uid = strip_tags($_POST['ldap_id']);
		    setcookie('name',$ldap_uid);
		    $ldap_pass = strip_tags($_POST['password']);
		    $ds = @ldap_connect($ldap_host) or die("Unable to connect to LDAP server. Please try again later.");
		    //searching for UID
		    $sr = @ldap_search($ds,$baseDN,"(uid=$ldap_uid)");
		    //getting the entries
			$info = @ldap_get_entries($ds, $sr);
			$ldap_uid = $info[0]['dn'];
			//authenticating
			$do_bind = @ldap_bind($ds,$ldap_uid,$ldap_pass);
			if($do_bind)
			{
				$authenticated = true;
				$login = false;
			}
			else
			{
				$error_login = "There is a problem connecting to server or Wrong password";
				
				$authenticated = true;
				$login = false;
				

			}
		}
		elseif ($_POST['submitted'] == '1')
		{
		  $room_no = $_POST['room_no'];
	      if (!is_numeric($room_no)) {
	          $error_room ='<div style="text-align:center"><p class="text-warning">Room number is supposed to be a number :( </p></div>';
	          $authenticate = true;
	          $login = false;
			}
		}
	}


?>