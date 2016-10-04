<?php
$q = $_GET['q'];
if(!empty($_GET['q'])){
    $seachField = "fulltext";
    switch(strtolower($_GET['q'])){
        case 'id';
            $seachField = "idno";
            break;
        case 'title';
            $seachField = "preferred_labels";
            break;
        case 'all';
            $seachField = "fulltext";
            break;
    }
    echo $seachField;
}
