<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/admin-game.css')?>"/>
    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/admin-game.js')?>"></script>
  </head>
<body>
	<div class="content-filler-admin">
		<div style="float: left">
			<h5 style="font-weight: bold">Create Session</h5>
			<table style="background-color: #443">
				<tr><td style="padding: 10px; color: white">CREATE NEW SESSION</td></tr>
				<tr><td style="padding: 10px; "><input id="input-session" size="35" type="text"/></td></tr>
				<tr><td style="padding: 10px; color: white"><button id="btn-create" style="background-color: #322">Create</button></td></tr>
				<tr><td style="padding: 10px; "></td></tr>
			</table>
		</div>
		<div style="float: left; margin-left: 15px">
			<h5 style="font-weight: bold">Created Session</h5>
			<table id="tbl-session" class="table table-hover table-bordered table-scroll">				
			</table>
                <br/>
                <br/>
		</div>
		<div>
			<h5 style="font-weight: bold">Define Available Recruit</h5>
			<hr style="border-color: #bbb"/>
			<table id="tbl-recruit" class="table table-hover table-bordered">
				
			</table>
                        <button id="btn-add" class='btn btn-primary btn-sm' title="Add more setup combination">Add&nbsp;<span class='glyphicon glyphicon-plus'></span></button>
                        <button id="btn-process" class='btn btn-warning btn-sm' title="Apply setup change">Process&nbsp;<span class='glyphicon glyphicon-ok'></span></button>
			<br/>
			<br/>
			<br/>
			<br/>
		</div>
		<div>
			<h5 style="font-weight: bold">Define Initial Users Employee</h5>
			<hr style="border-color: #bbb"/>
			<h4 style="font-weight: bold">Golongan 1</h4>
			<table id="tbl-gol1" class="table table-hover table-bordered">
				<thead></thead>
				<tbody></tbody>
			</table>
			<h4 style="font-weight: bold">Golongan 2</h4>
			<table id="tbl-gol2" class="table table-hover table-bordered">
				<thead></thead>
				<tbody></tbody>
			</table>
			<h4 style="font-weight: bold">Golongan 3</h4>
			<table id="tbl-gol3" class="table table-hover table-bordered">
				<thead></thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
</body>
</html>
<?php
include "support/navbarpage.php";
include "support/modaledit.php";

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

