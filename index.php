<?php

/**
 * Main file drives the gallery.
 *
 * Do not include this file into another page; include external.php instead.
 * 
 * @package singapore
 * @author Tamlyn Rhodes <tam at zenology dot co dot uk>
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License
 * @copyright (c)2003, 2004 Tamlyn Rhodes
 * @version $Id: index.php,v 1.21 2006/08/05 19:56:32 thepavian Exp $
 */

//include main class
require_once "includes/singapore.class.php";

//create a wrapper
$sg = new Singapore();

//set session arg separator to be xml compliant
ini_set("arg_separator.output", "&amp;");  

//only start session if session is already registered
if(isset($_REQUEST[$sg->config->session_name])) {
  //start session
  session_name($sg->config->session_name);
  @session_start();
}

//send content-type and character encoding header
@header("Content-type: text/html; charset=".$sg->character_set);

//pass control over to template
@include $sg->config->base_path.$sg->config->pathto_current_template."index.tpl.php";

?>
