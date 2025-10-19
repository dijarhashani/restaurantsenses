<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<style>
/* Hide the default cursor */
html,body, a{
    cursor: none !important;
}

/* Style for the custom cursor */
#custom-cursor {
    position: fixed;
    top: 0;
    left: 0;
    width: 2vh;
    height: 2vh;
    border: 2px solid white;
    border-radius: 50%;
    pointer-events: none;
    transition: width 0.2s ease, height 0.2s ease, box-shadow 0.2s ease;
    z-index: 9999;
}

/* Style for the custom cursor when pointer */
#custom-cursor.pointer {
    width: 4vh;
    height: 4vh;
    box-shadow: 0 0 10px 2px #2D473A;
}


     
body::-webkit-scrollbar {
    display:none;
}

    .header-video video{
    max-width: 100vw;
    overflow-y:hidden;
    
}
.video{
    width: 100vw;
    height:100vh;
    overflow: hidden;
}
.header-video{
    position:relative;
}
body{
    overflow-x:hidden;
}
.black-over{
    background-color:black;
    width: 100vw;
    height:100vh;
    opacity:25%;
    position:absolute;
    top:0;
    left:0;
}
.right-dot{
    position:absolute;
    top: -8.1vh;
    right: -22.4vw;
}
.right-dot svg{
    width: 46.315vw;
    height:88.664vh;
}
.left-dot{
    position:absolute;
    bottom: -17.1vh;
    left: -22.4vw;
}
.left-dot svg{
    width: 46.315vw;
    height:88.664vh;
}
.logo{
    position:absolute;
    top:4vh;
    left:4vh;
}
.logo svg{
   width: auto;
    height:3.909vh;
}
.main-nav{
    position:absolute;
    top:0;
    right:0;
}
.main-nav ul{
    display:flex;
    margin:5vh 4vh;
    padding:0;
}
.main-nav li{
    margin-left:6.3vh;
    padding:0;
    margin-top: 0;
    margin-right:0;
    margin-bottom:0;
    list-style: none;
}
.main-nav a{
    text-decoration:none;
    color:white;
    font-family:'Regular';
    font-size:2.6vh;
    position: relative;
    transition: color .3s ease; 
}


.main-nav a::after {
    content: '';
    display: block;
    margin: 0 auto;
    height: .3vh; 
    width: 0%; 
    background: #2D473A;
    border-radius:3vh;
    position: absolute;
    bottom: -.4vh; /* Adjust position of the underline */
    left: 0; /* Start from the left */
    transition: width 0.3s ease; 
    
   
}


.main-nav a:hover::after {
    width: 112%; 
    
   
}
.main-nav a:hover{
    color:#2D473A;
}

.main-nav .current-menu-item a::after {
    width: 112% !important; 
    background:white !important;
}
.main-nav .current-menu-item a {
    color:white !important; 
}
.head_text{
    position:absolute;
    bottom:4vh;
    left:4vh;
}
.head_text p{
    margin:0px;
    padding:0px;
    color:white;
}
.h1{
    font-size:3.7vh;
    font-family: 'Semi Bold';
}
g{
    margin-right:-.7vh;
}
.h2{
    font-size:2.2vh;
    font-family: 'Regular Italic';
}
.reserve{
    position:absolute;
    right:4vh;
    bottom:6.1vh;
}
.r_button{
    font-size:2.6vh;
    font-family:'Regular';
    border: .3vh solid white;
    border-radius: 3vh;
    padding: 1.8vh 2.8vh;
    text-decoration:none;
    color:white;
    background:transparent;
    transition:background .2s ease-in-out, border .2s ease-in-out;
}

