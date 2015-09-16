<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ($users !== FALSE) {

			//Loop through all the users and create a row for each within the table
			foreach ($users as $user) {
echo "

					<tr>
						<td hidden>{$user->id}</td>
						<td>{$user->username}</td>
						<td>{$user->password}</td>
						<td>Session {$user->session_name}</td>
                                                <td style='padding: 0; margin: 0'><button class='btn btn-danger btn-sm'>Delete&nbsp;<span class='glyphicon glyphicon-trash'></span></button></td>
					</tr>

";
			}
	} else {
		//Now user could be found so display an error messsage to the user
echo "

			<p>A user could not be found with the specified session, please try again.</p>

";
	}