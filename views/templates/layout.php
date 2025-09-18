<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
?>
<?php
    require VIEWS.'components/alert.php';
?>
<!DOCTYPE html>
<!-- This site was created in Webflow. https://webflow.com -->
<!-- Last Published: Mon Sep 23 2024 02:29:26 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="jobhuntly-template.webflow.io" data-wf-page="6480217dd2b60074b15929cd" data-wf-site="6480217dd2b60074b15929c5" data-wf-status="1" lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Home V1 | Jobhuntly - Webflow HTML Website Template</title>
        <meta content="Discover a great platform for job seekers eager to reach new career heights and fuel their passion for startups. Start your journey towards a fulfilling career today." name="description"/>
        <meta content="Home V1 | Jobhuntly - Webflow HTML Website Template" property="og:title"/>
        <meta content="Discover a great platform for job seekers eager to reach new career heights and fuel their passion for startups. Start your journey towards a fulfilling career today." property="og:description"/>
        <meta content="Home V1 | Jobhuntly - Webflow HTML Website Template" property="twitter:title"/>
        <meta content="Discover a great platform for job seekers eager to reach new career heights and fuel their passion for startups. Start your journey towards a fulfilling career today." property="twitter:description"/>
        <meta property="og:type" content="website"/>
        <meta content="summary_large_image" name="twitter:card"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="Webflow" name="generator"/>
        <link href="<?=SCRIPTS.'css'.DIRECTORY_SEPARATOR.'jobhuntly-template.webflow.b956d1fb2.min.css'?>" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/64c158c6e58ab54051257505_Jobhuntly%20-%20Favicon.png" rel="shortcut icon" type="image/x-icon"/>
        <link href="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/64c158c95e92d9ea81c6207d_Jobhuntly%20-%20Webclip.png" rel="apple-touch-icon"/>
        <style>
            * {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
        </style>
        <meta name="robots" content="noindex">
    </head>
    <body class="body">
        <?php if ($_GET['url'] !== 'login' && $_GET['url'] !== 'signup'):?>
            <div data-animation="default" class="navbar navbar-transparent w-nav" data-easing2="ease" data-easing="ease-in" data-collapse="medium" data-w-id="07b0e180-56f6-a47a-5992-f2a52cacf774" role="banner" data-duration="400" data-doc-height="1">
                <div class="container w-container">
                    <div class="navbar-wrap">
                        <a href="/fortime" class="navbar-brand w-nav-brand">
                            <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'6480c35745aef364b9b9698d_Brand%20Logo.png'?>" loading="eager" alt="" class="navbar-brand-image"/>
                        </a>
                        <nav role="navigation" class="nav-menu w-nav-menu">
                            <div class="w-layout-vflex nav-menu-wrap">
                                <a href="/fortime/find-jobs" class="nav-link w-nav-link">Find Jobs</a>
                                <a href="/fortime/browse-companies" class="nav-link w-nav-link">Browse Companies</a>
                                <div class="navbar-buttons-mobile">
                                    <a href="/fortime/signup" class="button w-button">Sign Up</a>
                                    <a href="/fortime/login" class="button button-outline w-button">Login</a>
                                </div>
                            </div>
                        </nav>
                        <div class="navbar-button">
                            <div class="navbar-button-inner">
                                <a href="/fortime/login" class="button button-text-only w-button">Login</a>
                                <div class="vertical-divider"></div>
                                <a href="/fortime/signup" class="button w-button">Sign Up</a>
                            </div>
                        </div>
                        <div class="menu-button w-nav-button">
                            <div class="svg-icon _20x20 w-embed">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.8337 13.3333H2.50033C2.27931 13.3333 2.06735 13.4211 1.91107 13.5774C1.75479 13.7337 1.66699 13.9457 1.66699 14.1667C1.66699 14.3877 1.75479 14.5996 1.91107 14.7559C2.06735 14.9122 2.27931 15 2.50033 15H10.8337C11.0547 15 11.2666 14.9122 11.4229 14.7559C11.5792 14.5996 11.667 14.3877 11.667 14.1667C11.667 13.9457 11.5792 13.7337 11.4229 13.5774C11.2666 13.4211 11.0547 13.3333 10.8337 13.3333ZM2.50033 6.66667H17.5003C17.7213 6.66667 17.9333 6.57887 18.0896 6.42259C18.2459 6.26631 18.3337 6.05435 18.3337 5.83333C18.3337 5.61232 18.2459 5.40036 18.0896 5.24408C17.9333 5.0878 17.7213 5 17.5003 5H2.50033C2.27931 5 2.06735 5.0878 1.91107 5.24408C1.75479 5.40036 1.66699 5.61232 1.66699 5.83333C1.66699 6.05435 1.75479 6.26631 1.91107 6.42259C2.06735 6.57887 2.27931 6.66667 2.50033 6.66667ZM17.5003 9.16667H2.50033C2.27931 9.16667 2.06735 9.25446 1.91107 9.41074C1.75479 9.56702 1.66699 9.77899 1.66699 10C1.66699 10.221 1.75479 10.433 1.91107 10.5893C2.06735 10.7455 2.27931 10.8333 2.50033 10.8333H17.5003C17.7213 10.8333 17.9333 10.7455 18.0896 10.5893C18.2459 10.433 18.3337 10.221 18.3337 10C18.3337 9.77899 18.2459 9.56702 18.0896 9.41074C17.9333 9.25446 17.7213 9.16667 17.5003 9.16667Z" fill="#25324B"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>
        <?php if ($_GET['url'] === 'login' || $_GET['url'] === 'signup'): ?>
            <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="auth-page-navbar w-nav scroll-component">
                <div class="container w-container">
                    <div class="auth-page-navbar-brand">
                        <a href="/fortime" class="navbar-brand w-nav-brand">
                            <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'6480c35745aef364b9b9698d_Brand%20Logo.png'?>" loading="eager" alt="" class="navbar-brand-image"/>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif ?>
            <?= $content ?>
        <section class="footer">
            <div class="container w-container">
                <div class="footer-wrapper">
                    <div class="footer-brand-wrapper">
                        <a href="#" class="footer-brand w-inline-block">
                            <img src="<?=SCRIPTS.'img'.DIRECTORY_SEPARATOR.'6480c86c97b286652875e71a_Brand%20Logo%20White.svg'?>" loading="lazy" alt=""/>
                        </a>
                        <div class="text-r text-neutral-20">Great platform for the job seeker that passionate about startups. Find your dream job easier.</div>
                    </div>
                    <div class="footer-content">
                        <div id="w-node-_24d858fb-2883-b386-0862-eb529e02b589-9e02b566" class="footer-block">
                            <div class="text-l weight-600 text-neutral-0">Get job notifications</div>
                            <div class="footer-content-notification-label">The latest job news, articles, sent to your inbox weekly.</div>
                            <div class="w-form">
                                <form id="email-form" name="email-form" data-name="Email Form" method="get" class="footer-subscribe-inner" data-wf-page-id="6480217dd2b60074b15929cd" data-wf-element-id="24d858fb-2883-b386-0862-eb529e02b58f">
                                    <input class="input-text footer-input-subscribe w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="Email Address" type="text" id="name-2"/>
                                    <input type="submit" data-wait="Please wait..." class="button w-button" value="Subscribe"/>
                                </form>
                                <div class="w-form-done">
                                    <div>Thank you! Your submission has been received!</div>
                                </div>
                                <div class="w-form-fail">
                                    <div>Oops! Something went wrong while submitting the form.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-divider"></div>
                <div class="footer-copyright-wrap">
                    <div class="footer-social-media">
                        <a href="#" class="footer-social-media-icon w-inline-block">
                            <div class="svg-icon w-embed">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.1" cx="16" cy="16" r="16" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.3517 22V16.6H18.99L19.2576 14.2H17.3517V13.0311C17.3517 12.4131 17.3674 11.8 18.2304 11.8H19.1045V10.0841C19.1045 10.0583 18.3537 10 17.5941 10C16.0078 10 15.0145 10.9943 15.0145 12.8201V14.2H13.2617V16.6H15.0145V22H17.3517Z" fill="white"/>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="footer-social-media-icon w-inline-block">
                            <div class="svg-icon w-embed">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.1" cx="16" cy="16" r="16" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7442 10.0736C12.7682 10.1177 11.9222 10.3565 11.239 11.0372C10.5535 11.7215 10.3179 12.5714 10.2737 13.538C10.2463 14.1413 10.0858 18.699 10.5512 19.8942C10.865 20.7006 11.483 21.3206 12.2962 21.6356C12.6757 21.7833 13.1088 21.8833 13.7442 21.9125C19.057 22.1531 21.0264 22.0221 21.8569 19.8942C22.0043 19.5154 22.1057 19.0824 22.1337 18.4481C22.3766 13.118 22.0944 11.9627 21.1684 11.0372C20.434 10.3041 19.5701 9.80505 13.7442 10.0736ZM13.7931 20.8405C13.2114 20.8143 12.8958 20.7173 12.6852 20.6357C12.1554 20.4297 11.7575 20.0331 11.5529 19.506C11.1985 18.5978 11.316 14.2843 11.3476 13.5863C11.3787 12.9026 11.5171 12.2778 11.9991 11.7954C12.5957 11.1999 13.3665 10.908 18.6149 11.145C19.2998 11.176 19.9257 11.3142 20.4089 11.7954C21.0056 12.3909 21.3015 13.1682 21.0604 18.4001C21.0342 18.9807 20.9369 19.2958 20.8552 19.506C20.3153 20.8907 19.0731 21.0829 13.7931 20.8405ZM18.6728 12.8138C18.6728 13.208 18.9932 13.5286 19.3887 13.5286C19.7843 13.5286 20.1053 13.208 20.1053 12.8138C20.1053 12.4195 19.7843 12.0992 19.3887 12.0992C18.9932 12.0992 18.6728 12.4195 18.6728 12.8138ZM13.1404 15.9928C13.1404 17.6817 14.512 19.051 16.204 19.051C17.896 19.051 19.2676 17.6817 19.2676 15.9928C19.2676 14.3038 17.896 12.9353 16.204 12.9353C14.512 12.9353 13.1404 14.3038 13.1404 15.9928ZM14.2155 15.9928C14.2155 14.897 15.1057 14.0079 16.204 14.0079C17.3024 14.0079 18.1925 14.897 18.1925 15.9928C18.1925 17.0892 17.3024 17.9785 16.204 17.9785C15.1057 17.9785 14.2155 17.0892 14.2155 15.9928Z" fill="white"/>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="footer-social-media-icon w-inline-block">
                            <div class="svg-icon w-embed">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.1" cx="16" cy="16" r="16" fill="white"/>
                                    <path d="M22.3343 14.36C22.6212 15.452 22.6212 16.544 22.3343 17.636C22.0473 18.7282 21.4959 19.6823 20.6798 20.4989C19.8638 21.3155 18.9101 21.8675 17.8189 22.1546C16.7276 22.4418 15.6364 22.4418 14.5451 22.1547C13.4537 21.8675 12.5 21.3156 11.6841 20.4991C10.8681 19.6825 10.3167 18.7282 10.0296 17.6361C9.74273 16.5441 9.74273 15.4522 10.0296 14.36C10.3166 13.268 10.8681 12.3137 11.6841 11.4971C12.5001 10.6805 13.4538 10.1286 14.5451 9.84143C15.6363 9.55423 16.7276 9.55439 17.8188 9.84149C18.9101 10.1287 19.8637 10.6807 20.6797 11.4972C21.4957 12.3138 22.0473 13.2681 22.3343 14.36ZM20.0238 19.8426C20.992 18.8737 21.5172 17.7074 21.5992 16.3439L21.4236 16.3147C21.3533 16.3029 21.2011 16.2971 20.9668 16.297C20.7326 16.297 20.4934 16.3136 20.2494 16.3468C20.0053 16.3801 19.6969 16.4483 19.324 16.552C18.9511 16.6555 18.5792 16.7912 18.2082 16.9593C18.587 18.2369 18.8526 19.4637 19.0048 20.6397C19.3875 20.4052 19.7271 20.1395 20.0238 19.8426ZM15.5555 21.3957C16.4026 21.4934 17.2225 21.3997 18.0151 21.1144C17.855 19.9853 17.5934 18.7702 17.2303 17.4691C15.7311 18.3443 14.3919 19.3718 13.2128 20.5518C13.9273 21.0166 14.7083 21.298 15.5555 21.3957ZM11.2125 18.1986C11.4799 18.8101 11.8558 19.3581 12.34 19.8427C12.3947 19.8974 12.4377 19.9364 12.4689 19.9599C13.8823 18.5454 15.3777 17.4123 16.9551 16.5606C16.838 16.1934 16.7248 15.873 16.6154 15.5994C16.5918 15.6074 16.5579 15.6239 16.5129 15.6493C16.4679 15.6748 16.4358 15.6934 16.4161 15.7052L16.1233 15.8458C15.9202 15.9396 15.6322 16.0402 15.2595 16.1477C14.8865 16.2549 14.4738 16.3517 14.0208 16.4377C13.5678 16.5236 13.0466 16.5587 12.4569 16.543C11.8674 16.5274 11.3014 16.4435 10.7587 16.2911C10.7938 16.9514 10.9452 17.5873 11.2125 18.1986ZM12.34 12.1534C11.4264 13.0677 10.9032 14.1774 10.7704 15.4823L10.7938 15.3299C11.2312 15.4941 11.7212 15.582 12.2639 15.5936C12.8065 15.6053 13.2859 15.5732 13.7017 15.497C14.1174 15.4207 14.5449 15.3133 14.9844 15.1747C15.4235 15.0359 15.7163 14.9346 15.8627 14.8699C16.0091 14.8054 16.1254 14.7537 16.2113 14.7146L16.2289 14.7089L16.2407 14.6971C15.6197 13.3102 14.9209 12.0636 14.1439 10.958C13.4566 11.2392 12.8555 11.6377 12.34 12.1534ZM17.3388 10.6852C16.6027 10.527 15.8715 10.5182 15.1455 10.6588C15.8833 11.7177 16.5492 12.884 17.1425 14.1577C18.0406 13.5014 18.7823 12.6457 19.3681 11.5909C18.7512 11.1455 18.0746 10.8435 17.3388 10.6852ZM20.018 12.2648C19.9867 12.3116 19.9467 12.3694 19.8978 12.4377C19.849 12.506 19.7895 12.5891 19.7192 12.6868C19.649 12.7844 19.5678 12.891 19.4761 13.0062C19.3844 13.1215 19.2848 13.2425 19.1773 13.3696C19.07 13.4966 18.9528 13.6294 18.826 13.7681C18.699 13.9069 18.5673 14.0446 18.4306 14.1813C18.2941 14.318 18.1465 14.4577 17.9885 14.6003C17.8306 14.743 17.6713 14.8746 17.5113 14.9958C17.5191 15.0271 17.5367 15.074 17.564 15.1365C17.5914 15.199 17.6128 15.246 17.6286 15.277C17.7183 15.5155 17.8179 15.7871 17.9271 16.0919C18.3059 15.9317 18.6885 15.8007 19.0752 15.699C19.4617 15.5976 19.7836 15.5292 20.0414 15.494C20.2992 15.4589 20.5559 15.4384 20.8116 15.4325C21.0674 15.4266 21.239 15.4286 21.327 15.4383C21.415 15.4481 21.4998 15.4588 21.5817 15.4705L21.5935 15.4706C21.4686 14.2047 20.9592 13.1126 20.0649 12.1945L20.018 12.2648Z" fill="white"/>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="footer-social-media-icon w-inline-block">
                            <div class="svg-icon w-embed">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.1" cx="16" cy="16" r="16" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.1394 21H19.1408V17.5005C19.1408 16.5405 18.7176 16.0049 17.9587 16.0049C17.1327 16.0049 16.6426 16.563 16.6426 17.5005V21H14.644V14.5H16.6426V15.231C16.6426 15.231 17.2696 14.1299 18.6826 14.1299C20.0961 14.1299 21.1394 14.9931 21.1394 16.7791V21ZM12.3666 13.4604C11.6926 13.4604 11.1465 12.9095 11.1465 12.23C11.1465 11.551 11.6926 11 12.3666 11C13.0401 11 13.5863 11.551 13.5863 12.23C13.5868 12.9095 13.0401 13.4604 12.3666 13.4604ZM11.1465 21H13.6447V14.5H11.1465V21Z" fill="white"/>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="footer-social-media-icon w-inline-block">
                            <div class="svg-icon w-embed">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.1" cx="16" cy="16" r="16" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8798 21C18.4049 21 20.8799 17.1522 20.8799 13.8158C20.8799 13.7062 20.8799 13.5975 20.8727 13.4892C21.3542 13.1323 21.7697 12.6892 22.1001 12.1821C21.6516 12.3864 21.1749 12.5204 20.6875 12.5795C21.2007 12.2638 21.5851 11.7679 21.7691 11.1827C21.2859 11.4768 20.7576 11.6844 20.2066 11.7958C19.2749 10.7792 17.7165 10.73 16.7254 11.6862C16.0869 12.3028 15.8152 13.2221 16.0137 14.099C14.0357 13.9968 12.1926 13.0381 10.943 11.461C10.2901 12.6148 10.624 14.0902 11.7051 14.8311C11.3136 14.8194 10.9304 14.7112 10.5881 14.5155V14.5476C10.5887 15.7494 11.4143 16.7842 12.5619 17.0223C12.1998 17.1238 11.8196 17.1385 11.4515 17.0653C11.7734 18.0942 12.6974 18.7989 13.7497 18.8192C12.8785 19.5219 11.8022 19.9035 10.6942 19.9023C10.4987 19.9016 10.3033 19.8899 10.1084 19.866C11.2338 20.6068 12.5427 21 13.8798 20.9982" fill="white"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <script src="<?=SCRIPTS.'js'.DIRECTORY_SEPARATOR.'jquery-3.5.1.min.dc5e7f18c8.js'?>" type="text/javascript"></script>
        <script src="<?=SCRIPTS.'js'.DIRECTORY_SEPARATOR.'webflow.5dd3bb435.js'?>" type="text/javascript"></script>
        <!-- <script src="https://cdn.prod.website-files.com/6480217dd2b60074b15929c5/js/webflow.5dd3bb435.js" type="text/javascript"></script> -->
        <script>
            const component = document.querySelector(".scroll-component");

            window.addEventListener("scroll", () => {
            // hauteur max avant que le fond soit totalement blanc (ajuste à ton goût)
            const maxScroll = 300; 
            // scroll actuel
            const scrollY = window.scrollY;

            // calcule un ratio entre 0 et 1
            let opacity = scrollY / maxScroll;
            if (opacity > 1) opacity = 1;
            if (opacity < 0) opacity = 0;

            // applique la couleur avec opacité
            component.style.background = `rgba(255, 255, 255, ${opacity})`;
            });
        </script>
    </body>
</html>
