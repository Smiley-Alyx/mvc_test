<?include __DIR__ . '/../header.php';?>
    <h1><?= $article->getName() ?></h1>
    <p><?= $article->getText() ?></p>
    <p>Автор: <?= $article->getAuthor()->getNickname() ?></p>
<?include __DIR__ . '/../footer.php';?>
