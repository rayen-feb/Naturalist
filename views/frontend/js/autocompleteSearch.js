$(document).ready(function () {
    $("#search").keyup(function () {
      let searchText = $(this).val();
      if (searchText != "") {
        $.ajax({
          url: "../../public/util/processProdFront.php",
          method: "post",
          data: {
            query: searchText,
          },
          success: function (response) {
            $("#show-list").html(response);
            $(".list-group").css("display", "block");
          },
        });
      } else {
        $("#show-list").html("");
      }
    });
    // Set searched text in input field on click of search button
    $(document).on("click", "a", function () {
      $("#search").val($(this).text());
      $("#show-list").html("");
    });
  });