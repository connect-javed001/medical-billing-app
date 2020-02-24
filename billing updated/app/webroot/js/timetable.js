 var daysClone= [];
$(document).ready(function(){
  makeDivCopy();  
  setTimePicker();
});

$(document).on('click','.cpyLink',function(){
      var parentDiv = $(this).attr('parentDiv');
      $("."+parentDiv+"Div").append("<div class='col-md-12 nopadding copyDiv mt5'>"+daysClone[parentDiv]+"</div>");
      setTimePicker();
});
$(document).on('click','.removeLink',function(){
      var parentDiv = $(this).attr('parentDiv');
      $(this).parent().parent().remove();
});
function makeDivCopy(){
    $(".copyDiv").each(function(){
         var div= $(this);
         var divId = div.attr('id');
         daysClone[divId] = div.html();
    });
}
function setTimePicker(){
    $(".copyDiv").each(function(){
        var div= $(this);
        var from = div.find('.from');
        var to = div.find('.to');
            from.timepicker({
            'timeFormat': 'H:i',
             showSecond:false,
             ampm: false,
             'step': 30 , 
            'minTime': '7:00',
           'maxTime': '23:00'});
            to.timepicker({
                'timeFormat': 'H:i',
                 'minTime': '7:00',
                 'maxTime': '23:00',
                'step': function(i) {
                   return (i%2) ? 30 : 30;
                   }
               });
    });
}

function getCartCount(){
     $.ajax({
        url: httppath+"cartCount",
        type: "post",
        success: function (response) {
            if(response!='0'){
                $("#cart_status").html(response);
                $("#cart_status").show();
            }else{
                $("#cart_status").hide();
            }
;        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
}
function loadUserInfo(){
     $.ajax({
        url: httppath+"loadHeader",
        type: "post",
        success: function (response) {
                $(".userDiv").html(response);
;        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
}
function loadingImage(){
       return image = '<div class="col-md-12 col-xs-12"><img src="'+httppath+'img/load_image.gif"/>';
}



  
