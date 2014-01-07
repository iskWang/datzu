<?php
	$currentFile = str_replace(".php", "", basename($_SERVER['PHP_SELF']));
	function checkCurrentPage($navfile){
		$currentFile = str_replace(".php", "", basename($_SERVER['PHP_SELF']));
		if($currentFile == $navfile){
			echo 'active';
		}
	};
echo <<<__END

<!doctype html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="description" content="<?php echo $desc; ?>">
	<title>大慈功德會 $title</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="css/bootstrap-responsive.min.css"> -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="header-wrap" class="container header-bc">
		<div id="header" class="row-fluid">
			<div class="header-left span6">
				<div class="logo"><a href=""><img src="img/logo.png" alt="大慈功德會"></a></div>
				<div class="header-title">
					<a href="index.php"><h3>大慈功德會</h3></a>
					<span>Da tzu Foundation</span>
				</div>
			</div>
			<div class="header-right span6">
				<div class="header-slogan"><span>關懷弱勢不分你我</span></div><br>
				<div class="header-right-bottom">
					<div class="member-search-bar">
						<a href="#"><span>加入我們</span></a>
						<a href="#"><span>志工登入</span></a>
						<a href=""><i class="icon-home"></i></a>
					    <div class="input-append">
					    	<input id="appendedInputButton" type="text">
					    	<button class="btn" type="button"><i class="icon-search"></i></button>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="nav-wrap" class="container">
		<div id="nav" class="btn-group">
			<nav>
				<ul>
__END
?>
					<li class="nav-btn-width btn btn-large <?php checkCurrentPage('index')?>"><a href="index.php">活動訊息</a></li>
					<li class="nav-btn-width btn btn-large <?php checkCurrentPage('introduction')?>"><a href="introduction.php">功德會介紹</a></li>
					<li class="nav-btn-width btn btn-large "><a href="">傳愛成果</a></li>
					<li class="nav-btn-width btn btn-large "><a href="">尋求幫助</a></li>
					<li class="nav-btn-width btn btn-large "><a href="">聯繫我們</a></li>
					<li class="nav-btn-width btn btn-large "><a href="">第六按鈕</a></li>
					<li class="nav-btn-width btn btn-large "><a href="">第七按鈕</a></li>
				</ul>
			</nav>
		</div>
	</div>
