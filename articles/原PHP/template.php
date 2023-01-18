<?php
$style = "/*Custom CSS*/";
$title = "網頁標題";
$date = "日期";
$cat = "分類";
$content = 'HTML內容	';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<title><?php echo($title)?> - 我是呆呆我好爛</title>
	<link href="../img/icon.png" rel="icon">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="description" content="來看看弱爆的呆呆在幹嘛吧！" />
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
		<div class="container">
		    <a class="navbar-brand" href="../index.html">我是呆呆我好爛</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#NavToggler">
		    	<span class="navbar-toggler-icon"></span>
		    </button>
			<div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="NavToggler">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="NavToggler">我是呆呆我好爛</h5>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
				</div>
				<div class="offcanvas-body">
					<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
						<li class="nav-item">
							<a class="nav-link active mR20" href="../index.html"><i class="fa-solid fa-globe"></i> 首頁</a>
						</li>
						<li class="nav-item">
							<a class="nav-link mR20" style="cursor: not-allowed;"><i class="fa-solid fa-user-large"></i> 關於我</a>
						</li>


						<li class="nav-item dropdown mR20">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
							<i class="fa-solid fa-newspaper"></i> 文章堆
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="../categories/songs.html">歌曲分享</a></li>
								<li><a class="dropdown-item" href="../categories/articles.html">長篇文章</a></li>
							</ul>
						</li>


						<li class="nav-item">
							<a class="nav-link" style="cursor: not-allowed;"><i class="fas fa-envelope"></i> 聯絡我</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<!-- Banner -->
	<div class="container-fluid text-light" style="background: #333333;">
		<div class="row align-items-center text-center banner">
			<div class="col">
				<h2><?php echo($title)?></h2>
				<span>小狼呆呆．<?php echo($date)?>．<?php echo($cat)?></span>
			</div>
		</div>
	</div>

	<!-- Body -->
	<div class="container mTop30">
		<center>
			<div class="col-sm-9 mR10 mL10" style="text-align: left;">
				<?php echo($content)?>
			</div>
		</center>
	</div>

	<!-- Footer -->
	<footer class="footer text-center text-bg-dark mTop30" style="padding: 10px">
		copyright © Jack_XD <script>document.write(new Date().getFullYear())</script><br>
		版面參考 <a href="https://yuyutw.tk" target="_blank">[佑仔 - 個人網誌Demo]</a>
	</footer>
</body>
<style><?php echo($style)?></style>