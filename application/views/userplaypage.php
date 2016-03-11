<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/user-play.css')?>"/>
    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/user-play.js')?>"></script>
</head>

<body>
	<div class="container-fluid content-filler-user">
		<div>
			<ul class="nav nav-tabs nav-pills">
				<li id="li-form-kom" class="active"><a href="#">Communication Form</a></li>
				<li id="li-form-kep"><a href="#">Decision Form</a></li>
				<!--li id="li-form-res"><a href="#">Result Form</a></li-->
			</ul>
		</div>
		<br/>
		<div id="div-form-kom">
			<div style="float: left">
				<h4>Alert Information</h4>
				<table id="tbl-alert" class="table table-hover table-bordered" style="font-size: 9px">
					<thead>
						<tr>
							<th width="20">NO</th>
							<th width="30">WORKING YEAR</th>
							<th width="70">ID</th>				
							<th width="100">NAME</th>				
							<th>AGE</th>						
							<th width="120">STATUS</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
			<div style="float: left; margin-left: 15px">
				<h4>Available Recruit<span style="float: right; font-size: 10px; cursor: pointer" class="glyphicon glyphicon-refresh">&nbsp;Refresh</span></h4>
				<table id="tbl-recruit" class="table table-hover table-bordered" style="font-size: 9px">
					<thead>
						<tr>
							<th width="20">NO</th>
							<th width="30">WORKING YEAR</th>
							<th width="70">ID</th>				
							<th width="100">NAME</th>				
							<th>AGE</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
			<br/>
			<div style="float: right">
				<br/>
				<h4 style="text-align: center">2ND YEAR</h4>
				<hr style="border-color: #aaa"/>
				<h4 style="font-weight: bold">Groups 1</h4>
				<table id="tbl-gol1" class="table table-hover table-bordered">
					<thead></thead>
					<tbody></tbody>
				</table>
				<h4>Groups 2</h4>
				<table id="tbl-gol2" class="table table-hover table-bordered">
					<thead></thead>
					<tbody></tbody>
				</table>
				<h4>Groups 3</h4>
				<table id="tbl-gol3" class="table table-hover table-bordered">
					<thead></thead>
					<tbody></tbody>
				</table>
				<span style="float: right" class="btn btn-primary btn-sm">Continue</span><span style="float: right" class="glyphicon glyphicon-ok">&nbsp;</span>
			</div>
		</div>
		<div id="div-form-kep" hidden>
			<div>
				<h4>Groups 1</h4>
				<table id="tbl-gol4" class="table table-hover table-bordered">
					<thead></thead>
					<tbody></tbody>
				</table>
				<h4>Groups 2</h4>
				<table id="tbl-gol5" class="table table-hover table-bordered">
					<thead></thead>
					<tbody></tbody>
				</table>
				<h4>Groups 3</h4>
				<table id="tbl-gol6" class="table table-hover table-bordered">
					<thead></thead>
					<tbody></tbody>
				</table>				
			</div>
			<button class="btn btn-primary btn-sm" style="float: right">Submit</button>
			<br/>
			<br/>
			<div>
				<table class="table table-hover table-bordered" style="text-align: left; font-weight: bold">
					<tr style="background-color: #eec">
						<td>Sub Total Value Increase</td>
						<td></td>
						<td></td>
						<td>Expediency</td>
						<td></td>
					</tr>
					<tr style="background-color: #ffd">
						<td>Employee costs up to last year</td>
						<td></td>
						<td></td>
						<td>Contribution</td>
						<td></td>
					</tr>
					<tr style="background-color: #eec">
						<td>Employee costs until this year</td>
						<td></td>
						<td></td>
						<td>Profit-Loss this year</td>
						<td></td>
					</tr>
					<tr>
						<td>SUB TOTAL OTHER COSTS</td>
						<td></td>
						<td></td>
						<td>Profit-Loss up to last year</td>
						<td></td>
					</tr>
					<tr>
						<td>TOTAL COST OVERHEAD</td>
						<td></td>
						<td></td>
						<td>Profit-Loss up to this year</td>
						<td></td>
					</tr>
				</table>
			</div>
			<button class="btn btn-primary btn-sm" style="float: right">Save</button>
		</div>
		<div id="div-form-res" hidden>
			<div>
				<h4>Game Result</h4>
				<table id="tbl-score" class="table table-hover table-bordered">
					<thead>
						<tr>
							<th width="50">RANKING</th>
							<th width="100">PLAYER NAME</th>
							<th width="130">COMPANY NAME</th>				
							<th width="150">CURRENT YEAR</th>				
							<th width="150">PROFIT-LOSS UNTIL THIS YEAR</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="mdl-manage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" style="width: 310px">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Manage Position</h4>
				</div>
				<div class="modal-body">
					<table id="tbl-manage" class="table table-hover table-bordered">
						<tbody></tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button id="btn-add" type="button" class="btn btn-primary" data-dismiss="modal">Add From Available Recruit</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="mdl-recruit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Available Recruit<span style="float: right; font-size: 10px; cursor: pointer" class="glyphicon glyphicon-refresh">&nbsp;Refresh</span></h4>
				</div>
				<div class="modal-body">
					<table id="tbl-mdl-recruit" class="table table-hover table-bordered">
						<thead>
							<tr>
								<th width="50">NO</th>
								<th width="100">WORKING YEAR</th>
								<th width="130">ID</th>				
								<th width="300">NAME</th>				
								<th>AGE</th>						
								<th></th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
				<!--div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button id="btn-add" type="button" class="btn btn-primary" data-dismiss="modal">Add From Available Recruit</button>
				</div-->
			</div>
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

