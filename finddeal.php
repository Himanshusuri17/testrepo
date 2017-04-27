<?php
		$I->click('#tab_finddeal');
		$I->see('GoPage businesses are offering many deals to you, the GoPage member. It is essential that you have your mobile app installed with your GoPage virtual membership card to be able to redeem the deal offers.');
		
		
		# MAP VIEW
		$I->comment('WE HAVE 2 DIFFERENT VIEWS FOR DISPLAYING DEAL');
		# FINDING A DEAL WITHOUT SELECTING ANY CATEGORY
		$I->comment('FIRST IS MAP VIEW');
		$I->wait(3);
		
		
		#FOR ZOOMING OUT THE MAP
		for($i=1;$i<=7;$i++){
		$I->click('//div[contains(@title,"Zoom out")]');
		}
		
		$I->comment('IN GOOGLE MAPS DISPLAYED, YOU CAN SEE ALL THE DEALS BY DEFAULT AVAILABLE ON THE BASIS OF THEIR LOCATION');
		$I->wait(3);
		
		$I->comment('SEARCHING SOME SPECIFIC DEALS');
		$I->wait(3);
		
		#$I->comment('FINDING A DEAL WITHOUT SELECTING ANY CATEGORY');
		#$I->wait(3);
		# $I->click('//li[contains(@class,"third_icon_new")] //a[contains(@href,"#findbycategory")]');
		#$I->click('Search Deals >>');
		#$I->wait(3);
		#$I->comment('PLEASE SELECT ANY CATEGORY TO SEARCH A DEAL');
		
		
		# FINDING A DEAL BY SELECTING SOME CATEGORIES
		$I->comment('FINDING A DEAL BY SELECTING SOME CATEGORIES');
		$I->wait(3);
		$I->click('//input[contains(@class,"ui-igcombo-field ui-corner-all")]');
		$I->wait(3);		
		$I->click('//li[contains(@data-value,"5")]');
		$I->wait(3);
		$I->click('//li[contains(@data-value,"14")]');
		$I->wait(3);
		$I->click('//li[contains(@data-value,"12")]');
		$I->wait(3);
		
		#$I->click('//div[contains(@class,"ui-igcombo-list")] //li[contains(@class,"ui-igcombo-listitem ui-state-default ui-unselectable")]/li[6]');
		#$I->wait(3);
		#$I->click('#busCategory_chzn');
		#$I->wait(3);
		#$I->click('//div[contains(@class,"chzn-drop")] //ul[contains(@class,"chzn-results")]/li[3]');
		#$I->wait(3);
		#$I->click('#busCategory_chzn');
		#$I->wait(3);
		#$I->click('//div[contains(@class,"chzn-drop")] //ul[contains(@class,"chzn-results")]/li[5]');
		#$I->wait(3);		
		#$I->click('Search Deals >>');
		#$I->wait(3);
		
		$I->click('//h1[contains(@class,"page_heading")]');
		for($i=1;$i<=7;$i++){
		$I->click('//div[contains(@title,"Zoom out")]');
		}
		$I->executeJS('window.scrollTo(0,100)');
		$I->wait(5);
		$I->comment('ALL DEALS SHOWN IN GOOGLE MAPS ARE COMING VIA GOPAGE');
		$I->wait(5);
		
		
		# RESETTING THE SELECTED SEARCH
		$I->comment('RESETTING THE SELECTED SEARCH CATEGORIES');
		$I->wait(3);
		$I->click('//div[contains(@class,"ui-igcombo-clearicon ui-icon-circle-close ui-icon")]');
		$I->wait(3);
		
		
		# GRID VIEW
		$I->comment('SECOND IS GRID VIEW');
		$I->wait(3);
		$I->comment('SHOWING ALL DEALS IN A GRID');
		$I->wait(3);
		$I->click('Grid View >>');
		$I->wait(3);
		$I->comment('BY DEFAULT ALL THE DEALS ARE GETTING DISPLAYED');
		$I->wait(3);
		
		
		# FINDING A DEAL BY SELECTING SOME CATEGORIES
		$I->comment('FINDING A DEAL BY SELECTING SOME CATEGORIES');
		$I->wait(3);
		$I->click('//input[contains(@class,"ui-igcombo-field ui-corner-all")]');
		$I->wait(3);		
		$I->click('//li[contains(@data-value,"5")]');
		$I->wait(3);
		$I->click('//li[contains(@data-value,"14")]');
		$I->wait(3);
		$I->click('//li[contains(@data-value,"12")]');
		$I->wait(3);
		$I->click('//h1[contains(@class,"page_heading")]');
		$I->executeJS('window.scrollTo(0,200)');
		#$I->click('#busCategory_chzn');
		#$I->wait(3);		
		#$I->click('//div[contains(@class,"chzn-drop")] //ul[contains(@class,"chzn-results")]/li[2]');
		#$I->wait(3);
		#$I->click('#busCategory_chzn');
		#$I->wait(3);
		#$I->click('//div[contains(@class,"chzn-drop")] //ul[contains(@class,"chzn-results")]/li[3]');
		//# $I->click('reset_btn_grid_map_2');
		$I->wait(5);
		$I->comment('ALL DEALS SHOWN ARE COMING VIA GOPAGE');
		$I->wait(5);
		

		
?>