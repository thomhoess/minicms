<?php

class Page {
    // get the content of the current page.yaml, decode yaml to array and give back result as array
    // usage example: $page->get()["title"] or use with markdown/parsedown $parsedown->text($page->get()["text"])
    public static function get() {
        return Core::yamlToArray("./site/content" . Url::page() . "/page.yaml");
    }
}