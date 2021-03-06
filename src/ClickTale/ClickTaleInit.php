<?php
/**
 * ClickTale - PHP Integration Module
 *
 * LICENSE
 *
 * This source file is subject to the ClickTale(R) Integration Module License that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.clicktale.com/Integration/0.2/LICENSE.txt
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@clicktale.com so we can send you a copy immediately.
 *
 */
?>
<?php
/* 
// Direct access guard.
if (__FILE__ == $_SERVER["SCRIPT_FILENAME"])
	die ("This script needs to be included in order to work.");
*/
	
if (!defined('ClickTale_Root'))
{
	$pathinfo = pathinfo(__FILE__);
	define ("ClickTale_Root", $pathinfo["dirname"]);

}

?>
