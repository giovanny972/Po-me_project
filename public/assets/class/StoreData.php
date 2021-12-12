<?php


class StoreData 
{
    public static function queryInsert(array $data): string
    {
        $pseudo = $_POST['pseudo'];
        $comment = $_POST['commentaire'];
        $date = new DateTime('now');
        $dateFormated = $date->format('d-m-Y');
        return "INSERT INTO `comment`(`author_comment`, `comment`, `date`) VALUES ('{$pseudo}', '{$comment}', '{$dateFormated}');";
    }
}