<?php
namespace ElementorKapok02\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Kapok 2
 *
 * Elementor widget for kapok 2.
 *
 * @since 1.0.0
 */
class Kapok02 extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'kapok02';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Kapok 2', 'kapok02' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-posts-ticker';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'general' ];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends() {
		return [ 'kapok02' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Content', 'kapok02' ),
			]
		);

		$this->add_control(
			'title',
			[
				'label' => __( 'Title', 'kapok02' ),
				'type' => Controls_Manager::TEXT,
			]
			
		);

		$this->add_control(
			'fname',
			[
				'label' => __( 'First Name', 'kapok02' ),
				'type' => Controls_Manager::TEXT,
			]
		);

		$this->add_control(
			'lname',
			[
				'label' => __( 'Last Name', 'kapok02' ),
				'type' => Controls_Manager::TEXT,
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style',
			[
				'label' => __( 'Style', 'kapok02' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'text_transform',
			[
				'label' => __( 'Text Transform', 'kapok02' ),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => __( 'None', 'kapok02' ),
					'uppercase' => __( 'UPPERCASE', 'kapok02' ),
					'lowercase' => __( 'lowercase', 'kapok02' ),
					'capitalize' => __( 'Capitalize', 'kapok02' ),
				],
				'selectors' => [
					'{{WRAPPER}} .title' => 'text-transform: {{VALUE}};',
					'{{WRAPPER}} .fname' => 'text-transform: {{VALUE}};',
					'{{WRAPPER}} .lname' => 'text-transform: {{VALUE}};',


				],
			]
		);

		$this->end_controls_section();
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();

		echo '<div class="title">';
		echo $settings['title'];
		echo '</div>';

		echo '<div class="fname">';
		echo $settings['fname'];
		echo '</div>';

		echo '<div class="lname">';
		echo $settings['lname'];
		echo '</div>';


	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _content_template() {
		?>
		<div class="title">{{{ settings.title }}}</div>
		<div class="fname">{{{ settings.fname }}}</div>
		<div class="lname">{{{ settings.lname }}}</div>
		<?php
	}
}
