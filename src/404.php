<?php

$page_title = "Not Found (404)";
$friendly_urls = false;

$page_content = function()
{
?>

<div class="w3-padding-32">&nbsp;</div>

<div class="w3-content w3-padding-large w3-padding-32" style="max-width: 600px; border: 5px dashed lightgray;">
    <div class="w3-xlarge">
        <b>After looking everywhere, that resource cannot be found.</b>
    </div>
    
    <div class="w3-padding-16"></div>
    
    <div class="w3-large">
        Take a look around the site to see if you can find what you're looking for. It is possible the resource has moved or is no longer available.
    </div>
</div>

<div class="w3-content w3-padding w3-small w3-center w3-wide w3-text-gray" style="max-width: 600px;"><i>Error Code 404</i></div>

<div class="w3-padding-32">&nbsp;</div>

<?php
};

include __DIR__. DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
