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
  $('#slider1').slider({
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

function changeFontFamily(fontFamily,accesskey) {
  var letter_neirong = document.getElementById('letter_neirong')
  objchangefont(letter_neirong,accesskey,function () {console.log(accesskey)});
}
/** 信件调色板 */

