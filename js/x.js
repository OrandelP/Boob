$(document).scroll(function () {
  var y = $(this).scrollTop();
  if (y > 400) {
      $('.bottomMenu').fadeIn(1000);
  } else {
      $('.bottomMenu').fadeOut();
  }
});

$(document).scroll(function () {
  var y = $(this).scrollTop();
if (y > 900) {
  $('.bottomMenu2').fadeIn(1000);
} else {
  $('.bottomMenu2').fadeOut();
}
});

$(document).scroll(function () {
  var y = $(this).scrollTop();
if (y > 1480) {
  $('.bottomMenu3').fadeIn(1000);
} else {
  $('.bottomMenu3').fadeOut();
}
});

$(document).scroll(function () {
  var y = $(this).scrollTop();
if (y > 1900) {
  $('.bottomMenu4').fadeIn(1000);
} else {
  $('.bottomMenu4').fadeOut();
}
});

$(document).scroll(function () {
  var y = $(this).scrollTop();
if (y > 2000) {
  $('.end').fadeIn();
} else {
  $('.end').fadeOut();
}
});

 