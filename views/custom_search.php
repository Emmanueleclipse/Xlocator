<form action="#" method="post" name="adminForm" id="adminForm" class="adminForm">
    <table width="500px" border="0" cellspacing="0" cellpadding="0" class='widefat'>
        <tr>
            <th>
                <img src=<?php print "'" . XTREME_LOCATOR_BASE . "/icons/icon-48-custom.png'"; ?> align="absmiddle"/> <?php print __( "Custom search", 'xtremelocatorbold' ) ?>
            </th>
            <th><?php print __( "You can include search to any page/post adding short tag ", 'xtremelocatorbold' ) ?><strong>[xtreme_locator_custom]</strong>
            </th>
        </tr>

        <tr>
            <td>
                <table class="adminform">
                    <tr>
                        <td><input type="submit" value="<?php print __( "Update", 'xtremelocatorbold' ) ?>"
                                   class='button-primary'/></td>
                    </tr>
                    <tr>
                        <td><?php print __( "Form code", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td><textarea name="form_code" cols="90" rows="8"><?php echo $row->form_code; ?></textarea>
                        </td>

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
                        <td><strong><?php print __( "Results Page Setup", 'xtremelocatorbold' ) ?></strong>
                        </td>
                        <td>
                        </td>

                    </tr>
                    <tr>

                        <td><?php print __( "Show search form", 'xtremelocatorbold' ) ?>:

                        </td>
                        <td>
							<?php echo makeList( 'show_form_list', array(
								__( "Yes", 'xtremelocatorbold' ) => '1',
								__( "No", 'xtremelocatorbold' )  => '0'
							), $row->show_form_list ); ?>

                        </td>
                    </tr>
                    <tr>
                        <td><?php print __( "Result type", 'xtremelocatorbold' ) ?>:

                        </td>
                        <td>
                            <input name="result_type_list" type="radio"
                                   value="1" <?php echo ( $row->result_type_list == 1 ) ? 'checked="checked"' : ''; ?>/><?php print __( "Text with map-it link", 'xtremelocatorbold' ) ?>
                            <input name="result_type_list" type="radio"
                                   value="2" <?php echo ( $row->result_type_list == 2 ) ? 'checked="checked"' : ''; ?>/><?php print __( "Text&Map", 'xtremelocatorbold' ) ?>
                            <input name="result_type_list" type="radio"
                                   value="3" <?php echo ( $row->result_type_list == 3 ) ? 'checked="checked"' : ''; ?>/> <?php print __( "Text only", 'xtremelocatorbold' ) ?>

                        </td>
                    </tr>
                    <tr>
                        <td><?php print __( "Text block width", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td><input type="text" size="10" maxsize="100" name="text_width_list"
                                   value="<?php echo $row->text_width_list; ?>"/>

                        </td>

                    </tr>
                    <tr>
                        <td><?php print __( "Text block height", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td><input type="text" size="10" maxsize="100" name="text_height_list"
                                   value="<?php echo $row->text_height_list; ?>"/>

                        </td>

                    </tr>
                    <tr>
                        <td><?php print __( "Map width", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td><input type="text" size="10" maxsize="100" name="map_width_list"
                                   value="<?php echo $row->map_width_list; ?>"/>

                        </td>

                    </tr>
                    <tr>
                        <td><?php print __( "Map height", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td><input type="text" size="10" maxsize="100" name="map_height_list"
                                   value="<?php echo $row->map_height_list; ?>"/>

                        </td>

                    </tr>
                    <tr>
                        <td><?php print __( "Map layout", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td> <?php echo makeList( 'map_layout_list', array(
								__( "Left", 'xtremelocatorbold' )   => '1',
								__( "Right", 'xtremelocatorbold' )  => '0',
								__( "Top", 'xtremelocatorbold' )    => '2',
								__( "Bottom", 'xtremelocatorbold' ) => '3',
								__( "CSS", 'xtremelocatorbold' )    => '4'
							), $row->map_layout_list ); ?>

                        </td>

                    </tr>
                    <tr>
                        <td><?php print __( "Locations per page", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td><input type="text" size="10" maxsize="100" name="locations_per_page"
                                   value="<?php echo $row->locations_per_page; ?>"/>
                        </td>

                    </tr>
                    <tr>
                        <td><?php print __( "Location columns", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td><input type="text" size="10" maxsize="100" name="location_columns"
                                   value="<?php echo $row->location_columns; ?>"/>
                        </td>

                    </tr>

                    <tr>
                        <td><strong><?php print __( "Location Detail Page Setup", 'xtremelocatorbold' ) ?></strong>
                        </td>
                        <td>
                        </td>

                    </tr>
                    <tr>

                        <td><?php print __( "Show search form", 'xtremelocatorbold' ) ?>:

                        </td>
                        <td>
							<?php echo makeList( 'show_form_details', array(
								__( "Yes", 'xtremelocatorbold' ) => '1',
								__( "No", 'xtremelocatorbold' )  => '0'
							), $row->show_form_details ); ?>

                        </td>
                    </tr>
                    <tr>
                        <td><?php print __( "Result type", 'xtremelocatorbold' ) ?>:

                        </td>
                        <td>
                            <input name="result_type_details" type="radio"
                                   value="1" <?php echo ( $row->result_type_details == 1 ) ? 'checked="checked"' : ''; ?>/><?php print __( "Text with map-it link", 'xtremelocatorbold' ) ?>
                            <input name="result_type_details" type="radio"
                                   value="2" <?php echo ( $row->result_type_details == 2 ) ? 'checked="checked"' : ''; ?>/><?php print __( "Text&Map", 'xtremelocatorbold' ) ?>
                            <input name="result_type_details" type="radio"
                                   value="3" <?php echo ( $row->result_type_details == 3 ) ? 'checked="checked"' : ''; ?>/><?php print __( "Text only", 'xtremelocatorbold' ) ?>

                        </td>
                    </tr>
                    <tr>
                        <td><?php print __( "Text block width", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td><input type="text" size="10" maxsize="100" name="text_width_details"
                                   value="<?php echo $row->text_width_details; ?>"/>

                        </td>

                    </tr>
                    <tr>
                        <td><?php print __( "Text block height", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td><input type="text" size="10" maxsize="100" name="text_height_details"
                                   value="<?php echo $row->text_height_details; ?>"/>

                        </td>

                    </tr>
                    <tr>
                        <td><?php print __( "Map width", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td><input type="text" size="10" maxsize="100" name="map_width_details"
                                   value="<?php echo $row->map_width_details; ?>"/>

                        </td>

                    </tr>
                    <tr>
                        <td><?php print __( "Map height", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td><input type="text" size="10" maxsize="100" name="map_height_details"
                                   value="<?php echo $row->map_height_details; ?>"/>

                        </td>

                    </tr>
                    <tr>
                        <td><?php print __( "Map layout", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td> <?php echo makeList( 'map_layout_details', array(
								__( "Left", 'xtremelocatorbold' )   => '1',
								__( "Right", 'xtremelocatorbold' )  => '0',
								__( "Top", 'xtremelocatorbold' )    => '2',
								__( "Bottom", 'xtremelocatorbold' ) => '3',
								__( "CSS", 'xtremelocatorbold' )    => '4'
							), $row->map_layout_details ); ?>

                        </td>

                    </tr>
                    <tr>
                        <td><strong><?php print __( "Field control", 'xtremelocatorbold' ) ?></strong>
                        </td>
                        <td>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2">
                            <table class="adminlist">
                                <thead>
                                <tr>
                                    <th>
                                        <a href="admin.php?page=xtreme-locator-custom-search&amp;sort_by=field_name"><?php print __( "Field", 'xtremelocatorbold' ) ?></a>
                                    </th>
                                    <th><?php print __( "Enabled", 'xtremelocatorbold' ) ?></th>
                                    <th>
                                        <a href="admin.php?page=xtreme-locator-custom-search&amp;sort_by=field_id"><?php print __( "Id", 'xtremelocatorbold' ) ?></a>
                                    </th>
                                    <th colspan="4"><?php print __( "Location list", 'xtremelocatorbold' ) ?></th>
                                    <th colspan="3"><?php print __( "Location details", 'xtremelocatorbold' ) ?></th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><strong><?php print __( "Detail link", 'xtremelocatorbold' ) ?></strong></td>
                                    <td><strong><?php print __( "Visible", 'xtremelocatorbold' ) ?></strong></td>
                                    <td><strong><?php print __( "Show title", 'xtremelocatorbold' ) ?></strong></td>
                                    <td>
                                        <strong><a href="admin.php?page=xtreme-locator-custom-search&amp;sort_by=field_order"><?php print __( "Order", 'xtremelocatorbold' ) ?></a></strong>
                                    </td>
                                    <td><strong><?php print __( "Visible", 'xtremelocatorbold' ) ?></strong></td>
                                    <td><strong><?php print __( "Show title", 'xtremelocatorbold' ) ?></strong></td>
                                    <td>
                                        <strong><a href="admin.php?page=xtreme-locator-custom-search&amp;sort_by=field_order"><?php print __( "Order", 'xtremelocatorbold' ) ?></a></strong>
                                    </td>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><input name="lincable" type="radio"
                                               value="0"/><?php print __( "No link", 'xtremelocatorbold' ) ?></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tfoot>
                                <tbody>
								<?php

								if ( ! isset( $_GET['t'] ) || $_GET['t'] == 1 ) {
									$afields = $fields;
								} else {
									$afields = $fields2;
								}
								foreach ( $afields as $i => $ff ) {
									?>
									<?php isset( $fields[ $i ] ) ? $cfl = $fields[ $i ] : $cfl = false; ?>
									<?php isset( $fields2[ $i ] ) ? $cfd = $fields2[ $i ] : $cfd = false; ?>

                                    <tr>
                                        <td><?php echo $afields[ $i ]->field_name; ?></td>
                                        <td><?php echo $afields[ $i ]->enabled == 1 ? __( "Yes", 'xtremelocatorbold' ) : __( "No", 'xtremelocatorbold' ); ?></td>

                                        <td><?php echo $afields[ $i ]->field_id2; ?></td>
                                        <td><input name="lincable" type="radio"
                                                   value="<?php echo $afields[ $i ]->id; ?>" <?php echo $cfl->lincable == 1 ? 'checked="checked"' : ""; ?>/>
                                        </td>
                                        <td><input type="checkbox" name="visible[1_6_<?php echo $afields[ $i ]->id; ?>]"
                                                   value="1" <?php echo $cfl->visible == 1 ? 'checked="checked"' : ""; ?>/>
                                        </td>
                                        <td><input type="checkbox" name="title[1_6_<?php echo $afields[ $i ]->id; ?>]"
                                                   value="1" <?php echo $cfl->show_title == 1 ? 'checked="checked"' : ""; ?>/>
                                        </td>
                                        <td><input type="text" name="order[1_6_<?php echo $afields[ $i ]->id; ?>]"
                                                   value="<?php echo $cfl->field_order; ?>"/></td>
                                        <td><input type="checkbox" name="visible[2_6_<?php echo $afields[ $i ]->id; ?>]"
                                                   value="1" <?php echo $cfd->visible == 1 ? 'checked="checked"' : ""; ?>/>
                                        </td>
                                        <td><input type="checkbox" name="title[2_6_<?php echo $afields[ $i ]->id; ?>]"
                                                   value="1" <?php echo $cfd->show_title == 1 ? 'checked="checked"' : ""; ?>/>
                                        </td>
                                        <td><input type="text" name="order[2_6_<?php echo $afields[ $i ]->id; ?>]"
                                                   value="<?php echo $cfd->field_order; ?>"/></td>
                                    </tr>
								<?php } ?>

                                </tbody>

                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td><?php print __( "Show advanced search link", 'xtremelocatorbold' ) ?>:
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
