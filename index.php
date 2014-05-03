<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>250 films</title>
        <meta name="description" content="">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic,600,800,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">

        <?php 
            function isChecked ($n) {

                $url = "bd/data.txt";
                $file = fopen($url, 'r');

                $id = '-' . ($n) . '-' ;

                if (strpos(fread($file, 1000), $id) !== false) {
                    return 'filmok';
                }else{
                    return 'film';
                }

                fclose($file);
            }

        ?>

    </head>
    <body>
        <div id="topbar">
            <h1>250 Films</h1>
        </div>
        
        <div id="content">
            <?php 
            $xml=simplexml_load_file("bd/liste.xml");
            for ($i = 0; $i < $xml->film->count(); $i++) { ?>

            <div class="<?php echo isChecked($i+1); ?>" style="background-image:url(<?php echo $xml->film[$i]->image; ?>);" id="<?php echo $xml->film[$i]->id; ?>">
                <p>
                    <span><?php echo ($i + 1); ?></span><br/>
                    <strong><?php echo $xml->film[$i]->name; ?></strong><br/>
                    <?php echo $xml->film[$i]->year; ?> - <?php echo $xml->film[$i]->director; ?>
                </p>
            </div>
            
            <?php } ?>

        </div>

    </body>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type='application/javascript' src='js/fastclick.js'></script>
    <script src="js/script.js"></script>

</html>