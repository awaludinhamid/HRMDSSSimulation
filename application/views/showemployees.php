<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ($employees !== FALSE) {

		//Create the HTML table header
echo "

		<thead>
			<tr>
				<th width='50'>NO</th>
                                <th width='100'>WORKING YEAR</th>
                                <th width='130'>ID</th>
                                <th width='300'>NAME</th>
                                <th>AGE</th>
                                <th></th>
			</tr>
                </thead>
                <tbody>
";
			//Loop through all the users and create a row for each within the table
                        $counter = 1;
			foreach ($employees as $employee) {
echo "

					<tr>
						<td hidden>{$employee->getId()}</td>
						<td>{$counter}</td>
                                                <td id='lkerja'>{$employee->getLamaKerja()}</td>
						<td>{$employee->getNik()}</td>
						<td>{$employee->getName()}</td>
						<td>{$employee->getUmur()}</td>
";
                                if($counter == 1000) {
echo "
					                                  
                                                <td style='margin: 0; padding: 0'><button class='btn btn-success btn-sm' disabled title='Edit record'><span class='glyphicon glyphicon-pencil'></span></button></td>
";
                                } else {
echo "
					      
                                                <td style='margin: 0; padding: 0'><button class='btn btn-success btn-sm' title='Edit record'><span class='glyphicon glyphicon-pencil'></span></button></td>
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