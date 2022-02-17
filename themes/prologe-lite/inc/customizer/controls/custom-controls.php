<?php
/**
 * Note and Separator Controls for the Customizer
 * Example usage below.
 * @package Prologe
 */

if ( class_exists( 'WP_Customize_Control' ) ) {

	// Separator Control
	if ( ! class_exists( 'Prologe_Separator_Control' ) ) {
		class Prologe_Separator_Control extends WP_Customize_Control {
		
			// Render the hr.
			public function render_content() {
				echo '<hr/>';
			}

		}
	}

	// Note Control
	if ( ! class_exists( 'Prologe_Note_Control' ) ) {

		class Prologe_Note_Control extends WP_Customize_Control {
			public function render_content() {
				?>

<label class="customizer-note">
    <span class="customizer-control-heading"><?php echo wp_kses_post( $this->label ); ?></span>
</label>
<span class="customize-control-description"><?php echo wp_kses_post( $this->description ); ?></span>

<?php
			}
		}
	}


	// Range control with indicator
	class Prologe_Customize_Range_Control extends WP_Customize_Control	{
		
		public $type = 'custom_range';
		public function enqueue()
		{
				
		// Use minified libraries if SCRIPT_DEBUG is false
		$build  = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '/build' : '';
		$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
		
			wp_enqueue_script(  'prologe-range-control', get_template_directory_uri() . '/assets/js' . $build . '/range-control' . $suffix . '.js', array('jquery'),  false,  true );
		}

	public function render_content()
		{
			?>
<label>
    <?php if ( ! empty( $this->label )) : ?>
    <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
    <?php endif; ?>
    <div class="prologe-range-value"><?php echo esc_html($this->value()); ?></div>
    <input data-input-type="range" type="range" class="prologe-range-input" <?php $this->input_attrs(); ?> value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> />
    <?php if ( ! empty( $this->description )) : ?>
    <span class="description customize-control-description"><?php echo $this->description; ?></span>
    <?php endif; ?>
</label>
<?php
		}
	}



	// Displays the upgrade teasers in thhe Pro Version / More Features section.
	class Prologe_Lite_Customize_Static_Text_Control extends WP_Customize_Control {
		// Render Control
		public function render_content() {
	?>

    <div class="upgrade-pro-version">		
		
    <p class="rp-pro-heading"><?php esc_html_e('Prologe Pro - Save $10', 'prologe-lite') ?></p>
    <p class="rp-discount"><?php esc_html_e('Save $10 (Limited Time Offer!) if you purchase the Pro version with this discount code on checkout:', 'prologe-lite') ?>
        <span class="rp-discount-code"><?php esc_html_e('PROLOGE10', 'prologe-lite') ?></span></p>
    <p class="rp-pro-title"><?php esc_html_e('Pro Features:', 'prologe-lite') ?></p>
	
	
    <ul class="rp-pro-list">
        <li><?php esc_html_e('&bull; 6 Blog Styles', 'prologe-lite')?></li>
        <li><?php esc_html_e('&bull; 8 Dynamic Sidebar Positions', 'prologe-lite')?></li>
        <li><?php esc_html_e('&bull; 3 Full Post Layouts', 'prologe-lite')?></li>
        <li><?php esc_html_e('&bull; 5 Menu Locations', 'prologe-lite')?></li>
		<li><?php esc_html_e('&bull; Option to Disable Gutenberg Styles', 'prologe-lite')?></li>
        <li><?php esc_html_e('&bull; Additional Page Templates', 'prologe-lite')?></li>
        <li><?php esc_html_e('&bull; Thumbnail Creation for the Blogs', 'prologe-lite')?></li>
        <li><?php esc_html_e('&bull; Related Posts w/thumbnails', 'prologe-lite')?></li>
		<li><?php esc_html_e('&bull; Custom Blog Intro Heading', 'prologe-lite')?></li>
		<li><?php esc_html_e('&bull; Custom Comments Widget w/Avatar', 'prologe-lite')?></li>
        <li><?php esc_html_e('&bull; Feature a Post on the Blog', 'prologe-lite')?></li>
        <li><?php esc_html_e('&bull; An About Me Widget', 'prologe-lite')?></li>
        <li><?php esc_html_e('&bull; A Social Links Widget', 'prologe-lite')?></li>
        <li><?php esc_html_e('&bull; Customize the Read More Button Text', 'prologe-lite')?></li>
        <li><?php esc_html_e('&bull; Custom Styled Archive Titles', 'prologe-lite')?></li>
        <li><?php esc_html_e('&bull; We Made the Customizer Look Better', 'prologe-lite')?></li>
        <li><?php esc_html_e('&bull; Show or Hide Various Elements', 'prologe-lite')?></li>
        <li><?php esc_html_e('&bull; Priority Support', 'prologe-lite')?></li>
		<li><?php esc_html_e('&bull; Plus more...', 'prologe-lite')?></li>
    </ul>

    <p><a class="rp-get-pro button" href="<?php echo esc_url('https://www.roughpixels.com/blogging-themes/prologe/'); ?>" target="_blank"><?php esc_html_e( 'Save $10 Now', 'prologe-lite' ); ?></a></p>			

    </div>

    <?php
		}
	}

}