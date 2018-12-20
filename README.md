# minicms
minicms is a super minimal flat file cms written in PHP,
meant to be used for simple portfolios, personal or smaller business pages.

## This is still in development, you're welcome testing it out and contributing!
The syntax might change a litte bit, because this is still in early development,
but i'll tell you if it does so.

## Todo
- Support Markdown
- Cleanup code
- Panel
- getChildren-function for Blogs

## How to use
All you need for your page is the /site directory.

### site.yaml
Contains globally used values, e.g. the charset, title or the default-homepage,
you can add as many values as you want. For example you could add a entry:  
footertext: Copyright by me  
and add this to your snippet/footer.php  
with $site->get()["footertext"]

### /theme
Stores everything that's needed for rendering your page,
- /assets contains stylesheets, js, images for your theme
- /snippets contains code that will be reused in multiple views
- /views contains the diferrent templates your theme has, e.g. if you want another design on the page "contact" just specify the value view in your page.yaml with the name of your view without file extension, for example view: contact

### /content
Stores all your pages and files that is related to this specific page
The name of the folder will be the "slug" of your page, in this folder
you'll create a file named page.yaml that contains all contents your page needs.
Like with site.yaml you can add as many values as you want, add them to your layouts  
with $page->get()["title"]  
You could also add subpages, just create another folder with a page.yaml in your main page-folder.

### menus.yaml
This is used for defining a unlimited number of individual numbers, the file format is a bit hard to read yet,
but this is mainly meant for being used with the planned panel.  
Example:  
header:  
  slug_of_the_page_to_add:  
    title: title_to_show_in_the_menu  

It will be ordered the same way it is in the menus.yaml, if no title is defined, it will be shown the slug.
Embed Menus in your views or snippets like:  
<?php foreach($site->menu()["header"] as $slug => $item): ?>  
<a<?php if("/".$slug == $url->page()): ?> class="active"<?php endif ?> href="<?= $url->site() ?>/<?= $slug ?>"><?= $item["title"] ?></a>  
<?php endforeach ?>  

This still looks quite dirty, I'll try making a nicer function for menus, but it works.

### Functions

Parses a Yaml File and returns it as an array  
$core->yamlToArray("pathToYamlFile")

Parses markdown and returns html (not working yet)  
$core->markdown("textToParse")

Loads the right view and renders the page  
$core->render()

Returns an array with all specified values in page.yaml of the current page  
$page->get()  
example: $page->get()["title"]

Returns an array with all specified values in site.yaml  
$site->get()  
example: $site->get()["charset"]  
  
Returns an array with all specified menus in menus.yaml  
$site->menu()  
example: foreach($site->menu()["header"] as $slug => $item)  
  
Returns the tld, host or ip of the site  
$url->site()  
  
Returns the slug with a prefixed / (e.g. /blog/blog-post-2)  
$url->page()  
  
Returns the url to the assets folder  
$url->assets()  
  
Returns the url to a specific view.php  
$url->view("viewName")  
  
Returns the url to a specific snippet.php  
$url->snippet("snippetName")  
  
