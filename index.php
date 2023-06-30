<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>
		Online Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
		nav {
			float: right;
			word-spacing: 30px;
			padding: 20px;
		}

		nav li {
			display: inline-block;
			line-height: 80px;

		}

		style.css
		/* 
html5doctor.com Reset Stylesheet
v1.6.1
Last Updated: 2010-09-17
Author: Richard Clark - http://richclarkdesign.com 
Twitter: @rich_clark
*/

		html,
		body,
		div,
		span,
		object,
		iframe,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		p,
		blockquote,
		pre,
		abbr,
		address,
		cite,
		code,
		del,
		dfn,
		em,
		img,
		ins,
		kbd,
		q,
		samp,
		small,
		strong,
		sub,
		sup,
		var,
		b,
		i,
		dl,
		dt,
		dd,
		ol,
		ul,
		li,
		fieldset,
		form,
		label,
		legend,
		table,
		caption,
		tbody,
		tfoot,
		thead,
		tr,
		th,
		td,
		article,
		aside,
		canvas,
		details,
		figcaption,
		figure,
		footer,
		header,
		hgroup,
		menu,
		nav,
		section,
		summary,
		time,
		mark,
		audio,
		video {
			margin: 0;
			padding: 0;
			border: 0;
			outline: 0;
			font-size: 100%;
			vertical-align: baseline;
			background: transparent;
		}

		body {
			line-height: 1;
		}

		article,
		aside,
		details,
		figcaption,
		figure,
		footer,
		header,
		hgroup,
		menu,
		nav,
		section {
			display: block;
		}

		nav ul {
			list-style: none;
		}

		blockquote,
		q {
			quotes: none;
		}

		blockquote:before,
		blockquote:after,
		q:before,
		q:after {
			content: '';
			content: none;
		}

		a {
			margin: 0;
			padding: 0;
			font-size: 100%;
			vertical-align: baseline;
			background: transparent;
		}

		/* change colours to suit your needs */
		ins {
			background-color: #ff9;
			color: #000;
			text-decoration: none;
		}

		/* change colours to suit your needs */
		mark {
			background-color: #ff9;
			color: #000;
			font-style: italic;
			font-weight: bold;
		}

		del {
			text-decoration: line-through;
		}

		abbr[title],
		dfn[title] {
			border-bottom: 1px dotted;
			cursor: help;
		}

		table {
			border-collapse: collapse;
			border-spacing: 0;
		}

		/* change border colour to suit your needs */
		hr {
			display: block;
			height: 1px;
			border: 0;
			border-top: 1px solid #cccccc;
			margin: 1em 0;
			padding: 0;
		}

		input,
		select {
			vertical-align: middle;
		}

		/*-------------------------------Main code   INDEX ---------------------------------------------------------*/

		.wrapper {
			height: 660px;
			width: 1350px;
			/*background-color: red;*/
		}

		header {
			height: 130px;
			width: 1340px;
			background-color: black;
			padding: 10px;
		}

		section {
			height: 550px;

			width: 1361px;
			background-color: grey;
		}

		footer {
			height: 82px;
			width: 1361px;
			background-color: black;
		}

		.logo {
			float: left;
			padding-left: 20px;

		}

		.logo img {
			padding-left: 80px;
		}

		li a {
			color: white;
			text-decoration: none;
		}

		/*nav
{
	float: right;
	word-spacing: 30px;
	padding: 20px;
}
nav li 
{
	display: inline-block;
	line-height: 80px;
}*/

		section .sec_img {
			height: 550px;
			margin-top: 0px;
			background-image: url("012.jpg");
		}

		.box {
			height: 300px;
			width: 450px;
			background-color: #030002;
			margin: 70px auto;
			opacity: .6;
			color: white;
		}

		/*--------------------------------st_login-----------------------------*/

		.log_img {
			height: 650px;
			margin-top: 0px;
			background-image: url("images/3.jpg");
		}

		.box1 {
			height: 450px;
			width: 450px;
			background-color: black;
			margin: 70px auto;
			opacity: .7;
			color: white;
			padding: 20px;
		}

		form .login {
			margin: auto 50px;
		}

		input {
			height: 25px;
			width: 300px;

		}

		/*------------------------------registration--------------------*/
		.reg_img {
			height: 630px;
			margin-top: 0px;
			background-image: url("images/4.png");
		}

		.box2 {
			height: 589px;
			width: 450px;
			background-color: black;
			margin: 0px auto;
			opacity: .7;
			color: white;
			padding: 20px;
		}

		nav a:hover {
			color: red;

		}
	</style>


	<script type="text/javascript">
		setInterval(changeColor, 500);

		function changeColor() {
			var x = document.getElementById("name");
			if (x.style.color == "black")
				x.style.clor = "red";
			else if (x.style.color == "white")
				x.style.color = "green";
			else if (x.style.color == "green")
				x.style.color = "orange";
			else x.style.color = "white";
		}
	</script>

</head>


<body>
	<div class="wrapper">
		<header>
			<div class="logo">
				<img src="images/9.png">
				<h1 ID="name" style="color: white;">NBKRIST LIBRARY MANAGEMENT SYSTEM</h1>
			</div>

			<?php

			if (isset($_SESSION['login_user'])) {
			?>
				<nav>
					<ul>
						<li><a href="project.php">HOME</a></li>
						<li><a href="books.php">BOOKS</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
						<li><a href="feedback.php">FEEDBACK</a></li>
					</ul>
				<?php
			} else {
				?>
					<nav>
						<ul>
							<li><a href="project.php">HOME</a></li>
							<li><a href="books.php">BOOKS</a></li>
							<li><a href="admin_login.php">USER-LOGIN</a></li>
							<li><a href="feedback.php">FEEDBACK</a></li>
						</ul>

					<?php

				}

					?>

					<!--<nav>
				<ul>
					<li><a href="project.php">HOME</a></li>
					<li><a href="books.php">BOOKS</a></li>
					<li><a href="student_login.php">STUDENT-LOGIN</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			</nav>-->
		</header>
		<section>
			<div class="sec_img">
				<br><br><br>
				<div class="box">
					<br><br><br><br>
					<h1 style="text-align: center; font-size: 35px;">Welcom to library</h1><br><br>
					<h1 style="text-align: center;font-size: 25px;">Opens at: 8:45 </h1><br>
					<h1 style="text-align: center;font-size: 25px;">Closes at: 17:00 </h1><br>
				</div>
			</div>
		</section>
		<footer>

			<p style="color:white;text-align: center;">
				<br>
				Email:&nbsp nbkristlibrary@gmail.com <br><br>
				Mobile:&nbsp &nbsp +800866*******
			</p>

		</footer>

	</div>
</body>

</html>