
function home()
{
	window.location.href = "../index.php";	
}
function products()
{
	window.location.href = "../products.php";
}
function gallery()
{
	window.location.href = "../gallery.php";
}
function lr()
{
	window.location.href = "../custreg.php";
}
function contact()
{
	window.location.href = "feedback.php";
}
function about()
{
	window.location.href = "about.php";
}
function help()
{
	window.location.href = "help.php";
}
function admin()
{
	window.location.href = "login.php";
}


	function check()
	{
		var username = document.getElementById("tf3").value;
		var password = document.getElementById("tf4").value;
		if (username==0 && password==0)
		{
			alert("Fields Can't Be Empty.");
			return false;
		}
	}

	function validate()
	{
		var password = document.getElementById("tf1").value;
		var confirmPassword = document.getElementById("tf2").value;
		if (password != confirmPassword)
		{
			alert("Passwords not matching.");
			return false;
		}
		return true;
	}
	function toIndex()
	{
		window.location.href = "index.php";
	}



function check()
{
	var username = document.getElementById("tf3").value;
	var password = document.getElementById("tf4").value;
	if (username==0 && password==0)
	{
		alert("Fields Can't Be Empty.");
		return false;
	}
}
function validate()
{
	var password = document.getElementById("tf1").value;
	var confirmPassword = document.getElementById("tf2").value;
	if (password != confirmPassword)
	{
		alert("Passwords not matching.");
		return false;
	}
	return true;
}

function myFunction(imgs)
{
	var expandImg = document.getElementById("expandedImg");
	var imgText = document.getElementById("imgtext");
	expandImg.src = imgs.src;
	imgText.innerHTML = imgs.alt;
	expandImg.parentElement.style.display = "block";
}


var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}


function f(ino,y)
{
alert(y);
	
}
