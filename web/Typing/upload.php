<?php
    try {
        if (isset($_POST["content"])) {
            $content = $_POST["content"];

            echo $content;

            // $sql = "INSERT INTO stories (title, story, author) VALUES ('test', '$content', 'test');";

            // if ($db->query($sql) == TRUE) {
            //     echo "New story uploaded successfully";
            // } else {
            //     echo "Error: " . $sql . "<br>" . $db->error;
            // }
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>