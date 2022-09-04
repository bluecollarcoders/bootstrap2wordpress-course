<?php 
/**
 * Custom widget Link
 */

class B2W_Link_Widget extends \Elementor\Widget_Base {

    public function get_name()
    {
        return 'b2w_link';
    }

    public function get_title()
    {
        return __( 'Link', 'plugin-b2w');
    }

    public function get_icon()
    {
        return 'eicon-editor-link';
    }
}