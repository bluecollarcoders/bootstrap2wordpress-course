<?php 
/**
 * 
 * Custom Call to Action
 */

class B2W_Call_To_Action_Widget extends \Elementor\Widget_Base {

    public function get_name()
    {
        return 'b2w_cta';
    }

    public function get_title()
    {
        return __( 'Call to Action Card', 'plugin-b2w');
    }

    public function get_icon()
    {
        return 'eicon-call-to-action';
    }

    public function get_keywords()
    {
        return [ 'b2w', 'action', 'call to', 'happy', 'cta'];
    }

    public function get_categories() {
        return ['b2w_category'];
    }

    protected function _register_controls()
    {
        global $plugin_images;

        $this->start_controls_section(
            'b2w_cta',
            [
                'label' => __('Call to Action', 'plugin-b2w'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
            );

        $this->add_control(
            'sub_title_text', 
            [
                'label' => __('Sub Title Text', 'plugin-b2w'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Sub Title Goes HERE', 'plugin-b2w'),
                'default' => __('JOIN 49,00 STUDENTS', 'plugin-b2w'),
            ]
            );

        $this->add_control(
            'title_color',
            [
                'label' => __('Title Colour', 'plugin-b2w'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} h2' => 'color: {{VALUE}}',
                ],
            ]
            );

        $this->add_control(
            'overlay_image',
            [
                'label' => __('Choose Image', 'plugin-b2w'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => $plugin_images . '/card-css.png',
                ],
            ]
            );

        $this->add_control(
            'button_text',
            [
                'label' => __('Button Text', 'plugin-b2w'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => $plugin_images . '/card-css.png',
                ],
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
            'btn_align',
            [
                'label' => __('Alignment', 'plugin-b2w'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'text-start' => [
                        'title' => __('Left', 'plugin-b2w'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'text-center' => [
                        'title' => __('Center', 'plugin-b2w'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'text-end' => [
                        'title' => __('Right', 'plugin-b2w'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'text-center',
                'toggle' => true,
            ]
                );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),

            [
                'name' => 'background',
                'label' => __('Background', 'plugin-b2w'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .overlay',
            ]
        );

        $this->end_controls_section();
    }

}

// Register
\Elementor\Plugin::instance()->widgets_manager->register( new \B2W_Call_To_Action_Widget() );