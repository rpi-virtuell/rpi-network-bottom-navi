<?php
/*
Plugin Name: RPI Network Footer Navi
Plugin URI: https://github.com/rpi-virtuell/rpi-network-bottom-navi
Description: Zeigt einen RPI Netzwerk footer an
Version: 1.0
Author: Daniel Reintanz
Author URI: https://github.com/FreelancerAMP
*/
class RpiNetworkBottomNavi
{
    private $version;
    public function __construct()
    {
        $this->version = '1.0';

        //TODO check for blocksy theme to prevent empty css vars
        add_action('admin_enqueue_scripts', array($this, 'enqueue_styles'),100);

        add_action('wp_footer', [$this, 'display_rpi_network_navi']);
    }

    public function display_rpi_network_navi()
    {
        ob_start();

        ?>
        <div data-row="bottom"><div class="ct-container-fluid" data-columns-divider="md:sm"><div data-column="menu-secondary">
                    <nav  class="footer-menu-inline rpi-footer-menu" data-id="menu-secondary" itemscope="" itemtype="https://schema.org/SiteNavigationElement" aria-label="Footer-Menü">

                        <ul id="menu-rpi-bottom-nav-1" class="menu" role="menubar"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1155" role="none"><a href="https://rpi-virtuell.de" aria-current="page" class="ct-menu-link" role="menuitem"><i class="_mi _before dashicons dashicons-admin-home" aria-hidden="true"></i><span>Home</span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1156" ><a href="https://material.rpi-virtuell.de/" class="ct-menu-link" role="menuitem"><i class="_mi _before dashicons dashicons-category" aria-hidden="true"></i><span>Material</span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1157" ><a href="https://news.rpi-virtuell.de/" class="ct-menu-link" role="menuitem"><i class="_mi _before dashicons dashicons-rss" aria-hidden="true"></i><span>News</span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1158" ><a href="https://element.rpi-virtuell.de/" class="ct-menu-link" role="menuitem"><i class="_mi _before dashicons dashicons-format-chat" aria-hidden="true"></i><span>Messenger</span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1159" ><a href="https://reliverse.social" class="ct-menu-link" role="menuitem"><i class="_mi _before dashicons dashicons-share-alt" aria-hidden="true"></i><span>Reliverse</span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1160" ><a href="https://blogs.rpi-virtuell.de/" class="ct-menu-link" role="menuitem"><i class="_mi _before dashicons dashicons-admin-multisite" aria-hidden="true"></i><span>Blogs</span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1161" ><a href="https://cloud.rpi-virtuell.de/" class="ct-menu-link" role="menuitem"><i class="_mi _before dashicons dashicons-cloud" aria-hidden="true"></i><span>Cloud</span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1177" s><a href="https://konto.rpi-virtuell.de/" class="ct-menu-link" role="menuitem"><i class="_mi _before dashicons dashicons-admin-network" aria-hidden="true"></i><span>Account</span></a></li>
                        </ul></nav>
                </div></div></div>
<?php

        echo ob_get_clean();
    }
    public  function enqueue_styles(){
        wp_enqueue_style('dashicons');
        wp_enqueue_style('rpi-network-bottom-navi-style', plugin_dir_url(__FILE__) . 'css/rpi-network-bottom-navi-style.css', $this->version, 'all');
    }
}

new RpiNetworkBottomNavi();