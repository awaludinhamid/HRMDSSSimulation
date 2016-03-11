$(document).ready(function() {
  $("div#loader").show(1).delay(1000).hide(1);
  //navigation bar
  $(window).bind("load",function() {
    $("#select-result").addClass("active");			
  });
	
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
});