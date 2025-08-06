<?php
if (!defined('ShayanFP_BEST')) {
    header('HTTP/1.0 403 Forbidden');
    echo 'ShayanFP.ir: Access denied!';return 'ShayanFP.ir: Access denied!';
    exit;
}

function turl(){
    return 'https://shayanfp.ir/';
}

function _e($a){
    echo $a;
}

function shayanfp_head($lang='fa',
$title='شایان فرهنگ پژوه | بنیان‌گذار مجموعه‌ی شایان وب | برنامه‌نویس وب',
$description='سلام! شایان فرهنگ پژوه هستم، بنیان‌گذار مجموعه‌ی شایان وب و طراح وبسایت. این جا وبسایت شخصی‌ام است و در مورد خودم و مهارت‌هایم بهتون توضیحاتی رو دادم.',
$keywords='شایان فرهنگ پژوه'
) {
    ob_start();
?><!Doctype html>
<html lang="<?php echo $lang; ?>">
<head>
  <title><?php echo $title; ?></title>
  <!-- Alternate Langs -->
  <link rel="alternate" hreflang="en" href="<?php _e(turl()); ?>en">
  <link rel="alternate" hreflang="fa" href="<?php _e(turl()); ?>">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://shayanweb.com/wp-content/themes/shayanweb/css/bootstrap-rtl.min.css?ver=1.0">
  <!-- Font: IRANsans -->
  <?php if ($lang == 'en') {
    echo "<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>";
    }else{ ?>
    <link rel="stylesheet" href="<?php _e(turl()); ?>assets/css/iransans.min.css?ver=1.1">
  <?php } ?>
  <!-- FontAwesome -->
  <link rel="stylesheet" href="<?php _e(turl()); ?>assets/css/all.min.css?ver=1.0">
  <!-- Loader -->
  <link rel="stylesheet" href="<?php _e(turl()); ?>assets/css/loader.css?ver=1.0">
  <!-- Style.css File -->
  <link rel="stylesheet" href="<?php _e(turl()); ?>assets/css/style.css?ver=1.2.7">
  <!-- Responsive The website -->
  <link rel="stylesheet" href="<?php _e(turl()); ?>assets/css/responsive.css?ver=1.1.2">
  <?php if ($lang == 'en') { ?>
  <!-- Right To Left styles File -->
  <link rel="stylesheet" href="<?php _e(turl()); ?>assets/css/ltr.css?ver=1.0">
  <?php } ?>

  <link rel="icon" href="<?php _e(turl()); ?>assets/img/Shayan-Farhang-Pazhooh.jpg">

  <meta name="description" content="<?php echo $description; ?>" />
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta property="og:title" content="<?php echo $title; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php _e(turl()); ?>" />
  <meta property="og:image" content="<?php _e(turl()); ?>assets/img/Shayan-Farhang-Pazhooh.jpg" />
  <meta property="og:description" content="<?php echo $description; ?>" />

  <meta name="theme-color" content="#1DE9B6" />
  <meta name="google-site-verification" content="Cxl9XGxput8kx0eGVKdYZAm51-0Ek0nzhPONMcYy5MI" />
</head>

<body>
<div class="allcontentsh">
<?php
    return ob_get_clean();
}

function shayanfp_alert(){
    ob_start();
    ?>
    <a href="https://shayanweb.com/hooshmandsazi-amoozesh-book/" class="d-block shayanweb-noticebar">
      <div class="container">
        <div class="shayanweb-noticebar-area d-lg-flex d-block align-items-center justify-content-between">
          <div class="shayanweb-noticetxt noticebar-text">
            خرید کتاب هوشمندسازی آموزش با ارسال پستی رایگان!!😍      </div>
          <div class="shayanweb-noticebtn noticebar-btn">
            همین حالا تهیه می&zwnj;کنم!      </div>
        </div>
      </div>
    </a>
    <?php
    return ob_get_clean();
}


function shayanfp_header($lang='fa'){
    ob_start();
    ?>
    <div class="toparea">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-4 col-md-6 col-12">
            <div class="float-md-<?php if($lang=='en'){echo 'left';}else{echo 'right';} ?> float-unset lang-headarea">
                <i class="fas fa-language"></i>
                <span class="langtitle"><?php if($lang=='en'){echo 'Language: ';}else{echo 'زبان / Language: ';} ?></span>
                <a class="langb" href="<?php _e(turl()); ?>"><?php if($lang=='en'){echo 'Persian';}else{echo 'فارسی';} ?></a>
                <a class="langb" href="<?php _e(turl()); ?>en">English</a>
            </div>
          </div>
          <div class="col-md-3 col-12">
            <div class="shweb-head-btn float-md-<?php if($lang=='en'){echo 'right';}else{echo 'left';} ?> float-unset">
              <a rel="noopener noreferrer" class="shweb-btn" target="_blank" href="https://shayanweb.com/">
                ShayanWeb.com
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <header id="header">
      <div class="container">
        <div class="p-10-0">
          <div class="row justify-content-between d-flex align-items-center">
            <div class="<?php if($lang=='en'){echo 'col-xl-5 col-lg-4 col-md-8 col-12';}else{echo 'col-lg-4 col-md-6 col-12';} ?>">
              <div class="logoarea">
                <a class="d-block" href="<?php if($lang=='en'){_e(turl().'en');}else{_e(turl());} ?>">
                  <div class="imgarea">
                    <img src="<?php _e(turl()); ?>assets/img/Shayan-Farhang-Pazhooh.jpg" width="100" height="100" alt="Shayan Farhang Pazhooh | Web Designer and Founder of ShayanWeb.com">
                  </div>
                  <div class="titlearea">
                    <h1><?php if($lang=='en'){_e('Shayan Farhang Pazhooh');}else{_e('شایان فرهنگ پژوه');} ?></h1>
                    <span><?php if($lang=='en'){_e('Founder of ShayanWeb | Web Developer & Researcher');}else{_e('بنیان‌گذار شایان وب و برنامه‌نویس وب');} ?></span>
                  </div>
                </a>
              </div>
            </div>
            <div class="<?php if($lang=='en'){echo 'col-xl-5 col-lg-6 d-none d-lg-block';}else{echo 'col-lg-6 d-none d-lg-block';} ?>">
              <div class="menuarea">
                <ul>
                  <li><a href="#about"><?php if($lang=='en'){_e('My Story');}else{_e('داستان من');} ?></a></li>
                  <li><a href="#skills"><?php if($lang=='en'){_e('My skills');}else{_e('مهارت‌های من');} ?></a></li>
                  <li><a href="#websites"><?php if($lang=='en'){_e('My websites');}else{_e('مجموعه‌های من');} ?></a></li>
                  <li><a href="#contact"><?php if($lang=='en'){_e('Contact me');}else{_e('تماس با من');} ?></a></li>
                </ul>
              </div>
            </div>
            <div class="col-2 d-none d-md-block">
              <div class="left-items">
                <ul>
                  <li class="socialicon insta">
                    <a title="instagram" rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/shayanfpinsta/">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                  <li class="socialicon mail">
                    <a title="email" target="_blank" href="mailto:shayanfp@shayanweb.com">
                      <i class="far fa-envelope"></i>
                    </a>
                  </li>
                  <!-- <li class="contactme">
                    <a href="#contact">
                      <i class="fas fa-phone"></i>
                      <span>تماس با من</span>
                    </a>
                  </li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <?php
    return ob_get_clean();
}


