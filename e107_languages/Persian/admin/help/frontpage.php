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
|     $Source: /cvsroot/e107/e107_0.7/e107_languages/English/admin/help/frontpage.php,v $
|     $Revision: 1.3 $
|     $Date: 2005/12/14 17:37:43 $
|     $Author: sweetas $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "راهنمای صفحه اول سایت";
$text = "در این صفحه شما می توانید انتخاب کنید که چه قسمتی در صفحه اول سایت شما به نمایش درآید, به صورت پیش فرض قسمت اخبار به عنوان صفحه اول قرار داده می شود . شما همچنین می توانید این صفحه را به صورت 'صفحه موقت' تعریف کنید, صفحه ای که برای کاربرانی که برای دفعه اول از سایت شما بازدید می کنند نمایش داده شود.";
$ns -> tablerender($caption, $text);
?>