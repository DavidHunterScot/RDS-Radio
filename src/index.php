<?php

$page_title = "Home";

$page_content = function()
{
?>

<div class="w3-metro-red">
    <div class="w3-auto w3-padding w3-padding-64">
        <span class="w3-xxlarge"><b>WELCOME TO</b></span><br>
        <span class="w3-jumbo"><b>RDS RADIO</b></span>
    </div>
</div>

<div class="w3-auto w3-padding w3-padding-64">
    <p class="w3-xlarge w3-center"><b>Top Tracks</b></p>

    <?php
    
    $top_tracks = array
    (
        array
        (
            "artist" => "Hugh Grant and Haley Bennett",
            "title" => "Way Back Into Love",
            "thumbnail" => "hugh-grant-haley-bennett.png",
            "amazon" => "https://amazon.co.uk/music/player/albums/B001L9GO0E?marketplaceId=A1F83G8C2ARO7P&musicTerritory=GB&ref=dm_sh_wc6LIugrNg3jUayoDXFJ7ansV&trackAsin=B001L9LQQQ",
        ),
        array
        (
            "artist" => "Alisha Weir & The Cast of Roald Dahl's Matilda The Musical",
            "title" => "Naughty",
            "thumbnail" => "alisha-weir-naughty.png",
            "amazon" => "https://amazon.co.uk/music/player/albums/B0BKS3KFBB?marketplaceId=A1F83G8C2ARO7P&musicTerritory=GB&ref=dm_sh_IeTd80qRFrQuZO0ZZrE0jtQyg&trackAsin=B0BKS41GRD",
        ),
    );
    
    ?>
    
    <div class="w3-row">
        <?php foreach( $top_tracks as $top_track ): ?>
            <div class="w3-col l6 w3-padding w3-row">
                <div class="w3-col s3 m2 l3 w3-center">
                    <img src="/assets/images/track-thumbnails/<?php echo $top_track[ 'thumbnail' ]; ?>" class="w3-image">
                </div>

                <div class="w3-col s9 m10 l9 w3-padding">
                    <div class="w3-large"><b><?php echo strtoupper( $top_track[ 'title' ] ); ?></b></div>
                    <div class="w3-medium"><?php echo $top_track[ 'artist' ]; ?></div>
                    <div class="w3-small w3-margin-top"><a href="<?php echo $top_track[ 'amazon' ]; ?>" target="_blank" class="w3-button w3-amber w3-padding-small w3-round-xlarge">Buy Song on Amazon UK</a></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
};

include __DIR__. DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
