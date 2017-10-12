$(function() {

var otop	= $('#box1').offset().top;
var top		= $('#box1').offset().top; //初期値を取得
var oleft	= $('#box1').offset().left;
var left	= $('#box1').offset().left;
$(window).scroll(function() {
var value = $(this).scrollTop(); //スクロールの値を取得
$('#scrollValue').text(value);
$('#box1').css('top', top + value / 2);
$('#box2').css('top', top + value / 4);
$('#box3').css('top', top + value / 6);
$('#box4').css('top', top + value / 8);
});
});