function shayanfp_footer($lang='fa'){
    ob_start();
    ?>
    <footer id="footer">
      <div class="container">
        <div class="p-10-0">
          <div class="row">
            <div class="col-12">
              <p class="paragraph">
                <?php if($lang=='en'){ ?>
                All rights reserved by 
                <a href="<?php _e(turl()); ?>en">Shayan Farhang Pazhooh</a>.
                <?php }else{ ?>
                تمامی حقوق برای
                <a href="<?php _e(turl()); ?>">شایان فرهنگ پژوه</a>
                محفوظ است.
                |
                طراحی شده در
                <a rel="noopener noreferrer" href="https://shayanweb.com/?utm_source=shayanfpir&utm_medium=footerlink&utm_campaign=footerintro&utm_content=designedbyshweb">
                  شایان وب
                </a>
                <?php } ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>


  <!-- jQuery first, then Bootstrap JS -->
  <script src="<?php _e(turl()); ?>assets/js/jquery-1.12.4.min.js"></script>
  <script src="https://shayanweb.com/wp-content/themes/shayanweb/js/pace.min.js?ver=1.0"></script>
  <script src="<?php _e(turl()); ?>assets/js/lozad.min.js"></script>
  <script type="text/javascript">
    const observer = lozad();
    observer.observe();
  </script>
  <?php if($lang=='fa'){?>
  <script src="<?php _e(turl()); ?>assets/js/readmore.min.js"></script>
  <script type="text/javascript">
    $('article').readmore({
      speed: 800,
      collapsedHeight: <?php if($lang=='en'){ _e('110');}else{_e('70');}?>,
      heightMargin: 16,
      moreLink: '<a class="readmorebtn sh-btn openbtn" href="#my-story"><?php if($lang=='en'){_e('Read More');}else{_e('داستان را بخوانید');} ?></a>',
      lessLink: '<a class="readmorebtn sh-btn closebtn" href="#my-story"><?php if($lang=='en'){_e('Close');}else{_e('بستن');} ?></a>',
      embedCSS: true,
      blockCSS: 'display: block; width: 100%;',
      startOpen: false,

      // callbacks
      blockProcessed: function() {},
      beforeToggle: function(trigger, element, expanded) {
      // Scroll to the section after expanding or collapsing
      $('html, body').animate({
        scrollTop: $('#my-story').offset().top
      }, 800);
    },
      afterToggle: function() {}
    });
  </script>
  <?php } ?>

</body>

</html>
    <?php
    return ob_get_clean();
}










