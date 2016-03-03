<?php
// Load all files (Hooks) in the folder /classes with the extension _.php
foreach ( glob( plugin_dir_path( __FILE__ ) . "classes/*.php" ) as $hooks ) {
    include_once $hooks;
}
