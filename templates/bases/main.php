<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->parameters->get('site_title') ?></title>
</head>
<body>
    
    <header class="site-header">
        <ul>
            <li><a href="<?= $this->url->generate("pop:start") ?>">Pop Start</a></li>
        </ul>
    </header>

    <div class="site-content">
    <?= pop_content ?>
    </div>

    <footer class="site-footer">
        footer
    </footer>

</body>
</html>