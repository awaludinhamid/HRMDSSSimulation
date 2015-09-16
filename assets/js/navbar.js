$(document).ready(function(){
        $("#btn-user").click(function(){
                $("#mdl-user").modal("show");
        });
        $("#btn-user a").html(localStorage["usernameHtml"]);
        $("#nav-sidebar li").detach();
        if(localStorage["username"] == "admin") {
                $("#nav-sidebar").append(					
                                "<li id='select-home'><a href='adminhome'>Home</a></li>"+
                                "<li id='select-game'><a href='admingame'>Game Setup</a></li>"+
                                "<li id='select-user'><a href='adminuser'>User Management</a></li>"+
                                "<li id='select-report'><a href='adminreport'>Report</a></li>"
                );
                $("#div-company").hide();
        } else {
                $("#nav-sidebar").append(					
                                "<li id='select-home'><a href='userhome'>Home</a></li>"+
                                "<li id='select-play'><a href='userplay'>Play&nbsp;<span class='glyphicon glyphicon-play'></span></a></li>"+
                                "<li id='select-result'><a href='userresult'>Result</a></li>"+
                                "<li id='select-history'><a href='userhistory'>History</a></li>"
                );
                $("#mdl-user #myModalLabel").text("Change Password/Company");
                $("#mdl-user .modal-body").append("<br/><br/><input id='input-company' type='text' placeholder='Company Name' size='30'/>");
                $("#div-company").show();
        }
        $("#span-pt").text("PT. "+localStorage["username"]);
        $("#mdl-user .modal-footer button#btn-save").click(function(){				
                if(localStorage["username"] == "admin") {
                } else {
                $("#span-pt").text($("#input-company").val());
                }
        });
        $("#btn-logout").click(function() {
          $.get("navbar/logout");
        });
});
function showInfo(type,content) {
  var title = "<span class='label label-info'>Info&nbsp;&nbsp;<span class='glyphicon glyphicon-info-sign'></span></span>";
  if(type == "warning") {
    title = "<span class='label label-warning'>Warning&nbsp;&nbsp;<span class='glyphicon glyphicon-exclamation-sign'></span>";
  } else if(type == "error") {
    title = "<span class='label label-danger'>Error&nbsp;&nbsp;<span class='glyphicon glyphicon-ban-circle'></span></span>";
  }
  $("#mdl-info #title").html(title);
  $("#mdl-info #content").text(content);
  $("#mdl-info").modal("show");
}