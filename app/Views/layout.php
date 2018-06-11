<html>

<head>
    <title>
        <?=$this->e($title)?>
    </title>
</head>

<body>

    <header>
        <?php $this->insert('partials/navigation') ?>
    </header>
    <main>
        <?=$this->section('content')?>
    </main>
    <footer>
    </footer>



</body>

</html>