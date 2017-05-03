<?php 
	$I = new AcceptanceTester($scenario);
	$I->wantTo('perform actions and see result');
	$I->amOnUrl('http://dev.myweddingicon.com/');
	$I->comment('LOGIN A USER');	
	$I->click('#signin');		
	$I->fillField('#create_account_email','admin@gmail.com');
	$I->fillField('//div[contains(@class,"col-sm-12")] //span[contains(@class,"input")] //input[contains(@class,"input_field")] ','qwerty');
	$I->checkOption('//div[contains(@class,"b-form-row col-sm-12")] //label[contains(@for,"contact_form_copy")] //input[contains(@name,"remember")]');
	$I->click('#btn_submit');
	

?>