function shayanfp_home_main($lang='fa'){
    if($lang == 'en'){ob_start();?>
    <main class="home-padding-top" id="main">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-8 col-12 order-2 order-md-1">
            <h2 class="text-center text-md-left my-name-is">Shayan Farhang Pazhooh</h2>
            <span class="text-center text-md-left d-block i-am-who">Researcher, Author & Founder of ShayanWeb<br>Industrial Engineer & Web Developer</span>
            <a class="d-block sh-btn" href="#about">Read My Story</a>
          </div>
          <div class="col-md-4 col-12 order-1 order-md-2">
            <img class="left-img" src="<?php _e(turl()); ?>assets/img/shayanfp-pic.jpg" alt="Shayan Farhang Pazhooh">
          </div>
        </div>
        <div id="about" class="row home-boxes d-flex align-items-center">
          <div class="col-12">
            <h2 class="text-center box-title">
              My Story
            </h2>
          </div>
          <div class="col-12">
          </div>
          <div class="col-12">
            <div class="paragraph">
              <section id="my-story">
                <article>
                  <p>I remember when I was 6 years old, I saw the words "website design" in a newspaper. I ran to my father, holding the newspaper, and said, "I want to have a website!" My father introduced me to <a rel="noopener noreferrer" href="https://w3schools.com">w3schools.com</a>, and with its help, I learned HTML and CSS coding. I still have the notebook where I used to write down the codes—written in my handwriting from those days!</p>
                  <figure><img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/Shayan-HTML-Learning-7years-old.jpg" alt="Shayan’s HTML coding notebook from childhood"><figcaption>A photo of Shayan’s HTML coding notebook at age 7</figcaption></figure>
                  <p>From the age of 4 or 5, I had a strong interest in working with computers. Using Paint on Windows XP and listening to music were my favorite activities on the computer!</p>
                  <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/early-life-shayan-20130902.jpg" alt="Childhood of Shayan Farhang Pazhooh">
                  <p>Since both my parents were electrical engineers, they encouraged me, and I developed a greater interest in technology and curiosity in this field. In first grade, with my father’s help, I created my first blogs on various blog platforms. Writing for the blog wasn’t just fascinating; more than anything, I was intrigued by what happened behind the scenes—how it all worked.</p>
                  <figure><img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/shayanfp-blog-ir.jpg" alt="Shayan Farhang Pazhooh blogging"><figcaption>Photo from one of Shayan's old blogs!</figcaption></figure>
                  <p>I always dreamed of starting a company and having my own business. I would even write my company’s name on my bedroom door and draw a banner introducing it on paper. I always thought about having my own company when I grew up.</p>
                  <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/early-life-shayan-DSC00747.jpg" alt="Childhood of Shayan Farhang Pazhooh">
                  <p>A few years later, when I was 9, I became familiar with WordPress, a content management system used to build websites. I worked with WordPress so much that I became proficient in it—I taught myself how to use it. I created several different websites on localhost or with free hosting, experimenting with various tasks. The first website I built with real hosting and a domain was for my uncle’s company!</p>
                  <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/shayan-class-project-IMG_0459.jpg" alt="Presenting an animation project">
                  <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/shayan-project-20131101_181528.jpg" alt="Creating a stop-motion animation led by Shayan">
                  <p>Around 2016, I implemented a few ideas I had. I made a felt doll with designs from children's storybooks like Shimoo, Franklin the turtle, etc., which had a Bluetooth speaker inside it and would narrate the story of the book to children. I also developed a mobile app in the tourism field and created the "AshpazKoochooloo Cooking Kit” for children, which included the necessary ingredients, a ladle, recipes, and more. Although I am not currently active in these fields, those experiences laid the foundation for my future ideas.</p>
                  <div class="grid-pics">
                    <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/shayan-cookpack-20170301_130519.jpg" alt="AshpazKoochooloo Cooking Kit idea">
                    <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/shayan-present-ideas.jpg" alt="The story-teller felt doll idea">
                    <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/shayan-present.jpg" alt="Childhood of Shayan Farhang Pazhooh">
                    <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/shayan-story-teller-felt-doll.jpg" alt="The story-teller felt doll idea">
                    </div>
                  <p>After launching several websites for my ideas and gaining more experience, in 2018, I created an Instagram page where I taught WordPress. I posted several times a day on this page, and when you searched for "WordPress" on Instagram, my page was the first result. From this Instagram page (and a website I launched a few months later), I gained clients for website design.</p>
                  <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/shayan-2019.jpg" alt="Shayan Farhang Pazhooh at the age of 12">
                  <p>At the age of 12-13, I was always the youngest participant at various seminars and conferences!</p>
                  <img style="width:900px" class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/hamayeshha-shayan12-13.jpg" alt="Shayan Farhang Pazhooh attending conferences at age 12-13">
                  <p>I applied the knowledge from the books I read and the research I conducted on business and online marketing to this business and its website. I also tried to use various tools to plan my business effectively. Additionally, I shared educational articles, videos, and various training courses on my website.</p>
                  <div class="grid-pics m-grid-pics">
                    <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/iranserver-interview-age-12.jpg" alt="IranServer Co. Interview with Shayan Farhang Pazhooh at the age of 12">
                    <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/webinar-1398.jpg" alt="Shayan hosting a webinar on website design in 2020">
                    </div>
                  <p>In late autumn 2019, I decided to do a rebranding for my business. This rebranding included changing the brand name and logo, changing the services, etc. In June 2020, I completed the design and development of my website, <a href="https://shayanweb.com" rel="_blank">ShayanWeb.com</a>, and launched it.</p>
                  <img class="lozad w-100" data-src="<?php _e(turl()); ?>assets/img/story/shayanwebcom.jpg" alt="ShayanWeb.com Website">
                  <p>I have always loved teaching! I’ve done extensive research and analysis on teaching, especially online education. Collaborating with instructors and educational institutions, as well as hosting online webinars and training courses on topics like internet business, web development, website design, and marketing, has been one of the most valuable experiences in my career.</p>
                  <p>In 2019, I developed the <a href="https://shayanweb.com/market/hamyarlearn/" target="_blank">HamyarLearn WordPress theme</a>. This WordPress theme helps online instructors and educational institutions offer their educational courses to their audience online. This WordPress theme is still being updated, and nearly a thousand people have purchased it to date.</p>
                  <img class="lozad w-100" data-src="<?php _e(turl()); ?>assets/img/story/hamyarlearn-wordpress-theme.jpg" alt="HamyarLearn WordPress theme">
                  <p>From a young age, my parents encouraged me to read novels and poetry, and I’ve always had a great passion for reading various books. Later, I became interested in books related to business, personal development, and marketing. Inspired by my readings, I always aspired to write a book.</p>
                  <p>To share my real-world experiences in business and education and my collaborations with educational organizations and individuals, I decided to write a book that would benefit my audience. At age 15, I started writing the book “<a href="https://shayanweb.com/hooshmandsazi-amoozesh-book/" target="_blank">Smartening Knowledge</a>: A Guide to Building a Successful Online Education Business”. It took me a year and a half to write this book, until it was finally registered in the National Library of Iran. The audience of the book “Smartening Knowledge” is mostly professionals who want to turn their expertise into a business by creating and offering educational courses. Starting and growing an educational business, designing educational content, and using modern online marketing methods are the main contents of this book. Creating a positive impact on others through this book has been very meaningful to me.</p>
                  <img  class="lozad wle" data-src="https://shayanweb.com/wp-content/uploads/2023/06/hooshmandsazi-amoozesh-book-room.jpg" alt="Smartening Knowledge Book">
				  <figure class="row">
						<div class="col-12">
							<img class="lozad w-100" data-src="<?php _e(turl()); ?>assets/img/Shayan-Farhang-Pazhooh-Value-Creation-Seminar.jpg" alt="Shayan Farhang Pazhooh at his Value Creation Seminar">
                        	<img class="lozad w-100" data-src="<?php _e(turl()); ?>assets/img/Shayan-Farhang-Pazhooh-Entrepreneurship-Seminar.jpg" alt="Shayan Farhang Pazhooh at his Entrepreneurship Seminar">
                        </div>
						<div class="col-12"><figcaption>Shayan Farhang Pazhooh at his Seminars</figcaption></div>
                    </figure>
                  <p>Alongside launching, managing, and expanding my business, writing my book, and engaging in other activities, my education has always been very important to me. In high school, I studied the math and physics major and was recognized for my achievements in various fields.</p>
                    <figure style="width:700px"><a rel="nofollow" target="_blank" href="<?php _e(turl()); ?>assets/img/story/highschool-appreciation-letters-full.jpg"><img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/highschool-appreciation-letters.jpg" alt="Shayan Farhang Pazhooh receiving academic recognition in high school"></a><figcaption>Some of Shayan’s certificates of achievement from high school: Recognized for excellence in the national Olympiad in thinking and entrepreneurship, achieving outstanding academic performance with a GPA over 19 out of 20, and winning multiple cultural and artistic competitions at the district and provincial levels</figcaption></figure>
                    <figure class="row">
                        <div class="col-md-7 col-12">
                            <img class="lozad w-100" data-src="<?php _e(turl()); ?>assets/img/story/appreciation-award402.jpg" alt="Recognition for academic achievement in the 2022-2023 school year">
                        </div>
                        <div class="col-md-5 col-12">
                            <img class="lozad w-100" data-src="<?php _e(turl()); ?>assets/img/story/appreciation-award401.jpg" alt="Recognition for academic achievement in the 2021-2022 school year">
                        </div>
                        <div class="col-12"><figcaption>Honored to receive these awards for academic excellence: one for maintaining a GPA over 19/20 during the 2021-2022 school year, and another for ranking #1 with a GPA over 19/20 in 2022-2023</figcaption></div>
                    </figure>
					<p>Given my lifelong passion for building and optimizing systems—from coding my first websites to managing business processes at ShayanWeb—Industrial Engineering was a natural and conscious choice. This field is, in fact, the scientific and academic language for the concepts I had already experienced firsthand: designing efficient systems, solving complex problems, and optimizing resource management. Now, I am proud to be at <strong>Isfahan University of Technology (IUT)</strong>, one of Iran's top universities, where I have the opportunity to advance my academic and scientific work on systems performance. This research-oriented mindset, which I had previously cultivated while authoring my book, "Smartening Knowledge," and other educational articles, now continues in the form of academic research projects. Therefore, I am actively pursuing research projects in optimization and other areas of interest. I am thrilled to announce that my first scientific research paper has recently been submitted to a prestigious international (Q1) journal.</p>
					<figure style="width:700px">
						<img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/Shayan-Farhang-Pazhooh-at-IUT.jpg" alt="Shayan Farhang Pazhooh at Isfahan University of Technology">
						<figcaption>Shayan Farhang Pazhooh at Isfahan University of Technology</figcaption>
					</figure>
                    <p>My long-term vision is to build a global technology company that transcends borders, with the ambition to make a meaningful impact on the lives of people around the world. I aspire to create an international business that not only develops innovative products but also crafts compelling marketing strategies, while guiding every step of the customer experience – from pre-sale to launch, and beyond. This entire journey fuels my deep passion for entrepreneurship. I am driven by the prospect of assembling a dynamic team to work collaboratively in bringing this vision to life, and I am deeply excited about the potential to empower others and create lasting change through technology.</p>
                    <p>As the spring of hope🌊 wells up from the depths of my heart🫀, and my mind envisions bright horizons⚡ and a radiant future🕯️, an extraordinary force and an indescribable passion🔥 awakens within me, pulling me towards a brighter tomorrow...</p>
                    <img style="width:900px" class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/horizon.jpg" alt="bright future">
                </article>
              </section>
            </div>

          </div>
          </div>

      <div id="testimonials" class="row mx-auto home-boxes d-flex align-items-center">
            <div class="col-12">
                <h2 class="text-center box-title mb-1">What Experts Say <span class="d-md-inline d-block" style="font-weight:inherit">About Shayan Farhang Pazhooh</span></h2>
                <p class="text-center mb-3">(Watch with English Subtitles)</p>
            </div>
            <div class="col-md-6 col-12"><div class="iframe_embed_frame"><span style="display:block;padding-top:56.7%"></span><iframe width="1920" height="1080" src="https://www.youtube.com/embed/DCip_1IrfmM?si=PtaX07Hf5_OqF_WW&rel=0&cc_lang_pref=en&hl=en&cc_load_policy=1&color=white" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div></div>
            <div class="col-md-6 col-12"><div class="iframe_embed_frame"><span style="display:block;padding-top:56.7%"></span><iframe width="1920" height="1080" src="https://www.youtube.com/embed/4g_imFPORlc?si=PtaX07Hf5_OqF_WW&rel=0&cc_lang_pref=en&hl=en&cc_load_policy=1&color=white" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div></div>
      </div>

        </div>
      </div>


	<div id="research" class="home-boxes">
	<div class="container">
		<div class="row justify-content-center">
		<div class="col-lg-10">
			<h2 class="text-center box-title">Recent Research Papers</h2>
			<div class="publication-box">
			<div class="publication-details">
				<h3>An Efficient Continuous-Time MILP for Integrated Aircraft Hangar Scheduling and Layout</h3>
				<div class="publication-meta">
				<i class="fas fa-flask"></i>
				Paper submitted to: <strong>Computers & Operations Research</strong> (Q1 Journal)
				</div>
				<p class="publication-abstract">This preprint introduces a novel continuous-time MILP model that solves the complex aircraft hangar scheduling problem to optimality for up to 25 aircraft in seconds. By outperforming traditional heuristic methods, our approach provides a scalable decision-support framework with significant economic benefits for MRO operations.</p>
				<a rel="noopener noreferrer" target="_blank" href="https://doi.org/10.48550/arXiv.2508.02640" class="sh-btn sh-btn-research">
				<i class="fas fa-file-alt" style="margin-right: 8px;"></i>
				View Preprint on arXiv
				</a>
			</div>
			</div>
		</div>
		</div>
	</div>
	</div>

      <div id="skills" class="bgf5 home-boxes">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-12">
              <h2 class="text-center box-title">
                My Skills
              </h2>
            </div>
            <div class="col-lg-4 col-md-6">
              <div style="background-image: url(<?php _e(turl()); ?>assets/img/frontend.jpg);" class="skill-boxes frontend d-flex flex-column align-items-center justify-content-center px-50">
                <h3>Front-End web development</h3>
                <span>HTML, CSS, Bootstrap</span>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div style="background-image: url(<?php _e(turl()); ?>assets/img/wordpress-backend.jpg);" class="skill-boxes wordpress-backend d-flex flex-column align-items-center justify-content-center px-50">
                <h3>PHP for WordPress Development</h3>
                <span>WordPress Back-End Developer</span>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div style="background-image: url(<?php _e(turl()); ?>assets/img/wordpress.jpg);" class="skill-boxes wordpress d-flex flex-column align-items-center justify-content-center px-50">
                <h3>Website design with WordPress</h3>
                <span>WordPress Website Designer</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="websites" class="home-boxes">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-12">
              <h2 class="text-center box-title">
                My Websites
              </h2>
            </div>
            <div class="col-xl-3 col-md-6 col-12 everyshele">
              <div title="Shayan Blog" class="shwebeles">
                <a rel="noopener noreferrer" href="https://shayanweb.com/blog">
                  <img width="111" height="111" src="https://shayanweb.com/wp-content/themes/shayanweb/img/logos/home/shayan-blog.png" alt="Shayan Blog">
                </a>
                <div class="infos">
                  <a rel="noopener noreferrer" href="https://shayanweb.com/blog">
                    <h3>Shayan Blog</h3>
                    <p>Free web design tutorials and articles in text (+videos)</p>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12 everyshele">
              <div title="Shayan Academy" class="shwebeles">
                <a rel="noopener noreferrer" href="https://shayanweb.com/academy">
                  <img width="111" height="111" src="https://shayanweb.com/wp-content/themes/shayanweb/img/logos/home/ac.png" alt="Shayan Academy">
                </a>
                <div class="infos">
                  <a rel="noopener noreferrer" href="https://shayanweb.com/academy">
                    <h3>Shayan Academy</h3>
                    <p>
                      Web design and start online business courses
                    </p>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12 everyshele">
              <div title="Shayan Market" class="shwebeles">
                <a rel="noopener noreferrer" href="https://shayanweb.com/market">
                  <img width="111" height="111" src="https://shayanweb.com/wp-content/themes/shayanweb/img/logos/home/shayan-market.png" alt="Shayan Market">
                </a>
                <div class="infos">
                  <a rel="noopener noreferrer" href="https://shayanweb.com/market">
                    <h3>Shayan Market</h3>
                    <p>
                      A market of great WordPress and HTML themes
                    </p>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12 everyshele">
              <div title="Shayan WebDesign" class="shwebeles">
                <a rel="noopener noreferrer" href="https://shayanweb.com/start/#design">
                  <img width="111" height="111" src="https://shayanweb.com/wp-content/themes/shayanweb/img/logos/home/shayan-webdesign.png" alt="Shayan WebDesign">
                </a>
                <div class="infos">
                  <a rel="noopener noreferrer" href="https://shayanweb.com/start/#design">
                    <h3>Shayan WebDesign</h3>
                    <p>
                      Designing all kinds of news, store and educational websites
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="contact" class="bgf5 home-boxes">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-12">
              <h2 class="text-center box-title">
                Contact Me
              </h2>
            </div>
            <div class="col-sm-6 col-12">
              <div class="shayanfp-contact-box">
                <h3 class="contact-list-title">Get in touch with me</h3>
                <ul class="ul-clear contact-list">
                  <li>
                    <a rel="noopener noreferrer" class="d-block" target="_blank" href="mailto:shayanfp@shayanweb.com">
                      <i class="far fa-envelope"></i>
                      My email:
                      <span class="d-block d-lg-inline-block">shayanfp@shayanweb.com</span>
                    </a>
                  </li>
                  <li>
                    <a rel="noopener noreferrer" class="d-block" target="_blank" href="https://shayanweb.com/contact/">
                      <i class="far fa-list-alt"></i>
                      Contact us in ShayanWeb:
                      <span class="d-block d-lg-inline-block">shayanweb.com/contact</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-12">
              <div class="shayanfp-contact-box">
                <h3 class="contact-list-title">Social Networks</h3>
                <ul class="ul-clear contact-list">
                  <li>
                    <a rel="noopener noreferrer" class="d-block" target="_blank" href="https://www.instagram.com/shayanfpinsta/">
                      <i class="fab fa-instagram"></i>
                      My Instagram page:
                      <span class="d-block d-lg-inline-block">instagram.com/shayanfpinsta</span>
                    </a>
                  </li>
                  <li>
                    <a rel="noopener noreferrer" class="d-block" target="_blank" href="https://virgool.io/@shayanfpblog/">
                      <i class="fas fa-feather"></i>
                      My Virgool blog:
                      <span class="d-block d-lg-inline-block">virgool.io/@shayanfpblog</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php
        return ob_get_clean();
    }else{
        ob_start();
    ?>
    <main class="home-padding-top" id="main">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-8 col-12 order-2 order-md-1">
            <h2 class="text-center text-md-right my-name-is">شایان فرهنگ پژوه</h2>
            <span class="text-center text-md-right d-block i-am-who">پژوهشگر، نویسنده و بنیان‌گذار شایان وب<br>مهندس صنایع، طراح سایت و توسعه‌دهنده‌ی وب</span>
            <a class="d-block sh-btn" href="#about">درباره‌ی من</a>
          </div>
          <div class="col-md-4 col-12 order-1 order-md-2">
            <img width="350" height="496" style="height:auto" class="left-img" src="<?php _e(turl()); ?>assets/img/shayanfp-pic.jpg" alt="شایان فرهنگ پژوه">
          </div>
        </div>
        <div id="book" class="herodiv herow row mx-auto home-boxes d-flex align-items-center">
          <div class="col-md-5 col-12">
            <div class="hero-img">
              <img width="295" height="295" style="height:auto" src="https://shayanweb.com/wp-content/uploads/2022/05/hooshmandsazi-amoozesh-book.png" alt="کتاب هوشمندسازی آموزش">
            </div>
          </div>
          <div class="col-md-7 col-12">
            <div class="hero-intro">
              <h2 class="text-center text-md-right"><small class="d-block">کتاب</small> هوشمندسازی آموزش</h2>
              <p class="text-center text-md-right">راهنمای شروع کسب‌وکار آموزشی و برگزاری دوره‌های آموزشی موفق</p>
                <a class="d-block sh-btn" href="https://shayanweb.com/hooshmandsazi-amoozesh-book/">خرید کتاب با ارسال پستی رایگان!</a>
            </div>
          </div>
        </div>
        <div id="about" class="row home-boxes d-flex align-items-center">
          <div class="col-12">
            <div class="paragraph">
              <section id="my-story">
              <h2 class="text-center box-title">
                داستان من
                </h2>
                <article>
                    <p>یادم می‌آید 6 ساله بودم که دیدم در یک روزنامه نوشته بود: «طراحی سایت». به سمت پدرم دویدم و همان‌طور که روزنامه را در دست گرفته بودم، گفتم: می‌خواهم یک وبسایت داشته باشم! پدرم سایت <a rel="noopener noreferrer" href="https://w3schools.com" rel="_blank">w3schools.com</a> را به من معرفی کردند و با کمک آن، کدنویسی HTML و CSS را یاد گرفتم. هنوز هم دفترچه‌ای که کدها را در آن یادداشت می‌کردم را دارم؛ دفترچه‌ای که با دست‌خط آن روزهایم نوشته شده است!</p>
                    <figure><img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/Shayan-HTML-Learning-7years-old.jpg" alt="دفترچه‌ی یادگیری کدنویسی HTML شایان در کودکی"><figcaption>عکس از دفترچه‌ی یادگیری کدنویسی HTML شایان در 7 سالگی</figcaption></figure>
                    <p>از 4، 5 سالگی، علاقه‌ی زیادی به کار با کامپیوتر داشتم. کار با Paint در ویندوز XP و گوش دادن به موسیقی از کارهای مورد علاقه‌ام با کامپیوتر بود!</p>
                    <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/early-life-shayan-20130902.jpg" alt="شایان فرهنگ پژوه در کودکی">
                    <p>از آن‌جایی که تحصیلات پدر و مادرم مهندسی برق بود، آن‌ها مشوق من شدند و علاقه‌ی بیشتری به تکنولوژی و کنجکاوی در این زمینه‌ها پیدا کردم. کلاس اول دبستان بودم که با کمک پدرم در وبلاگ‌سازهای مختلف، اولین وبلاگ‌های خودم را راه‌اندازی کردم. نه‌تنها نوشتن در وبلاگ برایم جذاب بود، بیشتر از هر چیز به آن‌چه در پشت‌صحنه اتفاق می‌افتاد فکر می‌کردم؛ اینکه دقیقاً چطور کار می‌کند. و این موضوع برایم بسیار جذاب و هیجان‌انگیز بود!</p>
                    <figure><img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/shayanfp-blog-ir.jpg" alt="عکس از وبلاگ‌نویسی شایان فرهنگ پژوه"><figcaption>عکس از یکی از وبلاگ‌های قدیمی شایان!</figcaption></figure>
                    <p>همیشه رویاپردازی راه‌اندازی یک شرکت و کسب‌وکار برای خودم را داشتم. حتی روی در اتاقم، نام شرکت خودم را می‌نوشتم و بنر معرفی آن را روی کاغذ می‌کشیدم. همیشه به داشتن یک شرکت برای خودم، وقتی بزرگ‌تر شوم، فکر می‌کردم.</p>
                    <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/early-life-shayan-DSC00747.jpg" alt="شایان فرهنگ پژوه در کودکی">
                    <p>چند سال بعد وقتی 9 سال داشتم، با وردپرس آشنا شدم. وردپرس یک سیستم مدیریت محتوا است که برای راه‌اندازی وبسایت استفاده می‌شود. به‌قدری با وردپرس کار کردم تا در آن حرفه‌ای شدم؛ در واقع آن را بصورت خودآموز یاد گرفتم. چندین سایت مختلف روی لوکال هاست یا با هاست رایگان برای خودم راه می‌انداختم و کارهای مختلفی را انجام می‌دادم. اولین وبسایتی که با هاست و دامنه‌ی واقعی ساختم، سایتی برای شرکت دایی‌ام بود!</p>
                    <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/shayan-class-project-IMG_0459.jpg" alt="ارائه پروژه انیمیشن سازی">
                    <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/shayan-project-20131101_181528.jpg" alt="ساخت استاپ موشن با رهبری و ایده شایان">
                    <p>در حدود سال 1395، چند ایده‌ی مختلفی که داشتم را اجرا کردم. یک عروسک نمدی با طرح کتاب داستان کودکان مثل کتاب شیمو، فرانکلین و… ساختم که یک اسپیکر بلوتوثی داخلش قرار داده بودم و برای کودکان، داستان کتاب را تعریف می‌کرد. در زمینه‌ی گردشگری یک اپلیکیشن موبایل راه‌اندازی کردم و پک آشپزی آشپز کوچولو را برای کودکان ساختم که مواد مورد نیاز، ملاقه، دستورالعمل و... را شامل می‌شد. اگرچه در حال حاضر در این زمینه‌ها فعالیت نمی‌کنم؛ اما تجربه‌ی آن روزها پایه‌گذار ایده‌های بعدی من شد.</p>
                    <div class="grid-pics">
                    <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/shayan-cookpack-20170301_130519.jpg" alt="ایده پکیج آشپزی آشپز کوچولو">
                    <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/shayan-present-ideas.jpg" alt="معرفی ایده عروسک قصه گو با طرح شخصیت داستان">
                    <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/shayan-present.jpg" alt="شایان فرهنگ پژوه در کودکی">
                    <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/shayan-story-teller-felt-doll.jpg" alt="ایده عروسک قصه گو با طرح شخصیت داستان">
                    </div>
                    <p>پس از راه‌اندازی چند وبسایت مختلف برای ایده‌های خودم و اطرافیان و کسب تجربه‌های بیشتر، در سال 1397 یک پیج اینستاگرام ساختم که در آن آموزش وردپرس می‌دادم. در این پیج اینستاگرام، روزانه چندین پست قرار می‌دادم و با جستجوی کلمه‌ی «وردپرس» در اینستاگرام، اولین نتیجه، صفحه‌ی اینستاگرام من بود. از این پیج اینستاگرام (و وبسایتی که چند ماه بعد هم راه‌اندازی کردم) مشتریان طراحی سایت به دست آوردم.</p>
                    <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/shayan-2019.jpg" alt="شایان فرهنگ پژوه در 12 سالگی">
                    <p>در سن 12-13 سالگی، همیشه جوان‌ترین شرکت‌کننده‌ی همایش‌ها و سمینارهای مختلف بودم!</p>
                    <img style="width:900px" class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/hamayeshha-shayan12-13.jpg" alt="شرکت شایان فرهنگ پژوه در همایش‌ها در 12-13 سالگی">
                    <p>کتاب‌هایی که می‌خواندم و مطالعاتی که در زمینه‌ی کسب‌وکار و بازاریابی اینترنتی داشتم را به‌صورت عملی روی این کسب‌وکار و وبسایت آن اجرا می‌کردم و سعی می‌کردم با ابزارهای مختلف، برنامه‌ریزی مناسبی برای کسب‌وکارم داشته باشم. در ادامه، مقالات آموزشی، ویدیوها و دوره‌های آموزشی مختلفی را در وبسایت خودم به اشتراک گذاشتم.</p>
                    <div class="grid-pics m-grid-pics">
                        <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/iranserver-interview-age-12.jpg" alt="مصاحبه شرکت ایران سرور با شایان فرهنگ پژوه در 12 سالگی">
                        <img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/webinar-1398.jpg" alt="برگزاری وبینار توسط شایان فرهنگ پژوه آموزش طراحی سایت سال 1398">
                    </div>
                    <p>اواخر پاییز ماه 1398 تصمیم گرفتم یک ریبرندینگ برای کسب‌وکارم انجام بدهم. این ریبرندینگ شامل تغییر نام برند، تغییر در خدمات و مجموعه‌ها و... می‌شد. در خردادماه 1399، طراحی و برنامه‌نویسی وب‌سایت <a href="https://shayanweb.com" rel="_blank">شایان وب</a> را تمام کردم و رونمایی شد.</p>
                    <img class="lozad w-100" data-src="<?php _e(turl()); ?>assets/img/story/shayanwebcom.jpg" alt="وبسایت شایان وب">
                    <p>من همیشه عاشق آموزش دادن بودم! درباره یاد دادن و مخصوصا «آموزش آنلاین» تحقیقات و بررسی‌های زیادی انجام داده‌ام. همکاری با مدرسان و مجموعه‌های آموزشی و همچنین برگزاری وبینارهای آنلاین و دوره‌های آموزشی در زمینه‌های کسب‌وکار اینترنتی، برنامه‌نویسی وب، طراحی سایت و بازاریابی، یکی از ارزشمندترین فعالیت‌ها و تجربیات من بوده است.</p>
                    <p>در سال 1398 <a href="https://shayanweb.com/market/hamyarlearn/" target="_blank">قالب وردپرس آموزش آنلاین همیار لرن</a> را برنامه‌نویسی کردم که به مدرسان آنلاین و مجموعه‌های آموزشی کمک می‌کند دوره‌های آموزشی خود را به‌صورت آنلاین به مخاطبان‌شان ارائه دهند. این قالب وردپرس همچنان بروزرسانی می‌شود و تاکنون نزدیک به هزار نفر آن را خریداری کرده‌اند.</p>
                    <img class="lozad w-100" data-src="<?php _e(turl()); ?>assets/img/story/hamyarlearn-wordpress-theme.jpg" alt="قالب وردپرس آموزش آنلاین همیار لرن">
                    <p>از بچگی، پدر و مادرم من را به خواندن رمان‌ها و شعرهای ارزشمند فارسی تشویق می‌کردند و به خواندن کتاب‌های مختلف بسیار علاقه‌مند بودم. بعد از آن، به کتاب‌های حوزه‌ی کسب‌وکار، توسعه فردی و بازاریابی علاقه‌مند شدم. براساس همین مطالعاتم، همیشه نوشتن کتاب را در سر داشتم.</p>
                    <p>برای اشتراک‌گذاری تجربیات واقعی‌ام در زمینه‌ی کسب‌وکار و آموزش و همچنین تجربه‌ی همکاری با مجموعه‌های آموزشی و افراد مختلف، نوشتن کتاب را برای مخاطبان مفید دانستم. بر همین اساس در 15 سالگی نوشتن <a href="https://shayanweb.com/hooshmandsazi-amoozesh-book/" target="_blank">کتاب هوشمندسازی آموزش</a> را آغاز کردم. نگارش این کتاب، یک سال و نیم طول کشید تا در نهایت به ثبت کتابخانه‌ی ملی ایران رسید و به چاپ رسید. مخاطبان کتاب هوشمندسازی آموزش، متخصصانی هستند که می‌خواهند تخصص خود را با طراحی و برگزاری دوره‌های آموزشی، به شکل یک کسب‌وکار به افراد ارائه دهند. اصول راه‌اندازی و توسعه‌ی کسب‌وکار آموزشی، طراحی محتوای آموزشی و بازاریابی اینترنتی با روش‌های نوین، از مطالب اصلی این کتاب است. داشتن یک اثر مثبت روی دیگران با نوشتن این کتاب، بسیار برای من ارزشمند بوده است.</p>
                    <img  class="lozad wle" data-src="https://shayanweb.com/wp-content/uploads/2023/06/hooshmandsazi-amoozesh-book-room.jpg" alt="کتاب هوشمندسازی آموزش">
					<figure class="row">
						<div class="col-12">
							<img class="lozad w-100" data-src="<?php _e(turl()); ?>assets/img/Shayan-Farhang-Pazhooh-Value-Creation-Seminar.jpg" alt="شایان فرهنگ پژوه در سمینار خلق ارزش">
                        	<img class="lozad w-100" data-src="<?php _e(turl()); ?>assets/img/Shayan-Farhang-Pazhooh-Entrepreneurship-Seminar.jpg" alt="شایان فرهنگ پژوه در سمینار کارآفرینی و شروع کسب‌وکار">
                        </div>
						<div class="col-12"><figcaption>شایان فرهنگ پژوه در سمینارهایش</figcaption></div>
                    </figure>
                    <p>در کنار راه‌اندازی، مدیریت و توسعه‌ی کسب‌وکار، نوشتن کتاب و دیگر فعالیت‌هایم، همیشه تحصیلاتم اهمیت زیادی برای من داشته است. در دبیرستان، رشته‌ی ریاضی فیزیک خواندم و با کسب رتبه‌ی برتر در فعالیت‌های مختلف، مورد تقدیر قرار گرفتم.</p>
                    <figure style="width:700px"><a rel="nofollow" target="_blank" href="<?php _e(turl()); ?>assets/img/story/highschool-appreciation-letters-full.jpg"><img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/highschool-appreciation-letters.jpg" alt="تقدیر از شایان فرهنگ پژوه برای رتبه‌ی برتر تحصیلی"></a><figcaption>برخی تقدیرنامه‌های شایان فرهنگ پژوه در دوران دبیرستان؛ برای پذیرفته‌شدن در المپیاد کشوری تفکر و کارآفرینی، کسب رتبه‌ی ممتاز درسی در دبیرستان با معدل بالای 19، کسب رتبه‌ی ممتاز چند دوره مسابقات فرهنگی و هنری در رشته‌های مختلف در ناحیه و استان</figcaption></figure>
                    <figure class="row">
                        <div class="col-md-7 col-12">
                            <img class="lozad w-100" data-src="<?php _e(turl()); ?>assets/img/story/appreciation-award402.jpg" alt="تقدیر سال تحصیلی 1402-1403">
                        </div>
                        <div class="col-md-5 col-12">
                            <img class="lozad w-100" data-src="<?php _e(turl()); ?>assets/img/story/appreciation-award401.jpg" alt="تقدیر سال تحصیلی 1401-1402">
                        </div>
                        <div class="col-12"><figcaption>تقدیر از شایان فرهنگ پژوه برای کسب رتبه‌ی ممتاز درسی در دبیرستان با معدل بالای 19 سال تحصیلی 1402-1401<br>و رتبه‌ی اول #1 درسی با معدل بالای 19 در سال تحصیلی 1402-1403</figcaption></div>
                    </figure>
					<p>با توجه به علاقه‌ی همیشگی‌ام به ساختن و بهینه‌سازی سیستم‌ها، از کدنویسی اولین وب‌سایت‌ها تا مدیریت فرآیندهای کسب‌وکار در شایان وب، رشته‌ی مهندسی صنایع یک انتخاب طبیعی و آگاهانه برایم بود. این رشته، در واقع، زبان علمی و آکادمیک همان مفاهیمی است که من به صورت تجربی با آن‌ها زندگی کرده‌ام: طراحی سیستم‌های کارآمد، حل مسائل پیچیده، مدیریت و استفاده‌ی بهینه از منابع. اکنون با افتخار در <strong>دانشگاه صنعتی اصفهان</strong>، یکی از برترین دانشگاه‌های ایران، این فرصت را دارم تا فعالیت آکادمیک و علمی خود را در زمینه‌ی عملکرد سیستم‌ها پیش ببرم. این نگاه پژوهش‌محور، که پیش از این در تألیف کتاب «هوشمندسازی آموزش» و مقالات آموزشی دیگر خود آن را تجربه کرده بودم، اکنون در قالب پروژه‌های آکادمیک پژوهشی ادامه پیدا کرده است. از این رو، با جدیت پروژه‌های پژوهشی و تحقیقاتی در حوزه‌ی بهینه‌سازی و حیطه‌های علاقه‌ام را دنبال می‌کنم. بسیار خوشحالم اعلام کنم اولین مقاله‌ی علمی-پژوهشی‌ من نیز اخیراً برای یک ژورنال معتبر بین‌المللی (Q1) ارسال شده است.</p>
					<figure style="width:700px"><img class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/Shayan-Farhang-Pazhooh-at-IUT.jpg" alt="شایان فرهنگ پژوه در دانشگاه صنعتی اصفهان"><figcaption>شایان فرهنگ پژوه در دانشگاه صنعتی اصفهان</figcaption></figure>
					</figure>
                    <p>در آینده، دوست دارم تأثیرگذاری جهانی داشته باشم. یک شرکت بین‌المللی در حوزه‌ی تکنولوژی تأسیس کنم، برای افراد بسیاری در سراسر جهان مفید واقع شوم و دوست دارم تیم بزرگ‌تری برای فعالیت‌هایم تشکیل دهم.</p>
                    <p>همانطور که چشمه‌ی امید🌊 از اعماق قلبم🫀 می‌جوشد و ذهنم افق‌هایی روشن⚡ و آینده‌ای پرنور🕯️ را به تصویر می‌کشد، نیرویی شگفت‌انگیز و انگیزه‌ای وصف‌ناپذیر در من شعله‌ور🔥 می‌شود تا مرا به سوی آینده‌ای روشن‌تر بکشاند…</p>
                    <img style="width:900px" class="lozad" data-src="<?php _e(turl()); ?>assets/img/story/horizon.jpg" alt="آینده‌ی روشن">
                </article>
              </section>
            </div>

          </div>
        </div>
    </div>
    <div id="newspaper"><div class="container">
        <div class="newspaper herodiv row mx-auto home-boxes d-flex align-items-center">
          <div class="col-md-5 col-12">
            <div class="hero-img">
              <img width="350" height="496" style="height:auto" src="<?php _e(turl()); ?>assets/img/esfahan-emrooz-newspaper.jpg" alt="مصاحبه‌ی روزنامه‌ی اصفهان امروز با شایان فرهنگ پژوه">
            </div>
          </div>
          <div class="col-md-7 col-12">
            <div class="hero-intro">
              <h2 class="text-center text-md-right">مصاحبه‌ی روزنامه‌ی اصفهان امروز<br>با شایان فرهنگ پژوه</h2>
              <p class="text-center text-md-right">«به دنبال تاثیرگذاری جهانی هستم: گفت‌وگو با شایان فرهنگ پژوه، نوجوان موفق اصفهانی»<br>داستان شایان فرهنگ پژوه را در مصاحبه‌ی روزنامه‌ی اصفهان امروز بخوانید:</p>
                <a rel="nofollow noopener noreferrer" target="_blank" class="d-inline-block sh-btn" href="<?php _e(turl().'assets/EsfahanEmroozNewspaper-Shayan-Farhang-Pazhooh-Interview.pdf') //https://esfahanemrooz.ir/fa/tiny/news-914811 ?>">دانلود روزنامه‌ی اصفهان امروز شماره‌ی 4837</a>
                <a rel="nofollow noopener noreferrer" target="_blank" class="d-inline-block sh-btn" href="https://esfahanemrooz.ir/fa/tiny/news-914866">خواندن مصاحبه در بخش اخبار ویژه</a>
            </div>
          </div>
        </div>
    </div></div>
    <div class="container">
        <div id="testimonials" class="row mx-auto home-boxes d-flex align-items-center">
            <div class="col-12">
                <h2 class="text-center box-title">نظر برخی متخصصان؛ <span class="d-md-inline d-block" style="font-weight:inherit">درباره‌ی شایان فرهنگ پژوه</span></h2>
            </div>
            <div class="col-md-6 col-12"><div class="iframe_embed_frame"><span style="display:block;padding-top:56.7%"></span><iframe src="https://www.aparat.com/video/video/embed/videohash/thf728k/vt/frame"  allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe></div></div>
            <div class="col-md-6 col-12"><div class="iframe_embed_frame"><span style="display:block;padding-top:56.7%"></span><iframe src="https://www.aparat.com/video/video/embed/videohash/Ud1fm/vt/frame"  allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe></div></div>
        </div>
      </div>

	<div id="research" class="home-boxes">
	<div class="container">
		<div class="row justify-content-center">
		<div class="col-lg-10">
			<h2 class="text-center box-title">مقالات پژوهشی اخیر</h2>
			<div class="publication-box">
			<div class="publication-details">
				<h3>An Efficient Continuous-Time MILP for Integrated Aircraft Hangar Scheduling and Layout</h3>
				<div class="publication-meta">
				<i class="fas fa-flask"></i>
				مقاله ارسال شده به ژورنال: <strong>Computers & Operations Research</strong> (Q1)
				</div>
				<p class="publication-abstract">This preprint introduces a novel continuous-time MILP model that solves the complex aircraft hangar scheduling problem to optimality for up to 25 aircraft in seconds. By outperforming traditional heuristic methods, our approach provides a scalable decision-support framework with significant economic benefits for MRO operations.</p>
				<a rel="noopener noreferrer" target="_blank" href="https://doi.org/10.48550/arXiv.2508.02640" class="sh-btn sh-btn-research">
				<i class="fas fa-file-alt" style="margin-left: 8px;"></i>
				مشاهده‌ی Preprint مقاله در arXiv
				</a>
			</div>
			</div>
		</div>
		</div>
	</div>
	</div>

      <div id="skills" class="bgf5 home-boxes">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-12">
              <h2 class="text-center box-title">
                مهارت‌های من
              </h2>
            </div>
            <div class="col-lg-4 col-md-6">
              <div style="background-image: url(<?php _e(turl()); ?>assets/img/frontend.jpg);" class="skill-boxes frontend d-flex flex-column align-items-center justify-content-center px-50">
                <h3>کدنویسی فرانت اند وب</h3>
                <span>HTML, CSS, Bootstrap</span>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div style="background-image: url(<?php _e(turl()); ?>assets/img/wordpress-backend.jpg);" class="skill-boxes wordpress-backend d-flex flex-column align-items-center justify-content-center px-50">
                <h3>برنامه‌نویسی PHP وردپرس</h3>
                <span>WordPress Back-End Developer</span>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div style="background-image: url(<?php _e(turl()); ?>assets/img/wordpress.jpg);" class="skill-boxes wordpress d-flex flex-column align-items-center justify-content-center px-50">
                <h3>طراحی سایت با وردپرس</h3>
                <span>WordPress Website Designer</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="websites" class="home-boxes">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-12">
              <h2 class="text-center box-title">
                مجموعه‌های من
              </h2>
            </div>
            <div class="col-xl-3 col-md-6 col-12 everyshele">
              <div title="شایان بلاگ" class="shwebeles">
                <a rel="noopener noreferrer" href="https://shayanweb.com/blog">
                  <img width="111" height="111" src="https://shayanweb.com/wp-content/themes/shayanweb/img/logos/home/shayan-blog.png" alt="شایان بلاگ">
                </a>
                <div class="infos">
                  <a rel="noopener noreferrer" href="https://shayanweb.com/blog">
                    <h3>شایان بلاگ</h3>
                    <p>مطالب آموزشی رایگان در زمینه&zwnj;ی طراحی سایت و کسب و کار</p>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12 everyshele">
              <div title="شایان آکادمی" class="shwebeles">
                <a rel="noopener noreferrer" href="https://shayanweb.com/academy">
                  <img width="111" height="111" src="https://shayanweb.com/wp-content/themes/shayanweb/img/logos/home/ac.png" alt="شایان آکادمی">
                </a>
                <div class="infos">
                  <a rel="noopener noreferrer" href="https://shayanweb.com/academy">
                    <h3>شایان آکادمی</h3>
                    <p>
                      دوره&zwnj;های آموزشی آنلاین راه اندازی کسب و کار اینترنتی
                    </p>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12 everyshele">
              <div title="شایان مارکت" class="shwebeles">
                <a rel="noopener noreferrer" href="https://shayanweb.com/market">
                  <img width="111" height="111" src="https://shayanweb.com/wp-content/themes/shayanweb/img/logos/home/shayan-market.png" alt="شایان مارکت">
                </a>
                <div class="infos">
                  <a rel="noopener noreferrer" href="https://shayanweb.com/market">
                    <h3>شایان مارکت</h3>
                    <p>
                      مارکت ایرانی قالب&zwnj;های وردپرس، HTML و دموهای درون&zwnj;ریز وردپرس
                    </p>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12 everyshele">
              <div title="شایان وب دیزاین" class="shwebeles">
                <a rel="noopener noreferrer" href="https://shayanweb.com/start/#design">
                  <img width="111" height="111" src="https://shayanweb.com/wp-content/themes/shayanweb/img/logos/home/shayan-webdesign.png" alt="شایان وب دیزاین">
                </a>
                <div class="infos">
                  <a rel="noopener noreferrer" href="https://shayanweb.com/start/#design">
                    <h3>شایان وب‌دیزاین</h3>
                    <p>
                      خدمات طراحی سایت و فروشگاه اینترنتی بصورت حرفه‌ای
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="contact" class="bgf5 home-boxes">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-12">
              <h2 class="text-center box-title">
                تماس با من
              </h2>
            </div>
            <div class="col-sm-6 col-12">
              <div class="shayanfp-contact-box">
                <h3 class="contact-list-title">اطلاعات تماس</h3>
                <ul class="ul-clear contact-list">
                  <li>
                    <a class="d-block" target="_blank" href="mailto:shayanfp@shayanweb.com">
                      <i class="far fa-envelope"></i>
                      ایمیل من:
                      <span class="d-block d-lg-inline-block">shayanfp@shayanweb.com</span>
                    </a>
                  </li>
                  <li>
                    <a rel="noopener noreferrer" class="d-block" target="_blank" href="https://shayanweb.com/contact/">
                      <i class="far fa-list-alt"></i>
                      فرم ارتباط با ما در شایان وب:
                      <span class="d-block d-lg-inline-block">shayanweb.com/contact</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-12">
              <div class="shayanfp-contact-box">
                <h3 class="contact-list-title">شبکه‌های اجتماعی</h3>
                <ul class="ul-clear contact-list">
                  <li>
                    <a rel="noopener noreferrer" class="d-block" target="_blank" href="https://www.instagram.com/shayanfpinsta/">
                      <i class="fab fa-instagram"></i>
                      اینستاگرام من:
                      <span class="d-block d-lg-inline-block">instagram.com/shayanfpinsta</span>
                    </a>
                  </li>
                  <li>
                    <a rel="noopener noreferrer" class="d-block" target="_blank" href="https://virgool.io/@shayanfpblog/">
                      <i class="fas fa-feather"></i>
                      بلاگ من در ویرگول:
                      <span class="d-block d-lg-inline-block">virgool.io/@shayanfpblog</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php
    return ob_get_clean();
    }
}



