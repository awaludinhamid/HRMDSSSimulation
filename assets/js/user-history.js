$(document).ready(function() {
  
  var resultPerPage = 15, //max record view per page
      pagePerLoad = 10, //max page view on loading
      currPageNo = 1, //page no of table to show on paging
      currMaxPage; //maximum page of current data
  
  //navigation bar
  $(window).bind("load",function() {
    $("#select-history").addClass("active");			
  });
  
  //generate data
  generateData();

  // Click on page number
  $("div#pagination ul").on("click", "li", function() {
    var thisId = this.id;
    //avoid execution on current page, disable page
    //page no must be less or equal then maximum page allowed
    //reload data on clicked
    if(!$("div#pagination ul li#"+thisId).hasClass("active") && !$("div#pagination ul li#"+thisId).hasClass("disabled") && currPageNo <= currMaxPage) {
      if(thisId === "firstPage")
        currPageNo = 1;
      else if(thisId === "nextPage")
        currPageNo += 1;
      else if(thisId === "prevPage")
        currPageNo -= 1;
      else if(thisId === "lastPage")
        currPageNo = currMaxPage;
      else
        currPageNo = parseInt(thisId.replace("page",""));
      generateData();
    }
  });
  
  //Generate data
  function generateData() {
    $("div#loader").show();
    $.get("tblemployee/countall",function(dataLength) {
      $.post("tblemployee/showpaging",{limit: resultPerPage, offset: (currPageNo-1)*resultPerPage},function(data) {
        $("div>table>tbody>tr").remove();
        for(var idx in data) {
          $("div>table>tbody").append(
            "<tr>"+
              "<td>"+data[idx].id+"</td>"+
              "<td>"+data[idx].name+"</td>"+
              "<td>"+data[idx].nik+"</td>"+
              "<td>"+data[idx].user_id+"</td>"+
              "<td>"+data[idx].lama_kerja+"</td>"+
              "<td>"+data[idx].umur+"</td>"+
              "<td>"+data[idx].golongan+"</td>"+
              "<td>"+data[idx].flag_empl+"</td>"+
              "<td>"+data[idx].description+"</td>"+
              "<td>"+data[idx].created_by+"</td>"+
              "<td>"+data[idx].created_date+"</td>"+
              "<td>"+data[idx].updated_by+"</td>"+
              "<td>"+data[idx].updated_date+"</td>"+
            "</tr>"
          );
        }
        setPagination(dataLength);
        switchPageStatus();
        $("div#loader").hide();
      });
    });
  }
  
  //Set paging
  function setPagination(dataLength) {
    //recreated paging list
    $("div#pagination ul li").remove();
    if(dataLength === 0) return false;
    $("div#pagination ul").append(
      "<li id='firstPage' title='First'><a href='#' aria-label='First'><span aria-hidden='true'>&laquo;</span></a></li>"+
      "<li id='prevPage' title='Previous'><a href='#' aria-label='Previous'><span aria-hidden='true'>&lt;</span></a></li>"
    );
    currMaxPage = Math.floor(dataLength/resultPerPage) + (dataLength%resultPerPage === 0 ? 0 : 1);
    var startPageNo = Math.floor(currPageNo/pagePerLoad) * pagePerLoad + (currPageNo%pagePerLoad === 0 ? 0 : 1); //start page no of serial page on page selected
    var endPageNo = currMaxPage < (startPageNo + pagePerLoad) ? currMaxPage : (startPageNo + pagePerLoad -1); //end page no of serial page on page selected
    for(var idx = startPageNo; idx <= endPageNo; idx++) {
      $("div#pagination ul").append(
        "<li id='page"+idx+"'"+(idx === currPageNo ? " class='active' " : "")+"><a href='#'>"+idx+"</a></li>"
      );
    }
    $("div#pagination ul").append(
      "<li id='nextPage' title='Next'><a href='#' aria-label='Next'><span aria-hidden='true'>&gt;</span></a></li>"+
      "<li id='lastPage' title='Last'><a href='#' aria-label='Last'><span aria-hidden='true'>&raquo;</span></a></li>"
    );
  }

  // Switch page status
  function switchPageStatus() {
    if(currPageNo === 1)
      $("div#pagination li#firstPage").addClass("disabled");
    else
      $("div#pagination li#firstPage").removeClass("disabled");
    if(currPageNo > 1)
      $("div#pagination li#prevPage").removeClass("disabled");
    else
      $("div#pagination li#prevPage").addClass("disabled");
    if(currPageNo < currMaxPage)
      $("div#pagination li#nextPage").removeClass("disabled");
    else
      $("div#pagination li#nextPage").addClass("disabled");
    if(currPageNo === currMaxPage)
      $("div#pagination li#lastPage").addClass("disabled");
    else
      $("div#pagination li#lastPage").removeClass("disabled");
  }
});