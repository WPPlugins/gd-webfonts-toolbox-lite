<?php

if (!defined('ABSPATH')) exit;

class gdwft_core_info {
    public $code = 'gd-webfonts-toolbox';

    public $version = '1.3';
    public $build = 130;
    public $status = 'stable';
    public $edition = 'lite';
    public $released = '2017.06.24';
    public $updated = '2015.08.04';
    public $url = 'https://plugins.dev4press.com/gd-webfonts-toolbox/';
    public $author_name = 'Milan Petrovic';
    public $author_url = 'https://www.dev4press.com/';

    public $install = false;
    public $update = false;
    public $previous = 0;

    function __construct() { }

    public function to_array() {
        return (array)$this;
    }
}
