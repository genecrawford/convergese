<?php
    include_once( "inc/header.php" );
    include_once( "inc/add_feature.php" );
?>
<?php
    getHeader( "schedule" );
?>

    <div class="wrapper feature">
        <img src="img/hydra.jpg" alt="Converge SE Schedule">
    </div>

    <div class="wrapper intro_text">
        <span>Schedule is coming very soon... <!-- Here is the schedule of Keynotes, Sessions & Workshops. --></span>
    </div>



    <div class="day_schedule wrapper">
        <a name="wednesday"></a>
        <div class="day-header">
            <p>Event Days: <a href="#wednesday">Wednesday</a> | <a href="#thursday">Thursday</a> | <a href="#friday">Friday</a></p>
        </div> 
    </div>
    
    <!--
      
    <div class="day_schedule wrapper">
        <a name="wednesday"></a>
        <div class="day-header">
            <time class="day-header-time" datetime="04-13-16">Wednesday June 14th</time>
        </div>                      
        
        <div class="schedule-block">
            <time class="schedule-time" datetime="">9:00 am to 4:30 pm</time>
            <div class="schedule-block-description">
                <h3 class="schedule-item-title">Workshops</h3>              
                <p class="schedule-item-description">
                    Check in for workshops begins at the <a href="https://goo.gl/maps/V7kkGKiZBdJ2">Carolina Alumni Center</a> at 8:00 am<br />
                    <em>Lunch is on your own around the downtown Vista (There are <a href="https://www.vistacolumbia.com/directory/eat-and-drink">plenty of great spots</a> just a block away).</em><br />
                    <a href="/workshops.php">Check out all the workshop details you need here.</a>
                </p>                        
            </div>                      
        </div>
        
        <div class="schedule-block">
            <time class="schedule-time" datetime="">6:00 pm to 10:00 pm</time>
            <div class="schedule-block-description">
                <h3 class="schedule-item-title">Sparkbox Welcome Party</h3>
                <p class="schedule-item-location">Liberty Tap Room - Patio</p>                      
                <p class="schedule-item-description">
                    <a href="http://seesparkbox.com/">Sparkbox</a> will be hosting a glorious meetup.
                </p>
                <a class="button" href="https://nvite.com/SparkboxParty/9o33yq">YOU MUST RSVP HERE</a>                       
            </div>                                              
        </div>
    </div>

    <div class="day_schedule wrapper">
        <a name="thursday"></a>
        <div class="day-header">
            <time class="day-header-time" datetime="04-14-16">Thursday June 15th</time>
            <p class="day-overview">Today will start off at the <a href="https://goo.gl/maps/V7kkGKiZBdJ2">Carolina Alumni Center</a> and continue until noon. Afternoon sessions will take place in the Alumni Center and also in other locations nearby.</p>
        </div>                      
        <div class="schedule-block schedule-time-block">
            <time class="schedule-time" datetime="">9:00 am</time>
            <div class="schedule-block-description">
                <h3 class="schedule-item-title">Check-In</h3>
                <p class="schedule-item-location"><a href="https://goo.gl/maps/V7kkGKiZBdJ2">Carolina Alumni Center</a></p>
                <p class="schedule-item-description">
                    Get the day started off right with some coffee.
                </p>
            </div>
        </div>

        <-- Schedule Block with sub items
        <div class="schedule-block schedule-time-block">
            <time class="schedule-time" datetime="">10:00 am</time>
            <div class="schedule-block-description">
                <h3 class="schedule-item-title">Keynotes</h3>
                <p><a href="speakers-details.php#j-cornelius">J Cornelius</a></p>
                <p>Constructive Disruption</p>
                <p><a href="speakers-details.php#sam-kapila">Sam Kapila</a></p>
                <p>Using Design to improve Diversity &amp; Inclusion</p>
                <p><a href="speakers-details.php#dean-schuster">Dean Schuster</a></p>
                <p>Stop Doing What You Know Doesn't Work</p>
            </div>
        </div>

        <-- // Schedule Block with sub items 
        <div class="schedule-block schedule-time-block">
            <time class="schedule-time" datetime="">12:00 pm</time>
            <div class="schedule-block-description">
                <h3 class="schedule-item-title">Lunch -</h3>
                <p><em>Lunch is on your own around the downtown Vista (There are <a href="https://www.vistacolumbia.com/directory/eat-and-drink">plenty of great spots</a> just a block away).</em></p>
            </div>
        </div>
       
        <-- Tracks Block 
        <div class="tracks clearfix">

            <h3>Thursday Content Tracks</h3>
            <-- Track Design
            <div class="track track-design">
                <header class="track-header">
                    <h3 class="track-header-title">Design/UX</h3>
                    <a href="https://goo.gl/maps/V7kkGKiZBdJ2">Carolina Alumni Center</a>
                </header>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">1:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#amber-stickel">Amber Stickel</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#amber-stickel">Everything is a Prototype</a></p>
                    </div>
                </div>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">2:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#ramya-mahligam">Ramya Mahalingam</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#ramya-mahligam">The Power of Personas</a></p>
                    </div>
                </div>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">3:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#danny-outlaw">Danny Outlaw</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#danny-outlaw">Back to the Future: How to Create Concepts that Inspire Change</a></p>
                    </div>
                </div>
            </div>
            <-- // Track Design
            
            <-- Track Development 
            <div class="track track-development">
                <header class="track-header">
                    <h3 class="track-header-title">Frontend</h3>
                    <a href="https://goo.gl/maps/V7kkGKiZBdJ2">Carolina Alumni Center</a>
                </header>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">1:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#dan-denney">Dan Denney</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#dan-denney">Unmasking HTML Emails</a></p>
                    </div>
                </div>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">2:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#stephanie-young">Stefanie Young</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#stephanie-young">Cut down the work in making websites responsive for mobile</a></p>
                    </div>
                </div>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">3:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        
                        <h4 class="talk-title"><a href="speakers-details.php#jed-schneider">Jed Schneider</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#jed-schneider">Borrowing from Math Class</a></p>
                    </div>
                </div>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">4:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#tim-smith">Tim Smith</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#tim-smith">Let's Learn CSS Grid</a></p>
                    </div>
                </div>
            </div>
            <-- // Track Development

            <-- Track Business
            <div class="track track-frontend">
                <header class="track-header">
                    <h3 class="track-header-title">Business</h3>
                    <a href="https://goo.gl/maps/V7kkGKiZBdJ2">Carolina Alumni Center</a>
                </header>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">1:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#rob-harr">Rob Harr</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#rob-harr">Putting humans back into business</a></p>
                    </div>
                </div>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">2:30 pm</time>
                    <div class="schedule-block-description talk-description">
                            <h4 class="talk-title"><a href="speakers-details.php#nicole-cendrowski">Nicole Cendrowski</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#nicole-cendrowski">Playing with Fire</a></p>
                    </div>
                </div>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">3:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#anna-stout">Anna Stout</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#anna-stout">Dealing With The Pressures of Running Your Business</a></p>
                    </div>
                </div>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">4:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#robert-prioleau">Robet Prioleau</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#robert-prioleau">Selling For Those Who Hate Selling</a></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="schedule-block schedule-time-block">
            <time class="schedule-time" datetime="">6:00 pm to 7:30 pm</time>
            <div class="schedule-block-description">
                <h3 class="schedule-item-title">Beer &amp; Chocolate Pairing</h3>
                <p class="schedule-item-location">SOCO Vista</p>                      
                <p class="schedule-item-description">
                    <a href="https://www.facebook.com/fireforgebeer">Fireforge Crafted Beer</a> &amp; <a href="https://www.facebook.com/evolthruchoc/">Evolution Through Chocolate</a>
                </p>
                <a class="button" href="/beerandchocolate.php">YOU MUST REGISTER HERE ($25/PERSON)</a>                       
            </div>                                              
        </div>

        <div class="schedule-block schedule-time-block">
            <time class="schedule-time" datetime="">7:00 pm - 9:00 pm</time>
            <div class="schedule-block-description">
                <h3 class="schedule-item-title">Meetup @ World Of Beer</h3>
                <p class="schedule-item-location track-location">
                    <a href="https://worldofbeer.com/Locations/TheVista">Website</a> | <a href="https://goo.gl/maps/G5wkmE33x9H2">Map</a>
                </p> 
            </div>
        </div>
    </div>
        
    <div class="day_schedule wrapper">
        <a name="friday"></a>
        <div class="day-header">
            <time class="day-header-time" datetime="04-14-16">Friday June 16th</time>
            <p class="day-overview">Today will start off at the <a href="https://goo.gl/maps/V7kkGKiZBdJ2">Carolina Alumni Center</a> and continue until noon. Afternoon sessions will take place in the Alumni Center and also in other locations nearby.</p>
        </div>          

        <div class="schedule-block schedule-time-block">
            <time class="schedule-time" datetime="">9:00 am</time>
            <div class="schedule-block-description">
                <h3 class="schedule-item-title">Check-In</h3>
                <p class="schedule-item-location"><a href="https://goo.gl/maps/V7kkGKiZBdJ2">Carolina Alumni Center</a></p>
                <p class="schedule-item-description">
                    Get the day started off right with some coffee.
                </p>
            </div>
        </div>

        <-- Schedule Block with sub items
        <div class="schedule-block schedule-time-block">
            <time class="schedule-time" datetime="">10:00 am</time>
            <div class="schedule-block-description">
                <h3 class="schedule-item-title">Keynotes</h3>
                <p><a href="speakers-details.php#ben-callahan">Ben Callahan</a></p>
                <p>Building a Human-Centered Culture</p>
                <p><a href="speakers-details.php#tera-simon">Terra Simon</a></p>
                <p>Scope Creep - the project killer</p>
                <p><a href="speakers-details.php#drew-clemens">Sparkbox &amp; Gap: Drew Clemens &amp; Teresa Aguilera</a></p>
                <p>The Story of Stitch: Gap's Design System</p>
            </div>
        </div>

        <-- // Schedule Block with sub items
        <div class="schedule-block schedule-time-block">
            <time class="schedule-time" datetime="">12:00 pm</time>
            <div class="schedule-block-description">
                <h3 class="schedule-item-title">Lunch -</h3>
                <p><em>Lunch is on your own around the downtown Vista (There are <a href="https://www.vistacolumbia.com/directory/eat-and-drink">plenty of great spots</a> just a block away).</em></p>
            </div>
        </div>
       
        <-- Tracks Block
        <div class="tracks clearfix">
	        
            <-- Track Design
            <div class="track track-design">
                <header class="track-header">
                    <h3 class="track-header-title">Design/UX</h3>
                    <p class="schedule-item-location track-location">
                        <a href="https://goo.gl/maps/V7kkGKiZBdJ2">Carolina Alumni Center</a>
                    </p>
                </header>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">1:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#j-cornelius">J Cornelius</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#j-cornelius">Design Thinking is Bullshit</a></p>
                    </div>
                </div>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">2:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#brooke-creef">Brooke Creef</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#brooke-creef">Design Sprints at the Home Depot.</a></p>
                    </div>
                </div>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">3:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#joni-halabi">Joni Halabi</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#joni-halabi">Accessible Web Development</a></p>
                    </div>
                </div>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">4:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#cian-oconnor">Cian O'Connor</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#cian-oconnor">The Science Behind Great User Interfaces</a></p>
                    </div>
                </div>
            </div>
            <-- // Track Design 
            <-- Track Frontend 
            <div class="track track-frontend">
                <header class="track-header">
                    <h3 class="track-header-title">Frontend</h3>
                     <p class="schedule-item-location track-location">
                        <a href="https://goo.gl/maps/V7kkGKiZBdJ2">Carolina Alumni Center</a>
                    </p>
                </header>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">1:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#megan-zlock">Megan Zlock</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#megan-zlock">Rediscovering HTML</a></p>
                    </div>
                </div>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">2:30 pm</time>
                    <div class="schedule-block-description talk-description">
                       <h4 class="talk-title"><a href="speakers-details.php#bob-visser">Bob Visser</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#bob-visser">Liberating Your Layout Through CSS Grid</a></p>
                    </div>
                </div>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">3:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#bermon-painter">Bermon Painter</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#bermon-painter">CSS: Preprocessing, Postprocessing, and Transpiling</a></p>
                    </div>
                </div>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">4:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#philip-zastrow">Philip Zastrow</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#philip-zastrow">CSS for Multiple Brands</a></p>
                    </div>
                </div>
            </div>
            <-- // Track Frontend 
            
            <-- Track Development 
            <div class="track track-development">
                <header class="track-header">
                    <h3 class="track-header-title">Development</h3>
                    <p class="schedule-item-location track-location">
                        <a href="https://goo.gl/maps/V7kkGKiZBdJ2">Carolina Alumni Center</a>
                    </p>
                </header>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">1:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#tim-whitacre">Tim Whitacre</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#tim-whitacre">Introduction to Elm</a></p>
                    </div>
                </div>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">2:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#nic-rosenthal">Nic Rosenthal</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#nic-rosenthal">Building Apps for Slack</a></p>
                    </div>
                </div>
                  <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">3:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#aaron-moller">Aaron Moller</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#aaron-moller">Developing with Microservices</a></p>
                    </div>
                </div>
                <div class="schedule-block schedule-time-block ">
                    <time class="schedule-time" datetime="">4:30 pm</time>
                    <div class="schedule-block-description talk-description">
                        <h4 class="talk-title"><a href="speakers-details.php#rob-tarr">Rob Tarr</a></h4>
                        <p class="talk-title-speaker"><a href="speakers-details.php#rob-tarr">What I learned Refactoring a Large JS Codebase</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cta wrapper">
        <div class="cta_text">
        Converge SE is the conference for those who want to build a beautiful web.
        </div>
        <div class="cta_action">
            <a href="" class="btn">Register Now</a>
            <small>Tickets are $400</small>
        </div>
    </div>
    
    -->

<?php include_once( "inc/footer.php" ); ?>