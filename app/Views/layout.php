<html>

<head>
    <title>
        <?=$this->e($title)?>
    </title>
</head>

<body>

    <header>
        <nav>
            <li>
                <a href="<?= $router->generate('main_home') ?>">Accueil</a>
            </li>
            <li>
                <a href="<?= $router->generate('main_history') ?>">Parcours</a>
            </li>
            <li>
                <a href="<?= $router->generate('project_list') ?>">Les projets</a>
            </li>
            <li>
                <a href="<?= $router->generate('main_contact') ?>">Contact</a>
            </li>
            <li>
                <a href="<?= $router->generate('main_legal') ?>">Mentions légales</a>
            </li>
        </nav>
    </header>
    <main>
        <?=$this->section('content')?>
    </main>
    <footer>
    </footer>



</body>

</html>