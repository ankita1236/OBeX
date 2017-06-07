<SCRIPT LANGUAGE="JavaScript"> 

<!-- Hide script
//This starts the script then hides it from lesser browsers.

cookie_name = "Counter_Cookie";
//The cookie name is set as Counter_Cookie. If you're going to put this onto other pages to count them, change this with a new name.

function doCookie() {
if(document.cookie) 
{index = document.cookie.indexOf(cookie_name);} 
//Is there a cookie named Counter_Cookie? If so, use that.

else 
{index = -1;}
//If there isn't, set the index to minus one (-1).

var expires = "Saturday, 20-May-2017 05:00:00 GMT"
//A variable is set up to represent the expires date.

if (index == -1) 
{document.cookie=cookie_name+"=1; expires=" + expires;} 
//If the index was set to minus one, then set the cookie with the name Counter_Cookie, a number 1, then the expires date.

else 
{
countbegin = (document.cookie.indexOf("=", index) + 1);
countend = document.cookie.indexOf(";", index);
if (countend == -1) {
countend = document.cookie.length;
}
count = eval(document.cookie.substring(countbegin, countend)) + 1;

document.cookie=cookie_name+"="+count+"; expires=" + expires;
}
}
//If not, then take the number in the cookie already and add one. Then rewrite the cookie with the new number.


function gettimes() {
//This starts the second function that gets the value in the cookie and assigns it to a variable name.

if(document.cookie) 
{
index = document.cookie.indexOf(cookie_name);
if (index != -1) {
countbegin = (document.cookie.indexOf("=", index) + 1);
countend = document.cookie.indexOf(";", index);
//Grab the second piece of information in the cookie, the number (see the +1?).

if (countend == -1) {
countend = document.cookie.length;
}
count = document.cookie.substring(countbegin, countend);
if (count == 1) {
return (count+" time");
} else {
return (count+" times");
//If the count is one, then return the singular "time." If the count is more, return the plural "times."

}
}
}
return ("0 times");
//If the number is 0, then return "0 times."

}

// done hiding script --> 

</SCRIPT>












<div class="container-fluid">

<style>
.mySlides{display:none;}
.fl{float:left;}
.fr{float:right;}
.clr{clear:both;}
.slidesection{width:60%; margin-bottom:10px;}
.info{/*background:#CF3;*/ width:65%; height:400px; margin-bottom:10px; font-size:18px; color:#006; font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif }
</style>

<h2 class="slider"></h2>

<div class="slidesection fl" style="max-width:50%">
  <img class="mySlides" src="images/slide1.png"  style="width:60%">
  <img class="mySlides" src="images/slide2.png"  style="width:60%">
  <img class="mySlides" src="images/slide3.png"  style="width:60%">
</div><br>

<div class="info fr" style="max-width:50%">
We intends to bridge the gap between juniors and seniors.
After the end of every semester , it's very common to go hither-tither 
in search of books for the upcoming semester.<br><br>
OBeX intends to change this situation.
<br><br>This platform can be used by seniors
to upload the books they intend to give and the student can browse through the available books 
and contact the person for the same.This is like your own Book exchange system! And We sincerely 
hope this seems useful to you. <br><br><br><br><br><hr>  



<body onLoad="doCookie()">


<center>
<SCRIPT LANGUAGE="javascript">
document.write("<b>You have been to my site "+gettimes()+" before.</b>");
</SCRIPT>
<hr>

</div>

<div class = "clr"></div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 4000); // Change image every 4 seconds
}
</script>
</div>









	
	
	
	
	
	
<!---------footer----------->	
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 btn-primary">
          <h5 style="text-align: center">Contact Us</h5>
	<p style="text-align: center">Copyright @ OBeX</p>
    <h5 style="text-align: center">Drop Your Queries At-obex.igdtuw@gmail.com </h5>
    <h5 style="text-align: center">Developers-Aishwarya , Ankita , Richa </h5>
    </div>
</div>