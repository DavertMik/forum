<?php
$I = new TestGuy\UserSteps($scenario);
$I->wantTo('start a discussion');
$I->amAdmin();
$I->haveCategory(array('name' => 'Testing', 'slug' => 'test'));
$I->amOnPage('/');
$I->see('Start a Discussion');
$I->click('Discussions');
$I->click('Start a Discussion');
$I->see('Start a Discussion', 'h1');
$I->seeRecord('Phosphorum\Models\Categories', array('name' => 'Testing'));
$I->fillField('#title', 'How can I write tests in Codeception');
$I->fillField('#content', 'Is there any manual');
$I->selectOption('#categoryId', 'Testing');
$I->click('Submit Discussion');
$I->see('How can I write tests in Codeception','h1');
$I->seeInCurrentUrl('/how-can-i-write-tests-in-codeception');
