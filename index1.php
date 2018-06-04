<?php
date_default_timezone_set('Asia/Kolkata');

include 'ink.php';
include 'dbp.ink.php';

?>





<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>title of the doc</title>
</head>
<style>

body{
	background-image: url("flower.jpg");
	background-size: 100% 100%;
    background-repeat: no-repeat;
	}


.comment-box{width:900px;
padding:10px;
margin-bottom: 4px;
background-color:pink;
border-radius:40px;
}

.comment-box p{
font-family:Helvetica;
font-style: italic;
font-size:14px;
line-height:16px;
color:#282828;
font-weight: bolder;
}


textarea{
width: 900px;
height:60px;
background-color:#fff;
resize:none;
align:400px;
}

button{
width:100px;
height:30px;
background-color:darkblue;
border:none;
color:white;
font-family:arial;
font-weight: 400;
cursor:pointer;
margin-bottom:60px;}
button:hover{
				background-color:blue;
				box-shadow: 0px 1px 1px #666;
			}
button:active{ background-color:blue; }

#nav{
	width: 40%;
	display: inline-block;
	text-align: right;
	float: right;
}
	#nav ul{
		position:absolute;
		top:calc(15% - 75px);
		right:calc(10% - 50px);
		}

			#nav ul li{
			display: inline-block;
			height: 62px;
		}
			#nav ul li a{
				padding: 10px;
				background: darkblue;
				color: white;
			}
			#nav ul li a:hover{
				background-color:blue;
				box-shadow: 0px 1px 1px #666;
			}
			#nav ul li a:active{ background-color:blue; }
#main-footer{
	width: 98.4%;
	background: darkblue;
	opacity: 0.8;
	color: white;
	padding: 10px;
}
.footer{
		float: left;
		text-align: center;
		width: 33.3%;
		padding: 10px;
		border-right: 1px solid white;
		box-sizing: border-box;
		position:relative;
}

#main-footer #abc{
	border: none;
}

#main-footer .copyright{
	text-align:right;
	padding-top: 0px;
	font-size: 10px;}
p,{ line-height: 0.5em; }
</style>
<body>

<img src="https://fontmeme.com/permalink/171118/162b1aeebb78ba546b4cbf2b0ee73680.png" alt="calligraphy-fonts" border="0"></a>
<h2 id="c">Our clients speak their heart out.<br /><br /><br />You Too Can Say What You Feel About US<h2>			

<div id="nav" >
<ul>
				<li><a href="sempro.html"><img src="https://fontmeme.com/permalink/171118/2fa28d71cb9906557f3df340790e65f7.png" alt="calligraphy-fonts" border="0"></a></li>
				<li><a href="about.html"><img src="https://fontmeme.com/permalink/171118/b63d6318e5180017dfd30c6686f21e49.png" alt="calligraphy-fonts" border="0"></a></li>
				<li><a href="contactus.html"><img src="https://fontmeme.com/permalink/171118/883ece59aa5d01529a592042f7c5223a.png" alt="calligraphy-fonts" border="0"></a></li>
				<li><a href="services.html"><img src="https://fontmeme.com/permalink/171118/5478a1378d90868a4e5d667894e97651.png" alt="calligraphy-fonts" border="0"></a></li>
				<li><a href="gallery.html"><img src="https://fontmeme.com/permalink/171118/1c74313ee24f97e2eaa3b3413be53e52.png" alt="calligraphy-fonts" border="0"></a></li>
				<li><a href="mapus.html"><img src="https://fontmeme.com/permalink/171118/d04af29d5a92492ed0828e08db95d71c.png" alt="calligraphy-fonts" border="0"></a></li>
				<li><a href="index1.php"><img src="https://fontmeme.com/permalink/171118/49d921bbbd405be912289e74656e16ce.png" alt="calligraphy-fonts" border="0"></a></li>
				
			</ul>	
		</div>















<?php

echo "<form class='form' method='POST' action='".setComment($conn)."'>
<input type='hidden' name='uid'  value=' Anonymous'>
<input type='hidden' name='date'  value=' ".date('Y-m-d H:i:s')." '>
<textarea name='message'></textarea><br /><br />
<button  type='submit' name='commentSubmit'> Comment</button>

</form>";
echo"</p></div> ";
getComments($conn);
?>



</body>
<footer id="main-footer">
		<div class="copyright">
			<center><p>Copyright & Copy Wedniksha</p></center>
		</div>
	</footer>





</html>
