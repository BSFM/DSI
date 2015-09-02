<?php
/**
 * Chemins, ModeleMVC
 *
 * Contient les chemins des dossiers qui seront utilisés dans le code source.
 * La méthode "define" est utilisé pour parer le problème de la concaténation des constantes dans la classe... 
 * Ces constantes seront accessibles par les 2 moyens (avec ou sans préfixe de classe).
 */


define('BASE',$_SERVER["DOCUMENT_ROOT"]);

define('AJAX', 'ajax/');
define('CONFIG', 'config/');
define('STYLESHEETS', 'css/');
define('IMAGES', 'img/');
define('JAVASCRIPT', 'js/');
define('LIBRARIES', 'lib/');
define('VIEW', 'view/');

class Chemins
{
    const BASE = BASE;
    
    const AJAX = AJAX;
    const CONFIG = CONFIG;
    const STYLESHEETS = STYLESHEETS;
    const IMAGES = IMAGES;
    const JAVASCRIPT = JAVASCRIPT;
    const LIBRARIES = LIBRARIES;
    const VIEW = VIEW;
}
?>