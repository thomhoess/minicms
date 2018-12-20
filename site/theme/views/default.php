<?php include $url->snippet("header") ?>
        <h1><?= $page->get()["title"] ?></h1>
        <div>
			<?= $page->get()["text"] ?>
        </div>
<?php include $url->snippet("footer") ?>