<?php
include "DbConnection/DbConnectionHelper.php";

if(isset($_POST['id'], $_POST['comment'], $_POST['commentator'])){
    $stmt = $conn->prepare('insert into blog_comments(id, blog_id, commentator, comment, date_time) 
    values(NUll, ?, ?, ?, CURRENT_TIMESTAMP())');
    $stmt->bindParam(1, $_POST['id']);
    $stmt->bindParam(2, $_POST['commentator']);
    $stmt->bindParam(3, $_POST['comment']);
    $stmt->execute();
    if($stmt){
        $stmt1 = $conn->prepare('select * from blog_comments where blog_id=? order by id desc limit 1');
        $stmt1->bindParam(1, $_POST['id']);
        $stmt1->execute();
        $data = '';
        if($stmt1->rowCount() > 0 ){
            $blog_comments = $stmt1->fetchALL();
            foreach($blog_comments as $key => $blog_comment){
           $data .=  '
            <li>
                <span class="fas fa-user-circle" style="font-size: 25px;">
                    <span style="font-size: 20px;">'.$blog_comment['commentator'].'</span>
                    <!-- <div style="margin: 5px 30px; font-size:13px; color: rgb(170, 169, 169);">18 hr ago</div> -->
                </span>
                <div style="font-size: 16px; margin: 10px 30px;">
                    '.$blog_comment['comment'].'
                </div>
            </li>
           ';
            }
        }
        echo $data;
    }
}
else{
    echo "2";
}

?>