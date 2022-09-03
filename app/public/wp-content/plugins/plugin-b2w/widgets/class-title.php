<?php
/**
 * Custon Elementor widget with Subtitle and Title
 */ 

class B2W_Section_Tilte_Widget extends \Elementor\Widget_Base {

	public function get_name() {
        return 'b2w_buttons';
    }

	public function get_title() {
        return __('button', 'plugin-b2w');
    }

	public function get_icon() {
        return 'eicon-button';
    }

	public function get_categories() {
        return ['b2w_category'];
    }


    public function get_keywords() {
        return [ 'b2w', 'button', 'link', 'ui', 'cta', 'happy' ];
      }

}

// Register widget
\Elementor\Plugin::instance()->widgets_manager->register(new \B2W_Section_Tilte_Widget() );