<!-- container -->
<div id="hs-container" class="hs-container">
    <!-- Sidebar-->
    <div class="aside1">
        <a class="contact-button"><i class="fa fa-paper-plane"></i></a>
        <a class="download-button"><i class="fa fa-cloud-download"></i></a>
        <div class="aside-content"><span class="part1"><?php echo strtoupper($profile_details['about_initial']); ?></span><span class="part2"><?php echo ucwords($profile_details['about_fname']).' '.ucwords($profile_details['about_mname']).' '.ucwords($profile_details['about_lname']); ?> Live</span>
        </div>
    </div>
    <aside class="hs-menu" id="hs-menu">
        <!-- <canvas id="demo-canvas"></canvas> -->

        <!-- Profile Image-->
        <div class="hs-headline">
            <a id="my-link" href="#my-panel"><i class="fa fa-bars"></i></a>
            <a href="#" class="download"><i class="fa fa-cloud-download"></i></a>
            <div class="img-wrap">
                <img src="images/avatar.jpg" alt="" width="150" height="150" />
            </div>
            <div class="profile_info">
                <h1><?php echo ucwords($profile_details['about_initial']).' '.ucwords($profile_details['about_lname']); ?></h1>
                <h4>BS in Computer Science</h4>
                <h6><span class="fa fa-location-arrow"></span>&nbsp;&nbsp;&nbsp;<?php echo ucwords($profile_details['about_city']).', '.ucwords($profile_details['about_state']); ?></h6>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="separator-aside"></div>
        <!-- End Profile Image-->

        <!-- menu -->
        <nav>
            <a href="#section1"><span class="menu_name">ABOUT</span><span class="fa fa-home"></span> </a>
            <a href="#section2"><span class="menu_name">WORKS</span><span class="fa fa-suitcase"></span> </a>
            <a href="#section3"><span class="menu_name">SKILLS</span><span class="fa fa-diamond"></span> </a>
            <a href="#section4"><span class="menu_name">PORTFOLIOS</span><span class="fa fa-archive"></span> </a>
            <a href="#section5"><span class="menu_name">EDUCATION</span><span class="fa fa-graduation-cap"></span> </a>
            <a href="#section6"><span class="menu_name">BLOGS</span><span class="fa fa-pencil"></span> </a>                
            <a href="#section7"><span class="menu_name">CONTACT</span><span class="fa fa-paper-plane"></span> </a>
        </nav>
        <!-- end menu-->
        
        <!-- social icons -->
        <div class="aside-footer">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa fa-github"></i></a>
        </div>
        <!-- end social icons -->
        
    </aside>
    <!-- End sidebar -->

    <!-- Go To Top Button -->
    <a href="#hs-menu" class="hs-totop-link"><i class="fa fa-chevron-up"></i></a>
    <!-- End Go To Top Button -->

    <!-- hs-content-scroller -->
    <div class="hs-content-scroller">
        <!-- Header -->
        <div id="header_container">
            <div id="header">
                <div><a class="home"><i class="fa fa-home"></i></a>
                </div>
                <div><a href="" class="previous-page arrow"><i class="fa fa-angle-left"></i></a>
                </div>
                <div><a href="" class="next-page arrow"><i class="fa fa-angle-right"></i></a>
                </div>
                
                <!-- News scroll -->
                <div class="news-scroll">
                    <span><i class="fa fa-line-chart"></i>RECENT ACTIVITY : </span>
                    <ul id="marquee" class="marquee">
                        <li>
                            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa.
                        </li>
                    </ul>
                </div>
                <!-- End News scroll -->
                
            </div>
        </div>
        <!-- End Header -->

        <!-- hs-content-wrapper -->
        <div class="hs-content-wrapper">
            <!-- About section -->
            <article class="hs-content about-section" id="section1">
                <span class="sec-icon fa fa-home"></span>
                <div class="hs-inner">
                    <h2>ABOUT</h2>
                    <span class="content-title">PERSONAL DETAILS</span>
                    <div class="aboutInfo-contanier">
                        <div class="about-card">
                            <div class="face2 card-face">
                                <div id="cd-google-map">
                                    <div id="google-container"></div>
                                    <div id="cd-zoom-in"></div>
                                    <div id="cd-zoom-out"></div>
                                    <address><?php echo ucwords($profile_details['about_city']).', '.ucwords($profile_details['about_state']); ?></address>
                                    <div class="back-cover" data-card-back="data-card-back"><i class="fa fa-long-arrow-left"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="face1 card-face">
                                <div class="about-cover card-face">
                                    <a class="map-location" data-card-front="data-card-front"><img src="images/map-icon.png" alt="">
                                    </a>
                                    <div class="about-details">
                                        <div><span class="fa fa-inbox"></span><span class="detail"><?php echo $profile_details['about_email']; ?></span>
                                        </div>
                                        <div><span class="fa fa-phone"></span><span class="detail">+91 <?php echo $profile_details['about_phone']; ?></span>
                                        </div>
                                    </div>

                                    <div class="cover-content-wrapper">
                                        <span class="about-description">Hello. I am a<span class="rw-words">
                                            <span><b>Developer</b></span>
                                        <span><b>Programmer</b></span>
                                        <span><b>Dreamer</b></span>
                                        <span><b>Blogger</b></span>
                                        </span>
                                        <br>I am passionate about programming and coding
                                        <br>Welcome to my Personal and Academic profile</span>
                                        <span class="status">
                                        <span class="fa fa-circle"></span>
                                        <span class="text">Available as <b>freelance</b></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="more-details">
                            <div class="tabbable tabs-vertical tabs-left">
                                <ul id="myTab" class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#introduction" data-toggle="tab">Introduction</a>
                                    </li>
                                    <li>
                                        <a href="#hobbies" data-toggle="tab">Hobbies</a>
                                    </li>
                                    <li>
                                        <a href="#facts" data-toggle="tab">Facts</a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">

                                    <div class="tab-pane fade in active" id="introduction">
                                        <h3>INTRODUCTION</h3>
                                        <h4>ABOUT ME</h4>
                                        <?php echo $profile_details['about_intro']; ?>                                        
                                    </div>
                                    <div class="tab-pane fade" id="hobbies">
                                        <h3>HOBBIES</h3>
                                        <h4>INTERESTS</h4>
                                        <div class="hobbie-wrapper row">
                                            <div class="hobbie-icon col-md-3"><i class="li_lab"></i>
                                            </div>
                                            <div class="hobbie-description col-md-9">

                                                <p>Duis eu finibus urna. Pellentesque facilisis tellus vel leo accumsan, a tristique est luctus. Morbi quis euismod nulla. Sed eu nibh eros.</p>
                                            </div>
                                            <div style="clear:both;"></div>
                                        </div>
                                        <div class="hobbie-wrapper row">
                                            <div class="hobbie-icon col-md-3"><i class="li_pen"></i>
                                            </div>
                                            <div class="hobbie-description col-md-9">

                                                <p>Duis eu finibus urna. Pellentesque facilisis tellus vel leo accumsan, a tristique est luctus. Morbi quis euismod nulla. Sed eu nibh eros.</p>
                                            </div>
                                        </div>
                                        <div class="hobbie-wrapper row">
                                            <div class="hobbie-icon col-md-3"><i class="li_tv"></i>
                                            </div>
                                            <div class="hobbie-description col-md-9">

                                                <p>Duis eu finibus urna. Pellentesque facilisis tellus vel leo accumsan, a tristique est luctus. Morbi quis euismod nulla. Sed eu nibh eros.</p>
                                            </div>
                                        </div>
                                        <div class="hobbie-wrapper row">
                                            <div class="hobbie-icon col-md-3"><i class="li_shop"></i>
                                            </div>
                                            <div class="hobbie-description col-md-9">

                                                <p>Duis eu finibus urna. Pellentesque facilisis tellus vel leo accumsan, a tristique est luctus. Morbi quis euismod nulla. Sed eu nibh eros.</p>
                                            </div>
                                        </div>
                                        <div style="clear:both;"></div>
                                    </div>
                                    <div class="tab-pane fade" id="facts">
                                        <h3>FACTS</h3>
                                        <h4>NUMBERS ABOUT ME</h4>
                                        <div class="facts-wrapper col-md-6">
                                            <div class="facts-icon"><i class=" li_cup"></i>
                                            </div>
                                            <div class="facts-number">920</div>
                                            <div class="facts-description">CUPS OF COFFEE</div>
                                        </div>
                                        <div class="facts-wrapper col-md-6">
                                            <div class="facts-icon"><i class="li_bulb"></i>
                                            </div>
                                            <div class="facts-number">65</div>
                                            <div class="facts-description">PROJECTS COMPLETED</div>
                                        </div>
                                        <div class="facts-wrapper col-md-6">
                                            <div class="facts-icon"><i class="li_clock"></i>
                                            </div>
                                            <div class="facts-number">2965</div>
                                            <div class="facts-description">HOURS OF CODING</div>
                                        </div>
                                        <div class="facts-wrapper col-md-6">
                                            <div class="facts-icon"><i class="li_t-shirt"></i>
                                            </div>
                                            <div class="facts-number">35</div>
                                            <div class="facts-description">WORKSHOPS</div>
                                        </div>
                                        <div class="facts-wrapper col-md-6">
                                            <div class="facts-icon"><i class="li_display"></i>
                                            </div>
                                            <div class="facts-number">2M</div>
                                            <div class="facts-description">LINES OF CODE</div>
                                        </div>
                                        <div class="facts-wrapper col-md-6">
                                            <div class="facts-icon"><i class=" li_like"></i>
                                            </div>
                                            <div class="facts-number">100</div>
                                            <div class="facts-description">SATISFIED CUSTOMERS</div>
                                        </div>
                                        <div style="clear:both;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </article>
            <!-- End About Section -->               

            <!-- Works Section -->
            <article class="hs-content teaching-section" id="section2">
                <span class="sec-icon fa fa-suitcase"></span>
                <div class="hs-inner">
                    <h2>WORKS</h2>
                    <div class="teaching-wrapper">
                        <ul class="teaching">
                            <li class="time-label">
                                <span class="content-title">CURRENT</span>
                            </li>
                            
							<li>
                                <div class="teaching-tag">
                                    <span class="fa fa-suitcase"></span>
                                    <div class="teaching-date">
                                        <span>NOW</span>
                                        <div class="separator"></div>
                                        <span><?php echo $work_details[0]->work_from; ?></span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <h3 class="timeline-header"><?php echo ucwords($work_details[0]->work_position); ?></h3>
                                    <div class="timeline-body">
                                        <h4><?php echo ucwords($work_details[0]->work_company); ?></h4>
                                        <span>
										<b>Responsibilities:</b>
										
										<?php echo $work_details[0]->work_responsibilities; ?>
										
										<b>Environments:</b>&nbsp;<?php echo str_replace(',',', ',$work_details[0]->work_envs); ?>.
										</span>
                                    </div>
                                </div>
                            </li>
                            
							<?php if(isset($work_details[1]) && !empty($work_details[1])): ?>
							<li class="time-label">
                                <span class="content-title">HISTORY</span>
                            </li>							
							
							<?php for($i=1;$i<count($work_details);$i++): ?>
                            <li>
                                <div class="teaching-tag">
                                    <span class="fa fa-suitcase"></span>
                                    <div class="teaching-date">
                                        <span><?php echo $work_details[$i]->work_to; ?></span>
                                        <div class="separator"></div>
                                        <span><?php echo $work_details[$i]->work_from; ?></span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <h3 class="timeline-header"><?php echo ucwords($work_details[$i]->work_position); ?></h3>
                                    <div class="timeline-body">
                                        <h4><?php echo ucwords($work_details[$i]->work_company); ?></h4>
                                        <span>
										<b>Responsibilities:</b>
										
										<?php echo $work_details[$i]->work_responsibilities; ?>
										
										<b>Environments:</b>&nbsp;<?php echo str_replace(',',', ',$work_details[$i]->work_envs); ?>.
										</span>
                                    </div>
                                </div>
                            </li>
							<?php endfor; ?>
							<?php endif; ?>
							<!--<li>
                                <div class="teaching-tag">
                                    <span class="fa fa-suitcase"></span>
                                    <div class="teaching-date">
                                        <span>2014</span>
                                        <div class="separator"></div>
                                        <span>2013</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <h3 class="timeline-header">PHP DEVELOPER</h3>
                                    <div class="timeline-body">
                                        <h4>Digital Domain Pvt. Ltd.</h4>
                                        <span>
										<b>Responsibilities:</b>
										<ul>
											<li>Building PHP websites using <b>Core PHP</b>.</li>
											<li>Testing and validating work produced as part of the development process.</li>
											<li>Developing advanced database driven websites & systems.</li>
											<li>Back end development and maintenance of websites using <b>MySQL</b>.</li>
											<li>Developing compatible User Interface functionality using <b>jQuery</b> & other libraries.</li>
											<li>Working with a multi-disciplinary team to convert business needs into technical specifications.</li>
										</ul>
										<b>Environments:</b>&nbsp;&nbsp;PHP, JavaScript, jQuery, Ajax, MySql.
										</span>
                                    </div>
                                </div>
                            </li>
                            
							<li>
                                <div class="teaching-tag">
                                    <span class="fa fa-suitcase"></span>
                                    <div class="teaching-date">
                                        <span>2013</span>
                                        <div class="separator"></div>
                                        <span>2010</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <h3 class="timeline-header">Sr. TECHNICAL RECRUITER</h3>
                                    <div class="timeline-body">
                                        <h4>Databased Solutions Pvt. Ltd.</h4>
                                        <span>DBSI Services, was incorporated in 1995 to provide staffing resources to organizations in the New York area. Since then the company has successfully provided staffing solutions to insurance, engineering, manufacturing, healthcare and pharmaceutical industries. They achieve superior results by hiring, retaining and training world class staff technicians in conjunction with strategic partnerships and industry affiliations.</span>
                                    </div>
                                </div>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </article>
            <!-- End Works Section -->

            <!-- Skills Section -->
            <article class="hs-content skills-section" id="section3">
                <span class="sec-icon fa fa-diamond"></span>
                <div class="hs-inner">
                    <h2>SKILLS</h2>
                    <span class="content-title">PRIMARY SKIILLS</span>
                    <div class="skolls">
                        <div class="bar-main-container">
                            <div class="wrap">
                                <div class="bar-percentage" data-percentage="90"></div>
                                <span class="skill-detail"><i class="fa fa-bar-chart"></i>LEVEL : EXPERT</span><span class="skill-detail"><i class="fa fa-binoculars"></i>EXPERIENCE : 2 YEARS +</span>
                                <div class="bar-container">
                                    <div class="bar"></div>
                                </div>
                                <span class="label">PHP</span>
                            </div>
                        </div>
						<span class="skill-description">&nbsp;</span>
						<div class="bar-main-container">
                            <div class="wrap">
                                <div class="bar-percentage" data-percentage="75"></div>
                                <span class="skill-detail"><i class="fa fa-bar-chart"></i>LEVEL : ADVANCED</span><span class="skill-detail"><i class="fa fa-binoculars"></i>EXPERIENCE : 2 YEARS +</span>
                                <div class="bar-container">
                                    <div class="bar"></div>
                                </div>
                                <span class="label">HTML</span><span class="label">CSS</span><span class="label">JavaScript</span><span class="label">jQuery</span><span class="label">AJAX</span>
                            </div>
                        </div>
                    </div>
                    <span class="content-title">FRAMEWORK SKILLS</span>
                    <div class="skolls">
                        <div class="bar-main-container">
                            <div class="wrap">
                                <div class="bar-percentage" data-percentage="80"></div>
                                <span class="skill-detail"><i class="fa fa-bar-chart"></i>LEVEL : EXPERT</span><span class="skill-detail"><i class="fa fa-binoculars"></i>EXPERIENCE : 2 YEARS + </span>
                                <div class="bar-container">
                                    <div class="bar"></div>
                                </div>
                                <span class="label">Codeigniter <b>(HMVC)</b></span>
                            </div>
                        </div>
						<span class="skill-description">&nbsp;</span>
						<div class="bar-main-container">
                            <div class="wrap">
                                <div class="bar-percentage" data-percentage="65"></div>
                                <span class="skill-detail"><i class="fa fa-bar-chart"></i>LEVEL : INTERMEDIATE</span><span class="skill-detail"><i class="fa fa-binoculars"></i>EXPERIENCE : 1 YEARS + </span>
                                <div class="bar-container">
                                    <div class="bar"></div>
                                </div>
                                <span class="label">Yii <b>(HMVC)</b></span>
                            </div>
                        </div>
                    </div>
                    <span class="content-title">CMS SKILLS</span>
                    <div class="skolls">
                        <div class="bar-main-container">
                            <div class="wrap">
                                <div class="bar-percentage" data-percentage="60"></div>
                                <span class="skill-detail"><i class="fa fa-bar-chart"></i>LEVEL : INTERMEDIATE</span><span class="skill-detail"><i class="fa fa-binoculars"></i>EXPERIENCE : 1 YEARS +</span>
                                <div class="bar-container">
                                    <div class="bar"></div>
                                </div>
                                <span class="label">Magento</span>
                            </div>
                        </div>
						<span class="skill-description">&nbsp;</span>
						<div class="bar-main-container">
                            <div class="wrap">
                                <div class="bar-percentage" data-percentage="60"></div>
                                <span class="skill-detail"><i class="fa fa-bar-chart"></i>LEVEL : INTERMEDIATE</span><span class="skill-detail"><i class="fa fa-binoculars"></i>EXPERIENCE : 1 YEARS +</span>
                                <div class="bar-container">
                                    <div class="bar"></div>
                                </div>
                                <span class="label">Opencart</span>
                            </div>
                        </div>
                    </div>
                    <span class="content-title">API SKILLS</span>
                    <div class="skolls">
                        <div class="bar-main-container">
                            <div class="wrap">
                                <div class="bar-percentage" data-percentage="90"></div>
                                <span class="skill-detail"><i class="fa fa-bar-chart"></i>LEVEL : EXPERT</span><span class="skill-detail"><i class="fa fa-binoculars"></i>EXPERIENCE : 1 YEARS +</span>
                                <div class="bar-container">
                                    <div class="bar"></div>
                                </div>
                                <span class="label">FacebookAPI</span><span class="label">TwitterAPI</span><span class="label">MaxMindAPI</span>
                            </div>
                        </div>							
                    </div>
					<span class="content-title">DATABASE SKIILLS</span>
                    <div class="skolls">
                        <div class="bar-main-container">
                            <div class="wrap">
                                <div class="bar-percentage" data-percentage="90"></div>
                                <span class="skill-detail"><i class="fa fa-bar-chart"></i>LEVEL : EXPERT</span><span class="skill-detail"><i class="fa fa-binoculars"></i>EXPERIENCE : 2 YEARS +</span>
                                <div class="bar-container">
                                    <div class="bar"></div>
                                </div>
                                <span class="label">MySql</span>
                            </div>
                        </div>
						<span class="skill-description">&nbsp;</span>
						<div class="bar-main-container">
                            <div class="wrap">
                                <div class="bar-percentage" data-percentage="85"></div>
                                <span class="skill-detail"><i class="fa fa-bar-chart"></i>LEVEL : ADVANCED</span><span class="skill-detail"><i class="fa fa-binoculars"></i>EXPERIENCE : 2 YEARS +</span>
                                <div class="bar-container">
                                    <div class="bar"></div>
                                </div>
                                <span class="label">MsSql</span>
                            </div>
                        </div>
						<span class="skill-description">&nbsp;</span>
						<div class="bar-main-container">
                            <div class="wrap">
                                <div class="bar-percentage" data-percentage="65"></div>
                                <span class="skill-detail"><i class="fa fa-bar-chart"></i>LEVEL : INTERMEDIATE</span><span class="skill-detail"><i class="fa fa-binoculars"></i>EXPERIENCE : 1 YEARS +</span>
                                <div class="bar-container">
                                    <div class="bar"></div>
                                </div>
                                <span class="label">MongoDB</span><span class="label">SqLite</span>
                            </div>
                        </div>
                    </div>                        
                </div>
            </article>
            <!-- End Skills Section -->
            
            <!-- Portfolios Section -->
            <article class="hs-content works-section" id="section4">
                <span class="sec-icon fa fa-archive"></span>
                <div class="hs-inner">
                    <h2>PORTFOLIOS</h2>
                    <div class="portfolio">
                        <!-- Portfolio Item -->
                        <figure class="effect-milo">
                            <img src="images/portfolio/1-thumb.jpg" alt="img11" width="282" height="222" />
                            <figcaption>
                                <span class="label">Logo Design</span>
                                <div class="portfolio_button">
                                    <h3>Project Title</h3>
                                    <a href=".work1" class="open_popup" data-effect="mfp-zoom-out">
                                        <i class="hovicon effect-9 sub-b"><i class="fa fa-search"></i></i>
                                    </a>
                                </div>
                                <div class="mfp-hide mfp-with-anim work_desc work1">
                                    <div class="col-md-6">
                                        <div class="image_work">
                                            <img src="http://placehold.it/560x420" alt="img" width="560" height="420">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="project_content">
                                            <h2 class="project_title">Project title</h2>
                                            <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                                <br>
                                                <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                        </div>
                                    </div>
                                    <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                            </figcaption>
                        </figure>
                        <!-- End Portfolio Item -->

                        <!-- Portfolio Item -->
                        <figure class="effect-milo">
                            <img src="images/portfolio/2-thumb.jpg" alt="img11" width="282" height="222" />
                            <figcaption>
                                <span class="label">web design</span>
                                <div class="portfolio_button">
                                    <h3>Project Title</h3>
                                    <a href=".work2" class="open_popup" data-effect="mfp-zoom-out">
                                        <i class="hovicon effect-9 sub-b"><i class="fa fa-search"></i></i>
                                    </a>
                                </div>
                                <div class="mfp-hide mfp-with-anim work_desc work2">
                                    <div class="col-md-6">
                                        <div class="image_work">
                                            <img src="http://placehold.it/560x420" alt="img" width="560" height="420">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="project_content">
                                            <h2 class="project_title">Project title</h2>
                                            <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                                <br>
                                                <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                        </div>
                                    </div>
                                    <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                            </figcaption>
                        </figure>
                        <!-- End Portfolio Item -->

                        <!-- Portfolio Item -->
                        <figure class="effect-milo">
                            <img src="images/portfolio/3-thumb.jpg" alt="img11" width="282" height="222" />
                            <figcaption>
                                <span class="label">Mobile app</span>
                                <div class="portfolio_button">
                                    <h3>Project Title</h3>
                                    <a href=".work3" class="open_popup" data-effect="mfp-zoom-out">
                                        <i class="hovicon effect-9 sub-b"><i class="fa fa-search"></i></i>
                                    </a>
                                </div>
                                <div class="mfp-hide mfp-with-anim work_desc work3">
                                    <div class="col-md-6">
                                        <div class="image_work">
                                            <img src="http://placehold.it/560x420" alt="img" width="560" height="420">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="project_content">
                                            <h2 class="project_title">Project title</h2>
                                            <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                                <br>
                                                <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>

                                        </div>
                                    </div>
                                    <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                            </figcaption>
                        </figure>
                        <!-- End Portfolio Item -->

                        <!-- Portfolio Item -->
                        <figure class="effect-milo">
                            <img src="images/portfolio/4-thumb.jpg" alt="img11" width="282" height="222" />
                            <figcaption>
                                <span class="label">web design</span>
                                <div class="portfolio_button">
                                    <h3>Project Title</h3>
                                    <a href=".work4" class="open_popup" data-effect="mfp-zoom-out">
                                        <i class="hovicon effect-9 sub-b"><i class="fa fa-search"></i></i>
                                    </a>
                                </div>
                                <div class="mfp-hide mfp-with-anim work_desc work4">
                                    <div class="col-md-6">
                                        <div class="image_work">
                                            <img src="http://placehold.it/560x420" alt="img" width="560" height="420">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="project_content">
                                            <h2 class="project_title">Project title</h2>
                                            <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                                <br>
                                                <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                        </div>
                                    </div>
                                    <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                            </figcaption>
                        </figure>
                        <!-- End Portfolio Item -->

                        <!-- Portfolio Item -->
                        <figure class="effect-milo">
                            <img src="images/portfolio/5-thumb.jpg" alt="img11" width="282" height="222" />
                            <figcaption>
                                <span class="label">Mobile app</span>
                                <div class="portfolio_button">
                                    <h3>Project Title</h3>
                                    <a href=".work5" class="open_popup" data-effect="mfp-zoom-out">
                                        <i class="hovicon effect-9 sub-b"><i class="fa fa-search"></i></i>
                                    </a>
                                </div>
                                <div class="mfp-hide mfp-with-anim work_desc work5">
                                    <div class="col-md-6">
                                        <div class="image_work">
                                            <img src="http://placehold.it/560x420" alt="img" width="560" height="420">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="project_content">
                                            <h2 class="project_title">Project title</h2>
                                            <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                                <br>
                                                <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                        </div>
                                    </div>
                                    <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                            </figcaption>
                        </figure>
                        <!-- End Portfolio Item -->

                        <!-- Portfolio Item -->
                        <figure class="effect-milo">
                            <img src="images/portfolio/6-thumb.jpg" alt="img11" width="282" height="222" />
                            <figcaption>
                                <span class="label">Logo Design</span>
                                <div class="portfolio_button">
                                    <h3>Project Title</h3>
                                    <a href=".work6" class="open_popup" data-effect="mfp-zoom-out">
                                        <i class="hovicon effect-9 sub-b"><i class="fa fa-search"></i></i>
                                    </a>
                                </div>
                                <div class="mfp-hide mfp-with-anim work_desc work6">
                                    <div class="col-md-6">
                                        <div class="image_work">
                                            <img src="http://placehold.it/560x420" alt="img" width="560" height="420">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="project_content">
                                            <h2 class="project_title">Project title</h2>
                                            <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                                <br>
                                                <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                        </div>
                                    </div>
                                    <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                    <div style="clear:both"></div>
                                </div>
                            </figcaption>
                        </figure>
                        <!-- End Portfolio Item -->
                    </div>
                    <!-- End Portfolio Wrapper -->
                </div>
            </article>
            <!-- End Portfolios Section -->
            
            <!-- Education Section -->
            <article class="hs-content resume-section" id="section5">
                <span class="sec-icon fa fa-newspaper-o"></span>
                <div class="hs-inner">
                    <h2>EDUCATION</h2>
                    <!-- Education Wrapper -->
                    <div class="resume-wrapper">
                        <ul class="resume">
                            <!-- Education timeline -->
                            <li class="time-label">
                                <span class="content-title">EDUCATION</span>
                            </li>
                            <li>
                                <div class="resume-tag">
                                    <span class="fa fa-graduation-cap"></span>
                                    <div class="resume-date">
                                        <span>2006</span>
                                        <div class="separator"></div>
                                        <span>2010</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <span class="timeline-location"><i class="fa fa-map-marker"></i>Karnataka</span>
                                    <h3 class="timeline-header">BS - COMPUTER SCIENCE</h3>
                                    <div class="timeline-body">
                                        <h4>KARNATAKA STATE UNIVERSITY</h4>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem.</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="resume-tag">
                                    <span class="fa fa-graduation-cap"></span>
                                    <div class="resume-date">
                                        <span>2004</span>
                                        <div class="separator"></div>
                                        <span>2006</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <span class="timeline-location"><i class="fa fa-map-marker"></i>Odisha</span>
                                    <h3 class="timeline-header">HS - SCIENCE</h3>
                                    <div class="timeline-body">
                                        <h4>COUNCIL OF HS EDUCATION</h4>
                                        <span>&nbsp;</span>
                                    </div>
                                </div>
                            </li>
							<li class="time-label">
                                <span class="content-title">ADDITIONAL</span>
                            </li>
                            <li>
                                <div class="resume-tag">
                                    <span class="fa fa-graduation-cap"></span>
                                    <div class="resume-date">
                                        <span>2006</span>
                                        <div class="separator"></div>
                                        <span>2008</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <span class="timeline-location"><i class="fa fa-map-marker"></i>Kolkata</span>
                                    <h3 class="timeline-header">Higher Diploma in Software Engineering</h3>
                                    <div class="timeline-body">
                                        <h4>NIIT</h4>
                                        <span>&nbsp;</span>
                                    </div>
                                </div>
                            </li>
                            <!-- End Education timeline -->
                        </ul>
                    </div>
                    <!-- End Education Wrapper -->
                </div>
            </article>
            <!-- End Education Section-->

            <!-- Blogs Section -->
            <article class="hs-content publication-section" id="section6">
                <span class="sec-icon fa fa-pencil"></span>
                <div class="hs-inner">
                    <h2>BLOGS</h2>
                    <!-- Filter/Sort Menu -->
                    <span class="content-title">BLOGS LIST</span>
                    <div class="row publication-form">
                        <div class="col-md-6 publication-filter">
                            <div class="card-drop">
                                <a class='toggle'>
                                    <i class='icon-suitcase'></i>
                                    <span class='label-active'>ALL</span>
                                </a>
                                <ul id="filter">
                                    <li class='active'><a data-label="ALL" data-group="all">ALL</a>
                                    </li>
                                    <li><a data-label="JOURNAL PAPERS" data-group="JOURNAL PAPERS">JOURNAL PAPERS</a>
                                    </li>
                                    <li><a data-label="CONFERENCES" data-group="CONFERENCES">CONFERENCES</a>
                                    </li>
                                    <li><a data-label="DEMONSTRATIONS" data-group="DEMONSTRATIONS">DEMONSTRATIONS</a>
                                    </li>
                                    <li><a data-label="THESES" data-group="THESES">THESES</a>
                                    </li>
                                    <li><a data-label="BOOK CHAPTERS" data-group="BOOK CHAPTERS">BOOK CHAPTERS</a>
                                    </li>
                                    <li><a data-label="BOOK" data-group="BOOK">BOOK</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 publication-sort">
                            <div class="sorting-button">
                                <span>SORTING BY DATE</span>
                                <button class="desc"><i class="fa fa-sort-numeric-desc"></i>
                                </button>
                                <button class="asc"><i class="fa fa-sort-numeric-asc"></i>
                                </button>
                            </div>


                        </div>
                    </div>
                    <!-- End Filter/Sort Menu -->

                    <!-- publication wrapper -->
                    <div id="mygrid">
                        <!-- publication item -->
                        <div class="publication_item" data-groups='["all","CONFERENCES"]' data-date-publication="2007-12-01">
                            <div class="media">
                                <a href=".publication-detail1" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                <div class="date pull-left">
                                    <span class="day">1</span>
                                    <span class="month">DEC</span>
                                    <span class="year">2007</span>
                                </div>
                                <div class="media-body">
                                    <h3>TITLE OF PUBLICATION</h3>
                                    <h4>VANCOUVER - CANADA</h4>
                                    <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                <hr style="margin:8px auto">
                                <span class="label label-primary">Conferences</span>
                                <span class="label selected">Selected</span>
                                <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                            </div>
                            <div class="mfp-hide mfp-with-anim publication-detail1 publication-detail">
                                <div class="image_work">
                                    <img src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                </div>
                                <div class="project_content">
                                    <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                    <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                                    <span class="label label-primary">Conferences</span>
                                    <span class="label selected">Selected</span>
                                    <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                        <br>
                                        <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                </div>
                                <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <!-- End publication item -->

                        <!-- publication item -->
                        <div class="publication_item" data-groups='["all","JOURNAL PAPERS"]' data-date-publication="2007-12-02">
                            <div class="media">
                                <a href=".publication-detail2" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                <div class="date pull-left">
                                    <span class="day">2</span>
                                    <span class="month">DEC</span>
                                    <span class="year">2007</span>
                                </div>
                                <div class="media-body">
                                    <h3>TITLE OF PUBLICATION</h3>
                                    <h4>VANCOUVER - CANADA</h4>
                                    <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                <hr style="margin:8px auto">
                                <span class="label label-success">Journal Paper</span>
                                <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                            </div>
                            <div class="mfp-hide mfp-with-anim publication-detail2 publication-detail">
                                <div class="image_work">
                                    <img src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                </div>
                                <div class="project_content">
                                    <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                    <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                                    <span class="label label-success">Journal Paper</span>
                                    <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                        <br>
                                        <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                </div>
                                <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <!-- End Publication item -->

                        <!-- Publication item -->
                        <div class="publication_item" data-groups='["all","DEMONSTRATIONS"]' data-date-publication="2007-12-03">
                            <div class="media">
                                <a href=".publication-detail3" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                <div class="date pull-left">
                                    <span class="day">3</span>
                                    <span class="month">DEC</span>
                                    <span class="year">2007</span>
                                </div>
                                <div class="media-body">
                                    <h3>TITLE OF PUBLICATION</h3>
                                    <h4>VANCOUVER - CANADA</h4>
                                    <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                <hr style="margin:8px auto">
                                <span class="label label-warning">Demonstrations</span>
                                <span class="label selected">Selected</span>
                                <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                            </div>
                            <div class="mfp-hide mfp-with-anim publication-detail3 publication-detail">
                                <div class="image_work">
                                    <img src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                </div>
                                <div class="project_content">
                                    <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                    <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                                    <span class="label label-warning">Demonstrations</span>
                                    <span class="label selected">Selected</span>
                                    <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                        <br>
                                        <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                </div>
                                <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <!-- End Publication item -->

                        <!-- Publication item -->
                        <div class="publication_item" data-groups='["all","DEMONSTRATIONS"]' data-date-publication="2007-12-04">
                            <div class="media">
                                <a href=".publication-detail4" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                <div class="date pull-left">
                                    <span class="day">4</span>
                                    <span class="month">DEC</span>
                                    <span class="year">2007</span>
                                </div>
                                <div class="media-body">
                                    <h3>TITLE OF PUBLICATION</h3>
                                    <h4>VANCOUVER - CANADA</h4>
                                    <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                <hr style="margin:8px auto">
                                <span class="label label-warning">Demonstrations</span>
                                <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                            </div>
                            <div class="mfp-hide mfp-with-anim publication-detail4 publication-detail">
                                <div class="image_work">
                                    <img src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                </div>
                                <div class="project_content">
                                    <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                    <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                                    <span class="label label-warning">Demonstrations</span>
                                    <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                        <br>
                                        <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                </div>
                                <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <!-- End Publication item -->

                        <!-- Publication item -->
                        <div class="publication_item" data-groups='["all","THESES"]' data-date-publication="2007-12-05">
                            <div class="media">
                                <a href=".publication-detail5" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                <div class="date pull-left">
                                    <span class="day">5</span>
                                    <span class="month">DEC</span>
                                    <span class="year">2007</span>
                                </div>
                                <div class="media-body">
                                    <h3>TITLE OF PUBLICATION</h3>
                                    <h4>VANCOUVER - CANADA</h4>
                                    <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                <hr style="margin:8px auto">
                                <span class="label label-default">Theses</span>
                                <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                            </div>
                            <div class="mfp-hide mfp-with-anim publication-detail5 publication-detail">
                                <div class="image_work">
                                    <img src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                </div>
                                <div class="project_content">
                                    <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                    <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                                    <span class="label label-default">Theses</span>
                                    <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                        <br>
                                        <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                </div>
                                <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <!-- End Publication item -->

                        <!-- Publication item -->
                        <div class="publication_item" data-groups='["all","THESES"]' data-date-publication="2007-12-06">
                            <div class="media">
                                <a href=".publication-detail6" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                <div class="date pull-left">
                                    <span class="day">6</span>
                                    <span class="month">DEC</span>
                                    <span class="year">2007</span>
                                </div>
                                <div class="media-body">
                                    <h3>TITLE OF PUBLICATION</h3>
                                    <h4>VANCOUVER - CANADA</h4>
                                    <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                <hr style="margin:8px auto">
                                <span class="label label-default">Theses</span>
                                <span class="label selected">Selected</span>
                                <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                            </div>
                            <div class="mfp-hide mfp-with-anim publication-detail6 publication-detail">
                                <div class="image_work">
                                    <img src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                </div>
                                <div class="project_content">
                                    <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                    <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                                    <span class="label label-default">Theses</span>
                                    <span class="label selected">Selected</span>
                                    <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                        <br>
                                        <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                </div>
                                <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <!-- End Publication item -->

                        <!-- Publication item -->
                        <div class="publication_item" data-groups='["all","BOOK CHAPTERS"]' data-date-publication="2007-12-07">
                            <div class="media">
                                <a href=".publication-detail7" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                <div class="date pull-left">
                                    <span class="day">7</span>
                                    <span class="month">DEC</span>
                                    <span class="year">2007</span>
                                </div>
                                <div class="media-body">
                                    <h3>TITLE OF PUBLICATION</h3>
                                    <h4>VANCOUVER - CANADA</h4>
                                    <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span>
                                </div>
                                <hr style="margin:8px auto">
                                <span class="label label-danger">Book Chapters</span>
                                <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                            </div>
                            <div class="mfp-hide mfp-with-anim publication-detail7 publication-detail">
                                <div class="image_work">
                                    <img src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                </div>
                                <div class="project_content">
                                    <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                    <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                                    <span class="label label-danger">Book Chapters</span>
                                    <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                        <br>
                                        <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                </div>
                                <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <!-- End Publication item -->

                        <!-- Publication item -->
                        <div class="publication_item" data-groups='["all","BOOK CHAPTERS"]' data-date-publication="2007-12-08">
                            <div class="media">
                                <a href=".publication-detail8" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                <div class="date pull-left">
                                    <span class="day">8</span>
                                    <span class="month">DEC</span>
                                    <span class="year">2007</span>
                                </div>
                                <div class="media-body">
                                    <h3>TITLE OF PUBLICATION</h3>
                                    <h4>VANCOUVER - CANADA</h4>
                                    <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                <hr style="margin:8px auto">
                                <span class="label label-danger">Book Chapters</span>
                                <span class="label selected">Selected</span>
                                <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                            </div>
                            <div class="mfp-hide mfp-with-anim publication-detail8 publication-detail">
                                <div class="image_work">
                                    <img src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                </div>
                                <div class="project_content">
                                    <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                    <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                                    <span class="label label-danger">Book Chapters</span>
                                    <span class="label selected">Selected</span>
                                    <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                        <br>
                                        <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                </div>
                                <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <!-- End Publication item -->

                        <!-- Publication item -->
                        <div class="publication_item" data-groups='["all","BOOK"]' data-date-publication="2007-12-09">
                            <div class="media">
                                <a href=".publication-detail9" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                <div class="date pull-left">
                                    <span class="day">9</span>
                                    <span class="month">DEC</span>
                                    <span class="year">2007</span>
                                </div>
                                <div class="media-body">
                                    <h3>TITLE OF PUBLICATION</h3>
                                    <h4>VANCOUVER - CANADA</h4>
                                    <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                <hr style="margin:8px auto">
                                <span class="label label-info">Book</span>
                                <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                            </div>
                            <div class="mfp-hide mfp-with-anim publication-detail9 publication-detail">
                                <div class="image_work">
                                    <img src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                </div>
                                <div class="project_content">
                                    <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                    <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                                    <span class="label label-info">Book</span>
                                    <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                        <br>
                                        <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                </div>
                                <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <!-- End Publication item -->

                        <!-- Publication item -->
                        <div class="publication_item" data-groups='["all","JOURNAL PAPERS"]' data-date-publication="2007-12-10">
                            <div class="media">
                                <a href=".publication-detail10" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                <div class="date pull-left">
                                    <span class="day">10</span>
                                    <span class="month">DEC</span>
                                    <span class="year">2007</span>
                                </div>
                                <div class="media-body">
                                    <h3>TITLE OF PUBLICATION</h3>
                                    <h4>VANCOUVER - CANADA</h4>
                                    <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                <hr style="margin:8px auto">
                                <span class="label label-success">Journal Paper</span>
                                <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                            </div>
                            <div class="mfp-hide mfp-with-anim publication-detail10 publication-detail">
                                <div class="image_work">
                                    <img src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                </div>
                                <div class="project_content">
                                    <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                    <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                                    <span class="label label-success">Journal Paper</span>
                                    <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                        <br>
                                        <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                </div>
                                <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <!-- End Publication item -->

                        <!-- Publication item -->
                        <div class="publication_item" data-groups='["all","BOOK"]' data-date-publication="2007-12-11">
                            <div class="media">
                                <a href=".publication-detail11" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                <div class="date pull-left">
                                    <span class="day">11</span>
                                    <span class="month">DEC</span>
                                    <span class="year">2007</span>
                                </div>
                                <div class="media-body">
                                    <h3>TITLE OF PUBLICATION</h3>
                                    <h4>VANCOUVER - CANADA</h4>
                                    <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                <hr style="margin:8px auto">
                                <span class="label label-info">Book</span>
                                <span class="label selected">Selected</span>
                                <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                            </div>
                            <div class="mfp-hide mfp-with-anim publication-detail11 publication-detail">
                                <div class="image_work">
                                    <img src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                </div>
                                <div class="project_content">
                                    <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                    <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                                    <span class="label label-info">Book</span>
                                    <span class="label selected">Selected</span>
                                    <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                        <br>
                                        <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                </div>
                                <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <!-- End Publication item -->

                        <!-- Publication item -->
                        <div class="publication_item" data-groups='["all","THESES"]' data-date-publication="2007-12-12">
                            <div class="media">
                                <a href=".publication-detail12" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                <div class="date pull-left">
                                    <span class="day">12</span>
                                    <span class="month">DEC</span>
                                    <span class="year">2007</span>
                                </div>
                                <div class="media-body">
                                    <h3>TITLE OF PUBLICATION</h3>
                                    <h4>VANCOUVER - CANADA</h4>
                                    <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                <hr style="margin:8px auto">
                                <span class="label label-default">Theses</span>
                                <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                            </div>
                            <div class="mfp-hide mfp-with-anim publication-detail12 publication-detail">
                                <div class="image_work">
                                    <img src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                </div>
                                <div class="project_content">
                                    <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                    <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                                    <span class="label label-default">Theses</span>
                                    <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                        <br>
                                        <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                </div>
                                <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <!-- End Publication item -->

                        <!-- Publication item -->
                        <div class="publication_item" data-groups='["all","CONFERENCES"]' data-date-publication="2007-12-13">
                            <div class="media">
                                <a href=".publication-detail13" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>
                                <div class="date pull-left">
                                    <span class="day">13</span>
                                    <span class="month">DEC</span>
                                    <span class="year">2007</span>
                                </div>
                                <div class="media-body">
                                    <h3>TITLE OF PUBLICATION</h3>
                                    <h4>VANCOUVER - CANADA</h4>
                                    <span class="publication_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque urna in ipsum iaculis aliquam. In vestibulum lacus a leo tincidunt commodo. Ut nec lorem scelerisque, aliquet nisi a, dignissim justo. Aenean ut libero eget est faucibus lobortis sed</span> </div>
                                <hr style="margin:8px auto">
                                <span class="label label-primary">Conferences</span>
                                <span class="label selected">Selected</span>
                                <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                            </div>
                            <div class="mfp-hide mfp-with-anim publication-detail13 publication-detail">
                                <div class="image_work">
                                    <img src="http://placehold.it/480x200" alt="img" width="480" height="200">
                                </div>
                                <div class="project_content">
                                    <h3 class="publication_title">Creating a Standardized Markup Language for Semantic Networks</h3>
                                    <span class="publication_authors"><b>Johnny smith</b>, Dumas, C., Milleville-Pennel, I.</span>
                                    <span class="label label-primary">Conferences</span>
                                    <span class="label selected">Selected</span>
                                    <p class="project_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor sem. Suspendisse egestas nulla eget nunc commodo, et blandit ante tristique. Aliquam dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.
                                        <br>
                                        <br>dignissim nulla tellus, sed pellentesque libero pellentesque et. Donec nec sem mattis, suscipit ligula id, porttitor tortor. Maecenas sed egestas odio, vitae euismod nulla. Duis viverra blandit mi quis rhoncus. Aenean vitae turpis et tortor elementum blandit.</p>
                                </div>
                                <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <!-- End Publication item -->
                    </div>
                    <!-- End Publication Wrapper -->
                </div>
                <div class="clear"></div>
            </article>
            <!-- End Blogs Section -->
            
            <!-- Contact Section -->
            <article class="hs-content contact-section" id="section7">
                <span class="sec-icon fa fa-paper-plane"></span>
                <div class="hs-inner">
                    <h2>CONTACT ME</h2>
                    <div class="contact_info">
                        <h3>Get in touch</h3>
                        <hr>
                        <h5>I am waiting to assist you</h5>
                        <h6>Simply use the form below to get in touch with me</h6>

                        <hr>
                    </div>
                    <!-- Contact Form -->
                    <fieldset id="contact_form">
                        <div id="result"></div>
                        <input type="text" name="name" id="name" placeholder="NAME" />
                        <input type="text" name="email" id="email" placeholder="EMAIL" />
                        <input type="text" name="subject" id="subject" placeholder="SUBJECT" />
                        <textarea name="message" id="message" style="resize: none;" placeholder="MESSAGE"></textarea>
                        <span class="submit_btn" id="submit_btn"><i class="fa-li fa fa-spinner fa-spin"></i>SEND MESSAGE</span>
                    </fieldset>
                    <!-- End Contact Form -->
                </div>
            </article>
            <!-- End Contact Section -->
        </div>
        <!-- End hs-content-wrapper -->
    </div>
    <!-- End hs-content-scroller -->
</div>
<!-- End container -->