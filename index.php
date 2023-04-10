<html lang="en-US">
    <head>
        <title> BenRaz LocalHost </title>
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        Ben Raz Localhost<br />
<?php
$dash="<span class='no-select'>- </span>";
$colors = ["magenta", "blue", "cyan", "green", "yellow", "red"];
$count = 0;
$dir = new DirectoryIterator(dirname(__FILE__));
foreach ($dir as $file) {
    if (!$file->isDot() && is_dir($file) || is_link($file)) {
        $name = $file->getFilename();
        $ucname = ucwords($name);
        echo "$dash<a class='{$colors[$count]}'target='blank' href='{$name}'>{$ucname}</a><br/>";
    ($count==count($colors)-1)? $count=0 : $count++;
    }
}
echo "$dash<a class='{$colors[$count]}' target='_blank' href='https://benraz.dev'>Official Website</a><br />";
($count==count($colors)-1)? $count=0 : $count++;
echo "$dash<a class='{$colors[$count]}' target='_blank' href='https://github.com/benraz123'>Github</a><br/>";
($count==count($colors)-1)? $count=0 : $count++;
echo "$dash<a class='{$colors[$count]}' target='_blank' href='mailto:ben.raz2008@gmail.com'>Email</a><br/>";
($count==count($colors)-1)? $count=0 : $count++;
echo "$dash<a class='{$colors[$count]}' target='_blank' href='https://youtube.com/@benraz'>Youtube</a><br/>";
($count==count($colors)-1)? $count=0 : $count++;
echo "$dash<a class='{$colors[$count]}' target='_blank' href='../BenRazProjects'>BRP</a><br/>";
?>

    </body>
</html>

<style>
a {color: inherit}
</style>
