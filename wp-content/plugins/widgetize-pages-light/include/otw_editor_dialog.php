<?php 

/** OTW tinyMCE editor dialog
  *
  */
global $wp_registered_sidebars;

$nr_sidebars = array();
if( is_array( $wp_registered_sidebars ) && count( $wp_registered_sidebars ) ){
	
	foreach( $wp_registered_sidebars as $sidebar ){
		
		if( preg_match( "/^otw\-sidebar\-/", $sidebar['id'] ) && $sidebar['replace'] == '' ){
			
			$nr_sidebars[] = $sidebar;
		}
	}
}

?>
<div class="otw_dialog_content">
	<?php if( is_array( $nr_sidebars ) && count( $nr_sidebars ) ){?>
		<p>
			<?php _e( 'Please select a sidebar from the dropdown list', 'widgetize-pages-light' );?>
		</p>
		<p>
			<label for="o_sidebar"><?php _e( 'Select sidebar', 'widgetize-pages-light' )?></label>
			<select id="o_sidebar" name="o_sidebar" style="width: 400px;">
				<?php foreach( $nr_sidebars as $sidebar ){?>
					<option value="<?php echo $sidebar['id']?>"><?php echo $sidebar['name']?></option>
				<?php }?>
			</select>
		</p>
		<p>
			<input type="button" class="button-primary" value="<?php _e('Cancel', 'widgetize-pages-light')?>" onclick="tb_remove();" />
			<input type="button" class="button-primary" value="<?php _e('Insert', 'widgetize-pages-light')?>" onclick="insertShortCode();" />
		</p>
	<?php }else{?>
		<?php _e( 'There are no available sidebars', 'widgetize-pages-light' );?>
	<?php }?>
</div>
