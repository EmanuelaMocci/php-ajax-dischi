<?php 
    include __DIR__ . "/data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue Dischi</title>
    <!-- style -->
    <link rel="stylesheet" href="style.css">
    <!-- /style -->
</head>
<body>
    <header>
        <div class="img-header">
            <img src="img/spotify-logo.png" alt="">
        </div>
    </header>

    <main>
    <section class="main">
        <div class="contenitore-img">
            <div class="img">
                <?php foreach ($database as $disco) { ?>
                    <div class="disco">
                        <div class="img-container">
                            <img src="<?php echo "{$disco['poster']}"; ?>" alt="Immagine album">
                            <div class="text">
                                <h4><?php echo "{$disco['title']}"; ?></h4>
                                <div><?php echo "{$disco['author']}"; ?></div>
                                <div><?php echo "{$disco['year']}"; ?></div>
                            </div>
                        </div>  
                    </div>     
                <?php } ?>
            </div>

    </section>
</main>

</body>
</html>