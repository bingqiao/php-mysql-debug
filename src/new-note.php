<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'includes/db.php';

    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql = "insert into note (title, content, created_at) values (?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        echo mysqli_error($conn);
    } else {
        mysqli_stmt_bind_param($stmt, "sss", $title, $content, date('Y-m-d H:i:s'));
        if (mysqli_stmt_execute($stmt)) {
            $id = mysqli_insert_id($conn);
            echo "inserted record with ID: $id";
        } else {
            echo mysqli_error($conn);
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
</head>
<body>
    <header>
        <h1>New note</h1>
    </header>
    <main>

<h2>New note</h2>

    <form action="" method="post">
        <div>
            <label for="title">title</label>
            <input name="title" id="title" type="text" placeholder="title">
        </div>

        <div>
            <label for="content">content</label>
            <textarea name="content" id="content" cols="30" rows="5" placeholder="content"></textarea>
        </div>

        <button>add</button>
    </form>

    </main>
</body>
</html>