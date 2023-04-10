<html>
    <head>
        <title> PHP Test </title>
        <link rel="stylesheet" href="../styles.css">
    </head>
    <body>
        <?php
$dir = new DirectoryIterator(dirname("./.."));
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
        var_dump($fileinfo->getFilename());
    }
}
?>
    </body>
</html>

