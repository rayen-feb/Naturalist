$(document).ready(function(){
				
    $(".quantitad").on('change', function(){
        var big = [];
        var p_big = {};
        var t=0;
        var $el = $(this).closest('tr');
        p_big.pid = $el.find(".pid").val();
        p_big.qty = $el.find(".quantitad").val();
        big.push(p_big);
        console.log(big);
        $.ajax({
            //url: '../../controllers/Panier et commande/panierController.php',
            url: '../../public/util/processPanier.php',   
            method: 'post',
            cache: false,
            data: {big:JSON.stringify( big )},

            success: function(response){

                console.log(response);
                
            }
        });

    });
    $('.btn-black').click(function(){
        
        location.reload(true);
    });
});