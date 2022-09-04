<?php
/**
 * Custon Elementor widget with Subtitle and Title
 */ 

class B2W_Section_Tilte_Widget extends \Elementor\Widget_Base {

	public function get_name() {
        return 'b2w_title';
    }

	public function get_title() {
        return __('Title with Subtitle', 'plugin-b2w');
    }

	public function get_icon() {
        return 'eicon-site-title';
    }

	public function get_categories() {
        return ['b2w_category'];
    }


    public function get_keywords() {
        return [ 'b2w', 'title', 'subtitle', 'heading', 'happy' ];
      }

    protected function _register_controls()
    {
        $this->start_controls_section(

          'b2w_title',
          [
            'label' => __( 'Title with Subtitle', 'plugin-b2w'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
          ]
        );

        $this->add_control(
            'sub_title_text',
            [
                'label' => __('Sub Title Text', 'plugin-b2w'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Type Your Sub Title Here', 'plugin-b2w'),
                'default' => __('Subtitle text foes here', 'plugin-b2w'),
            ]
        );

        $this->end_controls_section();
    }

}

// Register widget
\Elementor\Plugin::instance()->widgets_manager->register(new \B2W_Section_Tilte_Widget() );