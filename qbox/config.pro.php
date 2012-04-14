<?php

//
// OAuth2

define('QBOX_CLIENT_ID',     'abcd0c7edcdf914228ed8aa7c6cee2f2bc6155e2');
define('QBOX_CLIENT_SECRET', 'fc9ef8b171a74e197b17f85ba23799860ddf3b9c');

define('QBOX_REDIRECT_URI',           '<RedirectURL>');
define('QBOX_AUTHORIZATION_ENDPOINT', '<AuthURL>');
define('QBOX_TOKEN_ENDPOINT',         'https://acc.qbox.me/oauth2/token');

define('TOKEN_ENDPOINT_FORMAT', 'https://%s/oauth2/token');
define('TOKEN_HOST_LIST', 'acc.qbox.me|acc2.qbox.me|acc3.qbox.me');
define('TOKEN_TOKEN_PORT', '443');

//
// QBox

define('QBOX_PUT_TIMEOUT', 300000); // 300s = 5m

define('QBOX_IO_HOST', 'http://io.qbox.me');
define('QBOX_FS_HOST', 'https://fs.qbox.me');
define('QBOX_RS_HOST', 'http://rs.qbox.me:10100');

// a more security path need
define("QBOX_TOKEN_TMP_FILE", sys_get_temp_dir() . DIRECTORY_SEPARATOR . '.qbox_tokens');
