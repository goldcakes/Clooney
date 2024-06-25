<?php
// Define the file to store comments
$commentsFile = 'comments.txt';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);
    $date = date('Y-m-d H:i:s');

    // Save the comment to the file
    $newComment = "<div class='comment'><p><strong>{$name}</strong> ({$date}):</p><p>{$comment}</p></div>\n";
    file_put_contents($commentsFile, $newComment, FILE_APPEND);
}

// Display comments
if (file_exists($commentsFile)) {
    echo file_get_contents($commentsFile);
}
?>
