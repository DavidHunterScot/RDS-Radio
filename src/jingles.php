<?php

$page_title = "Jingles";

$page_content = function()
{
?>

<div class="w3-auto w3-padding w3-padding-32">
    <h1>Jingles</h1>
    <p>The following is a selection of RDS Radio Jingles.</p>

    <?php $jingle = function( $text, $file ) { ?>
        <div style="text-align: center;">
            <p><b><?php echo $text; ?></b></p>
            <audio controls>
                <source src="https://www.listento.rdsradio.co.uk/jingles/<?php echo $file; ?>" type="audio/mpeg">
                Sorry, but your internet browsing app does not support the audio playback of this jingle.
            </audio>
        </div>
    <?php }; ?>

    <div style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
        <?php $jingle( "Coolest Songs Miley Cyrus", "coolest_songs_miley_cyrus.mp3" ); ?>
        <?php $jingle( "Health Message: Fire Safety (High-Raised Flats)", "health_message-fire_safety-high-raised_flats.mp3" ); ?>
        <?php $jingle( "Health Message: Fire Safety", "health_message-fire_safety.mp3" ); ?>
        <?php $jingle( "If You're Bored - Jingle 1", "if_youre_bored-jingle_1.mp3" ); ?>
        <?php $jingle( "If You're Bored - Jingle 2", "if_youre_bored-jingle_2.mp3" ); ?>
        <?php $jingle( "Sound So Good", "sound_so_good.mp3" ); ?>
    </div>
</div>

<?php
};

include __DIR__. DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
