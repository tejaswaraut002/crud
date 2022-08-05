<?php
include_once ("config.php");
if(isset($_POST["submit"])){
    $title = mysqli_real_escape_string($mysqli, $_POST["title"]);
    $description = mysqli_real_escape_string($mysqli, $_POST["description"]);
    $result = mysqli_query($mysqli, "INSERT INTO `blogs` (`id`, `title`, `description`) VALUES (NULL, '$title', '$description');");

}
?>