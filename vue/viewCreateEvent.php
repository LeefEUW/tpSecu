<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/style.css">
    <title>Create article</title>
</head>
<body>
    <h3>Ajouter un article</h3>
    <form action="" method="post">
        <p>saisir le nom :</p>
        <p><input type="text" name="nom_event"></p>
        <p>saisir la description :</p>
        <p><input type="text" name="desc_event"></p>        
        <p>saisir la date :</p>
        <p><input type="text" name="date_event"></p>
        <p>saisir le type:</p>
        <p><input type="text" name="nom_type"></p>
        <p><input type="submit" value="Ajouter" name="create"></p>
    </form>
    <div id="error"></div>
</body>
</html>