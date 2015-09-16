<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ($sessions !== FALSE) {

		//Create the HTML table header
		echo <<<HTML

		<thead>
					<tr>
						<th>NO</th>
						<th>SESSION NAME</th>
						<th>STATUS</th>						
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody>

HTML;
			//Loop through all the users and create a row for each within the table
                        $counter = 1;
			foreach ($sessions as $session) {
				echo <<<HTML

					<tr id={$session->getId()}>
						<td>{$counter}</td>
						<td>Session {$session->getName()}</td>
						<td>{$session->getStatus()}</td>
						<td style="margin: 0; padding: 0"><button class='btn btn-danger btn-sm'>Delete&nbsp;<span class='glyphicon glyphicon-trash'></span></button></td>
					</tr>

HTML;
                                $counter++;
			}
		//Close the table HTML
		echo <<<HTML
		</tbody>
HTML;

	} else {
		//Now user could be found so display an error messsage to the user
		echo <<<HTML

			<p>A user could not be found with the specified user ID#, please try again.</p>

HTML;
	}