    <h1>The Blog by <?php echo $name; ?></h1>
    <?php 
//         foreach($posts as $row) {
//             echo $row['title'];
//         }
    ?>
    <?php foreach ($posts as $post):?>
    <article>
        <h2>
            <a href="single.php?id= <?= $post['id']; ?>"><?php echo $post['title']; ?></a>
        </h2>
        <p class="body"><?php echo $post['body']; ?></p>
    </article>
    <?php endforeach; ?>
