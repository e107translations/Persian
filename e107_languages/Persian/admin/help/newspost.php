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
|     $Source: /cvsroot/e107/e107_0.7/e107_languages/English/admin/help/newspost.php,v $
|     $Revision: 1.3 $
|     $Date: 2006/08/27 02:24:45 $
|     $Author: mcfly_e107 $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "راهنمای قسمت اخبار";
$text = "<b>عمومی</b><br />
متن خبر در صفحه اول نشان داده می شود, و ادامه متن خبر با کلیک روی عبارت 'ادامه مطلب' نمایش داده می شود.
<br />
<br />
<b>فقط نمایش عنوان</b>
<br />
برای نمایش خبر به صورت عنوان در صفحه اول این قسمت را فعال کنید تا با کلیک بر روی عنوان خبر متن کامل خبر نمایش داده شود.
<br /><br />
<b>نحوه فعالیت</b>
<br />
اگر شما یک تاریخ شروع و یک تاریخ پایان انتخاب کنید خبر ارسالی بین این دو تاریخ فعال خواهد بود و بعد از گذشت تاریخ پایان غیر فعال می شود.
";
$ns -> tablerender($caption, $text);
?>