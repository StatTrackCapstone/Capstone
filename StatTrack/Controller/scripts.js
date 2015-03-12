window.onload=function()
{

var random_images_array1 = ["BUF.jpg", "dolphins.jpg","jets.jpg","patriots.jpg","BAL.jpg"];
var random_images_array2 = ["chiefs.jpg","cowboys.jpg","ARI.jpg","giants.jpg","ATL.jpg"];

var timerSet=setInterval(function () {timer()}, 3000);

	function getRandomImage1() 
	{
		path = '../images/'; 
		var num = Math.floor(Math.random() * 5 );
		var imgStr1 = '<img src="' + path + random_images_array1[num] + '" alt = "">';

		for (num = 0; num < 5; num++)
		{	
			num++; 
		    return imgStr1;			
		}
		
	}	
	
	function getRandomImage2() 
	{
		path = '../images/'; 
		var num = Math.floor(Math.random() * 5 );
		var imgStr2 = '<img src="' + path + random_images_array2[num] + '" alt = "">';

		for (num = 0; num < 5; num++)
		{	
			num++; 
		    return imgStr2;			
		}
		
	}
	
	function timer() 
	{		
		document.getElementById("randomImage1").innerHTML=getRandomImage1();
		document.getElementById("randomImage2").innerHTML=getRandomImage2();
	}	
}