<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system
|
|     Copyright (C) 2001-2002 Steve Dunstan (jalist@e107.org)
|     Copyright (C) 2008-2010 e107 Inc (e107.org)
|
|
|     Released under the terms and conditions of the
|     GNU General Public License (http://gnu.org).
|
|     $URL: https://e107.svn.sourceforge.net/svnroot/e107/trunk/e107_0.7/e107_plugins/forum/forum_post.php $
|     $Revision: 11678 $
|     $Id: forum_post.php 11678 2010-08-22 00:43:45Z e107coders $
|     $Author: e107coders $
+----------------------------------------------------------------------------+
*/


// Forum Notify Types 
define('NT_LAN_FT_1', 'رخداد های انجمن');
define('NT_LAN_FO_1', 'موضوع انجمن ارسال شد');
define('NT_LAN_MP_1', 'پیام انجمن ارسال شد');
define('NT_LAN_FD_1', 'موضوع انجمن حذف شد');
define('NT_LAN_FP_1', 'پیام انجمن حذف شد');
define('NT_LAN_FM_1', 'موضوع انجمن منتقل شد');

// Forum thread posted
define('NT_LAN_FO_3', 'موضوع انجمن ایجاد شد توسط');
define('NT_LAN_FO_4', 'نام انجمن');
define('NT_LAN_FO_5', 'عنوان');
define('NT_LAN_FO_6', 'پیام');
define('NT_LAN_FO_7', 'موضوع جدید ایجاد شد');

// Forum message posted
define('NT_LAN_MP_3', 'پیام انجمن ایجاد شد توسط');
define('NT_LAN_MP_4', 'نام انجمن');
define('NT_LAN_MP_6', 'پیام');
define('NT_LAN_MP_7', 'پیام جدید انجمن ایجاد شد');

// Forum thread deleted
define('NT_LAN_FD_3', 'موضوع انجمن ایجاد شد توسط');
define('NT_LAN_FD_4', 'نام انجمن');
define('NT_LAN_FD_5', 'عنوان');
define('NT_LAN_FD_6', 'پیام');
define('NT_LAN_FD_7', 'موضوع انجمن حذف شد');
define('NT_LAN_FD_8', 'موضوع انجمن ایجاد شده توسط');

// Forum message deleted
define('NT_LAN_FP_3', 'پیام انجمن ایجاد شده توسط');
define('NT_LAN_FP_4', 'نام انجمن');
define('NT_LAN_FP_6', 'پیام');
define('NT_LAN_FP_7', 'پیام انجمن حذف شد');
define('NT_LAN_FP_8', 'پیام انجمن حذف شد توسط');

// Forum thread moved
define('NT_LAN_FM_3', 'موشوع انجمن ایجاد شده توسط');
define('NT_LAN_FM_4', 'عنوان قبل');
define('NT_LAN_FM_5', 'عنوان جدید');
define('NT_LAN_FM_6', 'نام انجمن قبلی');
define('NT_LAN_FM_7', 'نام انجمن مقصد');
define('NT_LAN_FM_8', 'موضوع انجمن منتقل شد');
define('NT_LAN_FM_9', 'موضوع انجمن منتقل شده است توسط');
?>