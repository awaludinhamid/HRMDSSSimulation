$(document).ready(function() {
  $("div#loader").show(1).delay(2500).hide(1);
  //navigation bar
  $(window).bind("load",function() {
    $("#select-home").addClass("active");			
  });

  //toggle between tab menu
  $("#li-score").click(function() {
          $("#div-empl-db").hide();
          $("#div-score").show();
          $("#li-empl-db").removeClass("active");
          $("#li-score").addClass("active");
  });
  $("#li-empl-db").click(function() {
          $("#div-empl-db").show();
          $("#div-score").hide();
          $("#li-empl-db").addClass("active");
          $("#li-score").removeClass("active");
  });

  var htmlBtnEdit = "<button class='btn btn-success btn-sm'>Edit&nbsp;<span class='glyphicon glyphicon-pencil'></span></button>";

  //tabel golongan 1 section
  $("#tbl-gol1").load("tblemployee/show",{flagEmpl: "N",userName: localStorage["username"],gol: 1});

  //tabel golongan 2 section
  $("#tbl-gol2").load("tblemployee/show",{flagEmpl: "N",userName: localStorage["username"],gol: 2});

  //tabel golongan 3 section
  $("#tbl-gol3").load("tblemployee/show",{flagEmpl: "N",userName: localStorage["username"],gol: 3});

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

  //table header section

  //centering every button in the table
  $("td:has(button)").css("padding","0px").css("text-align","center");
});