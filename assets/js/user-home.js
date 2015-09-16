$(document).ready(function() {
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
  /*var tblGol1Arr = [["2","7","B","57",htmlBtnEdit],
                                                                                                  ["1","6","C","52",htmlBtnEdit],
                                                                                                  ["3","5","D","42",htmlBtnEdit]];
  var tblGol1No = 1;
  var tblGol1Txt = "";
  for(idxOut = 0; idxOut < tblGol1Arr.length; idxOut++) {
          tblGol1Txt = "<tr>"+
                                                                  "<td>"+(tblGol1No++)+"</td>";
          for(idxIn = 0; idxIn < tblGol1Arr[idxOut].length; idxIn++) {
                  tblGol1Txt = tblGol1Txt + "<td>"+tblGol1Arr[idxOut][idxIn]+"</td>";
          }
          tblGol1Txt = tblGol1Txt + "</tr>";
          $("#tbl-gol1 tbody").append(tblGol1Txt);
  }*/
  $("#tbl-gol1").load("tblemployee/show",{flagEmpl: "N",userId: localStorage["username"],gol: 1});

  //tabel golongan 2 section
  var tblGol2Arr = [["10","1","D2","20",htmlBtnEdit],
                                                                                                  ["2","5","P","31",htmlBtnEdit],
                                                                                                  ["4","6","B","53",htmlBtnEdit],
                                                                                                  ["6","7","C","40",htmlBtnEdit],
                                                                                                  ["5","3","G","23",htmlBtnEdit],
                                                                                                  ["3","8","T","27",htmlBtnEdit]];
  var tblGol2No = 1;
  var tblGol2Txt = "";
  for(idxOut = 0; idxOut < tblGol2Arr.length; idxOut++) {
          tblGol2Txt = "<tr>"+
                                                                  "<td>"+(tblGol2No++)+"</td>";
          for(idxIn = 0; idxIn < tblGol2Arr[idxOut].length; idxIn++) {
                  tblGol2Txt = tblGol2Txt + "<td>"+tblGol2Arr[idxOut][idxIn]+"</td>";
          }
          tblGol2Txt = tblGol2Txt + "</tr>";
          $("#tbl-gol2 tbody").append(tblGol2Txt);
  }

  //tabel golongan 3 section
  var tblGol3Arr = [["10","1","D2","20",htmlBtnEdit],
                                                                                                  ["2","5","P","31",htmlBtnEdit],
                                                                                                  ["4","6","B","53",htmlBtnEdit],
                                                                                                  ["6","7","C","40",htmlBtnEdit],
                                                                                                  ["5","3","G","23",htmlBtnEdit],
                                                                                                  ["3","8","T","27",htmlBtnEdit],
                                                                                                  ["7","7","W","30",htmlBtnEdit],
                                                                                                  ["9","5","K","29",htmlBtnEdit],
                                                                                                  ["12","6","A","41",htmlBtnEdit]];
  var tblGol3No = 1;
  var tblGol3Txt = "";
  for(idxOut = 0; idxOut < tblGol3Arr.length; idxOut++) {
          tblGol3Txt = "<tr>"+
                                                                  "<td>"+(tblGol3No++)+"</td>";
          for(idxIn = 0; idxIn < tblGol3Arr[idxOut].length; idxIn++) {
                  tblGol3Txt = tblGol3Txt + "<td>"+tblGol3Arr[idxOut][idxIn]+"</td>";
          }
          tblGol3Txt = tblGol3Txt + "</tr>";
          $("#tbl-gol3 tbody").append(tblGol3Txt);
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

  //table header section
  $("#tbl-gol1 thead, #tbl-gol2 thead, #tbl-gol3 thead").append(				
          "<tr>"+
                  "<th width='50'>NO</th>"+
                  "<th width='100'>LAMA KERJA</th>"+
                  "<th width='130'>NIK</th>"+				
                  "<th width='300'>NAMA</th>"+				
                  "<th>UMUR</th>"+						
                  "<th width='50'>ACTION</th>"+
          "</tr>");

  //centering every button in the table
  $("td:has(button)").css("padding","0px").css("text-align","center");
});