<?php
namespace App\Models\AuthorsModel;
use \PDO;
function findOneById(PDO $connexions, int $id){
    $sql = "SELECT *
            FROM authors
            WHERE id = :id;";
    $rs = $connexions->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}
?> 