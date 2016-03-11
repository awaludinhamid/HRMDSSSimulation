<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/user-result.css')?>"/>
    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/user-result.js')?>"></script>
</head>
<body>
	<div class="container-fluid content-filler-user">
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
</body>
</html>
<?php
include "support/navbarpage.php";

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

