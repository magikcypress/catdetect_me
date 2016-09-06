<?php
/**
 * Utilisations de pipelines par catdetect.me
 *
 * @plugin catdetect.me
 * @copyright 2016
 * @author Cyp
 * @licence GNU/GPL
 * @package SPIP\catdetect.me\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Ajout du script javascript de catdetect.me dans le head public
 *
 * @param  string $flux
 * 		Contenu du head
 * @return string $flux
 * 		Contenu du head complété
 */
function catdetect_me_insert_head($flux) {
	$jsscript = find_in_path('javascript/app.js.html');
	$flux .= "<script type='text/javascript' src='$jsscript'></script>\n";

	return $flux;
}
