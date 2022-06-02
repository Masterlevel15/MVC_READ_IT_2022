<?php
namespace App\Models\PostsModel;
use \PDO;
function findAll(PDO $connexions){
    $sql = "SELECT *
            FROM posts
            ORDER BY created_at ASC
            LIMIT 10;";
    $rs = $connexions->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexions, int $id){
    $post = "SELECT *
            FROM posts
            WHERE id = :id;";
    $rs = $connexions->prepare($post);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return  $rs->fetch(PDO::FETCH_ASSOC);
}

?>