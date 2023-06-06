<?php

/*
Plugin Name: RPI Network Footer Navi
Plugin URI: https://github.com/rpi-virtuell/rpi-network-bottom-navi
Description: Zeigt einen RPI Netzwerk footer an
Version: 1.1
Author: Daniel Reintanz
Author URI: https://github.com/FreelancerAMP
*/

class RpiNetworkBottomNavi
{
    private $version;

    public function __construct()
    {
        $this->version = '1.1';

        //TODO check for blocksy theme to prevent empty css vars
        add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));

        add_action('wp_footer', [$this, 'display_rpi_network_navi']);
    }

    public function display_rpi_network_navi()
    {

        if ('blocksy-child' == get_stylesheet()) {

            ob_start();
            ?>

            <div class="rpi-footer-menu">
                <div data-column="menu-secondary">
                    <nav class="footer-menu-inline" data-id="menu-secondary" itemscope=""
                         itemtype="https://schema.org/SiteNavigationElement" aria-label="Footer-Menü">


                        <ul id="menu-rpi-bottom-nav-1" class="menu" role="menubar">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"
                                role="none"><a href="https://rpi-virtuell.de" aria-current="page" class="ct-menu-link"
                                               role="menuitem"><i class="_mi _before dashicons dashicons-admin-home"
                                                                  aria-hidden="true"></i><span>Home</span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                        href="https://material.rpi-virtuell.de/" class="ct-menu-link" role="menuitem"><i
                                            class="_mi _before dashicons dashicons-category"
                                            aria-hidden="true"></i><span>Material</span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                        href="https://news.rpi-virtuell.de/" class="ct-menu-link" role="menuitem"><i
                                            class="_mi _before dashicons dashicons-rss"
                                            aria-hidden="true"></i><span>News</span></a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom "><a
                                        href="https://element.rpi-virtuell.de/" class="ct-menu-link" role="menuitem"><i
                                            class="_mi _before dashicons dashicons-format-chat"
                                            aria-hidden="true"></i><span>Messenger</span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                        href="https://reliverse.social" class="ct-menu-link" role="menuitem"><i
                                            class="_mi _before dashicons dashicons-share-alt"
                                            aria-hidden="true"></i><span>Reliverse</span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                        href="https://blogs.rpi-virtuell.de/" class="ct-menu-link" role="menuitem"><i
                                            class="_mi _before dashicons dashicons-admin-multisite"
                                            aria-hidden="true"></i><span>Blogs</span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                        href="https://cloud.rpi-virtuell.de/" class="ct-menu-link" role="menuitem"><i
                                            class="_mi _before dashicons dashicons-cloud"
                                            aria-hidden="true"></i><span>Cloud</span></a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                        href="https://konto.rpi-virtuell.de/" class="ct-menu-link" role="menuitem"><i
                                            class="_mi _before dashicons dashicons-admin-network"
                                            aria-hidden="true"></i><span>Account</span></a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                        href="https://hilfe.rpi-virtuell.de//" class="ct-menu-link" role="menuitem"><i
                                            class="_mi _before dashicons dashicons-editor-help"
                                            aria-hidden="true"></i><span>Hilfe</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <?php
            echo ob_get_clean();
        } else {
            ob_start();
            ?>

            <div class="rpi-footer-menu no-blocksy">
                <div>
                    <nav>


                        <ul>
                            <li><a href="https://rpi-virtuell.de"><i class="dashicons dashicons-admin-home" title="rpi-virtuell"
                                    ></i><span>Home</span></a></li>
                            <li><a href="https://material.rpi-virtuell.de/" title="rpi-virtuell Materialpool"><i
                                            class=" dashicons dashicons-category"
                                    ></i><span>Material</span></a></li>
                            <li><a href="https://news.rpi-virtuell.de/" title="rpi-virtuell News"><i
                                            class=" dashicons dashicons-rss"
                                            aria-hidden="true"></i><span>News</span></a>
                            </li>
                            <li><a href="https://element.rpi-virtuell.de/" title="rpi-virtuell messenger"><i
                                            class=" dashicons dashicons-format-chat"
                                    ></i><span>Messenger</span></a></li>
                            <li><a href="https://reliverse.social" title="rpi-virtuell mastodon"><i
                                            class=" dashicons dashicons-share-alt"
                                    ></i><span>Reliverse</span></a></li>
                            <li><a href="https://blogs.rpi-virtuell.de/" title="rpi-virtuell Blogs"><i
                                            class="dashicons dashicons-admin-multisite"
                                    ></i><span>Blogs</span></a></li>
                            <li><a href="https://cloud.rpi-virtuell.de/" title="rpi-virtuell Cloud"><i
                                            class=" dashicons dashicons-cloud"
                                    ></i><span>Cloud</span></a>
                            </li>
                            <li><a href="https://konto.rpi-virtuell.de/" title="rpi-virtuell Account"><i
                                            class="dashicons dashicons-admin-network"
                                    ></i><span>Account</span></a>
                            </li>
                            <li><a href="https://hilfe.rpi-virtuell.de//" title="rpi-virtuell Hilfe"><i
                                            class="dashicons dashicons-editor-help"
                                    ></i><span>Hilfe</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <?php
            echo ob_get_clean();
        }

    }

    public function enqueue_styles()
    {
        wp_enqueue_style('dashicons');
        wp_enqueue_style('rpi-network-bottom-navi-style', plugin_dir_url(__FILE__) . 'css/rpi-network-bottom-navi-style.css', [], $this->version, 'all');
    }
}

new RpiNetworkBottomNavi();