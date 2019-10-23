<!DOCTYPE html>
<html>
    <head>
        <title>Submit Story</title>
        <link rel="stylesheet" href="css/submit.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="container">
            <h1>Submit Story</h1>
            <form action="update.php" method="post">
                <input name="author" type="text" placeholder="Author">
                <br><br>
                <input name="title" type="text" placeholder="Title">
                <br><br>
                <textarea name="content_text"><?php echo $_POST["content_text"]; ?></textarea>
                <br><br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </body>
</html>