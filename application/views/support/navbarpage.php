<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/navigation.css')?>"/>
    <script src="<?php echo base_url('assets/js/navbar.js')?>"></script>
    <title>PPM Management</title>
  </head>

<body>
	<div>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<a class="class-logo" href="http://www.ppm-manajemen.ac.id"><img id="ppmLogo" src="<?php echo base_url('assets/img/ppm-logo-cust.jpg')?>" alt="PPM logo"></img></a>
				<div class="navbar-header">
					<span class="navbar-text">HRM DSS SIMULATION APPLICATION</span>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li id="btn-user"><a href="#">User</a></li>
						<li><a id="btn-logout" href="login">Log out</a></li>
					</ul>
				</div>
			</div>
			<div id="div-company" style="padding: 10px 5px; background-color: #787; color: white; font-weight: bold">
				<span id="span-pt"></span>
				<span style="float: right; font-size: 10px">SIKLUS TAHUN 1</span>
			</div>
		</nav>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-2 col-md-1 sidebar">
					<ul id="nav-sidebar" class="nav nav-sidebar">
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="mdl-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Change Password</h4>
				</div>
				<div class="modal-body">
					<input type="password" placeholder="New Password" size="30"/>
					<br/>
					<br/>
					<input type="password" placeholder="Confirm New Password" size="30"/>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button id="btn-save" type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
				</div>
			</div>
		</div>
	</div>
  
  <div class="modal fade" id="mdl-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title" id="title"></h3>
        </div>
        <div class="modal-body">
          <span id="content"></span>
        </div>
        <div class="modal-footer">
          <button id="btn-close" type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div id="loader">
    <img src="<?php echo base_url('assets/img/loading_animation.gif')?>" alt="Loader"/>
    <span>Loading..</span>
  </div>
</body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

