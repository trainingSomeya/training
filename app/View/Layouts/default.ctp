<!DOCTYPE html>

<html lang = "en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
		<meta name = "viewport" content = "width=device-width, initial-scale=1">
		<title>
			<?php echo __('CakePHP: the rapid development php framework:'); ?>
		</title>

		<!-- Bootstrap -->
		<?php echo $this->Html->css('bootstrap.min'); ?>

		<!-- Le styles -->
		<style>
<!--
h1 {
	font-size:9ex;
	font-weight:normal;
}
body {
	padding: 70px 0 0 0;
}
p {
	font-size: 16px;
}
.square_btn{
	width:160px;
	font-size:20px;
	font-weight:bold;
	text-decoration:none;
	display:block;
	text-align:center;
	padding:8px 0 10px;
	color:#0075ff;
	background-color:#ffffff;
	border:1px solid #333;
	border-radius:25px;
}
/* グリットシステムの確認、調整*/
.box{
	/*background:#ddd; border: 1px #ff0000 solid;*/ 
	margin:20px 15px 20px 15px;
}
.starter-template {
	padding: 40px 15px;
	text-align: center;
}
.footer{
	border-top: 1px solid black;
	position:absolute;
}
.footer > .container{
	padding-bottom: 30px;
	padding-top: 30px;
}
/* ナビゲーションバーの設定 */
/* 通常時の見え方 */
.navbar-custom {
	background-color:#0075ff;
	color:#ffffff;
	border-radius:0;
	padding:0 60px 0 60px;
}
/* メニューの文字の色 */
.navbar-custom .navbar-nav > li > a {
	color:#fff;
}
/* active時の文字色*/
.navbar-custom .navbar-nav > .active > a {
	color: #ffffff;
	background-color:transparent;
}
/* 選択時の色*/
.navbar-custom .navbar-nav > li > a:hover,
.navbar-custom .navbar-nav > li > a:focus,
.navbar-custom .navbar-nav > .active > a:hover,
.navbar-custom .navbar-nav > .active > a:focus,
.navbar-custom .navbar-nav > .open >a {
	text-decoration: none;
	background-color: #1186ff;
}
/* ブランドイメージ */
.navbar-custom .navbar-brand {
	color:#eeeeee;
}
/**/
.navbar-custom .navbar-toggle {
	background-color:#eeeeee;
}
/*画面が小さい時の開閉ボタンの色*/
.navbar-custom .icon-bar {
	background-color:#000000;
}
-->
		</style>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
	</head>
	<body>
		<a name="TOP"></a>
		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<?php echo $this->Html->script('bootstrap.min'); ?>
		<?php echo $this->fetch('script'); ?>
		<!-- フッダー部分 -->
		<footer class="footer" style="text-align:center">
			<div class="container">
				<p>Built for <a href="http://getbootstrap.com">Bootstrap</a>	</p>
				<a href="#TOP">Back to Top</a>
			</div>
		</footer>
	</body>
</html>
