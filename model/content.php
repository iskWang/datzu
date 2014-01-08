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
							<a href="#tab1" data-toggle="tab" class="tab-title-height">最新活動</a>
						</li>
						<li>
							<a href="#tab2" data-toggle="tab" class="tab-title-height">行事曆</a>
						</li>
						<li>
							<a href="#tab3" data-toggle="tab" class="tab-title-height">地圖</a>
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
						<div id="tab2" class="tab-pane">
						</div>
						<div id="tab3" class="tab-pane">
							<img src="img/map.jpg" width="500" height="500" border="0" usemap="#map" />
							<map name="map" id="map">
							  <area shape="poly" coords="383,77,365,80,367,87,354,93,342,100,335,104,335,110,324,117,319,118,317,106,316,98,305,87,303,79,312,73,301,60,313,59,319,42,334,38,346,51,356,54,369,58,379,68,383,78" href="#" />
							  <area shape="poly" coords="309,74,303,63,296,59,278,65,263,80,266,81,272,88,287,99,299,106,302,120,314,132,318,115,317,107,310,92,304,89,302,80" href="#" />
							  <area shape="poly" coords="258,92,253,97,248,109,257,114,267,122,272,127,268,141,289,138,296,148,303,147,307,141,312,129,304,121,300,107,288,102,276,92,264,83" href="#" />
							  <area shape="poly" coords="379,75,350,93,333,103,335,110,316,118,313,134,304,146,302,149,302,153,321,162,338,164,340,159,356,168,360,164,364,149,371,136,368,126,364,111,367,94,378,78" href="#" />
							  <area shape="poly" coords="274,128,249,108,243,119,237,120,230,131,227,135,217,153,243,168,250,170,260,160,272,167,280,160,295,153,300,148,290,141,275,141,266,142,270,130" href="#" />
							  <area shape="poly" coords="219,153,209,166,202,175,207,187,212,199,223,204,237,210,248,192,256,191,269,183,285,180,303,177,310,174,316,161,299,150,289,157,270,167,259,162,251,170,242,170" href="#" />
							  <area shape="poly" coords="316,159,302,182,298,186,301,195,294,213,296,226,290,238,292,241,291,250,291,257,281,264,278,271,268,278,262,282,266,295,276,312,294,320,299,324,301,315,311,303,315,294,315,283,323,278,327,262,328,247,334,242,335,226,336,226,336,214,343,211,340,201,340,191,345,187,350,176,359,168,346,165,343,159,334,166,315,160" href="#" />
							  <area shape="poly" coords="306,177,289,179,273,182,259,191,245,194,238,203,233,207,221,207,217,219,226,233,216,246,224,255,232,262,241,261,241,275,257,279,264,283,274,271,280,269,287,262,294,254,292,237,294,228,293,213,301,197,302,183" href="#" />
							  <area shape="poly" coords="203,175,212,197,224,205,219,216,224,230,227,236,214,234,202,235,194,228,184,233,172,227,191,201,200,182" href="#" />
							  <area shape="poly" coords="175,227,164,240,160,254,161,261,158,268,159,272,172,268,186,260,195,253,203,261,221,266,233,261,220,254,218,242,225,233,209,236,202,232,191,228,187,233,177,229" href="#" />
							  <area shape="poly" coords="160,270,161,284,155,297,165,301,185,288,196,288,205,295,206,312,217,312,225,305,238,295,253,282,244,275,242,267,236,259,225,264,210,265,194,255,182,264" href="#" />
							  <area shape="poly" coords="154,295,153,312,149,319,150,323,149,333,160,350,175,352,186,357,196,343,203,332,212,323,218,318,216,311,205,311,205,301,201,293,195,287,182,288,174,292,171,299" href="#" />
							  <area shape="poly" coords="164,348,168,363,173,378,175,393,184,406,190,411,195,400,197,389,194,371,202,358,214,366,213,363,222,357,234,360,242,360,248,353,245,343,251,334,253,318,259,309,269,305,269,298,264,289,261,281,257,276,251,282,245,288,233,298,218,311,209,326,202,335,194,349,190,356" href="#" />
							  <area shape="poly" coords="244,354,253,366,249,372,243,377,236,381,234,392,232,404,233,419,236,428,241,439,247,442,250,444,253,429,257,415,266,395,270,384,283,379,284,375,292,363,293,356,302,350,305,338,316,329,314,317,316,304,323,292,323,284,323,277,318,282,316,289,316,297,305,305,304,312,297,322,294,318,288,315,282,315,269,306,259,306,253,324,247,342" href="#" />
							  <area shape="poly" coords="195,367,206,358,214,363,224,355,231,360,245,360,254,365,250,374,241,380,233,388,232,398,235,417,239,431,244,438,252,447,250,460,251,466,251,472,244,485,241,484,237,479,231,483,226,465,230,458,227,448,221,433,207,419,193,412" href="#" />
							  <area shape="poly" coords="123,86,114,85,116,75,125,64,134,56,144,59,147,68,133,69" href="#" />
							  <area shape="poly" coords="146,136,137,140,131,132,127,139,121,135,116,136,113,131,120,130,127,125,137,122,144,123" href="#" />
							  <area shape="poly" coords="99,320,92,312,101,307,105,302,114,297,111,285,104,293,99,289,102,283,108,275,115,266,123,269,121,289,128,290,130,295,111,300,107,307" href="#" />
							</map>
						</div>
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