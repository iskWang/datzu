<?php

	function getSublist_array($sublist_array){
		$length = count($sublist_array);
		for ($i=0; $i<$length; $i++){
			// echo $sublist_array[$i];
			echo '<li><a href="#">'.$sublist_array[$i].'</a></li>';
		};
	};
	

if ($currentFile == 'index'){

	echo <<<__END

	<div id="main-page" class="container">
		<div id="main-slogan">
			<img src="img/banner.png" alt="" class="center">
		</div>	
		<div id="home-content-wrap">
			<div id="home-content" class="row-fluid thumbnails">
				<div id="home-content-left" class="span3 thumbnail">
					<img src="http://placehold.it/200x100" />
					<h2 class="title"><i class="icon-play-circle"></i>活動快遞</h2>
					<p>102年11月6日由蘇志成師兄率師兄姐一行四人至台南市北區家扶基金會...<a href="" class="more">more</a></p>
				</div>
				<div id="home-content-right" class="span9 thumbnail">
					<ul id="tab-title" class="nav nav-tabs">
						<li class="active">
							<a href="#id1" class="tab-title-height">最新活動</a>
						</li>
						<li>
							<a href="#id2" class="tab-title-height">行事曆</a>
						</li>
						<li>
							<a href="#id3" class="tab-title-height">地圖</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="tab1" class="tab-pane active">
							<ul class="unstyled">
								<li>								
									<a href="" class="inline btn btn-danger"><p class="tab-pan-cetegory keep-inline">急難救助</p></a>
									<a href=""><p class="tab-pan-contents keep-inline">台北分會訂於102年11月24日(日)，於雲林縣四湖鄉關懷訪視150戶...</p></a>
								</li>
								<li>								
									<a href="" class="inline btn btn-success"><p class="tab-pan-cetegory keep-inline">大型活動</p></a>
									<a href=""><p class="tab-pan-contents keep-inline">台北分會訂於102年11月24日(日)，於雲林縣四湖鄉關懷訪視150戶...</p></a>
								</li>
								<li>								
									<a href="" class="inline btn btn-warning"><p class="tab-pan-cetegory keep-inline">特殊活動</p></a>
									<a href=""><p class="tab-pan-contents keep-inline">台北分會訂於102年11月24日(日)，於雲林縣四湖鄉關懷訪視150戶...</p></a>
								</li>
								<li>								
									<a href="" class="inline btn btn-danger"><p class="tab-pan-cetegory keep-inline">急難救助</p></a>
									<a href=""><p class="tab-pan-contents keep-inline">台北分會訂於102年11月24日(日)，於雲林縣四湖鄉關懷訪視150戶...</p></a>
								</li>
								<li>								
									<a href="" class="inline btn btn-success"><p class="tab-pan-cetegory keep-inline">大型活動</p></a>
									<a href=""><p class="tab-pan-contents keep-inline">台北分會訂於102年11月24日(日)，於雲林縣四湖鄉關懷訪視150戶...</p></a>
								</li>					
							</ul>
						</div>
						<div id="tab2" class="tab-pane"></div>
						<div id="tab3" class="tab-pane"></div>
					</div>
				</div>
			</div>
		</div>		
	</div>

__END;

}else{

	echo <<<__END
	<div id="main-page" class="container">
		<div id="main-slogan">
			<img src="img/banner-content.png" alt="" class="center">
		</div>	
		<div id="home-content-wrap">
			<div id="home-content" class="row-fluid tabbable tabs-left contents">
				<ul id="contents-list" class="nav nav-tabs span3">
					<li class="btn-active"><a href=""><i class="icon-play-circle icon-white"></i>功德會介紹</a></li>
					<ul id="contents-list-btn" class="unstyled">
__END;
if($sublist_array){
	getSublist_array($sublist_array);
}
echo <<<__END
					</ul>
				</ul>					
				<div class="span9">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#content" class="tab-title-height">最新活動</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="content" class="tab-pane active">
							<p>$content</p>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>	
__END;
}
?>	