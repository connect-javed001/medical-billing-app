$(document).ready(function(){
   $('.timeList').DataTable();
});

function loadingImage(){
       return image = '<div class="col-md-12 col-xs-12"><img src="'+httppath+'img/load_image.gif"/>';
}

$(document).on('click','.sinfo',function(){
   var tymid = $(this).attr('tymId');
    $.ajax({
        url: httppath+"/rj10/timeInfo/"+tymid+"",
        type: "post",
        async:false,
        data:{},
        afterSend: function() {
            
        },
        beforeSend: function() {
        },
        
        success: function (response) {
            $('#alertModel').modal('show');
            $("#alertModel").find(".modal-body").html(response);
        ;},
        error: function(jqXHR, textStatus, errorThrown) {
        }
    });
});


  