function shayanfp_404(){
    ob_start();
    ?>
    
    <!Doctype html>

<html lang="fa">

<head>
  <title>صفحه یافت نشد | شایان فرهنگ پژوه</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://shayanweb.com/wp-content/themes/shayanweb/css/bootstrap-rtl.min.css?ver=1.0">
  <!-- Font: IRANsans -->
  <link rel="stylesheet" href="<?php _e(turl()); ?>assets/css/iransans.min.css?ver=1.0">
  <!-- Loader -->
  <link rel="stylesheet" href="<?php _e(turl()); ?>assets/css/loader.css?ver=1.0">
  <!-- Style.css File -->
  <link rel="stylesheet" href="<?php _e(turl()); ?>assets/css/style.css?ver=1.2.5">
  <!-- Responsive The website -->
  <link rel="stylesheet" href="<?php _e(turl()); ?>assets/css/responsive.css?ver=1.1.2">
  <link rel="icon" href="https://shayanfp.ir/assets/img/Shayan-Farhang-Pazhooh.jpg">
  <meta name="theme-color" content="#1DE9B6" />

  <style>
    .page-404{text-align:center}
    .page-404-bg{background:#f5f5f5;border-radius:10px;padding:40px 15px}
    .page-404-container{width:550px;max-width:100%;margin:auto;padding:10px}
    .page-404 h1{font-size:30px;line-height:1.8}
    .page-404 p{line-height:2.3;margin:0}
    @media (min-width: 576px){
      .page-404-container{padding:15px}
      .page-404-bg{padding:55px 50px}
    }
  </style>
  
</head>

<body>

  <div class="allcontentsh">
    <main class="home-padding-top" id="main">
      <div class="container">
        <div class="page-404-container">
          <div class="page-404-bg">
            <div class="row page-404 d-flex align-items-center">
              <div class="col-12">
                <h1>خطای 404 - صفحه یافت نشد!</h1>
                <p>
                  سلام! سایت شخصی من همون یک صفحه‌ی اصلی هست که برای سبک بودنش کدنویسی‌اش کردم؛ دنبال چیز دیگه‌ای نگردید! (:<br>
                  <a class="sh-btn d-block d-sm-inline-block" href="<?php _e(turl()); ?>">برگردید به صفحه‌ی اصلی</a> <span class="d-block d-sm-inline-block">تا بیشتر با من آشنا بشید😊💚</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer id="footer">
      <div class="container">
        <div class="p-10-0">
          <div class="row">
            <div class="col-12">
              <p class="paragraph">
                تمامی حقوق برای
                <a href="<?php _e(turl()); ?>">شایان فرهنگ پژوه</a>
                محفوظ است.
                |
                طراحی شده در
                <a rel="noopener noreferrer" href="https://shayanweb.com/?utm_source=shayanfpir&utm_medium=footerlink&utm_campaign=footerintro&utm_content=designedbyshweb">
                  شایان وب
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>


  <!-- jQuery first, then Bootstrap JS -->
  <script src="<?php _e(turl()); ?>assets/js/jquery-1.12.4.min.js"></script>
  <script src="https://shayanweb.com/wp-content/themes/shayanweb/js/pace.min.js?ver=1.0"></script>

</body>

</html>

    
    <?php
    return ob_get_clean();
}



function shayanfp_(){
    ob_start();
    ?>
    <?php
    return ob_get_clean();
}
