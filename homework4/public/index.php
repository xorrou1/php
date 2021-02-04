<?php

include_once __DIR__."/../config/main.php";

include_once COMPONENTS_DIR."addsFiles.php";
include_once COMPONENTS_DIR."fileSystem.php";
include_once COMPONENTS_DIR."render.php";

/* $picturesArr = ["../src/db/img/picture1.jpg","../src/db/img/picture2.jpg","../src/db/img/picture3.jpg","../src/db/img/picture2.jpg","../src/db/img/picture1.jpg","../src/db/img/picture2.jpg","../src/db/img/picture3.jpg","../src/db/img/picture2.jpg","../src/db/img/picture1.jpg"]; */

$adds = addsFiles(ASSETS_DIR);
$read = readCsv(DB_DIR .'catalog.csv')



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../src/layout/style/style.css" rel="stylesheet">
</head>

<body>
    
    <section>
        <div class="page_picture">
            <div class="catalog_pictures">
                <?php

                    renderPictures($read);  
                ?>
            </div>
            <form action="" class="form_button">
               <input type="submit" id="button" value="Загрузить изображение">
            </form>
        </div>
    </section>


    <script src="../src/components/app.js"></script>


</body>
</html>