<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />
  

  

	 
		

</head>
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "أقرا المزيد";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "أقرا اقل";
    moreText.style.display = "inline";
  }
}

function myFunction2() {
  var dot2 = document.getElementById("dot2");
  var moreText = document.getElementById("more2");
  var btnText = document.getElementById("myBtn2");

  if (dot2.style.display === "none") {
    dot2.style.display = "inline";
    btnText.innerHTML = "أقرا المزيد";
    moreText.style.display = "none";
  } else {
    dot2.style.display = "none";
    btnText.innerHTML = "أقرا اقل";
    moreText.style.display = "inline";
  }
}

function myFunction3() {
  var dot3 = document.getElementById("dot3");
  var moreText = document.getElementById("more3");
  var btnText = document.getElementById("myBtn3");

  if (dot3.style.display === "none") {
    dot3.style.display = "inline";
    btnText.innerHTML = "أقرا المزيد";
    moreText.style.display = "none";
  } else {
    dot3.style.display = "none";
    btnText.innerHTML = "أقرا اقل";
    moreText.style.display = "inline";
  }
}

function myFunction4() {
  var dot4 = document.getElementById("dot4");
  var moreText = document.getElementById("more4");
  var btnText = document.getElementById("myBtn4");

  if (dot4.style.display === "none") {
    dot4.style.display = "inline";
    btnText.innerHTML = "أقرا المزيد";
    moreText.style.display = "none";
  } else {
    dot4.style.display = "none";
    btnText.innerHTML = "أقرا اقل";
    moreText.style.display = "inline";
  }


}
</script>