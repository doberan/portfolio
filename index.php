<?php
	session_start();
	
	$pfi	=	"<img class=\"main\" src=\"./img/top.gif\" />
				<img class=\"sub\" src=\"./img/Im.png\" />";
	$skl	=	"<img class=\"main\" src=\"./img/skill.png\" />
				<img class=\"sub\" src=\"./img/sample.png\" />";
	$sft	=	"<ul id=\"soft\">
					<li><a href=\"https://www.microsoft.com/ja-jp/dev/default.aspx\" target='_blank'><img src=\"./img/logo/vs.png\" /></a></li>
					<li><a href=\"http://unity3d.com/jp/5?gclid=CJny_b_W8sgCFQ8JvAodzH0CqQ\" target='_blank'><img src=\"./img/logo/unity.png\" />	</a></li>
					<li><a href=\"http://www.mingw.org/\" target='_blank'><img src=\"./img/logo/mingw.png\" />	</a></li>
					<li><a href=\"https://httpd.apache.org/\" target='_blank'><img src=\"./img/logo/apache.png\" />	</a></li>
					<li><a href=\"https://github.com/\" target='_blank'><img src=\"./img/logo/git.png\" />	</a></li>
				</ul>";
	
	$con	=	"<ul id=\"contact\">
					<li><a href=\"https://www.facebook.com/masaya.highsky\" target=\"_blank\"><img src=\"./img/contact/facebook.png\"></a></li>
					<li><a href=\"https://twitter.com/kei_1243\" target=\"_blank\"><img src=\"./img/contact/twitter.png\"></a></li>
					<li><a href=\"mailto:masayathegantz@gmail.com\"><img src=\"./img/contact/mail.png\"></a></li>
				</ul>";
	
	
	$now	=	0;

	if(isset($_GET['top'])){
		if($_GET['top']==0){
			$now	=	0;
		}
	}
	if(isset($_GET['top'])){
		if($_GET['top']==1){
			$now	=	1;
		}
	}
	if(isset($_GET['top'])){
		if($_GET['top']==2){
			$now	=	2;
		}
	}
	if(isset($_GET['top'])){
		if($_GET['top']==4){
			$now	=	4;
		}
	}
	
	if($now == 0){
		$now	=	$pfi;
	}
	if($now == 1){
		$now	=	$skl;
	}
	if($now == 2){
		$now	=	$sft;
	}
	if($now == 4){
		$now	=	$con;
	}
	
	
	
?><!-- php end -->

<!-- html start -->

<!DOCTYPE html>

<html id="html">
	<head>
		<title>doberan Portfolio</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width" />
		<meta name="viewport" content="height=device-height" />
		<link href="./css/reset.css" rel="stylesheet" media="screen">
		<link href="./css/style.css" rel="stylesheet" media="screen">
	
	<script>
		var h	=	window.innerHeight;
		hHeight = document.getElementById("html");
        hHeight.style.height = h;
	</script>
    </head>
	
	<!-- body start -->
	<body id="body">
		<main id="top"><!-- 993px -->
			<nav><!-- 50px -->
					<li class="nav"><a href="index.php?top=0" id="pfi"><p class="nav_text">/*profile*/ </p></a></li>
					<li class="nav"><a href="index.php?top=1" id="skl"><p class="nav_text"> /*skill*/ </p></a></li>
					<li class="nav"><a href="index.php?top=2" id="sft"><p class="nav_text"> /*soft*/ </p></a></li>
					<li class="nav"><a href="index.php?top=3" id="pfo"><p class="nav_text"> /*portfolio*/ </p></a></li>
					<li class="nav"><a href="index.php?top=4" id="con"><p class="nav_text"> /*contact*/</p></a></li>
			</nav>
			
			
			<!-- contents start -->
			<div id="contents">
				<?php print $now; ?><!-- 923px -->
			</div>
			<!-- contents end -->
			
			<!-- address start -->
			<small><!-- 20pxpx -->
				Copyright &copy; 2015 doberan
			</small>
			<!-- address end -->

		</main>
	</body>
	<!-- body end -->


</html>
<!-- html end -->




