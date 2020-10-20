<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
$id = "";
$staus = true;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
else
{
    header( "Location: blog" );
}
include_once 'DbConnection/DbConnectionHelper.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inner Work</title>
    <?php include "CommonFiles.php"?>
    <link rel="stylesheet" href="css/careerHouse.css">
    <style>

    @media only screen and (max-width: 521px){
      iframe{width: min-content;height: min-content;}
      .readBx img {width:100% !important;height:100% !important;}
    }
    </style>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

 <script src="https://kit.fontawesome.com/62c6b753c2.js" crossorigin="anonymous"></script>
</head>
<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_IN/sdk.js#xfbml=1&version=v7.0" nonce="9sSgsSRU"></script>
     <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0"></script>
<?php include_once 'Header.php';
include_once 'DbConnection/DbConnectionHelper.php';
 ?>

<!-- Publishing comments -->

<script type="text/javascript">
    $(document).ready(function(){

        $('#publish-comment').on('click', function(e){
            $comment = $("#blog-comment").val();
            $commentator = $("#commentator").val();
            $id = <?php echo $id; ?>;
            if(!$comment=='' && !$commentator==''){
                $.ajax({
                    url: "publishComment.php",
                    method: "POST",
                    data: {id: $id, comment: $comment, commentator: $commentator},
                    success: function(data){
                            if($('#comments').has("li").length != 0){
                                $("#comments").prepend(data);
                            }
                            else{
                                $("#comments").append(data);
                            }
                    }
                });
            }
        });
        $("#comment-form").submit(function(e){
            e.preventDefault();
        });

    });

</script>

<!-- //Publishing comments -->

<section id="banner">
    <div class="container">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            <h2>Blogs</h2>
            <p><a href="index">Home</a> <span>/</span> Blogs</p>
        </div>
    </div>
</section>

