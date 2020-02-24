$(document).ready(function(){
    medList();
    $('.date').datepicker({
         changeMonth: true,
        changeYear: true,
        showButtonPanel: false,
        dateFormat: 'yy-mm-dd',
    });  
    
$("#InvoiceMakeInvoiceForm").submit(function(){
     if($("#notIn").val()=='' || $("#notIn").val()<=0){
         $("#alertModel .modal-body").html('<div class="alert alert-warning">Please add items in table....</div>');
        $('#alertModel').modal('show');
        return false;
    }
       
});
});
function medList(){
    $(".medLists").select2({
    minimumInputLength: 2,
    quietMillis: 50,
    ajax: {
        url: httppath+"states/loadMedList",
        dataType: 'json',
        type: "POST",
        data: function (term) {
            return {
                  term: term.term,
                notIn:$("#notIn").val()
            };
        },
        processResults: function (data) {
                   return {
                         results: $.map(data, function (item) {
                            return {
                                        text: item.text, id: item.id
                            }
                })
                };
        }
    }
});
}

$(document).on('change','.medLists',function(){
    var medId= $(this).val();
       if(medId!='' || medId>0){
        $.ajax({
        url: httppath+"states/loaditemData",
        type: "post",
        dataType:'html',
        data: {'id':medId} ,
        beforeSend:function(){},
        success: function (response) {
            $(".invoiceItems tbody").find('.noItem').remove();
            $(".invoiceItems tbody").append(response);
            notIn(medId);
            calTotal();
           }
      });
       }
});
$(document).on('click','.remove',function(){
    var divId = $(this).attr('divId');
    $("#divId"+divId+"").remove();
    removeNotIn(divId);
    calTotal();
    if($("#notIn").val()=='' || $("#notIn").val()<=0){
        $(".invoiceItems tbody").html('<tr class="text-center noItem"><td colspan="5">No Items added</td></tr>');
        $(".totalPrice").val('');
    }
});
function notIn(id){
    if($("#notIn").val()!=''){
        $("#notIn").val($("#notIn").val()+','+id);
    }else{
        $("#notIn").val(id);
    }
}
function removeNotIn(divId){
    if($('#notIn').val()!=''){
        var newNotIn = new Array();
        var res = $('#notIn').val().split(","); 
        $.each(res,function(key,val) {
             if(divId!=val){
                 newNotIn.push(val);
             }
        });
      $('#notIn').val(newNotIn);
    }
}
function calTotal(){
    if($('#notIn').val()!=''){
        var total_price =0;
        $('.invoiceItems tbody > tr').each(function() {
            var qty= $(this).find('.quantity').val();
            var p_price= $(this).find('.piece_price').val();
            total_price += qty*p_price;
        });
      $(".totalPrice").val(total_price);
       rearrange();
    }
    
}
function rearrange(){
    if($('#notIn').val()!=''){
        var count =1;
        $('.invoiceItems tbody > tr').each(function() {
           $(this).find("td:first").html(count);
           count++;
        });
   
    }
}
$(document).on('change','.quantity',function(){
     calTotal();
});
function loadingImage(){
       return image = '<div class="col-md-12 col-xs-12"><img src="'+httppath+'img/load_image.gif"/>';
}


  
