$(document).ready(function(){
    $(".loupe").click(function(){ 
        let valeur = $(this).attr('value');
        
        if(valeur !== ""){ 
            $.ajax({
                url: "../../public/util/processProdFront.php",
                method: "get",
                data: {
                    query1: valeur,
                },
                success: function (response) {
                    $(".modalBt").html(response);
                    console.log(valeur);
                  },
            })
        }
    })
});