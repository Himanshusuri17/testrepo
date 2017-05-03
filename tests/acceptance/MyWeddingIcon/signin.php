<?php
	$I->comment('LOGIN A USER');
	$I->wait(3);
	$I->click('#signin');
	$I->wait(3);
	$I->fillField('#create_account_email','admin@gmail.com');
	$I->wait(3);
	$I->fillField('#create_account_password','qwerty');
	$I->wait(3);
	$I->checkOption('//label[contains(@class,"b-contact-form__window-form-row-label")]');
	$I->wait(3);
	$I->click('#btn_submit');
	$I->wait(30);
?>