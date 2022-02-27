<?php
/**
 * Deactivate plugin.
 *
 * @package Finna Plugin Template
 */

namespace Inc\Base;

class Deactivate
{
	public static function deactivate() {
		flush_rewrite_rules();
	}
}
