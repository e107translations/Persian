<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system
|
|     ©Steve Dunstan 2001-2002
|     http://e107.org
|     jalist@e107.org
|
|     Released under the terms and conditions of the
|     GNU General Public License (http://gnu.org).
|
|     $Source: /cvsroot/e107/e107_0.7/e107_languages/English/admin/help/news_category.php,v $
|     $Revision: 1.3 $
|     $Date: 2006/08/27 02:24:44 $
|     $Author: mcfly_e107 $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$text = "شما می توانید اخبار را در شاخه های مختلف دسته بندی کنید, و اجازه بدهید کاربران این شاخه ها را ببینند. <br /><br />تصاویر اخبار را در  ".e_THEME."-yourtheme-/images/ یا themes/shared/newsicons/ آپلود کنید.";
$ns -> tablerender("راهنمای شاخه اخبار", $text);
?>