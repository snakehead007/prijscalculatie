<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/snakehead007/prijscalculatie
 * @since      1.0.0
 *
 * @package    prijscalculatie
 * @subpackage prijscalculatie/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    prijscalculatie
 * @subpackage prijscalculatie/public
 * @author     Karel De Smet <snakehead007@pm.me>
 */
class prijscalculatie_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $prijscalculatie    The ID of this plugin.
	 */
	private $prijscalculatie;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $prijscalculatie       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $prijscalculatie, $version ) {

		$this->prijscalculatie = $prijscalculatie;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in prijscalculatie_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The prijscalculatie_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->prijscalculatie, plugin_dir_url( __FILE__ ) . 'css/prijscalculatie-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in prijscalculatie_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The prijscalculatie_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->prijscalculatie, plugin_dir_url( __FILE__ ) . 'js/prijscalculatie-public.js', array( 'jquery' ), $this->version, false );

	}

}
