
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blogs- Innerwork Portal | Blogs for Job portal | Blogs for digital Marketing | Hr services | IT services</title>
    <?php include_once 'CommonFiles.php'; ?>
    <link rel="stylesheet" href="css/blogs.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
 <script src="https://kit.fontawesome.com/62c6b753c2.js" crossorigin="anonymous"></script>
</head>
<body>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0"></script>
<?php include_once 'Header.php';
include_once 'DbConnection/DbConnectionHelper.php';
 ?>


<section id="banner">
    <div class="container">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            <h2>Blogs</h2>
            <p><a href="index">Home</a> <span>/</span> Blogs</p>
        </div>
    </div>
</section>

<section id="blogs">
    <div class="container">
        <?php
        include_once 'DbConnection/DbConnectionHelper.php';
        try{

            $status = true;
            $stmt = $conn->prepare("select id, img, publishdate, title from blogs where status = ? order by publishdate desc");
            $stmt->bindParam(1, $status);
            $stmt->execute();
            if($stmt->rowCount() > 0)
            {


                $data = $stmt->fetchAll();
                foreach($data as $row) {
                    ?>
                    <div class="col-md-3">
                        <a href="readBlog?id=<?php echo $row['id']; ?>">
                            <div class="blogBox">
                                <img src="upload/<?php echo $row['img']; ?>" alt="">
                                <p><i class="fa fa-calendar"></i> <span><?php echo $row['publishdate']; ?></span></p>
                                <h3><?php echo $row['title']; ?></h3>
                            </div>
                        </a>
                    </div>
                    <?php
                }
            }
            else
            {
                ?>
                <div class='alert alert-info alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <strong>Info!</strong> There is no Blogs available yet.</div>
                <?php
            }
        }
        catch(PDOException $e)
        {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
        ?>
    </div>
</section>



<?php include_once 'Footer.php'; ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!--   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>
