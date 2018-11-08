<div class="user-info placard">
    <div class="info-heading d-flex">
        <div class="blue-circle d-flex mr-2">
            <i class="fas fa-globe-americas fa-sm"></i>
        </div>
        <p>Intro</p> 
    </div>

    <ul class="intro">
        <li><i class="fas fa-briefcase mr-2"></i><?php echo $user->profile->occupation ?></li>
        <li><i class="fas fa-graduation-cap mr-2"></i><?php echo $user->profile->education ?></li>
        <li><i class="fas fa-map-marker-alt mr-2"></i> Lives in <?php echo $user->profile->location ?></li>
        <li><i class="fas fa-home mr-2"></i></i> From <?php echo $user->profile->hometown ?></li>
    </ul>
</div>