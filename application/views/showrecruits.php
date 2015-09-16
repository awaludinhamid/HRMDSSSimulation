<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ($recruits !== FALSE) {

		//Create the HTML table header
echo "

		<thead>
			<tr>
				<th width='50'>NO</th>
                                <th>LAMA KERJA</th>
                                <th>UMUR</th>
                                <th>JUMLAH</th>
                                <th width='50'>ACTION</th>
			</tr>
                </thead>
                <tbody>
";
			//Loop through all the users and create a row for each within the table
                        $counter = 1;
			foreach ($recruits as $recruit) {
echo "

					<tr>
						<td>{$counter}</td>
						<td hidden>{$recruit->getId()}</td>
                                                <td id='lkerja'>{$recruit->getLamaKerja()}</td>
						<td>{$recruit->getUmur()}</td>
						<td>{$recruit->getJumlah()}</td>
";
                                if($counter == 1) {
echo "
					                                  
                                                <td style='margin: 0; padding: 0'><button class='btn btn-success btn-sm' disabled> Edit&nbsp;<span class='glyphicon glyphicon-pencil'></span></button></td>
";
                                } else {
echo "
					      
                                                <td style='margin: 0; padding: 0'><button class='btn btn-success btn-sm'>Edit&nbsp;<span class='glyphicon glyphicon-pencil'></span></button></td>
";
                                }
echo "

					</tr>
";
                                $counter++;
			}
		//Close the table HTML
echo "
                </tbody>
";

	} else {
		//Now user could be found so display an error messsage to the user
echo "

			<p>A user could not be found with the specified user ID#, please try again.</p>

";
	}