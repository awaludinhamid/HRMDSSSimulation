$(document).ready(function(){
  //navigation bar
  $(window).bind("load",function() {
          $("#select-user").addClass("active");			
  });

  //tabel user list section
  $("#user-list-body").load("tbluser/view");

  //table header section
  $("table thead").append(				
          "<tr>"+
                  "<th>USERNAME</th>"+
                  "<th>PASSWORD</th>"+
                  "<th>SESSION</th>"+
                  "<th>ACTION</th>"+
          "</tr>");

  //<select> column section	
  $("#session").load("tblsession/showlist");

  //centering every button in the table
  $("td:has(button)").css("padding","0px").css("text-align","center").css("margin","0px");
  $("#tbl-user-input button").click(function() {
    $.post("tbluser/save",{name: $("#input-username").val(),password: $("#input-password").val(),session: $("#session select").val(),desc: ""},function(data,status) {
      $("#user-list-body").load("tbluser/view");
      $("#input-username").val("");
      $("#input-password").val("");
      $("#session select").val(2);
    }).fail(function(d) {
      if(d.status == 500)
          showInfo("error","Duplicate name found");
        else
          showInfo("error","Error load page");
      });
  });

  //button click function
  $("#tbl-user-list tbody").on("click", "button", function() {
    $.post("tbluser/delete",{id: $(this).parents("tr").find("td").eq(0).text()},function(data,status) {
      $("#user-list-body").load("tbluser/view");
    });
  });
});