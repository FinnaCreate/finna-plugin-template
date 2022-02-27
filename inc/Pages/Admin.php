<?php
/**
 * Admin pages.
 *
 * @package Finna Plugin Template
 */
namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;

class Admin extends BaseController
{
    public $settings;

    public $pages = [];

    public $subpages = [];

    public function __construct()
    {
        $this->settings = new SettingsApi();

        $this->pages = [
            [
                'page_title' => 'Finna Plugin Template',
                'menu_title' => 'Finna Plugin Template',
                'capability' => 'manage_options',
                'menu_slug' => 'finna_plugin_template',
                'callback' => function() { echo '<h1>Finna Plugin Template</h1>';},
                'icon_url' => 'dashicons-book-alt',
                'position' => 110
            ]
        ];

        $this->subpages = [
			[
				'parent_slug' => 'finna_plugin_template',
				'page_title' => 'Custom Post Types',
				'menu_title' => 'CPT',
				'capability' => 'manage_options',
				'menu_slug' => 'finna_plugin_template_cpt',
				'callback' => function() { echo '<h1>CPT Manager</h1>'; }
			],
			[
				'parent_slug' => 'finna_plugin_template',
				'page_title' => 'Custom Taxonomies',
				'menu_title' => 'Taxonomies',
				'capability' => 'manage_options',
				'menu_slug' => 'finna_plugin_template_taxonomies',
				'callback' => function() { echo '<h1>Taxonomies Manager</h1>'; }
			],
			[
				'parent_slug' => 'finna_plugin_template',
				'page_title' => 'Custom Widgets',
				'menu_title' => 'Widgets',
				'capability' => 'manage_options',
				'menu_slug' => 'finna_plugin_template_widgets',
				'callback' => function() { echo '<h1>Widgets Manager</h1>'; }
			]
		];
    }

	public function register()
    {
        $this->settings->addPages($this->pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
	}
}
