ldap-forms
==========

creating customs ldap-forms in command line and save in google docs

This is only the base code of the project.

Still have to add python to create a command line tool to create forms (which are very easy to create)

<h3> How to use this forms? </h3>
<ul>
  <li> Rename config-sample.php file in the ldap-forms folder to config.php</li>
  <li> Define  <b> $user ,$password,$workSheet,$spreadsheet </b> variables correctly </li>
  <li> <b>$worksheet</b> is normally SheetX (where X is the number) </li>
  <li> <b>$spreadsheet</b> is normally the name of the spread sheet you made in drive (google drive) </li>
</ul>

<p>If you have any error while running this code in server due to Zend framework, configure php.ini accordingly
enable extension <b> extension=php_openssl.dll </b>(in win)
<br /> (This will work mostly)
</p>
