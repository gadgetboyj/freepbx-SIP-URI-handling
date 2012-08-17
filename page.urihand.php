<?php
if (!defined('FREEPBX_IS_AUTH')) { die('No direct script access allowed'); }
//This file is part of FreePBX.
//
//    This is free software: you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation, either version 2 of the License, or
//    (at your option) any later version.
//
//    This module is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//
//    see <http://www.gnu.org/licenses/>.
//

// Module dev notes:
// 

if(count($_POST)){

	$foo = array(
		name1 => $_POST['name1'],
		name2 => $_POST['name2'],
		name3 => $_POST['name3']
		);

	urihand_editconfig($foo);
	}

// get module config 
$date = urihand_getconfig();

// test for presence of custom contexts module
if ($active_modules[customcontexts] ){
	$ccmodule = '<b>WARNING:</b> The Custom Contexts Module is enabled on this system, and may be incompatible with this module.<br><br>';
	}

?>
<h1><font face="Arial">URI Handling Module</font></h1>
		<hr>

This module adds the ability to dial SIP URI's from this PBX.<br>
To enable a user to make SIP URI based outgoing calls from their extention, select it from the list.<br><br>
<?php  print $ccmodule; ?>
<form name= "config" method="POST" action=""><a href="javascript: return false;" class="info">
<large><bold><u>Administrator Functions</u></large></bold><br>
<small>Establish the configurtion items below to enable SIP URI Dialing on this platform.</small><br><br>
<medium><bold>Identity</medium></bold><br><small><hr></small>
<small>Replace the examples with your real information. Use whatever you're using for externhost= or your real domain, etc.</small>
	<table border="0" width="32%" id="table1">
		<tr>
			<td width="115">MYDOMAIN</td>
			<td><input type="text" name="name1" size="27" value="<?php print $date[0]['name1']; ?>"><a href="javascript: return false;" class="info"></td>
		</tr>
		<tr>
			<td width="115">MYFQDN1</td>
			<td>
			<input type="text" name="name2" size="27" value="<?php print $date[0]['name2']; ?>"><a href="javascript: return false;" class="info"></td>			
		</tr>
		<tr>
			<td width="115">MYFQDN2</td>
			<td><input type="text" name="name3" size="27" value="<?php print $date[0]['name3']; ?>"><a href="javascript: return false;" class="info"></td>
		</tr>
	</table>
<br>
<input type="submit" value="update" name="update">
<br><hr><br>
<center>This module was started by the community at colsolgrp based on scripts originally created by Luke Hamburg.<br>
This module is now maintained by the PBX Open Source Software Alliance (POSSA)<br><br></center>