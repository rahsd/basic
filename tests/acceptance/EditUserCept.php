<?php
namespace Step\Acceptance;

$I = new CRMUsersManagementSteps($scenario);
$I->wantTo('edit existing User record');

$I->amInListUsersUi();
$I->clickOnRegisterNewUserButton();
$I->seeIAmInAddUserUi();
$first_User = $I->imagineUser();
$I->fillUserDataForm($first_User);
$I->submitUserDataForm();

$I->amInListUsersUi();
$I->seeEditButtonBesideUser($first_User);
$I->clickEditButtonBesideUser($first_User);

$I->seeEditUserUi();
$new_data = $I->imagineUser();
$I->fillUserDataForm($new_data);
$I->submitUserDataForm();

$I->amInListUsersUi();
$I->seeUserInList($new_data);
$I->dontSeeUserInList($first_User);

