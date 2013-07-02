<?php 
	
//LDAP Variables

$ldaphost = "ldap.iitb.ac.in"; // IITB's ldap server
$ldapport = 389;              // IITB's ldap port
$ldapdn = "ou=People,dc=it,dc=iitb,dc=ac,dc=in";
//ldap connect
$ldapconn = ldap_connect($ldaphost, $ldapport)
          or die("Could not connect to $ldaphost");

//get username and password

echo $ldapconn ;
$set = ldap_set_option($ldapconn, LDAP_OPT_MATCHED_DN , $ldapdn);
ldap_set_option($ldapconn,LDAP_OPT_PROTOCOL_VERSION,3);

if($set)
{
	echo "set correctly" ;
} 
if($ldapconn)
{
	//binding to ldap server
	$ldapbind = ldap_bind($ldapconn);
	if ($ldapbind) {
        echo "LDAP bind successful...";
    } else {
        echo "LDAP bind failed...";
    }
    ldap_close($ldapconn);
}

?>


