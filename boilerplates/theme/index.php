<?php defined('APP_PATH') or die('');

$this->theme->prepareAssets([
]);
$content = $this->render($this->mainLayout);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->theme->echo('css', $this->url()) ?>
    <?php $this->theme->echo('topJs', $this->url()) ?>
    <?php $this->theme->echo('inlineCss', $this->url()) ?>
</head>
<body>
    <main>
        <?php echo $content; ?>
    </main>
    <?php $this->theme->echo('js', $this->url()) ?>
    <?php $this->theme->echo('inlineJs', $this->url()) ?>
</body>
</html>