.r_button:hover{
    background:#2D473A;
    border: .3vh solid #2D473A;
}
.animate-sequence{
    opacity:0;
}
.loading-overlay{
    width: 100vw;
    height:100vh;
    position:fixed;
    background-color:#2D473A;
    z-index: 100;
    display:flex;
    justify-content:center;
    align-items:center;
    transition: opacity 2s ease-out;
}
.loading-spin{
    width: 14.45vh;
    
    
}
.loading-spin svg{
    width: 14.45vh;
    animation: spin 3s linear forwards;
    
}
.animation-paused {
            animation: none !important; /* Ensure animation is disabled */
}
@keyframes spin {
            0% { transform: rotate(0deg);opacity:30%; width: 14.45vh;}
            50%{opacity:100%;width: 10.45vh;}
            100% { transform: rotate(360deg); opacity:30%;width: 14.45vh;}
        }
</style>



<div class="loading-overlay">
    <div class="loading-spin">
        <?php
                
                $svg_file_path = get_template_directory() . '/assets/components/load.svg';

                
                if (file_exists($svg_file_path)) {
                    
                    $svg_content = file_get_contents($svg_file_path);
                    
                    
                    echo $svg_content;
                } else {
                    
                    echo '<!-- SVG file not found -->';
                }
                ?>
    </div>
</div>



<header>
    <div class="header-video">
       <div class="video">
        <video id="header-video" autoplay loop muted>
            <source src="<?php echo get_template_directory_uri(); ?> /assets/components/home-video.mp4" type="video/mp4">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/components/home-video.mp4" type="video/webm">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/components/home-video.mp4" type="video/ogg">
            
        </video>
        </div>
        <div class="black-over"></div>

        <div class="right-dot animate-sequence">
            <?php
            
            $svg_file_path = get_template_directory() . '/assets/components/right-dot.svg';

            
            if (file_exists($svg_file_path)) {
                
                $svg_content = file_get_contents($svg_file_path);
                
                
                echo $svg_content;
            } else {
                
                echo '<!-- SVG file not found -->';
            }
            ?>
        </div>
        <div class="left-dot animate-sequence">
            <?php
            
            $svg_file_path = get_template_directory() . '/assets/components/left-dot.svg';

            
            if (file_exists($svg_file_path)) {
                
                $svg_content = file_get_contents($svg_file_path);
                
                
                echo $svg_content;
            } else {
                
                echo '<!-- SVG file not found -->';
            }
            ?>
        </div>

        <div class="logo">
            <a href="/">
                <?php
                
                $svg_file_path_2 = get_template_directory() . '/assets/components/logo..svg';

                
                if (file_exists($svg_file_path_2)) {
                    
                    $svg_content_2 = file_get_contents($svg_file_path_2);
                    
                    
                    echo $svg_content_2;
                } else {
                    
                    echo '<!-- SVG file not found -->';
                }
                ?>
            </a>
        </div>

        <nav class="main-nav animate-sequence">
            <?php 
            wp_nav_menu( array( 
                'theme_location' => 'primary', 
                'menu_id' => 'primary-menu' 
            ) ); 
            ?>
        </nav>

        <div class="head_text animate-sequence">
            <p class="h1">Awaken your senses to delicious <g>f</g> lavours</p>
            <p class="h2">Where every dish is crafted to perfection for a delightful culinary journey.</p>
        </div>

        <div class=" reserve animate-sequence">
            <a href="/reservations" class="r_button">Make a reservation</a>
        </div>
    </div>
   
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    
    var elements = document.querySelectorAll('.animate-sequence');

    
    function animateElements(elements) {
        return new Promise(function(resolve) {
            var index = 0;

            function animateNext() {
                if (index < elements.length) {
                    var el = elements[index];
                    el.style.opacity = 0;
                    el.style.transform = 'translateY(3vh)'; 

                    
                    setTimeout(function() {
                        el.style.transition = 'opacity 2s ease, transform 2s ease';
                        el.style.opacity = 1;
                        el.style.transform = 'translateY(0)'; 
                        index++;
                        animateNext(); 
                    }, 500); 
                } else {
                    resolve(); 
                }
            }

            animateNext(); 
        });
    }

    setTimeout(function() {
    animateElements(elements).then(function() {
        console.log('All elements animated'); 
    });
    }, 3000);
});

</script>







