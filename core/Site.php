<?php

class Site {
    // get the content of site.yaml, decode yaml to array and give back result as array
    // usage example: $site->get()["title"]
    public static function get() {
        return Core::yamlToArray("./site/site.yaml");
    }
    // get the content of menus.yaml, decode yaml to array and give back result as array
    // used for through the panel changeable menus
    public static function menu() {
        $menus = Core::yamlToArray("./site/menus.yaml");
        return $menus;
    }
}