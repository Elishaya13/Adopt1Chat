<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">   
    <title><?php echo (isset($title)) ? $title : "Mon site"; ?> </title>
    <link rel="stylesheet" href="./assets/css/style.css">  
</head>
<body>       
    <header class="header_content">      
        <h1 id="header_title"><?php echo (isset($h1)) ? $h1 : "Mon site"; ?></h1>
        <?php  
        require_once(__DIR__ . '/nav.php');
        ?>
    </header>
