<?php

/* Force jQuery to be the first plugin. */
unset(Plugin::$plugins['jquery']);
Plugin::$plugins = array('jquery' => 1) + Plugin::$plugins;
Plugin::save();

