$(document).ready(function(){
    $("#search_text").keyup(function(){
        var search = $(this).val();
        $.ajax({
            url:'../../public/util/processCath.php',
            method:'get',
            data:{query:search},
            success:function(response){
              console.log("response: " + response);

                $("#table_data").html(response);
            },
            error:function(response){
                alert(response);
                console.log('reponse:'+ response);
            }
        });
    });
});