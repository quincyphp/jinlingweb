
jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});

var imgshow_li = document.getElementById("imgshow").getElementsByTagName("li");
var change_li = document.getElementById("change").getElementsByTagName("li");
function changeimg(num,stoprun){
	for(var i=0;i<imgshow_li.length;i++){
		imgshow_li.item(i).style.display = "none";
		change_li.item(i).style.background = "#22e58c";
	}
	if(stoprun){
		window.clearInterval(T);
	}
	imgshow_li.item(num).style.display = "block";
	change_li.item(num).style.background = "blue";
}
var number = 0;
function timeshowimg(){
	if(number == imgshow_li.length){
		number = 0;
	}
	changeimg(number);
	number ++;
}
var T;
function runshowimg(num){
	number = 0;
	if(num){
		number = num;
	}
	T = window.setInterval("timeshowimg()",2000);
}
window.onload = runshowimg();
changeimg();
