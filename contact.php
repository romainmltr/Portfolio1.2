
<?php 
$servername = 'localhost';
$username = 'root';
$password = 'root';
$contact = new PDO('mysql:host=localhost;dbname=contact_portfolio;', 'root', '');
var_dump($contact);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://kit.fontawesome.com/f5d5bf9af5.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
<nav class ="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
      </nav>
</header>


<body>

<?php
 if($_POST){

        $nom = addslashes($_POST['nom']);
        $prenom = addslashes($_POST['prenom']);
        $mail = addslashes($_POST['mail']);
        $texte = addslashes($_POST['texte']);

    /* J'envois les infos dans les bases de données */
        $req = $contact->prepare('INSERT INTO contact(nom,prenom,mail,texte) VALUES(?,?,?,?)');
        $req->execute([$_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['texte']]);
  }
?>

    
<div class ="formulaire">
        <form method = "post" 7 name="myform" id="formulaire"class="container">
            <p>Formulaire de contact</p>
            <input type="text" class="contact_nom" required name="nom" placeholder="Nom">
            <input type="text" class="contact_prenom" required name="prenom"placeholder="Prénom">
            <textarea required name="texte" class="contact_texte" minlength="15"
              cols="40" rows="5"placeholder="Texte"></textarea>
            <input type="email" placeholder="Email" class="contact_email">
            <input class="valider_contact" class="contact_send" type="submit">
           
        </form>
</div>

<div class="drops">
    <div class="drop drop-1"></div>
    <div class="drop drop-2"></div>
    <div class="drop drop-3"></div>
    <div class="drop drop-4"></div>
    <div class="drop drop-5"></div>
  </div>
</div>

</section>


</body>

</html>
