<?php

// prepare
$fileToDelete = __DIR__ . '/../_data/VisualCeption/SimpleCept.SimpleBlock.png';
if (file_exists($fileToDelete)) {
  unlink($fileToDelete);
}

// test
$I = new WebGuy($scenario);
$I->wantTo('check visual changes inside element');

$I->amOnPage("/staticTime.html");
$I->seeVisualChanges("SimpleBlock", "#theblock");

$I->amOnPage("/staticTimeChanged.html");
$I->seeVisualChanges("SimpleBlock", "#theblock");
