<?php

// Sécurité
if (!defined('_ECRIRE_INC_VERSION')) return;

// Activer HTML5 depuis le squelette
$GLOBALS['meta']['version_html_max'] = 'html5';

if (!isset($GLOBALS['z_blocs'])){
	$GLOBALS['z_blocs'] = array('content','aside','extra','head','head_js','header','footer','breadcrumb');
}

define('_ZENGARDEN_FILTRE_THEMES','observatorio');

function generer_url_discusion_dist($id_forum) {
	if ($id_forum = intval($id_forum)) {
		$type="forum";
		$url = "?page=discusion&id_forum=" . $id_forum;

		return _DIR_RACINE . $url;
	}
	return '';
}
