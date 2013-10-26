<?php
if(file_exists(ICL_PLUGIN_PATH . '/inc/sandbox.inc')){
    require ICL_PLUGIN_PATH . '/inc/sandbox.inc';
} else {
    define('ICL_API_ENDPOINT', 'https://www.icanlocalize.com');
}

if(!defined('ICL_PLUGIN_INACTIVE')){
    define('ICL_PLUGIN_INACTIVE', false);
}

/* legacy? */
define('CMS_REQUEST_WAITING_FOR_PROJECT_CREATION',1);

define ('ICL_FINANCE_LINK', '/finance');

define('MESSAGE_TRANSLATION_IN_PROGRESS', 3);
define('MESSAGE_TRANSLATION_COMPLETE', 4);
/* */


define('ICL_LANG_SEL_BLUE_FONT_CURRENT_NORMAL', '#ffffff');
define('ICL_LANG_SEL_BLUE_FONT_CURRENT_HOVER', '#000000');
define('ICL_LANG_SEL_BLUE_BACKGROUND_CURRENT_NORMAL', '#0099cc');
define('ICL_LANG_SEL_BLUE_BACKGROUND_CURRENT_HOVER', '#0099cc');
define('ICL_LANG_SEL_BLUE_FONT_OTHER_NORMAL', '#000000');
define('ICL_LANG_SEL_BLUE_FONT_OTHER_HOVER', '#000000');
define('ICL_LANG_SEL_BLUE_BACKGROUND_OTHER_NORMAL', '#eeeeee');
define('ICL_LANG_SEL_BLUE_BACKGROUND_OTHER_HOVER', '#cccccc');
define('ICL_LANG_SEL_BLUE_BORDER', '#000000');

define('ICL_LANG_SEL_WHITE_FONT_CURRENT_NORMAL', '#444444');
define('ICL_LANG_SEL_WHITE_FONT_CURRENT_HOVER', '#000000');
define('ICL_LANG_SEL_WHITE_BACKGROUND_CURRENT_NORMAL', '#ffffff');
define('ICL_LANG_SEL_WHITE_BACKGROUND_CURRENT_HOVER', '#eeeeee');
define('ICL_LANG_SEL_WHITE_FONT_OTHER_NORMAL', '#444444');
define('ICL_LANG_SEL_WHITE_FONT_OTHER_HOVER', '#000000');
define('ICL_LANG_SEL_WHITE_BACKGROUND_OTHER_NORMAL', '#ffffff');
define('ICL_LANG_SEL_WHITE_BACKGROUND_OTHER_HOVER', '#eeeeee');
define('ICL_LANG_SEL_WHITE_BORDER', '#aaaaaa');

define('ICL_LANG_SEL_GRAY_FONT_CURRENT_NORMAL', '#222222');
define('ICL_LANG_SEL_GRAY_FONT_CURRENT_HOVER', '#000000');
define('ICL_LANG_SEL_GRAY_BACKGROUND_CURRENT_NORMAL', '#eeeeee');
define('ICL_LANG_SEL_GRAY_BACKGROUND_CURRENT_HOVER', '#dddddd');
define('ICL_LANG_SEL_GRAY_FONT_OTHER_NORMAL', '#222222');
define('ICL_LANG_SEL_GRAY_FONT_OTHER_HOVER', '#000000');
define('ICL_LANG_SEL_GRAY_BACKGROUND_OTHER_NORMAL', '#eeeeee');
define('ICL_LANG_SEL_GRAY_BACKGROUND_OTHER_HOVER', '#dddddd');
define('ICL_LANG_SEL_GRAY_BORDER', '#555555');


define('ICL_PRO_TRANSLATION_COST_PER_WORD', 0.09);

define('ICL_PRO_TRANSLATION_PICKUP_XMLRPC', 0);
define('ICL_PRO_TRANSLATION_PICKUP_POLLING', 1);

define('ICL_WP_UPDATE_LOCALE', 'en_US');
