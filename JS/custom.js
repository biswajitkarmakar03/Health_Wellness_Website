jQuery(function($) {'use strict';
	AOS.init();
});

function activeMenu(menuid)
{
	i=1;
	while(i<6)
	{
		$(".navbar .menu"+i).removeClass("active");
		i++;
	} 
	let length = menuid.length;
	if(length==3)
	{
		const myMenu = menuid.split("-");
		var mainMenu = myMenu[0];
		$(".navbar .menu"+mainMenu).addClass("active");
		$(".navbar .menu"+menuid).addClass("active");
	}
	else
	{
		$(".navbar .menu"+menuid).addClass("active");
	}
}


$(document).scroll(function(e){
	var scrollTop = $(document).scrollTop();
	if(scrollTop > 200)
	{
		$('.navbar').addClass('fixed-top-own');
		$('.navbar .navbar-brand img').removeClass('w-auto');
		$('.navbar .navbar-brand img').addClass('w-50');
	} 
	else 
	{
		$('.navbar').removeClass('fixed-top-own');
		$('.navbar .navbar-brand img').removeClass('w-50');
		$('.navbar .navbar-brand img').addClass('w-auto');
	}
});

