<?php 
namespace App\Models\CategorieModel;
use \PDO;
function findAll(PDO $connexions){
    $sql = "SELECT *
            FROM categories
            
            ORDER BY name ASC;";

$rs = $connexions->query($sql);


return $rs->fetchAll(PDO::FETCH_ASSOC);
}
?>