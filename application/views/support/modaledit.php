<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
</head>

<body>
	<div class="modal fade" id="mdl-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Edit Karyawan</h4>
				</div>
				<div class="modal-body">
					<table id="tbl-mdl-edit">
						<tr>
							<td style="text-align: right; padding-right: 5px">No</td>
							<td><input type="text" placeholder="No" size="30" disabled/></td>
						</tr>
                                                <tr hidden>
							<td>Id</td>
							<td><input type="text" placeholder="Id" size="30"/></td>
						</tr>
                                                <tr>
							<td style="text-align: right; padding-right: 5px">Lama Kerja</td>
                                                        <td id="lamakerja" style="text-align: left"></td>
						</tr>
                                                <tr>
							<td style="text-align: right; padding-right: 5px">Lama Kerja</td>
							<td id="lamakerja1"><input type="text" placeholder="Lama Kerja" size="30"/></td>
						</tr>
						<tr>
							<td style="text-align: right; padding-right: 5px">Umur</td>
							<td><input type="text" placeholder="Umur" size="30"/></td>
						</tr>
						<tr>
							<td style="text-align: right; padding-right: 5px">Jumlah</td>
							<td id="jumlah"><input type="text" placeholder="Jumlah" size="30"/></td>
						</tr>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button id="btn-save" type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
				</div>
			</div>
		</div>
	</div>
  
  <div class="modal fade" id="mdl-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Add Recruit Setup</h4>
				</div>
				<div class="modal-body">
					<table id="tbl-mdl-add">
						<tr>
							<td style="text-align: right; padding-right: 5px">Lama Kerja</td>
                                                        <td id="lamakerja" style="text-align: left"></td>
						</tr>
						<tr>
							<td style="text-align: right; padding-right: 5px">Umur</td>
							<td><input type="text" placeholder="Umur" size="30"/></td>
						</tr>
						<tr>
							<td style="text-align: right; padding-right: 5px">Jumlah</td>
							<td><input type="text" placeholder="Jumlah" size="30"/></td>
						</tr>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button id="btn-save" type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		$(document).ready(function(){
			var dataSource;
                        var titleTxt;
			var dataTargetEdit = $("#mdl-edit #tbl-mdl-edit").find("input");
			var dataTargetAdd = $("#mdl-add #tbl-mdl-add").find("input");
			$("#tbl-recruit, #tbl-gol1, #tbl-gol2, #tbl-gol3").on("click","button",function(){
				var currButton = $(this);
                                titleTxt = currButton.parents("table").prev().text();
				dataSource = currButton.parents("tr").find("td");
                                if(titleTxt.search("Golongan") >= 0) {                
                                  $("#mdl-edit #myModalLabel").text(titleTxt);                
                                  $("#mdl-edit tr:has('#lamakerja1')").show();
                                  $("#mdl-edit tr:has('#lamakerja')").hide();
                                  $("#mdl-edit tr:has('#jumlah')").hide();
                                } else {
                                  $("#mdl-edit #myModalLabel").text("Edit Recruit Setup");
                                  $("#mdl-edit tr:has('#lamakerja')").show();
                                  $("#mdl-edit tr:has('#lamakerja1')").hide();
                                  $("#mdl-edit tr:has('#jumlah')").show();
                                }
				for(idxSource = 0; idxSource < 5; idxSource++) {
                                      if(dataSource.eq(idxSource).attr("id") == "lkerja") {
                                        $("#mdl-edit #lamakerja").load("tbllamakerja/show",{name: dataSource.eq(idxSource).text()});
                                      } else {
					dataTargetEdit.eq(idxSource).val(dataSource.eq(idxSource).text());
                                      }
				}
				$("#mdl-edit").modal("show");
			});
			$("#mdl-edit .modal-footer button#btn-save").click(function(){
                          $("#loader").show("slow");
                          if(titleTxt.search("Golongan") >= 0) {
                            $.post("tblsetupemployee/update",{id: dataTargetEdit.eq(1).val(),lamakerjath: dataTargetEdit.eq(2).val(),
                              umur: dataTargetEdit.eq(3).val(),jumlah: dataTargetEdit.eq(4).val(),desc: ""}, function(data,status) {
                              var gol = titleTxt.replace("Golongan ","");
                              $("#tbl-gol"+gol).load("tblsetupemployee/show",{golongan: gol});
                              $("#loader").hide("slow");
                            }).fail(function(d) {
                              $("#loader").hide("slow");
                            });
                          } else {
                            $.post("tblsetuprecruit/update",{id: dataTargetEdit.eq(1).val(),lamakerja: $("#mdl-edit select[name='lamakerja']").val(),
                              umur: dataTargetEdit.eq(3).val(),jumlah: dataTargetEdit.eq(4).val(),desc: ""}, function(data,status) {
                              $("#tbl-recruit").load("tblsetuprecruit/show");
                              $("#loader").hide("slow");
                            }).fail(function(d) {
                              $("#loader").hide("slow");
                            });
                          }
			});
			$("#mdl-add .modal-footer button#btn-save").click(function(){
                                $.post("tblsetuprecruit/save",{lamakerja: $("#mdl-add select[name='lamakerja']").val(),umur: dataTargetAdd.eq(0).val(),
                                  jumlah: dataTargetAdd.eq(1).val(),desc: ""}, function(data,status) {
                                  $("#tbl-recruit").load("tblsetuprecruit/show");
                                });
			});
		});
	</script>
</body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

