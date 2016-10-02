$(document).ready(function () {
//preload images
$('.hide').css({'background':'url(x.jpg)','background-size': 'cover'});
$('.hide2').css({'background':'url(SuperMan.jpg)','background-size': 'cover'});
});

$(window).load(function () {
setTimeout(function () {
$('.lol').css({'background':'url(x.jpg)','background-size': 'cover'});
var images = ['SuperMan.jpg','x.jpg'];
var i =0;
var d= 1;
var e = 0.7;
setInterval(function () {
$('.lol').css({'background':'url('+images[i]+')','background-size': 'cover'});
if (i !== 1) {
    i++;
} else {
  i = 0;
}
},5000);
},1000);
});
