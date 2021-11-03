
<?php include('db.php')?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Vivify Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    

    <link href="/styles/blog.css" rel="stylesheet">
    <link href="/styles/styles.css" rel="stylesheet">
</head>
<body>
<?php include('header.php') ?>


<main role="main" class="container">

    <div class="row">
    <?php include('sidebar.php') ?>

        <div class="col-sm-8 blog-main">

            <div class="blog-post">
                <!--<h2 class="blog-post-title">Sample blog post</h2> -->

                <?php
                foreach ($posts as $post) {
            ?>

                <a href="single-post.php?post_id=<?php echo($post['id']) ?>"><?php echo($post['title']) ?></a>
                
               <!-- <a href="#" class = "blog-post-title">Sample blog post</a> -->
                <p class="blog-post-meta"><?php echo($post['created_at'])?><a href="#"> <?php echo($post['author'])?></a></p>

                <p><?php echo($post['body'])?></p>
                <?php
                }
            ?>
           
            
            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>

        </div><!-- /.blog-main -->
        <?php include('footer.php') ?>
        </body>
</html>