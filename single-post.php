
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
                    $sql2 = "SELECT * FROM comments WHERE post_id = {$_GET['post_id']}"; 
                    $statement = $connection->prepare($sql2);
                    $statement->execute();
                    $statement->setFetchMode(PDO::FETCH_ASSOC);
                    $comments = $statement->fetchAll();
                    $sql3 = "SELECT * FROM posts WHERE id = {$_GET['post_id']}"; 
                    $statement = $connection->prepare($sql3);
                    $statement->execute();
                    $statement->setFetchMode(PDO::FETCH_ASSOC);
                    $single_posts = $statement->fetch();
                    
                    ?>
                    <h2><p><?php echo $single_posts['title']?></p></h2>
                    <i><p>Author: <?php echo $single_posts['author']?></p></i>
                    <br>
                    
                    <p><?php echo $single_posts['body']?></p>
                    <br>

                <ul>
                <?php
                
                
                
                foreach ($comments as $comment){?>
                <li>
                
                <strong><p><?php echo $comment['author'] ?></p></strong>
                <p><?php echo $comment['text']?></p>
                </li>
                <hr>
                <?php
                }
            
            
                ?>
              </ul>
              
           
            
        

        </div><!-- /.blog-main -->
        <?php include('footer.php') ?>
        </body>
</html>