	</main>
    
    <footer id="footer" class="center">
        <p>&copy; Copyright 2010 - <?= date("Y") ?></p>
		<?php foreach($site->menu()["footer"] as $slug => $item): ?>
		    <a href="<?= $url->site() ?><?= $slug ?>"><?= $item["title"] ?></a>
		<?php endforeach ?>
    </footer>
    
</body>
</html>
