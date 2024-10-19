$(document).ready(function(){
    $('.product_check').click(function(){
      var action = 'data';
      var marq = get_filter_text('marq');
      var cath = get_filter_text('cath');
      $.ajax({
        url:'../../public/util/processProdFront.php',
        method:'post',
        data:{action:action, marq:marq,cath:cath},
        success:function(response){
          $('#result').html(response);
        }
      })
    })
      function get_filter_text(text_id){
        var filterData = [];
        $('#'+text_id+':checked').each(function(){
          filterData.push($(this).val());
        });
        return  filterData;
      }
  })