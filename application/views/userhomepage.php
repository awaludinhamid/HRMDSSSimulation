<!DOCTYPE html>
<html lang="en">
  <head>    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/user-home.css')?>"/>
    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/user-home.js')?>"></script>
  </head>
<body>
	<div class="content-filler-user">
		<div>
			<ul class="nav nav-tabs nav-pills">
				<li id="li-empl-db" class="active"><a href="#">Employee Database</a></li>
				<li id="li-score"><a href="#">Scoreboard</a></li>
			</ul>
		</div>
		<br/>
		<div id="div-empl-db">
			<div>
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
		<div id="div-score" hidden>
			<div>
				<h4 style="font-weight: bold">Game Scoreboard</h4>
				<table id="tbl-score" class="table table-hover table-bordered">
					<thead>
						<tr>
							<th width="50">PERINGKAT</th>
							<th width="100">NAMA PEMAIN</th>
							<th width="130">NAMA PERUSAHAAN</th>				
							<th width="150">TAHUN BERJALAN</th>				
							<th width="150">LABA RUGI SAMPAI DENGAN TAHUN INI</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
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

