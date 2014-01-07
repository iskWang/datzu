<?php

/*
*	宣告檔案所需的資料，直接帶入model
*	introduction.php
*
*/
		$filename	= 'introduction';
		$title 		= '功德會介紹';
		$desc  		= '大慈功德會 功德會介紹';
		$content	= '中華民國大慈功德會於民國88年12月成立，致力於社會福利相關的慈善事業。我們的主要工作是深入全國各偏遠地區，協助急難救助、殘障救助、生活救助、醫療救助的社會服務工作，實踐救貧、救苦、救難的服務精神，進而推動祥和的社會。更希望能夠凝聚更多的力量與資源來提供社會上的弱勢族群即時、適切的協助，為他們生活的暗處，點燃一盞明燈， 照亮他們的人生道路，再次享受溫暖的擁抱。';
		$sublist_array = array('大慈簡介', '組織架構', '大慈章程');
		
		include 'model/header.php';
		include 'model/content.php';
		include 'model/footer.php';

?>