<section id="readBlog">
    <div class="container">
        <div class="col-md-8">
            <?php
            $stmt = $conn->prepare('select * from blogs where id = ? and status = ?');
            $stmt->bindParam(1, $id);
            $stmt->bindParam(2, $staus);
            $stmt->execute();
            if($stmt->rowCount() > 0)
            {
                $data = $stmt->fetchAll();
                foreach($data as $row)
                {$title=$row['title'];
                  $id= $row['id'];
                    ?>
                    <div class="readBx">
                        <img src="upload/<?php echo $row['img']; ?>" alt="" style="width: 350px;height: auto;">
                        <h2><?php echo $row['title']; ?></h2>
                        <?php $row['description'] = str_replace('../upload', 'upload', $row['description']); ?>
                        <?php if (strpos($row['description'], 'youtube')) { ?>
                            <?php $row['description'] = str_replace('<p>', '', $row['description']); ?>
                            <?php $row['description'] = str_replace('</p>', '', $row['description']); ?>
                            <iframe width="560" height="315" src=<?php echo '"' .$row['description'] .'"'; ?>frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                            </iframe>
                        <?php } else { ?>
                        <div class="descriptionPara"><?php echo $row['description']; ?></div>
                        <?php } ?>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <div class="col-md-4">
            <div class="relatedBlogs">
                <h3>Latest Post</h3>
                <?php
                $stmtLatest = $conn->prepare('select * from blogs where id != ? and status = ? limit 6');
                $stmtLatest->bindParam(1, $id);
                $stmtLatest->bindParam(2, $staus);
                $stmtLatest->execute();
                if($stmtLatest->rowCount() > 0){
                    $data = $stmtLatest->fetchAll();
                    foreach($data as $ro)
                    {
                        ?>
                        <a href="readBlog?id=<?php echo $ro['id']; ?>">
                            <div class="row recent">
                                <div class="col-md-4 col-xs-4">
                                    <img src="upload/<?php echo $ro['img']; ?>" alt="">
                                </div>
                                <div class="col-md-8 col-xs-8">
                                    <h4><?php echo $ro['title']; ?></h4>
                                    <p><?php echo $ro['publishdate']; ?></p>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                }
                else
                {
                    echo "nothing";
                }
                ?>
            </div>
        </div>
    </div>
</section>


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="share-apply-section pull-left">
                <div class="job-share" >
                    <a class="dropdown-toggle " href="dropdown-menu" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#ffc114;"><i class="fa fa-share-alt fa-lg"></i></a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown" style="margin:0;padding: .25rem 1.5rem;clear: both;  font-weight: 400;color: #ffc114;text-align: inherit;white-space: nowrap;border: 0;">

            <a class="dropdown-item" href="https://twitter.com/intent/tweet?text=https://innerworkindia.com/readBlog.php?id=<?php echo $id;?>" style = "background-color: #fff;border-color:#fff; "target= "_blank"><img src="img/we.jpg" style="height :30px;"/><p style="display:block;color:black;font-size: 14px;">  Twitter</p></a>
          <a class="dropdown-item" href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Finnerworkindia.com%2FreadBlog.php%3Fid%3D<?php echo $id; ?>&amp;src=sdkpreparse" style = "background-color: #fff;border-color:#fff;"  target= "_blank"><img src="img/fb.jpg" style="height :30px"><p style="display: block;color:black;font-size: 14px;">  Facebook</p></a>
        <a class="dropdown-item" href="https://api.whatsapp.com/send?text=https://innerworkindia.com/readBlog.php?id=<?php echo $id;?>" style = "background-color: #fff;border-color:#fff;"
data-action="share/whatsapp/share"  target= "_blank"><img src="img/wp.jpg" style="height :30px"><p style="display: block;color:black;font-size: 14px;">  Whatsapp</p></a>
        <a class="dropdown-item" href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Finnerworkindia.com%2FreadBlog.php%3Fid%3D<?php echo $id; ?>" style = "background-color: #fff;border-color:#fff;"  target= "_blank"><img src="img/link.png" style="height :30px"><p style="display: block;color:black;font-size: 14px;">  Linkedin</p></a>
                        </div>
                </div>

            </div>
            <br><hr>
            <div class="fb-like" data-href="http://localhost/webprojects/Innerworks/readBlog?id=<?php echo $id;?>" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
            <div class="fb-comments" data-href="http://localhost/webprojects/Innerworks/readBlog?id=<?php echo $id;?>" data-numposts="5" data-width="100%"></div>
        </div>
    </div>
</div>

<!-- Comment section -->

<!--<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <form id="comment-form" class="form-group" action="<?php//=($_SERVER['PHP_SELF'])?>" method="POST">
                <label class="form-control-label">Comment</label>
                <input id="commentator" class="form-control" type="text" placeholder="Enter your name" name="commentator" required
                style="width: 300px; margin: 10px 0;">
                <textarea rows="4" id="blog-comment" class="form-control" placeholder="Enter your comment" name="comment" required></textarea><br>
                <input type="submit" id="publish-comment" class="btn btn-info" name="publish" value="Publish"  />
            </form>
        </div>
    </div>
<<<<<<< HEAD


</div>


</div>


</div>

</div>  -->


<!-- //Comment section -->

<!-- Showing all comments -->
<!--<?php

$stmt = $conn->prepare('select * from blog_comments where blog_id = ? order by id desc limit 5');
$stmt->bindParam(1, $id);
$stmt->execute();
if($stmt->rowCount() > 0 ){
    $blog_comments = $stmt->fetchAll();
    foreach($blog_comments as $key => $blog_comment){
        ?>
        <div class="container">
            <ul id="comments" class="list-unstyled" style="margin: 10px 0 30px 0;">
            <li>
                <span class="fas fa-user-circle" style="font-size: 25px;">
                    <span style="font-size: 20px;"><?php echo $blog_comment['commentator']; ?></span>-->
                    <!-- <div style="margin: 5px 30px; font-size:13px; color: rgb(170, 169, 169);">18 hr ago</div> -->
              <!--  </span>
                <div style="font-size: 16px; margin: 10px 30px;">
                    <?php echo $blog_comment['comment']; ?>
                </div>
            </li>
        </ul>
        </div>
        <?php

    }
}
else{
    ?>
        <ul id="comments" class="list-unstyled" style="margin: 10px 0 30px 0;">

        </ul>
    <?php
}
?>-->
<!-- //Showing all comments -->

<?php include_once 'Footer.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!--   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
