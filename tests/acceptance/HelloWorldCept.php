<?php
$I = new WebGuy($scenario);
$I->wantTo('trouver le texte Hello World!');
$I->amOnPage('/');
$I->see('Hello World!');
