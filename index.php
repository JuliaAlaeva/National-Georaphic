<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/reset.css" type="text/css">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link rel="stylesheet" href="style/font.css" type="text/css">
    <meta charset="UTF-8">
    <?php 
        include("Adding.php"); 
    ?>
    <title>National-Geographic</title>
</head>
<body>
    <header>
    <div class="clearfix">
    <a id="logo" href="index.html">
            <img  src="images/header/Logo.png" alt="National-Geographic"/>
        </a>
    <form action="#">
        <img id="seach_logo" src="images/header/Search-Icon.png" alt="Search"/>
        <input type="search" name="search" placeholder="Seach"/>
        <div class="search_categories">
            <div id="all_categories">All Categories</div>
            <img id="search_arrow" src="images/header/Select-Menu-Arrow.png" alt="Menu_Arrow"/>
        </div><!-- end all_categories -->
        <a id="arrow" href="#">
            <img src="images/header/arrow.png" alt="arrow"/>
        </a>
        <div id="dropdown_categories">
			<form action="#">
                <input type="checkbox" id="all_select" name="all"/>
				<label class="choose_all" for="all_select">
				    <div id="all_select_box"></div>
				    Select all categories to search
				</label><br/>
				<ul class="drop">
                    <li><input class="check" id="video" type="checkbox" checked/><label for="video">Videos</label></li>
                    <li><input class="check" id="photography" type="checkbox"/><label for="photography">Photography</label></li>
                    <li><input class="check" id="animals" type="checkbox"/><label for="animals">Animals</label></li>
                    <li><input class="check" id="games" type="checkbox"/><label for="games">Games</label></li>
				</ul>
                <ul class="drop">
                    <li><input class="check" id="enviroment" type="checkbox"/><label for="enviroment">Enviroment</label></li>
                    <li><input class="check" id="travel" type="checkbox" checked/><label for="travel">Travel</label></li>
                    <li><input class="check" id="kids" type="checkbox"/><label for="kids">Kids</label></li>
                    <li><input class="check" id="adventurer" type="checkbox" checked/><label for="adventurer">Adventurer</label></li>
				</ul>
                <ul class="drop">
                    <li><input class="check" id="television" type="checkbox"/><label for="television">Television</label></li>
                    <li><input class="check" id="apps" type="checkbox"/><label for="apps">Apps</label></li>
                    <li><input class="check" id="events" type="checkbox"/><label for="events">Events</label></li>
                    <li><input class="check" id="trips" type="checkbox"/><label for="trips">Trips</label></li>
				</ul>
			</form>
        </div>
    </form>
    <div id="sing-up">
        <a href="#">
            <img src="images/header/Sing-Up-Icon.png" alt="Sing"/><br/>
            Sing Up
        </a>
        <a href="#">
        <img src="images/header/Login-Icon.png" alt="Login"/><br/>
        Login</a>
    </div><!-- end sing-up -->
    </div><!-- end top panel -->
    <nav>
        <ul>
            <li><img class="menu_line" src="images\header\nav\menu-Line.png" alt="menu-Line"/></li>
            <li class="tagged"><a href="#"><img  src="images\header\nav\home.png" alt="home"/><br/>HOME</a></li>
            <li><a href="#"><img  src="images\header\nav\photo.png" alt="photography"/><br/>Photography</a></li>
            <li><a href="#"><img  src="images\header\nav\video.png" alt="video"/><br/><div id="video">Video</div></a></li>
            <li><a href="#"><img src="images\header\nav\environment.png" alt="environment"/><br/>Environment</a></li>
            <li><a href="#"><img src="images\header\nav\adventure.png" alt="adventure"/><br/>Adventure</a></li>
			<li><a href="#"><img src="images\header\nav\travel.png" alt="travel"/><br/>Travel</a></li>
            <li><a href="#"><img src="images\header\nav\television.png" alt="television"/><br/>Television</a></li>
            <li><a href="#"><img src="images\header\nav\kids.png" alt="television"/><br/>Kids</a></li>
        </ul>
    </nav>
    </header>
    <main class="clearfix">
       <section id="main_left">
            <nav class="sub_menu">
                <ul>
                    <li><a href="#"><img src="images/main/subNav/Daily-News.png" alt="News Paper"/>Daily News</a></li>
                    <li><a href="#"><img src="images/main/subNav/Magazine.png" alt="Magazine"/>Magazine</a></li>
                    <li><a href="#"><img src="images/main/subNav/Maps.png" alt="Maps and pointer"/>Maps</a></li>
                    <li><a href="#"><img src="images/main/subNav/Sience.png" alt="Flask"/>Sience</a></li>
                    <li><a href="#"><img src="images/main/subNav/Education.png" alt="Rogatywka"/>Education</a></li>
                    <li><a href="#"><img src="images/main/subNav/Games.png" alt="Joystick"/>Games</a></li>
                    <li><a href="#"><img src="images/main/subNav/Events.png" alt="Сalendar"/>Events</a></li>
                    <li><a href="#"><img src="images/main/subNav/Blogs.png" alt="Phrase"/>Blogs</a></li>
                    <li><a href="#"><img src="images/main/subNav/Explorers.png" alt="Traveler"/>Explorers</a></li>
                    <li><a href="#"><img src="images/main/subNav/Trips.png" alt="Ship"/>Trips</a></li>
                </ul>
            </nav>
            <section class="center">
                <nav class="video_menu">
                   <ul>
                        <li class="active"><a href="#">HOME</a><div class="arrow"></div></li>
                        <li><a href="#">Animals</a></li>
                        <li><a href="#">Ancient</a></li>
                        <li><a href="#">Emergy</a></li>
                        <li><a href="#">Environment</a></li>
                        <li><a href="#">Travel</a></li>
                    </ul>
                </nav><!-- end video_menu -->
                <div class="main_video">
                   <div class="join_video">
                    <video src="#" poster="images/main/videoBlock/main_video.png" tabindex="0"></video>
                    <div class="pages">
                        <ul>
                            <li class="active">1</li>
                            <li>2</li>
                            <li>3</li>
                        </ul>
                    </div><!-- end pages -->
                    </div><!-- end join_video -->
                    <div class="control_video">
                       <div class="video_title">
                            <h2>Lion Cubs Playing</h2>
                            African lion cubs play in the grass in the Okavango Delta
                        </div>
                        <div class="video_button">
                            <form action="">
                                <input type="image" src="images/main/videoBlock/pause.png" alt="pause" class="pause"/>
                            </form>
                        </div><!-- end video_button -->
                    </div><!-- end control_video -->
                </div><!-- end main_video -->
                <div id="search_news">
                    <div id="latest_news">
                        <img src="images/main/newSearch/clock.png" alt="clock"/>
                        <span> Latest News </span>
                    </div><!-- end latest_news -->
                    <div id="most_recent">
						   Most Recent
                        <img id="most_recent_icon" src="images/main/newSearch/arrow.png" alt="arrow"/>
                    </div><!-- end most_recent -->
                    <div id="dropdown_news">
                       		<ul>
                       			<li>Most Viewd</li>
                       			<li id="select">Most Recent</li>
                       			<li>Most Disscussed</li>
                       			<li>Most Rated</li>
                       		</ul>
                       </div><!-- end dropdown_news -->
                    <div id="icon">
                    	<div class="cover">
							<img src="images/main/newSearch/list.png" alt="list" id="list">
              			</div><!--end cover/1 -->
						<div class="cover">
							<img src="images/main/newSearch/grid.png" alt="grid" id="grid"/>
						</div><!--end cover/2 -->
               		</div><!-- end icon -->
                </div><!-- end search_news -->
            </section><!-- end center_video -->
            <section class="articles_story">
                <section class="story">
                    <article class="overview">
                          <div class="title_story">
                               <img src="images/main/mainArticles/lion.png" alt="lion"/>
                               <h4>African Lion Cub</h4>
                               <time class="ago" datetime="">
                                    <?php $time_passed(); ?>
                                </time>
                                <div class="star_rating"></div>
                            </div><!-- end title_story -->
                            <div class="description">
                                An African lion cub rests in the tall grasses of Botswana’s Okavango Delta. Once ranging across the African continent and into Syria, Israel, Iraq, Pakistan, Iran, and even northwest India, lions have declined to as few as 20,000 animals from about 450,000 just 50 years ago.
                            </div><!-- end description -->
                    </article>
                </section>
                <section class="story">
                    <article class="overview">
                          <div class="title_story">
                               <img src="images/main/mainArticles/manky.png" alt="manky"/>
                               <h4>Young Mountain Gorilla</h4>
                               <time class="ago" datetime="">
                                    <?php $time_passed(); ?>
                                </time>
                                <div class="star_rating"></div>
                            </div><!-- end title_story -->
                            <div class="description">
                                This young mountain gorilla, named Kwibesha, is a member of the Kabrizi family of gorillas in Virunga National Park. Wildlife rangers in the park have had to suspend their monitoring of the gorillas because rebel militias and the Congolese army occupy much of their habitat.
                            </div><!-- end description -->
                    </article>
                </section>
                <section class="story">
                    <article class="overview">
                      <div class="title_story">
                           <img src="images/main/mainArticles/penguin.png" alt="king Penguins"/>
                           <h4>King Penguins</h4>
                           <time class="ago" datetime="">
                                <?php $time_passed(); ?>
                            </time>
                            <div class="star_rating"></div>
                        </div><!-- end title_story -->
                        <div class="description">
                            King penguins live on the more temperate islands north of Antarctica. Although their habitat is warmer than that of emperor penguins, king penguins have four layers of feathers and huddle together for warmth.
                        </div><!-- end description -->
                    </article>
                </section>
                <section class="story">
                    <article class="overview">
                      <div class="title_story">
                           <img src="images/main/mainArticles/shark.png" alt="shark"/>
                           <h4>Great White Shark</h4>
                           <time class="ago" datetime="">
                                <?php $time_passed(); ?>
                            </time>
                            <div class="star_rating"></div>
                        </div><!-- end title_story -->
                        <div class="description">
                            The legendary great white shark is far more fearsome in our imaginations than in reality. As scientific research on these elusive predators increases, their image as mindless killing machines is beginning to fade.
                        </div><!-- end description -->
                    </article>
                </section>
            </section><!-- end story -->
        </section><!-- end main_left -->
        <aside id="main_right">
            <div class="most_popular">
                <div class="title">
                    <img src="images/main/rightPanel/Star.png" alt="star"/>
                    <h3>Most Popular News</h3>
                </div>
                <figure class="first news">
                       <video poster="images/main/rightPanel/snake.png" alt="snake">
                       </video>
                       <h4>
                           The Bite That Heals
                       </h4><br/>
                       <time class="ago" datetime="">
                           <?php $time_passed(); ?>
                       </time>
                       <div class=""></div>
                </figure><!-- figure first -->
                <figure class="second news">
                       <video poster="images/main/rightPanel/frog.png" alt="frog"></video>
                       <h4>
                           Stranger Than Nature
                       </h4><br/>
                       <time datetime="" class="ago">
                           <?php $time_passed(); ?>
                       </time>
                       <div class="star_rating"></div>
                </figure><!-- end first second -->
            </div><!--end most_popular/1 -->
            <div class="most_popular">
                <div class="title">
                    <img src="images/main/rightPanel/Video.png" alt="star"/>
                    <h3>Most Popular Videos</h3>
                </div><!-- end title -->
                <div class="video">
                   <div class="cover">
                    <video src="#" poster="images/main/rightPanel/parrot.png">
                    </video>
                    <div class="control">
                          <div class="name">
                              Most Rare Birds Ever
                          </div>
                           <div class="views">
                            </div><!-- end views -->
                            <img src="images/main/rightPanel/play.png" alt="play"/>
                    </div><!-- end conrol -->
                    </div><!--end cover -->
                </div><!--end video -->
                <div class="video">
                   <div class="cover">
                        <video src="" poster="images/main/rightPanel/fish.png"></video>
                        <div class="control">
                              <div class="name">
                                  Mandarin Dragonet
                              </div>
                              <div class="views"></div><!-- end views -->
                              <img src="images/main/rightPanel/play.png" alt="play"/>
                        </div><!-- end conrol -->
                    </div><!--end cover -->
                </div><!--end video -->
            </div><!-- end most_popular/2 -->
            <div class="most_popular">
                <div class="title">
                    <img src="images/main/rightPanel/calendar.png" alt="calendar"/>
                    <h3>Upcoming Events</h3>
                    <div class="arrows_panel">
                       <a id="arrow" href="#"><img src="images/main/arrow_left.png" alt="arrow"/></a>
                       <a id="arrow" href="#"><img src="images/main/arrow_right.png" alt="arrow"/></a>
                    </div><!-- end arrows -->
                </div><!-- end title -->
            </div><!-- end most_popular/3 -->
            <figure class="nat_geo">
            	<h4>NatGeo Live Student Matinees</h4>
            	<hr/>
            	<div class="cover">
            		<img src="images\main\rightPanel\event.png" alt="speaker">
            		<div class="data">
						<img src="images/main/rightPanel/clock.png" alt="clock">
						<time> April, 17, 2013</time>
           			</div><!--end time -->
            	</div>
            	Live Student Matinees offer students in USA and Canada entertaining and visually spectacular presentations by leading explorers
            </figure><!--end nat_geo -->
            <div class="most_popular">
                <div class="title link">
                    <img src="images/main/rightPanel/shop.png" alt="shop"/>
                    <h3>Shopping</h3>
                </div><!-- end title -->
                <div class="title link">
                    <img src="images/main/rightPanel/subscription.png" alt="subscription"/>
                    <h3>Subscriptions</h3>
             </div><!-- end title -->
            </div><!-- end most_popular/4 -->
        </aside><!-- end main_right -->
        <section id="bottom_panel">
        	<div class="most_popular">
                <div class="title">
                    <img src="images/main/bottomPanel/Magazine.png" alt="calendar"/>
                    <h3>National Geographic Magazines</h3>
                    <div class="arrows_panel">
                       <a id="arrow" href="#"><img src="images/main/arrow_left.png" alt="arrow"/></a>
                       <a id="arrow" href="#"><img src="images/main/arrow_right.png" alt="arrow"/></a>
                    </div><!-- end arrows -->
                </div><!-- end title -->
            </div><!-- end most_popular/5 -->
            <figure class="sub_mag">
            	<div class="poster">
            		<img src="images/main/bottomPanel/Layer4.png" alt="america strikes oil">
            		<h3>National Geographic Magazine</h3>
            	</div>
            	<div class="star_rating"></div>
            	<div class="subscribe">
            		<img src="images/main/bottomPanel/Icon.png" alt="crosshair">
            		<span>SUBSCRIBE</span>
            	</div>
			</figure>
       		<figure class="sub_mag">
            	<div class="poster">
            		<img src="images/main/bottomPanel/Layer5.png" alt="kids">
            		<h3>National Geographic Kids Magazine</h3>
            	</div>
            	<div class="star_rating"></div>
            	<div class="subscribe">
            		<img src="images/main/bottomPanel/Icon.png" alt="crosshair">
            		<span>SUBSCRIBE</span>
            	</div>
			</figure>
       		<figure class="sub_mag">
            	<div class="poster">
            		<img src="images/main/bottomPanel/Layer6.png" alt="lemurs">
            		<h3>NG Young Explorer Magazine</h3>
            	</div>
            	<div class="star_rating"></div>
            	<div class="subscribe">
            		<img src="images/main/bottomPanel/Icon.png" alt="crosshair">
            		<span>SUBSCRIBE</span>
            	</div>
			</figure>
       		<figure class="sub_mag">
            	<div class="poster">
            		<img src="images/main/bottomPanel/Layer7.png" alt="polar_bears">
            		<h3>National Geographic Little</h3>
            	</div>
            	<div class="star_rating"></div>
            	<div class="subscribe">
            		<img src="images/main/bottomPanel/Icon.png" alt="crosshair">
            		<span>SUBSCRIBE</span>
            	</div>
			</figure>
        </section><!-- end bottom_panel -->
    </main>
    <footer>
    	<div id="center_footer">
    		<form action="POST">
    			<input type="text" placeholder="type your email">
    			<input type="submit" value="SUBSCRIBE">
    		</form>
    		<div id="soc_com">
    			<a href="#"><img src="images/footer/Facebook.png" alt="facebook"></a>
    			<a href="#"><img src="images/footer/Twitter.png" alt="twiter"></a>
    			<a href="#"><img src="images/footer/Youtube.png" alt="youtube"></a>
    		</div><!-- end soc_com -->
    		<div id="panel_link">
    			<a href="#">Customer Service </a>
    			<a href="#">Advertise With Us</a>
    			<a href="#">Terms of Service</a>
    			<a href="#">Privacy Policy</a>
    		</div><!-- end panel_link -->
    		<div id="copy">
    			© 1996-2013 National Geographic Society. All rights reserved
    		</div><!-- end copy -->
    	</div>
    </footer>
    <script src="script/script.js"></script>
</body>
</html>