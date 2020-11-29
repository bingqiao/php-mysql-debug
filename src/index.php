<?php

require 'includes/db.php';

$sql = "select *
        from note
        order by created_at desc;";

$results = mysqli_query($conn, $sql);

if ($results == false) {
    echo mysqli_error($conn);
    exit;
} else {
    $notes = mysqli_fetch_all($results, MYSQLI_ASSOC);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>My notes</title>
    <meta charset="utf-8">
</head>
<body>
    <header>
        <h1>My notes</h1>
    </header>
    <main>
        <?php if (empty($notes)): ?>
            <p>No note found.</p>
        <?php else: ?>

        <ul>
            <?php foreach ($notes as $note): ?>
                <li>
                    <note>
                        <h2><?= $note['title']; ?></h2>
                        <p>id: <?=$note['id']; ?></p>
                        <p><?=$note['content']; ?></p>
                        <p><em><?=$note['created_at']; ?></em></p>
                    </note>
                </li>
            <?php endforeach; ?>
        </ul>

        <?php endif; ?>

    </main>
</body>
</html>