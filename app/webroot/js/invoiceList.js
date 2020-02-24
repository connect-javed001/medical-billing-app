/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
   loadInfo();
    $("#date").datepicker({ dateFormat: 'yy-mm-dd' });
//    $(document).on('change','#date',function(){
//            var table = $(".medList").DataTable();
//                table.destroy();
//                    loadInfo();
//                });
        });

function loadingImage(){
       return image = '<div class="col-md-12 col-xs-12"><img src="'+httppath+'img/load_image.gif"/>';
}

function loadInfo(){
    var date =$("#date").val();
            $.ajax({
                url: httppath+"states/invoiceData",
                type: "post",
                async:false,
                data:{date:date},
                afterSend: function() {
                },
                beforeSend: function() {
                },
                success: function (response) {
                    $(".medList tbody").html(response);
                     $('.medList').DataTable({"bRetrieve": true});
                ;},
                error: function(jqXHR, textStatus, errorThrown) {
                }
            });
}



  
