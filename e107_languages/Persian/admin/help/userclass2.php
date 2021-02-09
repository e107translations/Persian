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
|     $Source: /cvsroot/e107/e107_0.7/e107_languages/English/admin/help/userclass2.php,v $
|     $Revision: 1.2 $
|     $Date: 2005/12/14 17:37:43 $
|     $Author: sweetas $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "راهنمای رتبه کاربران";
$text = "شما می توانید در این قسمت رتبه جدید اضافه کنید یا رتبه های موجود را ویرایش/حذف کنید <br />این ابزاری مفید برای محدود کردن کاربران از قسمتی از سایت شماست. برای مثال, شما رتبه ای با نام 'انجمن' ایجاد کنید, سپس یک انجمن ایجاد کنید و فقط اجازه استفاده برای آن را به رتبه انجمن بدهید .";
$ns -> tablerender($caption, $text);
?>