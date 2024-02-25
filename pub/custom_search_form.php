<div id="<?php echo $css['xtreme_locator_search_form']['class']; ?>">
	<?php if ( $conf->description != "" ) { ?>
        <div id="<?php echo $css['xtreme_locator_form_message']['class']; ?>"><?php echo $conf->description; ?></div><?php } ?>
    <div id="xtreme_locator_custom_form_code"><?php echo str_replace( "SITEID", $gconf->site_id, $conf->form_code ); ?></div>
	<?php if ( $conf->show_all_location_link == 1 ) {
		echo '<div id="' . $css['xtreme_locator_all_locations_link']['class'] . '"><a href="' . '?search_type=listing' . ( isset( $_GET['page_id'] ) ? "&page_id=" . $_GET['page_id'] : "" ) . ( isset( $_GET['p'] ) ? "&p=" . $_GET['p'] : "" ) . '">' . __( "All locations", 'xtremelocatorbold' ) . '</a> </div>';
	} ?>
	<?php if ( $gconf->show_slogan == 1 ) {
		echo '<div id="xtreme_locator_powered_link"><a href="https://www.xtremelocator.com">' . __( "Powered by", 'xtremelocatorbold' ) . '</a> </div>';
	} ?>
</div>