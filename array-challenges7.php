<?php

// $postID = strip_tags($_GET['postID']);
$postID = htmlspecialchars(strip_tags($_GET['postID']));

// for database work;
// mysql_real_escape_string();

$dirtyID = $_GET['postID'];
echo 'clean: ' . $postID;
echo 'dirty: ' . $dirtyID;

function currentPost($posts, $id) {
    return $posts[$id];
}

$posts = [
    [
        'author' => 'John Doe',
        'title' => 'This is my post title',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'image' => '<img src="https://images.unsplash.com/photo-1571847490051-491c12ff6540?ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80" width="120px">',
    ],
    [
        'author' => 'John Doe',
        'title' => 'I am another post title',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'image' => '<img src="https://images.unsplash.com/photo-1571586100122-0869bd6e77c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" width="120px">',
    ],
    [
        'author' => 'Kristin',
        'title' => 'A completely different post title',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'image' => '<img src="https://images.unsplash.com/photo-1571210059434-edf0dc48e414?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" width="120px">',
    ],
];

foreach ($posts as $post) {
    foreach ($post as $key=>$item) {
        echo '<p>' . $key . ': ' . $item . '</p>';
    }
}

foreach ($posts as $post) {
    if ($post['author'] === 'John Doe') {
        echo '<h4>Written by: ' . $post['author'] . '</h4>';
    }
}

$thisPost = currentPost($posts, $postID); ?>

<h1> <?php echo $thisPost['title']; ?> </h1>
<p>Written by:  <?php echo $thisPost['author']; ?> </p>
<?php echo $thisPost['image']; ?>
<p>  <?php echo $thisPost['content']; ?> </p>