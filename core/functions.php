<?php
namespace Core\functions;
function getFormatedDate(string $date, string $format = 'd-m-y'){
    return date_format(date_create($date), $format);
}
?>
