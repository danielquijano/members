<?php 
	// Get server's protocol
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} 

	else { $uri = 'http://'; }


	// Setting some page values
	$site_directory = 'webapps/members';

	switch($_SERVER['SCRIPT_NAME']){
		case '/' . $site_directory . '/index.php':
			$title = 'Natalia Hot Teen';
			$keywords = '';
			$bodyclass = 'view-index';
			$identifier = 'index';
			$description = '';
			$canonicalurl = $uri . $_SERVER['SERVER_NAME'];
			break;

		default:
			$title = '';
			$keywords = '';
			$bodyclass = 'view-index';
			$identifier = '';
			$description = '';
			$canonicalurl = $uri . $_SERVER['SERVER_NAME'];
	}


	// Urls
	// Main
	$joinurl = 'join.php';
	$indexurl = 'index.php';
	$membersurl = 'members.php';

	// Others


	// Arrays
	$navbarAttrs = array(
		array(
			'url'   => $indexurl,
			'icon'  => 'home',
			'name'  => 'Home',
		),
	);


	$footer_MapAttrs = array(
		array(
			'url'   => $indexurl,
			'name'  => 'Home',
			'title' => '',
		),
	);

	$footer_AgreementAttrs = array(
		array(
			'url'   => 'support.php',
			'name'  => 'Customer Care',
			'title' => '',
		),
		array(
			'url'   => 'terms.php',
			'name'  => 'Terms of Service',
			'title' => '',
		),
		array(
			'url'   => 'parental.php',
			'name'  => 'Parental Blocking',
			'title' => '',
		),
		array(
			'url'   => '2257.php',
			'name'  => '18 U.S.C. 2257',
			'title' => '',
		),
	);
?>