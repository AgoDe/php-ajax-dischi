<?php
 include 'database/database.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php ajax dischi</title>

    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    
    <main>
        <div class="flex-box">
            
            <?php
                foreach ($dischi as $disco ) {
                ?>

                <div class="disk-box">
                    <img src="<?php echo $disco['poster']?>" alt="poster album">

                    <h3 class="title"> <?php echo $disco['title']?> </h3>
                    <div class="details artist"> <?php echo $disco['author']?> </div>
                    <div class="details year"> <?php echo $disco['year']?> </div>
                </div>

               <?php };
            ?>

        </div> <!-- end of flex-box -->
    </main>
</body>
</html>