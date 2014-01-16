<?php
$I = new WebGuy($scenario);
$I->wantTo('trouver le texte Hello World!');
$I->amOnPage('/hello/maxima');
$I->see('Hello my name is maxima!');
