<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>"/>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css')?>"/>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/admin-user.css')?>"/>
  <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/admin-user.js')?>"></script>
</head>

<body>
	<div class="content-filler-admin">
		<div>
			<br/>
                        <table id="tbl-user-input" class="table-hover table-bordered">
				<thead></thead>
				<tbody>
					<tr>
                                          <td><input id="input-username" type="text" placeholder="Username" size="30" style="height: 30px"/></td>
						<td><input id="input-password" type="text" placeholder="Password" size="30" style="height: 30px"/></td>
                                                <td id="session" style="text-align: center">
							<!--select id="select-session" class="form-control" style="font-size: 10px; height: 30px"></select-->
						</td>
						<td>
							<button class="btn btn-success btn-sm">Submit&nbsp;<span class="glyphicon glyphicon-ok"></span></button>
						</td>
					</tr>
				</tbody>
			</table>
			<br/>
			<br/>
		</div>
		<div style="margin: 0; padding: 0">
			<table id="tbl-user-list" class="table table-hover table-bordered table-scroll">
				<thead></thead>
                                <tbody id="user-list-body"></tbody>
			</table>
		</div>
	</div>
</body>
</html>
<?php
include "support/navbarpage.php";

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

