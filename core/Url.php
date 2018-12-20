<?php

class Url {
    // return the tld/host/ip of the page
    public static function site() {
        return "//" . $_SERVER["HTTP_HOST"];
    }
    // return the current path
    public static function page() {
        if(isset($_SERVER["REQUEST_URI"]) && $_SERVER["REQUEST_URI"] != "/") {
            return $_SERVER["REQUEST_URI"];
        } else {
            if(isset(Site::get()["home"])) {
                return "/" . Site::get()["home"];
            } else {
                return "/home";
            }
        }
    }
    // return path to assets folder
    public static function assets() {
        return "./site/theme/assets";
    }
    // return path to a specified view.php
    public static function view($view) {
        return "./site/theme/views/" . $view . ".php";
    }
    // return path to a specified snippet.php to include it in view.php
    public static function snippet($snippet) {
        return "./site/theme/snippets/" . $snippet . ".php";
    }
}
