<?php
/**
 * Activate plugin.
 *
 * @package Finna Plugin Template
 */

namespace Inc\Base;

class Activate
{
    public static function activate()
    {
        flush_rewrite_rules();
    }
}
