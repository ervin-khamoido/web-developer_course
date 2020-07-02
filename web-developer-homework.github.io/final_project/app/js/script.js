$(function () {
  let orderCallBtn = $('.request-call'),
    orderVRBtn = $('.order-btn'),
    orderEquipmentBtn = $('.equipment_order'),
    overlay = $('.overlay'),
    playVideoBtn = $('.btn-play');



  orderCallBtn.on('click', function (event) {
    $('.form-box-call').toggleClass('active');
    overlay.show();
  });

  $('.close-btn-call').click(function () {
    $('.form-box-call').removeClass('active');
    overlay.hide();
  });

  orderVRBtn.on('click', function (event) {
    $('.form-box-call').toggleClass('active');
    overlay.show();
    $('.order-callback').text('Заказать vr box 2');
  });

  $('.close-btn-equipment').click(function () {
    $('.form-box-equipment').removeClass('active');
    overlay.hide();
  });

  orderEquipmentBtn.on('click', function (event) {
    $('.form-box-equipment').toggleClass('active');
    overlay.show();
  });

  $('.close-btn-equipment').click(function () {
    $('.form-box-equipment').removeClass('active');
    overlay.hide();
  });

  playVideoBtn.on('click', function (event) {
    $('.video-box').toggleClass('active');
    $("iframe").attr("src", "https://www.youtube.com/embed/xc2TsRwqjds?autoplay=1&amp;");
    overlay.show();
  });

  $('.close-btn-video').click(function () {
    $('.video-box').removeClass('active');
    overlay.hide();
    $("iframe").attr("src", "");
    // $("iframe").attr("src", "https://www.youtube.com/embed/xc2TsRwqjds");

  });
});