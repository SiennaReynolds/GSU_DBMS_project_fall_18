<html>
	<head>
	<style type= "text/css">
body{
	background:#D5DED9;
	box-shadow: 0 2px 3px rgba(0,0,0,.1), 0 4px 8px rgba(0,0,0,.3);
	border:3px solid white;
	border-radius:5px;
	margin:15px;
	color:#3f4446;
	text-align:center;
	text-decoration:none;
	text-transform:uppercase;
	font-family:open sans;
	font-size:30px;
}
.x{
	background: #465968;
    width: 97.2%;
    height: 94.5%;
    opacity: .7;
    border-radius: 5px;
    position: fixed;
    left: 18px;
    top: 18px;
    z-index: -1;
}
.articlebox{
	width: 20%;
    height: 45%;
	margin:5px;
	/*background:white;
	box-shadow: 0 2px 3px rgba(0,0,0,.1), 0 4px 8px rgba(0,0,0,.3);*/
	word-break: break-word;
    overflow: auto;
}
.restart{
	position: absolute;
    bottom: 5%;
    left: 50%;
    font-size: 30px;
    border: 3px solid white;
	color:white;
    padding: 5px;
    border-radius: 100%;
	background:#E3CC86;
	transition: all 0.5s ease-out;
	box-shadow: 0 2px 3px rgba(0,0,0,.1), 0 4px 8px rgba(0,0,0,.3);
}
.restart:hover{
	background:#AE9D78;
	box-shadow: 0 2px 3px rgba(0,0,0,.1), 0 14px 8px rgba(0,0,0,.3);
}
.innertext{
	font-size:20px;
}
.innertext2{
	font-size:5px;
	color: #2E4347;
}
.innertext3{
	font-size:10px;
}
.flowbox{
	display: flex;
    width: 100%;
    height: auto;
}
.display-none{
	display:none;
}
::-webkit-scrollbar {
			position:absolute;
			z-index:1000;
			height:5px;
			width:5px;
		}
		::-webkit-scrollbar-track {
			background: #f1f1f1; 
		}
		::-webkit-scrollbar-thumb {
			background: #274B52; 
			border-radius: 1px;
			
		}
		::-webkit-scrollbar-thumb:window-inactive {
			background: #505A53; 
		}
		
		::selection {
            background: #a7b6b9;
            color: black;
            }
            
            ::-moz-selection {
            background: #ffb26e;
            color: black;
            }
            
            ::-webkit-selection {
            background: #ffb26e;
            color: black;
            }
.original_box{
	width: 70%;
    height: 50%;
    color: White;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    font-family: open sans;
    font-size: 30px;
    background: #3F4446;
    border: 1px solid white;
    border-radius: 5px;
    position: absolute;
    transition: all 0.5s ease-out;
	overflow: auto;
    box-shadow: 0 2px 3px rgba(0,0,0,.1), 0 4px 8px rgba(0,0,0,.3);
    left: 15%;
    top: 10%;
	}
.grade_box,.score_box{
	width:34%;
	height:10%;
	color:White;
	text-align:center;
	text-decoration:none;
	font-family:open sans;
	font-size:30px;
	background:#3F4446;
	border:1px solid white;
	border-radius:5px;
	position: absolute;
	transition: all 0.5s ease-out;
	box-shadow: 0 2px 3px rgba(0,0,0,.1), 0 4px 8px rgba(0,0,0,.3);
	left:15%;
	top:62%;
}
.score_box{
	left:51%;
}

</style>
</head>
	<body>
	<script src="https://use.fontawesome.com/4fe18aaa6f.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Open+Sans|Poiret+One" rel="stylesheet">
	<div class = "x"></div>
	Here are your results:
	<div class = "original_box" id="original"></div>
	<div class = "grade_box" id = "grade"></div>
	<div class = "score_box" id = "score"></div>
	<a class = "restart" href= "/ScoresPage.html"><i class="fa fa-reply" aria-hidden="true"></i></a>
	

	<script>var exports = [];</script>
	<script src="/flesch-kincaid.js"></script>
		<?php
		$userinput = $_POST["paste"];
		echo'<script type="text/javascript">
		var FleschKincaid = exports;
		document.getElementById("original").innerHTML = "Original text:<br><br>\"',$userinput,'\"";
		document.getElementById("grade").innerHTML = "Grade: " + FleschKincaid.grade("',$userinput,'");
		document.getElementById("score").innerHTML = "Score: "+ FleschKincaid.rate( "',$userinput,'" );
		</script>';
		?>

	</body>
</html>