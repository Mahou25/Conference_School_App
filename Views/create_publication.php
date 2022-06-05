<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Bases/reset.css">
    <link rel="stylesheet" href="Style/Bases/base.css">
    <link rel="stylesheet" href="Style/Modules/links.css">
    <link rel="stylesheet" href="Style/Modules/create_publication.css">
    <link rel="stylesheet" href="Style/Modules/title.css">
    <link rel="stylesheet" href="Style/Modules/input.css">
    <link rel="stylesheet" href="Style/Modules/button.css">
    <link rel="stylesheet" href="Style/Layouts/create_publication.layout.css">
    <title>Document</title>
</head>
<body>
    <div id="content-app">
        <?php include("panel.php") ?>
        
        <div id="create-publication">
            <h1 class="create-publication-title">
                Manager de publication
            </h1>
            <form method="" action="" class="create-publication-form">
                <div class="create-publication-groupefield">
                    <label class="create-publication-label" for="name_publication">Nom de la publication</label>
                    <input type="text" id="name_publication" class="input">
                </div>
                <div class="create-publication-groupefield">
                    <label class="create-publication-label" for="content_publication">Contenue de la publication</label>
                    <textarea class="text-area" name="" id="" cols="30" rows="10"></textarea>
                </div>
            </form>
        </div>
    </div>
</body>
</html>