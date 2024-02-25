<?php


define( 'XTREME_LOCATOR_DIR', dirname( plugin_basename( __FILE__ ) ) );
define( 'XTREME_LOCATOR_BASE', get_option( 'siteurl' ) . "/wp-content/plugins/" . XTREME_LOCATOR_DIR );
define( 'XTREME_LOCATOR_PATH', ABSPATH . "wp-content/plugins/" . XTREME_LOCATOR_DIR );
define( 'XTREME_LOCATOR_VERSION', '3.0.1' );
define( 'XTREME_LOCATOR_SALT', 'etuikk.5t6hu465rtherth546jkrynery435y' );
define( 'XTREME_LOCATOR_ADMIN_POST_URL', admin_url() . 'admin-post.php' );


require_once __DIR__ . '/functions.xtremelocator.php';

