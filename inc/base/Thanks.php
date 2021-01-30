<?php

/**
 * @package Surge
 **/

namespace Inc\base;

class Thanks
{
    public function register()
    {
        add_filter('admin_footer_text', array($this, 'remove_footer_admin'));
    }

    public function remove_footer_admin()
    {
        echo '<span id="footer-thankyou">Desenvolvido por: <a href="https://www.surge.pt" target="_blank">SURGE</a></span>';
    }
}