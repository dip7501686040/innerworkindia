<?php
$course = $_REQUEST['course'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Startup Support Services | Startup Business Support | Startup Support in India </title>
    <?php include "CommonFiles.php" ?>
    <link rel="stylesheet" href="css/hr-consultancy.css?version=1.1">
    <link rel="stylesheet" href="css/collage.css">
</head>

<body>
    <?php include_once 'Header.php'; ?>

    <section id="banner">
        <div class="container">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <h2><?php echo $course; ?></h2>
                <p><a href="index">Home</a> <span>/</span><?php echo $course; ?></p>
            </div>
        </div>
    </section>
    
    <div style="text-align: center;">
        <img src="Images/100satisfaction.png" alt="" style="width: 50%; height:200px; margin-top: 25px;">
    </div>

    <section id="ourSer">
        <div class="container">
            <ul style="list-style: none; padding: 0">
                <?php
                if ($course == 'Graphic Designing') {
                ?>
                    <li class="row course">
                        <div class="col-md-5 course-img">
                            <img src="Images/gRAPHIC DESIGN.png" alt="" style="width: 100%; height:300px; margin-top:25px;">
                        </div>
                        <div class="col-md-7 course-desc">
                            <h2>Graphic Designing</h2>
                            <p>Graphic design is art with a purpose. It involves a creative and systematic plan to solve a problem or achieve certain objectives, with the use of images, symbols or even words. It is visual communication and the aesthetic expression of concepts and ideas using various graphic elements and tools.
                            </p>
                            <h4>Software Covered:</h4>
                            <h6>
                                Adobe Photoshop<br />
                                Adobe Illustrator<br />
                                Adobe indesign<br />
                                Corel Draw
                            </h6>
                            <h5>
                                Course Duration : 6 Months <br>
                                Note: You can Get enrolled in individual Software too as Per your Requirement,
                            </h5>
                            <h4>Career Opportunities:</h4>
                            <h6>
                                Graphic Designer <br>
                                DTP Operator <br>
                                Layout Designer <br>
                                UI Designer <br>
                                Packaging Designer <br>
                                Designer For interactive E-Learning
                            </h6>
                        </div>
                    </li>
                <?php
                } elseif ($course == 'Video Editing') {
                ?>
                    <li class="row course">
                        <div class="col-md-5 course-img">
                            <img src="Images/video editing1.JPG" alt="" style="width: 100%; height:300px; margin-top:25px;">
                        </div>
                        <div class="col-md-7 course-desc">
                            <h2>Video Editing:</h2>
                            <p>Video editing is the manipulation and arrangement of video shots. Video editing is used to structure and present all video information, including films and television shows, video advertisements and video essays.
                            </p>
                            <h4>Software Covered:</h4>
                            <h6>
                                Adobe Premiere<br />
                                Adobe Premiere
                            </h6>
                            <h5>
                                Duration : 2 Months
                            </h5>
                            <h4>Career Opportunities:</h4>
                            <h6>
                                Video Editor <br>
                                Film Editor
                            </h6>
                        </div>
                    </li>
                <?php
                } elseif ($course == 'Motion Graphics') {
                ?>
                    <li class="row course">
                        <div class="col-md-5 course-img">
                            <img src="Images/homework-dribbble_original.gif" alt="" style="width: 100%; height:300px; margin-top:25px;">
                        </div>
                        <div class="col-md-7 course-desc">
                            <h2>Motion Graphics:</h2>
                            <p>Motion graphics are pieces of animation or digital footage which create the illusion of motion or rotation, and are usually combined with audio for use in multimedia projects.
                            </p>
                            <h4>Software Covered:</h4>
                            <h6>
                                Adobe After Effects
                            </h6>
                            <h5>
                                Course Duration : 2 Months <br>
                            </h5>
                            <h4>Career Opportunities:</h4>
                            <h6>
                                Motion Graphic Artist <br>
                                Advertisement Designer <br>
                                2D Animation
                            </h6>

                        </div>
                    </li>
                <?php
                } elseif ($course == 'Architecture Designing') {
                ?>
                    <li class="row course">
                        <div class="col-md-5 course-img">
                            <img src="Images/15-3d-floor-plan-rendering.jpg" alt="" style="width: 100%; height:300px; margin-top:25px;">
                        </div>
                        <div class="col-md-7 course-desc">
                            <h2>Architecture Designing:</h2>
                            <p>Architectural design is a concept that focuses on components or elements of a structure. An architect is generally the one in charge of the architectural design. They work with space and elements to create a coherent and functional structure.
                            </p>
                            <h4>Software Covered:</h4>
                            <h6>
                                Architecture Designing <br>
                                Introduction of AutoCAD <br>
                                3Ds Max <br>
                                Revit <br>
                                Unity

                            </h6>
                            <h5>
                                Course Duration : 7 Months <br>
                            </h5>
                            <h4>Career Opportunities:</h4>
                            <h6>
                                3D Modeler <br>
                                3D Visualizer <br>
                                Architecture Design
                            </h6>

                        </div>
                    </li>
                <?php
                } elseif ($course == 'Autodesk MAX') {
                ?>
                    <li class="row course">
                        <div class="col-md-5 course-img">
                            <img src="Images/3DS MAX.jpg" alt="" style="width: 100%; height:300px; margin-top:25px;">
                        </div>
                        <div class="col-md-7 course-desc">
                            <h2>Autodesk MAX:</h2>
                            <p>Autodesk 3ds Max, formerly 3D Studio and 3D Studio Max, is a professional 3D computer graphics program for making 3D animations, models, games and images. It is developed and produced by Autodesk Media and Entertainment.
                            </p>
                            <h4>Software Covered:</h4>
                            <h6>
                                Autodesk Max <br>
                                (Modelling, Texturing, Lighting & Animation )


                            </h6>
                            <h5>
                                Course Duration : 6 Months <br>
                            </h5>
                            <h4>Career Opportunities:</h4>
                            <h6>
                                3D Modeler <br>
                                3D Visualizer <br>
                                3D Lighting Artist <br>
                                3D Animator

                            </h6>

                        </div>
                    </li>
                <?php
                } elseif ($course == 'Autodesk Maya') {
                ?>
                    <li class="row course">
                        <div class="col-md-5 course-img">
                            <img src="Images/mAYA.jpg" alt="" style="width: 100%; height:300px; margin-top:25px;">
                        </div>
                        <div class="col-md-7 course-desc">
                            <h2>Autodesk Maya:</h2>
                            <p>Autodesk Maya is a 3D modeling and animation program that can be used for 3D printing, and animated graphics. Whether you plan to model or modify objects Maya offers all the tools needed to produce professional and quality results for even a beginner.
                            </p>
                            <h4>Software Covered:</h4>
                            <h6>
                                Autodesk Maya <br>
                                (Modelling, Texturing, Lighting & Animation )
                            </h6>
                            <h5>
                                Course Duration : 6 Months <br>
                            </h5>
                            <h4>Career Opportunities:</h4>
                            <h6>
                                3D Modeler <br>
                                3D Visualizer <br>
                                3D Lighting Artist <br>
                                3D Animator

                            </h6>

                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>

    </section>



    <?php include_once 'Footer.php'; ?>
</body>

</html>