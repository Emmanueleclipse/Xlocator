<script type="text/javascript">
    function getParams() {
        url_code = document.getElementById('url_code');
        ucode = url_code.value;
        center = document.getElementById("center_coordinates");
        zoom = document.getElementById("zoom_level");
        mwidth = document.getElementById("map_width_details");
        mheight = document.getElementById("map_height_details");
        if (ucode != "") {

            center.value = ucode.substring(ucode.indexOf("&_center=") + 9, ucode.indexOf("&zoom="));
            zoom.value = ucode.substring(ucode.indexOf("&zoom=") + 6, ucode.indexOf("&width="));
            mwidth.value = ucode.substring(ucode.indexOf("&width=") + 7, ucode.indexOf("px&height"));
            mheight.value = ucode.substring(ucode.indexOf("&height=") + 8, ucode.length - 2);

        }

        mmap = document.getElementById('mapContainer');
        mmap.width = mwidth.value;
        mmap.height = mheight.value;
        mmap.src = '<?php echo $gobal_config->domain;?>/visitor/googlemap.php?show=all&sid=<?php echo $gobal_config->site_id;?>&_center=' + center.value + '&zoom=' + zoom.value + '&width=' + mwidth.value + 'px&height=' + mheight.value + 'px';
    }
</script>

<form action="#" method="post" name="adminForm" id="adminForm" class="adminForm">
    <table width="500px" border="0" cellspacing="0" cellpadding="0" class='widefat'>
        <tr>
            <th>
                <img src=<?php print "'" . XTREME_LOCATOR_BASE . "/icons/icon-48-all_locations.png'"; ?> align="absmiddle"/> <?php print __( "All location map", 'xtremelocatorbold' ) ?>
            </th>
            <th><?php print __( "You can include search to any page/post adding short tag ", 'xtremelocatorbold' ) ?><strong>
                    [xtreme_locator_all]</strong></th>
        </tr>
        <tr>
            <td>
                <table class="adminform">
                    <tr>
                        <td><input type="submit" value="<?php print __( "Update", 'xtremelocatorbold' ) ?>"
                                   class='button-primary'/></td>
                    </tr>
                    <tr>
                        <td><?php print __( "Message", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td>
                            <div id="poststuff">
								<?php
								wp_editor( $row->description, "description", "", true );
								?>
                            </div>
                        </td>

                    </tr>

                    <tr>
                        <td><?php print __( "Map width", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td><input type="text" size="10" maxsize="100" name="map_width_details"
                                   value="<?php echo $row->map_width_details; ?>" id="map_width_details"/>

                        </td>

                    </tr>
                    <tr>
                        <td><?php print __( "Map height", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td><input type="text" size="10" maxsize="100" name="map_height_details"
                                   value="<?php echo $row->map_height_details; ?>" id="map_height_details"/>
                        </td>

                    </tr>
                    <tr>
                        <td><?php print __( "Center coordinate", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td><input type="text" size="30" maxsize="100" name="center_coordinates"
                                   value="<?php echo $row->center_coordinates; ?>" id="center_coordinates"/>
                        </td>

                    </tr>
                    <tr>
                        <td><?php print __( "Zoom level", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td><input type="text" size="10" maxsize="100" name="zoom_level"
                                   value="<?php echo $row->zoom_level; ?>" id="zoom_level"/>
                        </td>

                    </tr>
                    <tr>
                        <td><?php print __( "URL code from XtremeLocator", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td><input type="text" size="100" maxsize="500" name="URLcode" id="url_code"/>
                            <input type="button" onClick="getParams();return true;"
                                   value="<?php print __( "Regenerate Map", 'xtremelocatorbold' ) ?>"/>
                        </td>
                    </tr>


                </table>
            </td>
        </tr>
        <tr>
            <td>
                <iframe width="<?php echo $row->map_width_details; ?>" height="<?php echo $row->map_height_details; ?>"
                        scrolling="no" frameborder="0" hspace="0" vspace="0" marginheight="0"
                'marginwidth="0" src="<?php echo $gobal_config->domain; ?>
                /visitor/googlemap.php?show=all&sid=<?php echo $gobal_config->site_id; ?>
                &_center=<?php echo $row->center_coordinates; ?>&zoom=<?php echo $row->zoom_level; ?>
                &width=<?php echo $row->map_width_details; ?>px&height=<?php echo $row->map_height_details; ?>px"
                name="mapContainer" id="mapContainer"></iframe>
            </td>
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                        <td>
							<?php print __( "Show advanced search link", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td><?php echo makeList( 'show_advanced_link', array(
								__( "Yes", 'xtremelocatorbold' ) => '1',
								__( "No", 'xtremelocatorbold' )  => '0'
							), $row->show_advanced_link ); ?>
                        </td>

                    </tr>
                    <tr>
                        <td><?php print __( "Show all location link", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td><?php echo makeList( 'show_all_location_link', array(
								__( "Yes", 'xtremelocatorbold' ) => '1',
								__( "No", 'xtremelocatorbold' )  => '0'
							), $row->show_all_location_link ); ?>
                        </td>

                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>
