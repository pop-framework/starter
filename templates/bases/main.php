<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Courier+Prime&family=Montserrat:wght@400;700&display=swap">
    <title><?= $this->parameters->get('site_title') ?></title>
</head>
<body>
    <div class="wrapper">

        <header class="site-header">
            <div class="content">

                <!-- Main Menu -->
                <nav class="navbar">
                    <a href="<?= $this->url->generate("pop:start") ?>" class="active">Start Page</a>
                    <a href="<?= $this->url->generate("pop:start") ?>">Project Monitor</a>
                    <a href="<?= $this->url->generate("book:index") ?>">Books of demo</a>
                    <a href="<?= $this->url->generate("documentation") ?>" target="_blank">Documentation</a>
                </nav>

            </div>
        </header>
    
        <div class="site-content">
            <div class="content">

                <!-- Page content -->
                <?= pop_content ?>

            </div>
        </div>
    
        <!--
        <footer class="site-footer">
            <div class="content">

                <div class="footer-links">
                    <span>Art by Dall-E</span>
                    <span>Icons by BoxIcons</span>
                    <a href="#">Pop Framework on GitHub</a>
                </div>

            </div>
        </footer>
        -->
    </div>

    <script src="bundle.js"></script>
</body>
</html>