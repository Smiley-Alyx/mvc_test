<?include __DIR__ . '/../header.php';?>
<?foreach ($articles as $article):?>
    <h2><?= $article['name'] ?></h2>
    <p><?= $article['text'] ?></p>
    <hr>
<?endforeach;?>
<?include __DIR__ . '/../footer.php'; ?>
