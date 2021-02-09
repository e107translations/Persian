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
|     $Source: /cvsroot/e107/e107_0.7/e107_languages/English/admin/help/list_menu_conf.php,v $
|     $Revision: 1.2 $
|     $Date: 2005/12/14 17:37:43 $
|     $Author: sweetas $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$text = "در این قسمت شما می توانید 3 منو را پیکربندی کنید<br>
<b>منوی مقالات جدید</b> <br>
یک شماره وارد کنید برای مثال  '5' در این صورت 5 مقاله جدید نشان داده می شوند, برای نمایش همه خالی رها کنید, <br>
<b>منوی  نظرات/انجمن</b> <br>
شماره پیش فرض نظرات 5, شماره پیش فرض تعداد حروف نمایشی 10000. .<br>

";
$ns -> tablerender("راهنمای پیکربندی منو", $text);
?>
