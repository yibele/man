/** 字体大小控制组件 */
$(function() {
  $('#slider').slider({
    range: 'min',
    min: 24,
    max: 45,
    values: 1,
    slide: function(event, ui) {
        $("#amount").val(ui.value);
        $("#letter_container").css('fontSize',ui.value);
    }
  })
  $("#amount").val($('#slider').slider('value'))
  $('#letter_container').css('fontSize',$('#slider').slider('value'))
})

$(function() {

  $('.fonts').slidesjs({
    width : 940,
    height : 189,
    navigation:{
      active:false,
      effect : 'slide'
    },
    pagination : {
      active : false,
    }
  });


  /** 字体大小滑动 */
  $('#slider').slider({
    range: 'min',
    min: 24,
    max: 45,
    values: 1,
    slide: function(event, ui) {
        $("#amount").val(ui.value);
        $("#letter_container").css('fontSize',ui.value);
    }
  })
  $("#amount").val($('#slider').slider('value'))
  $('#letter_container').css('fontSize',$('#slider').slider('value'))
})

function changeFontFamily(event,fontFamily,accesskey,lineHeight) {
  var obj = event.srcElement.parentNode;
  obj = $(obj);
  obj.addClass('active');
  var siblings = obj.siblings();
  siblings.removeClass('active');
  objchangefont(letter_neirong,accesskey);
  letter_neirong.style.lineHeight = lineHeight;
  return false;
}
/** 信件调色板 */

