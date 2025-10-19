<?php
/**
 * Account menu for emma
 *
 * @name      emma-template
 * @author    Slawkens <slawkens@gmail.com>
 * @version   1.1
 */
defined('MYAAC') or die('Direct access not allowed!');

global $action, $twig, $template_name, $logged;
if($logged && $template_name == 'emma' && !empty($action) &&
	(PAGE == 'accountmanagement' || PAGE == 'account/manage')) {
	echo $twig->render('emma-account-menu.html.twig');
}
