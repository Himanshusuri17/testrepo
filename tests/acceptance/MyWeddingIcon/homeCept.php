<?php 
	$I = new AcceptanceTester($scenario);
	$I->wantTo('perform actions and see result');
	$I->amOnUrl('http://dev.myweddingicon.com/');
	$I->comment('LOGIN A USER');	
	$I->click('#signin');	
	
	$I->fillField('#create_account_email','admin@gmail.com');
	$I->fillField('//div[contains(@class,"b-form-row")] //div[contains(@class,"b-form-horizontal__input")] //input[contains(@class,"form-control")] ','qwerty');
	$I->checkOption('//div[contains(@class,"b-form-row")] //label[contains(@for,"contact_form_copy")] //input[contains(@name,"remember")]');
	$I->click('#btn_submit');
	

?>