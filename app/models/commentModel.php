<?php 
namespace App\Models\CommentModel;
use \PDO;
    function findAll(PDO $connexions, int $id){
        $sql = "SELECT *
                FROM comments
                WHERE id=:id
                ORDER BY created_at DESC
                LIMIT 3;";
        $rs = $connexions->prepare($sql);
        $rs->bindValue(':id', $id, PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_ASSOC);
    }
?>