$(function() {
$(window).scroll(function() {
var value = $(this).scrollTop(); //スクロールの値を取得
$('#scrollValue').text(value);
});
});