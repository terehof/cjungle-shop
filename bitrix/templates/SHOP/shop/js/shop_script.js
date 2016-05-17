$(document).ready(function () {

  $('#shop-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    nextArrow: '#shop-arrow-right',
    prevArrow: '#shop-arrow-left',
  });

  $('#order-btn').magnificPopup({
    removalDelay: 500,
    mainClass: 'mfp-fade'
  });

  $('#order-form-btn').click(function(event) {
    $( '.order-form__row__col' ).toggleClass( "form" );
  });


  $('#order-form-send').submit(function() {
      

      $.magnificPopup.open({
        items: {
          src: '#order-complate'
        },
        type: 'inline'
      });


    return false;
  });

  $('#order-complate-close').click(function() {
    $.magnificPopup.close();
  });

});