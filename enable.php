<?php

/*
 * jQuery - Add jQuery to Frog CMS admin interface.
 *
 * Copyright (c) 2008-2009 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *   http://www.appelsiini.net/
 *
 */

/* Prevent direct access. */
if (!defined("FRAMEWORK_STARTING_MICROTIME")) {
    die("All your base are belong to us!");
}

/* Force jQuery to be the first plugin. */
unset(Plugin::$plugins['jquery']);
Plugin::$plugins = array('jquery' => 1) + Plugin::$plugins;
Plugin::save();

