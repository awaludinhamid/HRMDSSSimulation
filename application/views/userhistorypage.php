<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/user-history.css')?>"/>
    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/user-history.js')?>"></script>
</head>

<body>
  <div class="container-fluid content-filler-user">
    <table class="table">
      <thead>
        <tr>
          <th>NO</th>
          <th>NAME</th>
          <th>ID</th>
          <th>USER ID</th>
          <th>WORKING YEAR</th>
          <th>AGE</th>
          <th>GROUPS</th>
          <th>FLAG</th>
          <th>DESCRIPTION</th>
          <th>CREATED BY</th>
          <th>CREATED DATE</th>
          <th>UPDATED BY</th>
          <th>UPDATED DATE</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
    <div id="pagination" style="text-align: center">
      <ul class="pagination"></ul>
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

