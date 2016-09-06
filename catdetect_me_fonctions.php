<?php
/**
 * Fonctions pour catdetect.me
 *
 * @plugin     catdetect.me
 * @copyright  2016
 * @author     cyp
 * @licence    GNU/GPL
 * @package    SPIP\catdetect.me\fonctions
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Detecter le user-agent de l'utilisateur
 *
 */
function catdetect_user_agent() {

	return $_SERVER['HTTP_USER_AGENT'];
}

/**
 * Detecter l'IP de l'utilisateur
 *
 */
function catdetect_ip() {
	return $_SERVER['REMOTE_ADDR'];
}

/**
 * Image de chat aléatoire
 *
 */
function chat_aleatoire() {

	include_spip('inc/flock');

	$files = preg_files(find_in_path('pic'));
	$file = array_rand($files);
	
	return $files[$file];
}
