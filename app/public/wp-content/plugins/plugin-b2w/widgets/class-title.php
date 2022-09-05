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
                'default' => __('Subtitle text goes here', 'plugin-b2w'),
            ]
        );

        $this->add_control(
            'sub-title_color',
            [
                'label' => __( 'Sub Title Color', 'plugin-b2w'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#f50057',
                'selectors' => [
					'{{WRAPPER}} .sub-title' => 'color: {{VALUE}}',
				],
            ]
            );

        $this->add_control(
            'title_text',
            [
                'label' => __( 'Title Text', 'plugin-b2w'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Type Your Title Here', 'plugin-b2w'),
                'default' => __('Add your title here', 'plugin-b2w'),
            ]
            );

            $this->add_control(
                'title_color',
                [
                    'label' => __( 'Title Color', 'plugin-b2w'),
                    'label_block' => true,
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '#111111',
                    'selectors' => [
                        '{{WRAPPER}} h2' => 'color: {{VALUE}}',
                    ],
                ]
                );

            $this->add_control(
                'title_align',
                [
                    'label' => __( 'Alignment', 'plugin-b2w'),
                    'type' => \Elementor\Controls_Manager::CHOOSE,
                    'options' => [
                   
                        'text-start' => [
                            'title' => __( 'Left', 'plugin-b2w'),
                             'icon' => 'eicon-text-align-left',
                        ],
    
                        'text-center' => [
                            'title' => __( 'Center', 'plugin-b2w'),
                            'icon' => 'eicon-text-align-center',
                        ],
    
                        'text-end' => [
                            'title' => __( 'Right', 'plugin-b2w'),
                            'icon' => 'eicon-text-align-right',
                        ]
                    ],
    
                    'default' => 'text-start',
                    'toogle' => true,

                ]
                );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo '<div class="title-wrapper ' . $settings['title_align'] . ' ">';
        echo '<p class="sub-title"> '.$settings['sub_title_text'] .' </p>';
        echo '<h2> '.$settings['title_text'].' </h2.';
        echo '</div>';
    }

}

// Register widget
\Elementor\Plugin::instance()->widgets_manager->register(new \B2W_Section_Tilte_Widget() );