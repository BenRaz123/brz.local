<html>
    <head>
        <link rel="stylesheet" href="../styles.css" />
        <title>Blog</title>
    </head>
    <body>
        <h1> brz/Blog </h1>
        
        <?php 
        
        function increaseNumber($number, $maxIncrement) {
            return ($number == $maxIncrement) ? 0 : $number++;
        }
        
        $colors = ["magenta", "blue", "green", "yellow", "red"];
        $count = 0;
        $max = count($colors)-1;

        $dir = new DirectoryIterator(dirname(__FILE__));
        
        foreach ($dir as $file) {
            if (!$file->IsDot() && !is_dir($file) && $file!="index.php") {
                $displayname = str_replace(".php", "", $file);
                echo "- <a class={$colors[$count]} href='$file' target='_blank'>$displayname</a>";
                $count = increaseNumber($count, $max);
            }
        }

        ?>
    </body>
</html>

