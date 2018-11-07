<!-- cut the shit out of this -->

<?php foreach($postings as $posting): ?>
    <div class="feed-wrapper">
        <div class="feed">
            <div class="feed-headline d-flex mb-1">
                <div class="d-flex">
                    <a class="user-link" href="#">
                        <img class="poster-pic" src=<?php echo $posting->user->profile->pic ?>>
                    </a>

                    <div class="poster flex-column ml-2"> 
                        <a class="poster-name" href="#"><?php echo $posting->user->profile->name ?></a>
                        
                        <div>                                    
                            <a class="time-stamp" href="#"><?php echo $posting->profile->timeStamp ?> &#183;</a>
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
                    <img class="commenter-pic" src=<?php echo $posting->user->profile->pic ?>>
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