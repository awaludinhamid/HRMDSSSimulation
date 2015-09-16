$(document).ready(function() {
  //navigation bar
  $(window).bind("load",function() {
          $("#select-game").addClass("active");	
  });

  //tabel session section
  $("#tbl-session").load("tblsession/show");

  //tabel recruit section
  $("#tbl-recruit").load("tblsetuprecruit/show");

  //tabel golongan 1 section
  $("#tbl-gol1").load("tblsetupemployee/show",{golongan: 1});

  //tabel golongan 2 section
  $("#tbl-gol2").load("tblsetupemployee/show",{golongan: 2});

  //tabel golongan 3 section
  $("#tbl-gol3").load("tblsetupemployee/show",{golongan: 3});

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

  //button click function
  $("#btn-create").click(function() {
    $("#loader").show("slow");
    $.post("tblsession/save",{name: $("#input-session").val(), status: "Unplay", desc: ""},function(){
      $("#tbl-session").load("tblsession/show");
      $("#loader").hide("slow");
    }).fail(function(d) {
    if(d.status == 500)
        showInfo("error","Duplicate name found");
      else
        showInfo("error","Error load page");
      $("#loader").hide("slow");
    });            
  });
  $("#tbl-session").on("click", "button", function() {
    $("#loader").show("slow");
    var thisId = $(this).parents("tr").attr("id");
    $.post("tblsession/delete",{id: thisId}, function() {
      $("#tbl-session").load("tblsession/show");
      $("#loader").hide("slow");
    }).fail(function(d) {
      $("#loader").hide("slow");
    });
  });
  $("#btn-add").click(function(){
          $("#mdl-add #lamakerja").load("tbllamakerja/show",{name: "F"});
          $("#mdl-add").modal("show");
  });
  $("#btn-process").click(function(){
    $("#loader").show("slow");
    $.post("tblsetuprecruit/process",{},function() {
      $("#loader").hide("slow");      
    }).fail(function(d) {
      $("#loader").hide("slow");
    });
  });
});