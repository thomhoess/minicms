<!doctype html>
<html lang="de">
<head>
    <meta charset="<?= $site->get()["charset"] ?>">
    <meta name="viewport" content="initial-scale=1">

    <title><?= $page->get()["title"] ?> | <?= $site->get()["title"] ?></title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
</head>
<body>
    <header id="header" class="center">
        <a id="header-logo" href="#">
            <img src="<?= $url->assets() ?>/img/logo.svg">
        </a>
    </header>    
    
    <nav id="nav" class="center">
        <ul>
			<?php foreach($site->menu()["header"] as $slug => $item): ?>
			<li><a<?php if("/".$slug == $url->page()): ?> class="active"<?php endif ?> href="<?= $url->site() ?>/<?= $slug ?>"><?= $item["title"] ?></a></li>
			<?php endforeach ?>
        </ul>
    </nav>
    
    <main id="main" class="center">
