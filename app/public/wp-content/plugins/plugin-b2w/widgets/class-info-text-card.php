<?php 
/**
 * Custom Text Card Widget
 * 
 */

class B2W_Info_Text_Card_Widget extends \Elementor\Widget_Base {

    public function get_name()
    {
        return 'b2w_info_text_card';
    }

    public function get_title()
    {
        return __( 'Info Card', 'plugin-b2w');
    }

    public function get_icon()
    {
        return 'eicon-editor-card';
    }

    public function get_keywords()
    {
        return [ 'b2w', 'info', 'card', 'highlight'];
    }

    public function get_categories() {
        return ['b2w_category'];
    }

    protected function register_controls()
    {
        $this->start_controls_section(
            'b2w_card_text_info',
            [
                'label' => __( 'Link', 'plugin-b2w'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->end_controls_section();
    }
}

// Register widget
\Elementor\Plugin::instance()->widgets_manager->register( new \B2W_Info_Text_Card_Widget() );