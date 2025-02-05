<?php

if ($_SERVER["REQUEST_METHOD"] != "GET") {
    echo "Huh? Wat doe je?";
    exit;
}

if (isset($_GET['id'])) {
    require 'database.php';

    $id = $_GET["id"];

    $sql = "DELETE FROM tool WHERE tool_id = $id";

    mysqli_query($conn, $sql);

    header("location: tools_index.php");
}
