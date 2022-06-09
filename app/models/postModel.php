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

function findRecents(PDO $connexions){
    $sql = "SELECT p.image as postImage, p.id AS postId, COUNT(c.id) AS nbreComments, p.title, p.created_at, a.lastname, a.firstname
    FROM posts p
    JOIN authors a ON p.author_id = a.id
    JOIN comments c ON c.post_id = p.id
    GROUP BY p.id
    ORDER BY created_at DESC
    LIMIT 3;";
    

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