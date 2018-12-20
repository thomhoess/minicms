<?php

class Core {
    // parse yaml and give back array
    public static function yamlToArray($yamlUrl) {
        $yamlArray = Spyc::YAMLLoad($yamlUrl);
        return $yamlArray;
    }
    public static function markdown($input) {
        return nl2br($input);
    }
    // render page
    public function render() {
        if(isset(Page::get()["view"])) {
            $template = Page::get()["view"];
        } else {
            $template = "default";
        }
        return Url::view($template);
    }
}