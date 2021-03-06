<?php
namespace App\Models\TagsModel;
use \PDO;
function findAllByPostId(PDO $connexions, int $postID){
 $sql = "SELECT *
        FROM tags t
        JOIN posts_has_tags pht ON t.id = tag_id
        WHERE pht.post_id=  :postID
        ORDER BY t.name ASC;";

    $rs=$connexions->prepare($sql);
    $rs->bindValue(':postID', $postID, PDO::PARAM_INT);
    $rs->execute();

    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findAll(PDO $connexions){
    $sql="SELECT *
        FROM tags 
        ORDER BY name ASC;";
    
    $rs = $connexions->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
?>