$(document).ready(function() {
  $("div#loader").show(1).delay(2000).hide(1);
  //navigation bar
  $(window).bind("load",function() {
    $("#select-play").addClass("active");			
  });
	
	//toggle between tab menu
	$("#li-form-kep").click(function() {
		$("#div-form-kep").show();
		$("#div-form-kom").hide();
		$("#div-form-res").hide();
		$("#li-form-kep").addClass("active");
		$("#li-form-kom").removeClass("active");
		$("#li-form-res").removeClass("active");
	});
	$("#li-form-kom").click(function() {
		$("#div-form-kom").show();
		$("#div-form-kep").hide();
		$("#div-form-res").hide();
		$("#li-form-kom").addClass("active");
		$("#li-form-kep").removeClass("active");
		$("#li-form-res").removeClass("active");
	});
	$("#li-form-res").click(function() {
		$("#div-form-res").show();
		$("#div-form-kom").hide();
		$("#div-form-kep").hide();
		$("#li-form-res").addClass("active");
		$("#li-form-kom").removeClass("active");
		$("#li-form-kep").removeClass("active");
	});
		
	//tabel alert section
	var tblAlertArr = [["2","7","B","28","Announced Resignation"],
											["1","6","C","25","Announced Resignation"],
											["3","5","D","30","Announced Resignation"]];
	var tblAlertNo = 1;
	var tblAlertTxt = "";
	for(idxOut = 0; idxOut < tblAlertArr.length; idxOut++) {
		tblAlertTxt = "<tr>"+
									"<td>"+(tblAlertNo++)+"</td>";
		for(idxIn = 0; idxIn < tblAlertArr[idxOut].length; idxIn++) {
			tblAlertTxt = tblAlertTxt + "<td>"+tblAlertArr[idxOut][idxIn]+"</td>";
		}
		tblAlertTxt = tblAlertTxt + "</tr>";
		$("#tbl-alert tbody").append(tblAlertTxt);
	}
	
	//tabel recruit section
	var tblRecruitArr = [["2","7","B","28"],
											["1","6","C","25"],
											["3","5","D","30"]];
	var tblRecruitNo = 1;
	var tblRecruitTxt = "";
	for(idxOut = 0; idxOut < tblRecruitArr.length; idxOut++) {
		tblRecruitTxt = "<tr>"+
									"<td>"+(tblRecruitNo++)+"</td>";
		for(idxIn = 0; idxIn < tblRecruitArr[idxOut].length; idxIn++) {
			tblRecruitTxt = tblRecruitTxt + "<td>"+tblRecruitArr[idxOut][idxIn]+"</td>";
		}
		tblRecruitTxt = tblRecruitTxt + "</tr>";
		$("#tbl-recruit tbody").append(tblRecruitTxt);
	}
	
	var htmlSelect = "<select id='select-action' class='form-control'></select>";
	var htmlCheckBox = "<input type='checkbox' value='ok'><span style='font-size: 11px'>&nbsp;Ok</span></input>";
	var htmBtnSelect = "<button id='btn-manage' class='btn btn-success btn-sm' style='width: 300px'>"+
										"<span class='glyphicon glyphicon-chevron-down' style='float: right'></span>Manage Position</button>";
	var htmBtnSelectManage = "<button class='btn btn-warning btn-sm'>Select&nbsp;<span class='glyphicon glyphicon-ok'></span></button>";
	
	//tabel golongan 1 (form komunikasi) section
	var tblGol1Arr = [["B 57","20",htmlSelect,"2","5","7",htmlCheckBox],
											["C 52","20",htmlSelect,"1","7","7",htmlCheckBox],
											["D 47","20",htmlSelect,"3","7","5",htmlCheckBox]];
	var tblGol1Txt = "";
	for(idxOut = 0; idxOut < tblGol1Arr.length; idxOut++) {
		tblGol1Txt = "<tr>";
		for(idxIn = 0; idxIn < tblGol1Arr[idxOut].length; idxIn++) {
			if(idxIn == 2) {
				tblGol1Txt = tblGol1Txt + "<td style='padding: 0px'>"+tblGol1Arr[idxOut][idxIn]+"</td>";
			} else if(idxIn == 6) {
				tblGol1Txt = tblGol1Txt + "<td style='padding: 0px; vertical-align: middle'>"+tblGol1Arr[idxOut][idxIn]+"</td>";
			} else {
				tblGol1Txt = tblGol1Txt + "<td>"+tblGol1Arr[idxOut][idxIn]+"</td>";
			}			
		}
		tblGol1Txt = tblGol1Txt + "</tr>";
		$("#tbl-gol1 tbody").append(tblGol1Txt);
	}
	
	//tabel golongan 2 (form komunikasi) section
	var tblGol2Arr = [["E 40","10",htmlSelect,"2","5","6",htmlCheckBox],
											["F 40","10",htmlSelect,"1","4","5",htmlCheckBox],
											["G 35","10",htmlSelect,"3","6","5",htmlCheckBox],
											["H 30","10",htmlSelect,"3+","5","6",htmlCheckBox],
											["J 39","10",htmlSelect,"2","4","5",htmlCheckBox],
											["K 30","10",htmlSelect,"2","5","5",htmlCheckBox]];
	var tblGol2Txt = "";
	for(idxOut = 0; idxOut < tblGol2Arr.length; idxOut++) {
		tblGol2Txt = "<tr>";
		for(idxIn = 0; idxIn < tblGol2Arr[idxOut].length; idxIn++) {
			if(idxIn == 2) {
				tblGol2Txt = tblGol2Txt + "<td style='padding: 0px'>"+tblGol2Arr[idxOut][idxIn]+"</td>";
			} else if(idxIn == 6) {
				tblGol2Txt = tblGol2Txt + "<td style='padding: 0px; vertical-align: middle'>"+tblGol2Arr[idxOut][idxIn]+"</td>";
			} else {
				tblGol2Txt = tblGol2Txt + "<td>"+tblGol2Arr[idxOut][idxIn]+"</td>";
			}			
		}
		tblGol2Txt = tblGol2Txt + "</tr>";
		$("#tbl-gol2 tbody").append(tblGol2Txt);
	}
	
	//tabel golongan 3 (form komunikasi) section
	var tblGol3Arr = [[htmBtnSelect,"5",htmlSelect,"2","5","6",htmlCheckBox],
											["M 40","5",htmlSelect,"1","7","6",htmlCheckBox],
											["N 50","5",htmlSelect,"3","7","7",htmlCheckBox],
											["O 30","5",htmlSelect,"2","8","7",htmlCheckBox],
											["P 45","5",htmlSelect,"1","5","6",htmlCheckBox],
											["R 25","5",htmlSelect,"3","4","5",htmlCheckBox],
											["S 25","5",htmlSelect,"2","4","5",htmlCheckBox],
											["T 25","5",htmlSelect,"1","6","6",htmlCheckBox],
											["U 28","5",htmlSelect,"3","5","5",htmlCheckBox]];
	var tblGol3Txt = "";
	for(idxOut = 0; idxOut < tblGol3Arr.length; idxOut++) {
		if(idxOut == 0) {
			tblGol3Txt = "<tr id='tr-manage'>";
		} else {
			tblGol3Txt = "<tr>";
		}		
		for(idxIn = 0; idxIn < tblGol3Arr[idxOut].length; idxIn++) {
			if(idxIn == 2) {
				tblGol3Txt = tblGol3Txt + "<td style='padding: 0px'>"+tblGol3Arr[idxOut][idxIn]+"</td>";
			} else if(idxIn == 6) {
				tblGol3Txt = tblGol3Txt + "<td style='padding: 0px; vertical-align: middle'>"+tblGol3Arr[idxOut][idxIn]+"</td>";
			} else {
				tblGol3Txt = tblGol3Txt + "<td>"+tblGol3Arr[idxOut][idxIn]+"</td>";
			}			
		}
		tblGol3Txt = tblGol3Txt + "</tr>";
		$("#tbl-gol3 tbody").append(tblGol3Txt);
	}
	
	//tabel golongan 1 (form keputusan) section
	var tblGol4Arr = [["2","7","B","57",htmlSelect,"20","","","3","",""],
											["1","6","C","52",htmlSelect,"20","","","2","",""],
											["3","5","D","42",htmlSelect,"20","","","3+","",""]];
	var tblGol4No = 1;
	var tblGol4Txt = "";
	for(idxOut = 0; idxOut < tblGol4Arr.length; idxOut++) {
		tblGol4Txt = "<tr>"+
									"<td>"+(tblGol4No++)+"</td>";
		for(idxIn = 0; idxIn < tblGol4Arr[idxOut].length; idxIn++) {
			if(idxIn == 4) {
				tblGol4Txt = tblGol4Txt + "<td style='padding: 0px'>"+tblGol4Arr[idxOut][idxIn]+"</td>";
			} else {
				tblGol4Txt = tblGol4Txt + "<td>"+tblGol4Arr[idxOut][idxIn]+"</td>";
			}			
		}
		tblGol4Txt = tblGol4Txt + "</tr>";
		$("#tbl-gol4 tbody").append(tblGol4Txt);
	}
	
	//tabel golongan 2 (form keputusan) section
	var tblGol5Arr = [["F","7","E","40",htmlSelect,"10","","","1","",""],
											["1","6","F","40",htmlSelect,"10","","","2","",""],
											["2","5","G","35",htmlSelect,"10","","","3","",""],
											["F","5","H","30",htmlSelect,"10","","","1","",""],
											["3+","5","J","39",htmlSelect,"10","","","3+","",""],
											["1","6","K","30",htmlSelect,"10","","","2","",""]];
	var tblGol5No = 1;
	var tblGol5Txt = "";
	for(idxOut = 0; idxOut < tblGol5Arr.length; idxOut++) {
		tblGol5Txt = "<tr>"+
									"<td>"+(tblGol5No++)+"</td>";
		for(idxIn = 0; idxIn < tblGol5Arr[idxOut].length; idxIn++) {
			if(idxIn == 4) {
				tblGol5Txt = tblGol5Txt + "<td style='padding: 0px'>"+tblGol5Arr[idxOut][idxIn]+"</td>";
			} else {
				tblGol5Txt = tblGol5Txt + "<td>"+tblGol5Arr[idxOut][idxIn]+"</td>";
			}			
		}
		tblGol5Txt = tblGol5Txt + "</tr>";
		$("#tbl-gol5 tbody").append(tblGol5Txt);
	}
	
	//tabel golongan 3 (form keputusan) section
	var tblGol6Arr = [["3","7","L","40",htmlSelect,"5","","","3+","",""],
											["3","6","M","50",htmlSelect,"5","","","3+","",""],
											["F","5","N","30",htmlSelect,"5","","","1","",""],
											["1","4","O","45",htmlSelect,"5","","","2","",""],
											["1","5","P","25",htmlSelect,"5","","","2","",""],
											["F","4","Q","25",htmlSelect,"5","","","1","",""],
											["1","6","R","25",htmlSelect,"5","","","2","",""],
											["1","5","S","25",htmlSelect,"5","","","2","",""]];
	var tblGol6No = 1;
	var tblGol6Txt = "";
	for(idxOut = 0; idxOut < tblGol6Arr.length; idxOut++) {
		tblGol6Txt = "<tr>"+
									"<td>"+(tblGol6No++)+"</td>";
		for(idxIn = 0; idxIn < tblGol6Arr[idxOut].length; idxIn++) {
			if(idxIn == 4) {
				tblGol6Txt = tblGol6Txt + "<td style='padding: 0px'>"+tblGol6Arr[idxOut][idxIn]+"</td>";
			} else {
				tblGol6Txt = tblGol6Txt + "<td>"+tblGol6Arr[idxOut][idxIn]+"</td>";
			}			
		}
		tblGol6Txt = tblGol6Txt + "</tr>";
		$("#tbl-gol6 tbody").append(tblGol6Txt);
	}
	
	//tabel score section
	var tblScoreArr = [["I","10","1","D2","20"],
											["II","2","5","P","31"],
											["III","4","6","B","53"],
											["IV","6","7","C","40"],
											["V","5","3","G","23"]];
	var tblScoreTxt = "";
	for(idxOut = 0; idxOut < tblScoreArr.length; idxOut++) {
		tblScoreTxt = "<tr>";
		for(idxIn = 0; idxIn < tblScoreArr[idxOut].length; idxIn++) {
			tblScoreTxt = tblScoreTxt + "<td>"+tblScoreArr[idxOut][idxIn]+"</td>";
		}
		tblScoreTxt = tblScoreTxt + "</tr>";
		$("#tbl-score tbody").append(tblScoreTxt);
	}
	
	//tabel manage section
	var tblManageArr = [["M 40",htmBtnSelectManage],
											["N 50",htmBtnSelectManage],
											["O 30",htmBtnSelectManage],
											["P 45",htmBtnSelectManage],
											["R 25",htmBtnSelectManage],
											["S 25",htmBtnSelectManage],
											["T 25",htmBtnSelectManage]];
	var tblManageTxt = "";
	for(idxOut = 0; idxOut < tblManageArr.length; idxOut++) {
		tblManageTxt = "<tr>";
		for(idxIn = 0; idxIn < tblManageArr[idxOut].length; idxIn++) {
			if(idxIn == 1) {
				tblManageTxt = tblManageTxt + "<td width='70'>"+tblManageArr[idxOut][idxIn]+"</td>";
			} else {
				tblManageTxt = tblManageTxt + "<td>"+tblManageArr[idxOut][idxIn]+"</td>";
			}			
		}
		tblManageTxt = tblManageTxt + "</tr>";
		$("#tbl-manage tbody").append(tblManageTxt);
	}
		
	//tabel recruit (modal type) section
	var tblMdlRecruitArr = [["2","7","B","28",htmBtnSelectManage],
													["1","6","C","25",htmBtnSelectManage],
													["3","5","D","30",htmBtnSelectManage],
													["2","5","F1","27",htmBtnSelectManage],
													["2","5","D1","25",htmBtnSelectManage],
													["2","5","A","28",htmBtnSelectManage],
													["1","5","H","23",htmBtnSelectManage],
													["1","4","J","20",htmBtnSelectManage],
													["1","4","W","25",htmBtnSelectManage],
													["1","4","X","30",htmBtnSelectManage],
													["F","3","V","20",htmBtnSelectManage],
													["F","3","Y","22",htmBtnSelectManage],
													["F","3","C","24",htmBtnSelectManage]];
	var tblMdlRecruitNo = 1;
	var tblMdlRecruitTxt = "";
	for(idxOut = 0; idxOut < tblMdlRecruitArr.length; idxOut++) {
		tblMdlRecruitTxt = "<tr>"+
									"<td>"+(tblMdlRecruitNo++)+"</td>";
		for(idxIn = 0; idxIn < tblMdlRecruitArr[idxOut].length; idxIn++) {
			tblMdlRecruitTxt = tblMdlRecruitTxt + "<td>"+tblMdlRecruitArr[idxOut][idxIn]+"</td>";
		}
		tblMdlRecruitTxt = tblMdlRecruitTxt + "</tr>";
		$("#tbl-mdl-recruit tbody").append(tblMdlRecruitTxt);
	}
	
	//<select> column section
	var selectMapVal = ["gn","pr","mt","gn","pr","mt","gn","pr","mt","pt+tk","pr","mt","gn","pr","mt","gn","pr","tk"
											,"gn","pr","mt","gn","pr","mt","gn","pr","mt","gn","pr","mt","gn","pr","mt","gn","pr"];
	for(idx = 0; idx < 35; idx++) {
		$("#tbl-gol1 #select-action, #tbl-gol2 #select-action, #tbl-gol3 #select-action, " +
			"#tbl-gol4 #select-action, #tbl-gol5 #select-action, #tbl-gol6 #select-action").eq(idx).append(				
			"<option value='none'>&#45;&#45;</option>"+
			"<option value='d'>D</option>"+
			"<option value='pr'>PR</option>"+
			"<option value='pk'>PK</option>"+
			"<option value='tp'>TP</option>"+
			"<option value='tr'>TR</option>"+
			"<option value='rp'>RP</option>"+
			"<option value='mt'>MT</option>"+
			"<option value='tk'>TK</option>"+
			"<option value='pp'>PP</option>"+
			"<option value='pt'>PT</option>"+
			"<option value='gn'>GN</option>"+
			"<option value='ph'>PH</option>");
		if(idx == 9) {
			$("#tbl-gol1 #select-action, #tbl-gol2 #select-action, #tbl-gol3 #select-action, " +
			"#tbl-gol4 #select-action, #tbl-gol5 #select-action, #tbl-gol6 #select-action").eq(idx).append("<option value='pt+tk'>PT&#43;TK</option>");
		}
		$("#tbl-gol1 #select-action, #tbl-gol2 #select-action, #tbl-gol3 #select-action, " +
			"#tbl-gol4 #select-action, #tbl-gol5 #select-action, #tbl-gol6 #select-action").eq(idx).val(selectMapVal[idx]);
	}
	
	//table header section
	$("#tbl-gol1 thead, #tbl-gol2 thead, #tbl-gol3 thead").append(				
		"<tr>"+
			"<th width='300'>NAME &amp; AGE</th>"+
			"<th width='40'>DECISION INDEX</th>"+
			"<th width='50'>ACTION</th>"+				
			"<th width='90'>WORKING YEAR</th>"+				
			"<th width='70'>LAST YEAR IHK</th>"+						
			"<th width='70'>THIS YEAR IHK</th>"+			
			"<th></th>"+
		"</tr>");
	$("#tbl-gol4 thead, #tbl-gol5 thead, #tbl-gol6 thead").append(				
		"<tr>"+
			"<th width='30'>NO</th>"+
			"<th width='50'>WORKING YEAR</th>"+
			"<th width='70'>ID</th>"+				
			"<th width='300'>NAME</th>"+				
			"<th width='50'>AGE</th>"+						
			"<th width='50'>ACTION</th>"+						
			"<th width='50'>DECISION INDEX</th>"+						
			"<th width='50'>VALUE INCREASE</th>"+						
			"<th width='50'>ADDITIONAL COST</th>"+						
			"<th width='50'>WORKING YEAR</th>"+						
			"<th width='50'>MASTERPIECE</th>"+						
			"<th width='50'>ACTION EFFECTIVITY</th>"+
		"</tr>");
	
	//centering every button in the table
	$("td:has(button)").css("padding","0px").css("text-align","center");
	
	//modal popup show
	$("#btn-manage").click(function(){
		$("#mdl-manage").modal("show");
	});
	$("#mdl-manage .modal-footer button#btn-add").click(function(){
		$("#mdl-recruit").modal("show");
	});
});