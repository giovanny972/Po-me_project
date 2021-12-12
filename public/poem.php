<?php
$title = "Laissez nous un commentaire";
require_once './assets/header.php';
require_once './assets/class/Query.php';
require_once './assets/class/StoreData.php';

$pseudo = $_POST['pseudo'];
$comment = $_POST['commentaire'];
$date = new DateTime('now');
$dateFormated = $date->format('d-m-Y');
?>

<?php 
    $pdoSend = Query::pdo();
    if ((!empty($pseudo)) && (!empty($comment))){
        $storeComment = StoreData::queryInsert($_POST);
        $pdoSend->query("INSERT INTO `comment`(`author_comment`, `comment`, `date`) VALUES ('{$pseudo}', '{$comment}', '{$dateFormated}');");
    }
    $pdoSend->dba_close;
?>
    <link rel="stylesheet" href="./styles/poem.css">

<div class="black">
    <div class="MasterContener">
        <div class="containerPoème-margin">
            <h2 class="Titre">POÈME</h2>
            <p id="poem"><?= $_COOKIE["text"]?></p>
            
        </div>
        <div class="containerCommentaire-margin">
            <h2 class="Titre">Commentaire</h2>
            <form method="post" action="">
            <label for="pseudo">Pseudo :</label>
            <input type="text" name="pseudo" value="" id="pseudo" />
            
            <div class="Button">
                <label for="commentaire">Votre commentaire :</label>
                <textarea name="commentaire" rows="5" cols="80" id="commentaire"></textarea>
                <input type="submit" class="envoyer" value="Envoyer"></input>
                <button class="envoyer">J'aime</button>   
            </div>
            </form>
        </div> 
        </div>
    </div>
    <?php
        $pdoQuery= Query::pdo();
        $queryComments = $pdoQuery->query("SELECT * FROM comment");
        $comments = $queryComments->fetchAll();
?>
    <div id="comments">
        
        <?php foreach ($comments as $comment) : ?>
        <div class="comment">
            <p id="nomUtilisateur"><?= $comment["author_comment"];?></p>
            <p id="messageComment"><?= $comment["comment"];?></p>
            
        </div>         
        <?php endforeach ?>
    </div>
   
</div>

<?php
require_once './assets/footer.php';
?>  