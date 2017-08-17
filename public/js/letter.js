$(function() {
  $('#slider').slider({
    range: 'min',
    min: 14,
    max: 45,
    values: 1,
    slide: function(event, ui) {
        $("#amount").val(ui.value);
        $("#letter_container").css('fontSize',ui.value);
    }
  })
  $("#amount").val($('#slider').slider('value'))
})

