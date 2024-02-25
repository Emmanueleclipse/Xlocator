<div id="<?php echo $css['xtreme_locator_search_form']['class']; ?>">
	<?php if ( $conf->description != "" ) { ?>
        <div id="<?php echo $css['xtreme_locator_form_message']['class']; ?>"><?php echo $conf->description; ?></div><?php } ?>
    <iframe width="<?php echo $conf->map_width_details; ?>" height="<?php echo $conf->map_height_details; ?>"
            scrolling="no" frameborder="0" hspace="0" vspace="0" marginheight="0" marginwidth="0" src="<?php echo $gconf->domain; ?>
    /visitor/googlemap.php?show=all&sid=<?php echo $gconf->site_id; ?>&_center=<?php echo $conf->center_coordinates; ?>
    &zoom=<?php echo $conf->zoom_level; ?>&width=<?php echo $conf->map_width_details; ?>
    px&height=<?php echo $conf->map_height_details; ?>px" name="mapContainer" id="mapContainer"></iframe>
	<?php if ( $conf->show_advanced_link == 1 ) {
		echo '<div id="' . $css['xtreme_locator_advanced_search_link']['class'] . '"><a href="' . '?search_type=advanced' . ( isset( $_GET['page_id'] ) ? "&page_id=" . $_GET['page_id'] : "" ) . ( isset( $_GET['p'] ) ? "&p=" . $_GET['p'] : "" ) . '">' . __( "Advanced search", 'xtremelocatorbold' ) . '</a> </div>';
	} ?>
	<?php if ( $conf->show_all_location_link == 1 ) {
		echo '<div id="' . $css['xtreme_locator_all_locations_link']['class'] . '"><a href="' . '?search_type=listing' . ( isset( $_GET['page_id'] ) ? "&page_id=" . $_GET['page_id'] : "" ) . ( isset( $_GET['p'] ) ? "&p=" . $_GET['p'] : "" ) . '">' . __( "All locations", 'xtremelocatorbold' ) . '</a> </div>';
	} ?>
	<?php if ( $gconf->show_slogan == 1 ) {
		echo '<div id="xtreme_locator_powered_link"><a href="https://www.xtremelocator.com">' . __( "Powered by", 'xtremelocatorbold' ) . '</a> </div>';
	} ?>
</div>