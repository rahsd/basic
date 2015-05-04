<?php
namespace Step\Acceptance;

$I = new CRMUsersManagementSteps($scenario);
$I->wantTo('check that if I cancel deletion nothing happens');

$I->amInListUsersUi();
$I->clickOnRegisterNewUserButton();
$I->seeIAmInAddUserUi();
$first_User = $I->imagineUser();
$I->fillUserDataForm($first_User);
$I->submitUserDataForm();

$I->seeIamInViewUserUi();

$I->amInListUsersUi();
$I->seeUserInList($first_User);
$I->seeDeleteButtonBesideUser($first_User);
$I->clickDeleteButtonBesideUser($first_User);

$I->seeDeletionConfirmation();
$I->cancelDeletion();

$I->seeIAmInListUsersUi();
$I->seeUserInList($first_User);

$I->wantTo('check that if I confirm deletion then application deletes User');

$I->clickDeleteButtonBesideUser($first_User);
$I->seeDeletionConfirmation();
$I->confirmDeletion();

$I->seeIAmInListUsersUi();
$I->dontSeeUserInList($first_User);

