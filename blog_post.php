<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;port=3306;dbname=test', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreure : '.$e->getMessage());
    }
        
    $req = $bdd->prepare('INSERT INTO billets (titre, auteur, contenu, date_creation) VALUES(?, ?, ?, NOW())');
    $req->execute(array($_POST['titre'], $_POST['pseudo'], $_POST['article']));
    header('Location: blog-mody.php');
?>