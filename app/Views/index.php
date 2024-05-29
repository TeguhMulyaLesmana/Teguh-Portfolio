<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Name of your web site">
    <meta name="author" content="Marketify">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Ignel | Home</title>

    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/plugins.css" />
    <link rel="stylesheet" type="text/css" href="css/dark.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->

</head>

<body>

    <div id="preloader">
        <div class="loader_line"></div>
    </div>


    <div class="dizme_tm_all_wrap" data-magic-cursor="show">

        <div class="dizme_tm_mobile_menu">
            <div class="mobile_menu_inner">
                <div class="mobile_in">
                    <div class="logo">
                        <a href="#"><img src="img/logo/ignel.png" alt /></a>
                    </div>
                    <div class="trigger">
                        <div class="hamburger hamburger--slider">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <div class="dropdown_inner">
                    <ul class="anchor_nav">
                        <li class="current"><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="download_cv"><a href="img/cv/1.jpg" download><span>Download CV</span></a></li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="dizme_tm_header">
            <div class="container">
                <div class="inner">
                    <div class="logo">
                        <a href="#"><img src="img/logo/ignel.png" alt /></a>
                    </div>
                    <div class="menu">
                        <ul class="anchor_nav">
                            <li class="current"><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#service">Service</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="download_cv"><a href="img/cv/cv.png" download><span>Download CV</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="dizme_tm_section" id="home">
            <div class="dizme_tm_hero">
                <div class="background" data-img-url="img/slider/1.jpg"></div>
                <div class="container">
                    <div class="content">
                        <div class="details">
                            <div class="hello">
                                <h3 class="orangeText">Hello, I'm</h3>
                            </div>
                            <?php foreach ($biodata as $identitas) { ?>
                                <div class="name">
                                    <h3><?php echo $identitas['nama'] ?></h3>
                                </div>
                                <div class="job">
                                    <p>A <span class="greenText"><?php echo $identitas['pekerjaan'] ?></span> From <span class="purpleText"><?php echo $identitas['alamat'] ?></span></p>
                                </div>
                                <div class="text">
                                    <p>I am an informatics engineering student from Muhammadiyah Sukabumi University.</p>
                                </div>
                                <div class="button">
                                    <div class="dizme_tm_button">
                                        <a class="anchor" href="#about"><span>About Me</span></a>
                                    </div>
                                    <div class="social">
                                        <ul>
                                            <li><a href="https://www.instagram.com/teguh.mly"><i class="icon-instagram-1"></i></a></li>
                                            <li><a href="https://github.com/TeguhMulyaLesmana"><i class="icon-github-1"></i></a></li>
                                            <li><a href="https://www.linkedin.com/in/teguhmulya03"><i class="icon-linkedin-1"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                        <div class="avatar">
                            <div class="image">
                                <img src="img/slider/profil.png" alt />
                                <span class="skills illustrator anim_moveBottom"><img class="svg" src="img/svg/skills/php.png" alt /></span>
                                <span class="skills photoshop anim_moveBottom"><img class="svg" src="img/svg/skills/photoshop.png" alt /></span>
                                <span class="skills figma anim_moveBottom"><img class="svg" src="img/svg/skills/figma.svg" alt /></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dizme_tm_down">
                    <a class="anchor" href="#process">
                        <svg width="26px" height="100%" viewBox="0 0 247 390" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
                            <path id="wheel" d="M123.359,79.775l0,72.843" style="fill:none;stroke:#000;stroke-width:20px;" />
                            <path id="mouse" d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z" style="fill:none;stroke:#000;stroke-width:20px;" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>


        <div class="dizme_tm_section" id="process">
            <div class="dizme_tm_process">
                <div class="container">
                    <div class="list">
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="1s">
                                <div class="list_inner">
                                    <div class="icon">
                                        <span>
                                            <img class="brush" src="img/brushes/process/1.png" alt />
                                            <img class="svg" src="img/svg/process/target.svg" alt />
                                        </span>
                                    </div>
                                    <div class="title">
                                        <h3>Pixel Perfect</h3>
                                    </div>
                                    <div class="text">
                                        <p>Most common methods for designing websites that work well on desktop is responsive and adaptive design.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="list_inner">
                                    <div class="icon">
                                        <span>
                                            <img class="brush" src="img/brushes/process/2.png" alt />
                                            <img class="svg" src="img/svg/process/brush.svg" alt />
                                        </span>
                                    </div>
                                    <div class="title">
                                        <h3>High Quality</h3>
                                    </div>
                                    <div class="text">
                                        <p>Most common methods for designing websites that work well on desktop is responsive and adaptive design.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="list_inner">
                                    <div class="icon">
                                        <span>
                                            <img class="brush" src="img/brushes/process/3.png" alt />
                                            <img class="svg" src="img/svg/process/energy.svg" alt />
                                        </span>
                                    </div>
                                    <div class="title">
                                        <h3>Awesome Idea</h3>
                                    </div>
                                    <div class="text">
                                        <p>Most common methods for designing websites that work well on desktop is responsive and adaptive design</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="dizme_tm_section" id="about">
            <div class="dizme_tm_about">
                <div class="container">
                    <div class="wrapper">

                        <div class="image">
                            <img src="img/about/about.png" alt />

                        </div>

                        <div class="right">
                            <div class="title wow fadeInUp" data-wow-duration="1s">
                                <span>I'm a Teguh</span>
                                <h3>about me</h3>
                            </div>
                            <div class="text wow fadeInUp" data-wow-duration="1s">
                                <p>Hello there! I'm a web developer, and I'm very passionate and dedicated to my work. With 3 years of experience as a web developer and designer, I have acquired the skills and knowledge necessary for my career. I enjoy every step of the web creation and design process..</p>
                            </div>
                            <div class="dizme_tm_button wow fadeInUp" data-wow-duration="1s">
                                <a class="anchor" href="#contact"><span>Hire Me</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="brush_1 wow fadeInLeft" data-wow-duration="1s"><img src="img/brushes/about/1.png" alt /></div>
                <div class="brush_2 wow fadeInRight" data-wow-duration="1s"><img src="img/brushes/about/2.png" alt /></div>
            </div>
        </div>

        <div class="dizme_tm_main_title" data-align="center" id="portfolio">
            <span>Portfolio</span>
            <h3>My Amazing Works</h3>
            <p>Most common methods for designing websites that work well on desktop is responsive and adaptive design</p>
        </div>
        <div class="dizme_tm_section">
            <div class="dizme_tm_skills">
                <div class="container">
                    <div class="wrapper">
                        <div class="left">
                            <div class="dizme_tm_main_title wow fadeInUp" data-wow-duration="1s" data-align="left">
                                <span>Design is Life</span>
                                <h3>I Develop Skills Regularly to Keep Me Update</h3>
                                <p>Most common methods for designing websites that work well on desktop is responsive and adaptive design</p>
                            </div>
                            <div class="dodo_progress wow fadeInUp" data-wow-duration="1s">
                                <div class="progress_inner" data-value="85" data-color="#f75023">
                                    <span><span class="label">photoshop</span><span class="number">75%</span></span>
                                    <div class="background">
                                        <div class="bar">
                                            <div class="bar_in"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress_inner" data-value="95" data-color="#1cbe59">
                                    <span><span class="label">Php</span><span class="number">75%</span></span>
                                    <div class="background">
                                        <div class="bar">
                                            <div class="bar_in"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress_inner" data-value="75" data-color="#8067f0">
                                    <span><span class="label">Figma</span><span class="number">95%</span></span>
                                    <div class="background">
                                        <div class="bar">
                                            <div class="bar_in"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <img src="img/skills/skill.png  " alt />
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="dizme_tm_section" id="service">
            <div class="dizme_tm_services">
                <div class="container">
                    <div class="dizme_tm_main_title" data-align="center">
                        <span>Services</span>
                        <h3>What I Do for Clients</h3>
                        <p>Most common methods for designing websites that work well on desktop is responsive and adaptive design</p>
                    </div>
                    <div class="service_list">
                        <ul>
                            <li class="wow fadeInLeft" data-wow-duration="1s">
                                <div class="list_inner tilt-effect">
                                    <span class="icon">
                                        <img class="svg" src="img/svg/service/anchor.svg" alt />
                                        <img class="back" src="img/brushes/service/1.png" alt />
                                    </span>
                                    <div class="title">
                                        <h3>Creative Design</h3>
                                    </div>
                                    <div class="text">
                                        <p>Innovative Creative Crafting</p>
                                    </div>
                                    <a class="dizme_tm_full_link" href="#"></a>
                                    <img class="popup_service_image" src="img/service/1.jpg" alt />
                                    <div class="service_hidden_details">
                                        <div class="service_popup_informations">
                                            <div class="descriptions">
                                                <p>Creative crafting involves the meticulous process of ideation, experimentation, and implementation, where innovative ideas are brought to life through thoughtful design choices, resulting in visually striking and compelling creations that captivate and inspire audiences.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="list_inner tilt-effect">
                                    <span class="icon">
                                        <img class="svg" src="img/svg/service/physics.svg" alt />
                                        <img class="back" src="img/brushes/service/2.png" alt />
                                    </span>
                                    <div class="title">
                                        <h3>Graphic Design</h3>
                                    </div>
                                    <div class="text">
                                        <p>Creating Engaging Graphics</p>
                                    </div>
                                    <a class="dizme_tm_full_link" href="#"></a>
                                    <img class="popup_service_image" src="img/service/2.jpg" alt />
                                    <div class="service_hidden_details">
                                        <div class="service_popup_informations">
                                            <div class="descriptions">
                                                <p>Graphic design encompasses the artistic and strategic creation of visual content, including illustrations, typography, and imagery, to convey messages and ideas effectively across various mediums such as print, digital, and multimedia platforms.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="1s">
                                <div class="list_inner tilt-effect">
                                    <span class="icon">
                                        <img class="svg" src="img/svg/service/contact.svg" alt />
                                        <img class="back" src="img/brushes/service/3.png" alt />
                                    </span>
                                    <div class="title">
                                        <h3>UI/UX Design</h3>
                                    </div>
                                    <div class="text">
                                        <p>Designing Seamless UI/UX</p>
                                    </div>
                                    <a class="dizme_tm_full_link" href="#"></a>
                                    <img class="popup_service_image" src="img/service/3.jpg" alt />
                                    <div class="service_hidden_details">
                                        <div class="service_popup_informations">
                                            <div class="descriptions">
                                                <p>UI/UX design revolves around the meticulous planning and execution of user interfaces to ensure seamless interactions and intuitive user experiences. It entails the harmonious blend of visual aesthetics, ergonomic considerations, and user-centric design principles to enhance usability and engagement across digital platforms.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="list_inner tilt-effect">
                                    <span class="icon">
                                        <img class="svg" src="img/svg/service/web.svg" alt />
                                        <img class="back" src="img/brushes/service/4.png" alt />
                                    </span>
                                    <div class="title">
                                        <h3>Web Design</h3>
                                    </div>
                                    <div class="text">
                                        <p>Enhancing Web Designt</p>
                                    </div>
                                    <a class="dizme_tm_full_link" href="#"></a>
                                    <img class="popup_service_image" src="img/service/4.jpg" alt />
                                    <div class="service_hidden_details">
                                        <div class="service_popup_informations">
                                            <div class="descriptions">
                                                <p>Web design encompasses the conceptualization, creation, and implementation of visually appealing and functional websites tailored to meet the needs of users and businesses alike. It involves the strategic integration of layout, typography, imagery, and interactive elements to deliver compelling digital experiences and facilitate seamless navigation for online audiences.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="brush_1 wow fadeInLeft" data-wow-duration="1s"><img src="img/brushes/service/5.png" alt /></div>
                <div class="brush_2 wow zoomIn" data-wow-duration="1s"><img src="img/brushes/service/6.png" alt /></div>
            </div>
        </div>


        <div class="dizme_tm_section">
            <div class="dizme_tm_testimonials">
                <div class="dizme_tm_main_title" data-align="center">
                    <span>Testimonials</span>
                    <h3>What My Clients Say</h3>
                    <p>Most common methods for designing websites that work well on desktop is responsive and adaptive design</p>
                </div>
                <div class="list_wrapper">
                    <div class="total">
                        <div class="in">
                            <ul class="owl-carousel owl-theme">
                                <li>
                                    <div class="icon">
                                        <img class="svg" src="img/svg/testimonials/quote.svg" alt />
                                    </div>
                                    <div class="text">
                                        <p>I rarely like to write reviews, but the Marketify team truly deserve a standing ovation for their customer support, customisation and most importantly, friendliness and professionalism. Many thanks once again for everything and hope that I get to deal with you again in the near future.</p>
                                    </div>
                                    <div class="short">
                                        <div class="image">
                                            <div class="main" data-img-url="img/testimonials/dacup.jpg"></div>
                                        </div>
                                        <div class="detail">
                                            <h3>Dacup</h3>
                                            <span>Dapa cupu</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img class="svg" src="img/svg/testimonials/quote.svg" alt />
                                    </div>
                                    <div class="text">
                                        <p>Really the Code Quality, Customer Support, and design are awesome and its good support they are giving. They give an instant solution to our needs. Really awesome. I will strongly recommend to my friends. Simply amazing team and amazing theme! Thank you from United States of America!</p>
                                    </div>
                                    <div class="short">
                                        <div class="image">
                                            <div class="main" data-img-url="img/testimonials/3.jpg"></div>
                                        </div>
                                        <div class="detail">
                                            <h3>Keita Smith</h3>
                                            <span>ABC Group</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img class="svg" src="img/svg/testimonials/quote.svg" alt />
                                    </div>
                                    <div class="text">
                                        <p>Loved the template design, documentation, customizability and the customer support from Marketify team! I am a noob in programming with very little knowledge about coding but the Marketify team helped me to launch my resume website successfully. Much recommended!</p>
                                    </div>
                                    <div class="short">
                                        <div class="image">
                                            <div class="main" data-img-url="img/testimonials/6.jpg"></div>
                                        </div>
                                        <div class="detail">
                                            <h3>Alan Walker</h3>
                                            <span>Web Designer</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="left_details">
                            <div class="det_image one wow fadeIn" data-wow-duration="1s" data-img-url="img/testimonials/2.jpg"></div>
                            <div class="det_image two wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-img-url="img/testimonials/1.jpg"></div>
                            <div class="det_image three wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" data-img-url="img/testimonials/3.jpg"></div>
                            <div class="det_image four wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s" data-img-url="img/testimonials/4.jpg"></div>
                            <span class="circle green animPulse"></span>
                            <span class="circle yellow animPulse"></span>
                            <span class="circle border animPulse"></span>
                        </div>
                        <div class="right_details">
                            <div class="det_image one wow fadeIn" data-wow-duration="1s" data-img-url="img/testimonials/5.jpg"></div>
                            <div class="det_image two wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-img-url="img/testimonials/6.jpg"></div>
                            <div class="det_image three wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" data-img-url="img/testimonials/7.jpg"></div>
                            <span class="circle yellow animPulse"></span>
                            <span class="circle purple animPulse"></span>
                            <span class="circle border animPulse"></span>
                        </div>
                    </div>
                </div>
                <div class="brush_1 wow fadeInRight" data-wow-duration="1s"><img src="img/brushes/testimonials/1.png" alt /></div>
            </div>
        </div>
        <div class="dizme_tm_section" id="blog">
            <div class="dizme_tm_news">
                <div class="container">
                    <div class="dizme_tm_main_title" data-align="center">
                        <span>From My Blog</span>
                        <h3>Our Recent Updates, Blog, Tips, Tricks &amp; More</h3>
                    </div>
                    <div class="news_list">
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="1s">
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="img/thumbs/42-29.jpg" alt />
                                        <div class="main" data-img-url="img/news/1.jpg"></div>
                                        <div class="date">
                                            <h3>03</h3>
                                            <span>Jan</span>
                                        </div>
                                        <a class="dizme_tm_full_link" href="#"></a>
                                    </div>
                                    <div class="details">
                                        <span class="category"><a href="#">Web Development</a></span>
                                        <h3 class="title"><a href="#">create an attractive website
                                                <div class="news_hidden_details">
                                                    <div class="news_popup_informations">
                                                        <div class="text">
                                                            <p>To create an attractive and professional website, ensure you use a clean and simple design for easy navigation and to keep the focus on the content; showcase your best and most relevant projects to leave a strong positive impression and effectively demonstrate your skills; use high-quality images and engaging visual media to enhance the overall appearance and create a more enjoyable user experience; include detailed descriptions and the stories behind each project to provide context and highlight your workflow; and make sure the site is responsive and optimized for various devices.</p>
                                                        </div>

                                                    </div>
                                                </div>
                                    </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="img/thumbs/42-29.jpg" alt />
                                        <div class="main" data-img-url="img/news/2.jpg"></div>
                                        <div class="date">
                                            <h3>23</h3>
                                            <span>Feb</span>
                                        </div>
                                        <a class="dizme_tm_full_link" href="#"></a>
                                    </div>
                                    <div class="details">
                                        <span class="category"><a href="#">Visual Design</a></span>
                                        <h3 class="title"><a href="#">Optimizing Visual Design with Photoshop</a></h3>
                                    </div>
                                    <div class="news_hidden_details">
                                        <div class="news_popup_informations">
                                            <div class="text">
                                                <p>To create an attractive and professional design in Photoshop, follow these tips: use a clean and simple layout to ensure easy navigation and maintain focus on the main content; showcase your best and most relevant work to leave a strong positive impression and effectively demonstrate your skills; use high-quality images and engaging visual elements to enhance the overall appearance and create a more enjoyable user experience; include detailed descriptions and the stories behind each design to provide context and highlight your creative process; and ensure your design is adaptable and optimized for various display sizes and devices.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="img/thumbs/42-29.jpg" alt />
                                        <div class="main" data-img-url="img/news/3.jpg"></div>
                                        <div class="date">
                                            <h3>10</h3>
                                            <span>Aug</span>
                                        </div>
                                        <a class="dizme_tm_full_link" href="#"></a>
                                    </div>
                                    <div class="details">
                                        <span class="category"><a href="#">Desain</a></span>
                                        <h3 class="title"><a href="#">Applying Professional Design Principles in Figma</a></h3>
                                    </div>
                                    <div class="news_hidden_details">
                                        <div class="news_popup_informations">
                                            <div class="text">
                                                <p>To craft an appealing and professional design in Figma, adhere to these principles: employ a clean and straightforward layout to facilitate effortless navigation and emphasize the primary content; present your finest and most pertinent work to leave a lasting positive impact and effectively showcase your abilities; integrate top-tier images and captivating visual elements to elevate the overall aesthetic and deliver a more pleasurable user experience; incorporate thorough descriptions and narratives for each design to provide context and accentuate your creative journey; guarantee your design is flexible and optimized for diverse screen sizes and devices.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="brush_1 wow zoomIn" data-wow-duration="1s"><img src="img/brushes/news/1.png" alt /></div>
                <div class="brush_2 wow zoomIn" data-wow-duration="1s"><img src="img/brushes/news/2.png" alt /></div>
            </div>
        </div>


        <div class="dizme_tm_section">
            <div class="dizme_tm_subscribe">
                <div class="container">
                    <div class="inner">
                        <div class="background">
                            <div class="dots" data-img-url="img/subscribe/dots.jpg"></div>
                            <div class="overlay"></div>
                        </div>
                        <div class="content">
                            <div class="left wow fadeInLeft" data-wow-duration="1s">
                                <span class="subtitle">Subscribe Now</span>
                                <h3 class="title">Get My Newsletter</h3>
                                <p class="text">Get latest news, updates, tips and trics in your inbox</p>
                            </div>
                            <div class="right wow fadeInRight" data-wow-duration="1s">
                                <div class="field">
                                    <input type="text" placeholder="Your email here">
                                    <input type="submit" value="Send Now" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="dizme_tm_section" id="contact">
            <div class="dizme_tm_contact">
                <div class="container">
                    <div class="dizme_tm_main_title" data-align="center">
                        <span>Contact Me</span>
                        <h3>I Want To Hear From You</h3>
                        <p>Please fill out the form on this section to contact with me. Or call between 9:00 a.m. and 8:00 p.m. ET, Monday through Friday</p>
                    </div>
                    <div class="contact_inner">
                        <div class="left wow fadeInLeft" data-wow-duration="1s">
                            <ul>
                                <li>
                                    <div class="list_inner">
                                        <div class="icon orangeBackground">
                                            <i class="icon-location orangeText"></i>
                                        </div>
                                        <div class="short">
                                            <h3>Address</h3>
                                            <span>Sukabumi</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <div class="icon greenBackground">
                                            <i class="icon-mail-1 greenText"></i>
                                        </div>
                                        <div class="short">
                                            <h3>Email</h3>
                                            <span>tmulya86@gmail.com</span>
                                        </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <div class="icon purpleBackground">
                                            <i class="icon-phone purpleText"></i>
                                        </div>
                                        <div class="short">
                                            <h3>Phone</h3>
                                            <span>087844682650</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="right wow fadeInRight" data-wow-duration="1s">
                            <div class="fields">
                                <form action="https://marketifythemes.net/" method="post" class="contact_form" id="contact_form" autocomplete="off">
                                    <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                                    <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                                    <div class="input_list">
                                        <ul>
                                            <li><input id="name" type="text" placeholder="Your Name" /></li>
                                            <li><input id="email" type="text" placeholder="Your Email" /></li>
                                            <li><input id="phone" type="number" placeholder="Your Phone" /></li>
                                            <li><input id="subject" type="text" placeholder="Subject" /></li>
                                        </ul>
                                    </div>
                                    <div class="message_area">
                                        <textarea id="message" placeholder="Write your message here"></textarea>
                                    </div>
                                    <div class="dizme_tm_button">
                                        <a id="send_message" href="#"><span>Submit Now</span></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="brush_2 wow fadeInRight" data-wow-duration="1s"><img src="img/brushes/contact/2.png" alt /></div>
                    </div>

                </div>
                <div class="brush_1 wow fadeInLeft" data-wow-duration="1s"><img src="img/brushes/contact/1.png" alt /></div>
            </div>
        </div>


        <div class="dizme_tm_section">
            <div class="dizme_tm_copyright">
                <div class="container">
                    <div class="inner">
                        <div class="left wow fadeInLeft" data-wow-duration="1s">
                            <p>Developed with love by <a href="https://themeforest.net/user/marketify" target="_blank">Marketify</a> &copy; 2022</p>
                        </div>
                        <div class="right wow fadeInRight" data-wow-duration="1s">
                            <ul>
                                <li><a href="#">Terms &amp; Condition</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>


        <div class="progressbar">
            <a href="#"><span class="text">To Top</span></a>
            <span class="line"></span>
        </div>

    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery.js"></script>
    <!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
    <script src="js/plugins.js"></script>
    <script src="js/init.js"></script>

</body>

</html>