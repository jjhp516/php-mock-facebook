<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fakebook</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../../css/app.css">
</head>
<body>
    <div class="wrapper">
        <header>
            @include('global_nav')
        </header>


        <div class="sidebar left-side flex-column">

        </div>


        <main class="flex-column">
            


        <?php foreach($postings as $posting): ?>
            <div class="feed-wrapper">
                <div class="feed">
                    <div class="feed-headline d-flex mb-1">
                        <div class="d-flex">
                            <a class="user-link" href="#">
                                <img class="poster-pic" src=<?php echo $posting->user->profilePic ?>>
                            </a>

                            <div class="poster flex-column ml-2"> 
                                <a class="poster-name" href="#"><?php echo $posting->user->name ?></a>
                                
                                <div>                                    
                                    <a class="time-stamp" href="#"><?php echo $posting->timeStamp ?> &#183</a>
                                    <button class="access"><i class="fas fa-globe-americas fa-sm"><i class="fas fa-caret-down fa-sm ml-1"></i></i></a>
                                </div>
                            </div>
                        </div>

                        <a class="more-options"><i class="fas fa-ellipsis-h"></i></a>                      
                    </div>

                    <div class="feed-content">
                        <?php echo $posting->content ?>
                    </div>

                    <div class="feedback d-flex">
                        <a><i class="far fa-thumbs-up fa-lg mr-1"></i>Like</a>
                        <a><i class="far fa-comment fa-lg mr-1"></i>Comment</a>
                        <a><i class="far fa-share-square fa-lg mr-1"></i>Share</a>
                    </div>
                </div>

                <div class="comment-section">
                    <div class="d-flex">
                        <a class="user-link mr-1" href="#">
                            <img class="commenter-pic" src=<?php echo $posting->viewer->profilePic ?>>
                        </a>

                        <div class="comment-area d-flex">
                            <textarea  
                                class ="comment-box" 
                                id="commentBox" 
                                name="commentBox" 
                                placeholder="Write a comment..." 
                                rows="1">
                            </textarea>
                            
                            <div class="commentBtns d-flex">
                                <button><i class="far fa-smile"></i></button>
                                <button><i class="fas fa-camera"></i></button>
                                <button><i class="far fa-image"></i></button>
                                <button><i class="far fa-sticky-note"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="instructions">
                        Press Enter to post
                    </div>
                </div>
            </div>
        <?php endforeach; ?>




        </main>


        <div class="sidebar right-side flex-column">
            
        </div>

        <footer>
        </footer>
    </div>
</body>
</html>
