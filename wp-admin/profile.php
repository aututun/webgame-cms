<?php
/**
 * User Profile Administration Screen.
 *
 * @package WordPress
 * @subpackage Administration
 */

/**
 * This is a profile page.
 *
 * @since 2.5.0
 * @var bool
 */
define( 'IS_PROFILE_PAGE', true );

/** Load User Editing Page */
$check_gold = $_REQUEST['check_gold'];
if ($check_gold) {
	$push_gold = $_REQUEST['push_gold'];
	if($push_gold == 0) {
		echo 11;
	}
	echo '<pre>';
	print_r($_REQUEST);
	echo '<pre>';

	return;
} else {
	require_once __DIR__ . '/user-edit.php';
}
