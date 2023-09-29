<?php const BASE = "main"; ?>

<h1>POP-Framework</h1>
<p>This is the pop-demo index</p>
<p><?= __FILE__ ?></p>

<a href="<?= $this->url->generate('pop:param', ['param' => "this-is-the-pop-param-value"]) ?>">Try a page with parameter</a>
<hr>
<?php 
// echo "\n\n\n\nFramework<br>\n";
        // print_r($this->launcher->framework->getAll());

        // echo "\n\n\n\nCache<br>\n";
        // print_r($this->launcher->cache->getAll());

        // echo "\n\n\n\nDatabase<br>\n";
        // print_r($this->launcher->database->getAll());

        // echo "\n\n\n\nEnvironment<br>\n";
        // print_r($this->launcher->environment->getAll());

        // echo "\n\n\n\nError<br>\n";
        // print_r($this->launcher->error->getAll());

        echo "\n\n\n\nRouter<br>\n";
        print_r($this->router->getAll());
        var_dump($this->router->isActiveRoute('pop:start'));
        var_dump($this->url->generate('pop:start'));

        // echo "\n\n\n\nRoutes<br>\n";
        // print_r($this->launcher->routes->getAll());

        // echo "\n\n\n\nSecurity<br>\n";
        // print_r($this->launcher->security->getAll());

        // echo "\n\n\n\nTemplate<br>\n";
        // print_r($this->launcher->template->getAll());

        echo "\n\n\n\nParameters<br>\n";
        print_r($this->parameters->getAll());
        print_r($this->parameters->get('test'));

        echo "\n\n\n\nParam<br>\n";
        print_r($this->parameters->get('site_title'));
?>
<!-- #end-bloc: name -->
