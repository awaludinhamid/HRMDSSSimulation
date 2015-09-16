<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ($lamakerjas !== FALSE) {

		//Create the HTML table header
		echo <<<HTML

		<table border='1'>
			<tr>
				<th>ID #</th>
				<th>Lama Kerja</th>
			</tr>

HTML;
			//Loop through all the users and create a row for each within the table
			foreach ($lamakerjas as $lamakerja) {
				echo <<<HTML

					<tr>
						<td>{$lamakerja->getId()}</td>
						<td>{$lamakerja->getLamaKerja()}</td>
					</tr>

HTML;
			}
		//Close the table HTML
		echo <<<HTML
		</table>
HTML;

	} else {
		//Now user could be found so display an error messsage to the user
		echo <<<HTML

			<p>A user could not be found with the specified user ID#, please try again.</p>

HTML;
	}