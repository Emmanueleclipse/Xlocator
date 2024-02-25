<table width="500px" border="0" cellspacing="0" cellpadding="0" class='widefat'>
    <tr>
        <th>
            <img src=<?php print "'" . XTREME_LOCATOR_BASE . "/icons/icon-48-settings.png'"; ?> align="absmiddle"/> <?php print __( "Add field", 'xtremelocatorbold' ) ?>
        </th>
    </tr>
    <tr>
        <td>
            <form action="admin.php?page=xtreme-locator-settings" method="post" name="adminForm" id="adminForm"
                  class="adminForm">
                <input type="hidden" name="action" value="add_field"/>
				<?php if ( isset( $_GET['id'] ) ) {
					echo "<input type='hidden' name='xtreme_locator[id]' value='" . $_GET['id'] . "'/>";
				} ?>
                <table class="adminform">
                    <tr>
                        <td><?php print __( "Field id", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td width="80%"><input type="text" size="10" maxsize="100" name="xtreme_locator[field_id2]"
                                               value="<?php echo isset( $field[0]->field_id2 ) ? $field[0]->field_id2 : ""; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td><?php print __( "Field name", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td width="80%"><input type="text" size="30" maxsize="100" name="xtreme_locator[field_name]"
                                               value="<?php echo isset( $field[0]->field_name ) ? $field[0]->field_name : ""; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td><?php print __( "Display name", 'xtremelocatorbold' ) ?>:
                        </td>
                        <td width="80%"><input type="text" size="30" maxsize="100" name="xtreme_locator[display_name]"
                                               value="<?php echo isset( $field[0]->display_name ) ? $field[0]->display_name : ""; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button class='button-primary' type='submit' value='save'
                                    name="field_action"><?php print __( "Save", 'xtremelocatorbold' ) ?></button>
                            <button class='button-primary' type='submit' value='cancel'
                                    name="field_action"><?php print __( "Cancel", 'xtremelocatorbold' ) ?></button>
                        </td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
</table>
</form>