<?php
/**
 * B2W Button Widget
 * 
 */

class B2w_Buttons_Widget extends \Elementor\Widget_Base {

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

    protected function register_controls() {
     
        $this->start_controls_section(
            'b2w_buttons',
            [
                'label' => __('Button', 'plugin-b2w'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
     
        // Add our controls

        $this->add_control(
            'button_text',
            [
                'label' => __('Button Text', 'plugin-b2w'),
                'label_block' => true,
                'placeholder' => __('Type something in here, wonderful', 'plugin-b2w'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Learn more', 'plugins-b2w'),
            ]
            );

        $this->add_control(
            'button_link',
            [
                'label' => __('Button Link', 'plugin-b2w'),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => false,
                ],
            ]
            );


        $this->add_control(
            'button_style',
            [
              'label' => __('Button Style', 'plugin-b2w'),
              'type' => \Elementor\Controls_Manager::SELECT,
              'default' => 'btn-primary',
              'options' => [
                
              ]
            ],
            );
        



        $this->end_controls_section();
    
    
    }


	public function get_custom_help_url() {}




	

	protected function render() {}

	protected function content_template() {}

}

\Elementor\Plugin::instance()->widgets_manager->register( new \B2w_Buttons_Widget());