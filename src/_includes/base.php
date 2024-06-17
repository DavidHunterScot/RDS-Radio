<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title><?php if( isset( $page_title ) && $page_title ) echo $page_title . " - "; ?>RDS Radio</title>
		
		<link rel="stylesheet" type="text/css" href="/assets/w3css/4.15/w3.css">
		<link rel="stylesheet" type="text/css" href="/assets/w3css/w3-colors-metro.css">
		<link rel="stylesheet" type="text/css" href="/assets/w3css/w3-colors-flat.css">
	</head>

	<body>
        <header class="w3-metro-red">
        	<div class="w3-auto w3-padding w3-padding-32">
        		<div class="w3-xxlarge" style="text-shadow: 2px 2px rgb( 89, 89, 89 );"><b>RDS Radio</b></div>
        		<div class="w3-large" style="text-shadow: 2px 2px rgb( 89, 89, 89 );">Love Life, Love Music, Let's Have a Big Time. Across Ayrshire, On 10.7 FM.</div>
        	</div>
        </header>
        
        <nav class="w3-metro-red w3-card">
        	<div class="w3-auto w3-bar">
                <a href="/" class="w3-bar-item w3-button w3-hover-none w3-hover-text-white"><b>Home</b></a>
                <a href="/jingles/" class="w3-bar-item w3-button w3-hover-none w3-hover-text-white"><b>Jingles</b></a>
        	</div>
        </nav>

        <?php if( isset( $page_content ) && is_callable( $page_content ) ) $page_content(); ?>

        <footer class="w3-light-gray w3-border-gray w3-text-gray w3-topbar w3-monospace">
            <div class="w3-auto w3-padding w3-center w3-small">
                <p>Copyright &copy; <a href="https://www.dah5.me.uk/davidhunter" target="_blank">David Hunter</a>.</p>
            </div>
        </footer>
	</body>
</html>
