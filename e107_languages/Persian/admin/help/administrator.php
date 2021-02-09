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
|     $Source: /cvsroot/e107/e107_0.7/e107_languages/English/admin/help/administrator.php,v $
|     $Revision: 1.3 $
|     $Date: 2006/01/09 17:02:46 $
|     $Author: sweetas $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "راهنمای قسمت مدیران";
$text = "از این صفحه برای ایجاد کردن مدیر جدید یا ویرایش مدیران و تنظیم سطح  دسترسی آن ها استفاده کنید<br /><br />
برای تعریف مدیر جدید ابتدا از قسمت کاربران سایت یک کاربر را به عنوان مدیر انتخاب کنید";
$ns -> tablerender($caption, $text);
?>