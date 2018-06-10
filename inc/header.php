<?php function getHeader( $pageID ){ ?>
    <!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>ConvergeSE | Columbia, SC | August 8-10th 2018</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="description" content="ConvergeSE - August 8-10th 2018 - Columbia, South Carolina | A conference for designers & developers.">
        <meta name="keywords" content="ConvergeSE, Converge, Web Conference, Design, Development, Business, Marketing, Columbia, South Carolina">
        <meta property="og:title" content="ConvergeSE - August 8-10th 2018 - Columbia, South Carolina"/>
        <meta property="og:image" content="http://convergese.com/cse-icon.jpg"/>
        <meta property="og:site_name" content="ConvergeSE"/>
        <meta property="og:url" content="http://convergese.com"/>
        <meta property="og:description" content="A conference for designers &amp; developers."/>
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:image" content="" />

        <!-- FB Stuff -->
        <meta property="fb:app_id" content="" />
        <meta property="article:author" content="https://www.facebook.com/convergese" />
        <meta property="article:publisher" content="https://www.facebook.com/convergese" />

        <!-- Twitter Stuff -->
        <meta name="twitter:card" content="summary" /> <!-- 'summary', 'summary_large_image' -->
        <meta name="twitter:site" content="@convergese" />
        <meta name="twitter:creator" content="@convergese" />
        
        <link href="https://fonts.googleapis.com/css?family=Faustina:400,400i,700|Kranky" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="<?php echo $pageID; ?>">
        <div class="site_wrapper">
            <div class="mobile_nav_container">
                <header class="site_header">
                    <a id="mobile_close_link" href="/">&#x2715;</a>
                </header>
                
                <nav class="site_navigation">
                    <!-- <div class="mobile_nav_header_icon"></div> -->
                    <a href="/"><small>Head back to the</small><div>Homepage</div></a>
                    <a href="./schedule.php"><small>Reading the</small><div>Schedule</div></a>
                    <a href="./speakers.php"><small>The tale of our</small><div>Speakers</div></a>
                    <a href="./workshops.php"><small>Learning by doing</small><div>Workshops</div></a>
                    <a href="./about.php"><small>Have you ever wondered</small><div>Why Attend?</div></a>
                    <a href="./register.php"><small>Tickets are $200</small><div>Register</div></a>
                </nav>
            </div>
            <main class="content_wrapper">
                <header class="site_header">
                    <a href="/" id="mobile_open_link"><img src="img/logo_2018.svg" alt="Converge Se 2018"></a>
                </header>
<?php  } ?>