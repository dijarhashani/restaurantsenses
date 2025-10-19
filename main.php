<?php
/*
Template Name: Main Page
*/
get_header(); 
?>
<style>
    .main-one{
        background:#2D473A;
        width: 100%;
        height:50vh;
        margin:0px;
        padding:0px;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .inside h1{
        color:white;
        font-size:7.4vh;
        font-family:'Light';
        text-align:center;
        font-weight: 100;
        margin:0px;
        padding:0px;
        display: block;
    }
    .inside span{
        font-size:8.4vh;
        font-family:'Regular';
        
    }
    .inside{
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    .inside p{
        color:white;
        font-size:2.6vh;
        font-family:'Light';
        text-align:center;
        font-weight: 100;
        margin:0px;
        padding:0px;
        width: 78vh;
        display: block;
    }
    .main-two img{
        
        width: 120vw;
        height: 50vh;
        display: flex;
        display: block;
        align-self: center;
       
    }
    .main-two{
        width: 100vw;
        height:50vh;
        overflow:hidden;
        display: flex;
        justify-content: center;
    }
    .main-black{
        margin:0px;
        padding:0px;
        width:100vw;
        background:#0F0B0B;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction: column;
    }
    
    .mb-text{
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction: column;
    }
    .mb-text svg{
        height:2.391vh;
        margin-top:4vh;
        margin-bottom:4vh;
    }
    .mbt-t p{
        width:77.4vh;
        font-size:2.6vh;
        color:white;
        font-family:'Light Italic';
        font-weight:100;
        text-align:center;
        margin-top:8.9vh;
        margin-bottom:8.9vh;
    }
    .mbt-t{
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .mbt-t svg{
        height:2.391vh;
        margin: 0px 4.2vh;
    }
    .main-gallery{
        display:flex;
        margin:4vh;
    }
    .g1{
        overflow:hidden;
        height: 133.5vh;
        width: 85.5vh;
        margin-right:3vh;
        

    }
    .g1 img{
        height: 133.5vh;
        transition: height .3s ease;
    }
    .g1:hover img{
        height: 136.5vh;
    }
    .g-first{
        display:flex;
    }
    .g-second{
        display:flex;
        margin-top:4vh;
    }
    .gg-g{
        display:flex;
    }
    .g2{
        overflow:hidden;
        height: 64.3vh;
        width: 43.3vh;
        margin-right:3vh;
    }
    .g2 img{
        height: 64.3vh;
        transition: height .3s ease;
    }
    .g2:hover img{
        height: 67.3vh;
    }
    .g3{
        overflow:hidden;
        height: 43.1vh;
        width: 43.3vh;
        margin-top:3.1vh;
        
    }
    .g3 img{
        height: 43.1vh;
        transition: height .3s ease;
    }
    .g3:hover img{
        height: 46.1vh;
    }
    .g4 {
        overflow:hidden;
        height: 18.1vh;
        width: 20vh;
        margin-right:3.4vh;
    }
    .g4 img{
        height: 18.1vh;
        transition: height .3s ease; 
    }
    .g4:hover img{
        height: 21.1vh;
    }
    .g5{
        overflow:hidden;
        height: 18.1vh;
        width: 19.7vh;
        
    }
    .g5 img{
        height: 18.1vh;
        transition: height .3s ease; 
    }
    .g5:hover img{
        height: 21.1vh;
    }
</style>

<main>
 <div class="main-one">
    <div class="inside">
    <h1 data-aos-once="true" data-aos="fade-up"
    data-aos-anchor-placement="bottom-bottom"
    data-aos-duration="1000">Welcome to <span>senses</span> restaurant</h1>
    <p data-aos-once="true" data-aos="fade-up"
    data-aos-anchor-placement="bottom-bottom"
    data-aos-duration="1000" data-aos-offset="300"
    >Enjoy a unique dining experience at Senses Restaurant. Our menu 
        is <g>f</g> illed with delicious dishes made from fresh, quality ingredients. 
        The atmosphere is cozy and inviting, perfect for any occasion. </p>
    </div>
 </div>
 <div class="main-two">
        <img src="<?php echo get_template_directory_uri();?>/assets/components/main-img.jpg" alt="main-img">
 </div>
 <div class="main-black">
    <div class="mb-text">
                <?php
            
                    $svg_file_path = get_template_directory() . '/assets/components/dots-big.svg';

                    
                    if (file_exists($svg_file_path)) {
                        
                        $svg_content = file_get_contents($svg_file_path);
                        
                        
                        echo $svg_content;
                    } else {
                        
                        echo '<!-- SVG file not found -->';
                    }
                ?>

                <div class="mbt-t">

                        <div data-aos-once="true" data-aos="fade" data-aos-anchor-placement="bottom-bottom" data-aos-duration="4000">  <?php
                            
                                    $svg_file_path = get_template_directory() . '/assets/components/line-dot.svg';

                                    
                                    if (file_exists($svg_file_path)) {
                                        
                                        $svg_content = file_get_contents($svg_file_path);
                                        
                                        
                                        echo $svg_content;
                                    } else {
                                        
                                        echo '<!-- SVG file not found -->';
                                    }
                                ?>
                        </div>

                            <p data-aos-once="true" data-aos="fade" data-aos-anchor-placement="bottom-bottom" data-aos-duration="4000">Discover the vibrant <g>f</g> lavors and artistic presentation 
                                at Senses Restaurant through our gallery. 
                                Each dish is crafted with fresh ingredients and culinary expertise, 
                                promising a delightful experience for both the palate and the eyes. 
                                From casual meals to special occasions, Senses Restaurant 
                                offers a unique and memorable dining journey.</p>


                            <div data-aos-once="true" data-aos="fade" data-aos-anchor-placement="bottom-bottom" data-aos-duration="4000" >   <?php
                    
                                    $svg_file_path = get_template_directory() . '/assets/components/line-dot.svg';

                                    
                                    if (file_exists($svg_file_path)) {
                                        
                                        $svg_content = file_get_contents($svg_file_path);
                                        
                                        
                                        echo $svg_content;
                                    } else {
                                        
                                        echo '<!-- SVG file not found -->';
                                    }
                                ?>
                            </div>

                </div>

                <?php
                    
                    $svg_file_path = get_template_directory() . '/assets/components/dots-small.svg';

                    
                    if (file_exists($svg_file_path)) {
                        
                        $svg_content = file_get_contents($svg_file_path);
                        
                        
                        echo $svg_content;
                    } else {
                        
                        echo '<!-- SVG file not found -->';
                    }
                ?>

    </div>
    <div class="main-gallery">
        <div class="g-one">
            <div data-aos-once="true" data-aos="zoom-out" class="g1">
                <img src="<?php echo get_template_directory_uri();?>/assets/components/g1.jpg" alt="">
            </div>
        </div>
        <div class="g-two">
            <div class="g-first">
                <div data-aos-once="true" data-aos="zoom-out" class="g2"><img src="<?php echo get_template_directory_uri();?>/assets/components/g2.jpg" alt=""></div>
                <div class="g-g">
                    <div class="gg-g">
                        <div data-aos-once="true" data-aos="zoom-out" class="g4"><img src="<?php echo get_template_directory_uri();?>/assets/components/g4.jpg" alt=""></div>
                        <div data-aos-once="true" data-aos="zoom-out" class="g5"><img src="<?php echo get_template_directory_uri();?>/assets/components/g5.jpg" alt=""></div>
                    </div>
                    <div data-aos-once="true" data-aos="zoom-out" class="g3"><img src="<?php echo get_template_directory_uri();?>/assets/components/g3.jpg" alt=""></div>
                </div>
            </div>
            <div class="g-second">
            <div class="g-g">
                        <div data-aos-once="true" data-aos="zoom-out" style="margin-top:0; margin-bottom:3.1vh;" class="g3"><img src="<?php echo get_template_directory_uri();?>/assets/components/g6.jpg" alt=""></div>
                        <div class="gg-g">
                            <div data-aos-once="true" data-aos="zoom-out" class="g4"><img src="<?php echo get_template_directory_uri();?>/assets/components/g7.jpg" alt=""></div>
                            <div data-aos-once="true" data-aos="zoom-out" class="g5"><img src="<?php echo get_template_directory_uri();?>/assets/components/g8.jpg" alt=""></div>
                        </div>
                        
                    </div>
                <div data-aos-once="true" data-aos="zoom-out" style="margin-right:0vh; margin-left:3vh;" class="g2"><img src="<?php echo get_template_directory_uri();?>/assets/components/g9.jpg" alt=""></div>
                    
            </div>
        </div>
    </div>
    
    <style>
.carousel-container {
  position: relative;
  width: 100%;
  max-width: 156vh;
  overflow: hidden;
  margin: auto;
  margin-bottom:23vh;
}

.carousel {
  display: flex;
  transition: transform 0.5s ease-in-out;
  will-change: transform;
}

.carousel-item {
  min-width: 33.33%;
  box-sizing: border-box;
  text-align: center;
  position:relative;
  opacity: 0.5;
  transform: scale(0.8);
  transition: transform 0.5s, opacity 0.5s;
  display:flex;
  justify-content:center;
  align-items:center;
}

.carousel-item.active {
  opacity: 1;
  transform: scale(1.1);
}

.carousel-item img {
  width: 100%;
  height: auto;
}





.carousel-item p {
 position:absolute;
 z-index: 10;
 color: white;
 top:0;
 text-align:center;
 font-family:'Thin';
 font-size:5vh;
 padding:5.5vh auto;
 width: 100%;
 
}
.black{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:14.5vh;
    background:black;
    opacity:60%;
}
.our-special{
    margin:4vh 0px;
    display:flex;
    justify-content: center;
    align-items: center;

}
.our-special h1{
    font-family:'Thin';
    font-size:8.4vh;
    color:white;
    font-weight:100;
}
.our-special svg{
    width:2.391vh;
    margin:0vh 3.3vh;
}
</style>
<div data-aos-once="true" data-aos="fade-up"
    data-aos-anchor-placement="bottom-bottom"
    data-aos-duration="1000" class="our-special">
        <?php
            
            $svg_file_path = get_template_directory() . '/assets/components/dot-title.svg';

            
            if (file_exists($svg_file_path)) {
                
                $svg_content = file_get_contents($svg_file_path);
                
                
                echo $svg_content;
            } else {
                
                echo '<!-- SVG file not found -->';
            }
        ?>
    <h1>Our Specials</h1>

    <?php
            
            $svg_file_path = get_template_directory() . '/assets/components/dot-title.svg';

            
            if (file_exists($svg_file_path)) {
                
                $svg_content = file_get_contents($svg_file_path);
                
                
                echo $svg_content;
            } else {
                
                echo '<!-- SVG file not found -->';
            }
        ?>
</div>
<div class="carousel-container">
  <div class="carousel">
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri();?>/assets/components/c3.jpg" alt="Steak">
      <p>Steak</p>
      <div class="black"></div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri();?>/assets/components/c1.jpg" alt="Fried Cheese">
      <p>Fried cheese</p>
      <div class="black"></div>
    </div>
    <div class="carousel-item active">
      <img src="<?php echo get_template_directory_uri();?>/assets/components/c2.jpg" alt="Garlic Bread">
      <p>Garlic bread</p>
      <div class="black"></div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri();?>/assets/components/c3.jpg" alt="Steak">
      <p>Steak</p>
      <div class="black"></div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri();?>/assets/components/c1.jpg" alt="Fried Cheese">
      <p>Fried cheese</p>
      <div class="black"></div>
    </div>
  </div>

 
</div>


<style>
    .cocktails{
        width: 100%;
        height:110vh;
        position:relative;

    }
    .ck1{
        width: 38.38vw;
        height:80.7vh;
        position:absolute;
        top:0px;
        left:2vw;

    }
    .ck1 img{
        width: 38.38vw;
    }
    .ck2{
        width: 24.4vw;
        height:48vh;
        position:absolute;
        bottom:12vh;
        left:27.7vw;

    }
    .ck2 img{
        width: 24.4vw;
    }
    .ck3{
        width: 25.05vw;
        height:44.5vh;
        position:absolute;
        right:2vw;
        top:0vh;

    }
    .ck3 img{
        width: 25.05vw;
    }
    .ck-title{
    margin:4vh 0px;
    display:flex;
    justify-content: center;
    align-items: center;
    position:absolute;
    left: 44.6vw ;
    top: 8.7vh;

    }
    .ck-title h1{
        font-family:'Thin';
        font-size:7.7vh;
        color:white;
        font-weight:100;
    }
    .ck-title svg{
        width:2.391vh;
        margin:0vh 3.3vh;
    }
    .ck-text{
        position:absolute;
        bottom:15.5vh;
        right:8.6vw;
    }
    .ck-text p{
        color:white;
        width: 61.2vh;
        font-size:2.4vh;
        font-family:'Thin';
        font-weight:100;
        text-align:center;
    }

    @media only screen and (min-width: 1700px) {
        .ck-title{
            left: 42vw ;
        }
        .ck-text {
            position: absolute;
            bottom: 24.5vh;
            right: 5.6vw;
        }
        .ck2{
            bottom: 4vh;
        }
    }
</style>
<div class="cocktails">
    <div data-aos-once="true" data-aos="fade-up-right"
    data-aos-duration="1000" class="ck1">
        <img src="<?php echo get_template_directory_uri();?>/assets/components/cocktail1.jpg" alt="">
    </div>
    <div data-aos-once="true" data-aos="fade-down-right" 
    data-aos-duration="1000" class="ck2">
        <img src="<?php echo get_template_directory_uri();?>/assets/components/cocktail2.jpg" alt="">
    </div>
    <div data-aos-once="true" data-aos="fade-down-left" data-aos-anchor-placement="bottom-bottom"
    data-aos-duration="1000" class="ck3">
        <img src="<?php echo get_template_directory_uri();?>/assets/components/cocktail3.jpg" alt="">
    </div>

    <div data-aos-once="true" data-aos="fade-up"
    data-aos-anchor-placement="bottom-bottom"
    data-aos-duration="1000"  class="ck-title">
        <?php
            
            $svg_file_path = get_template_directory() . '/assets/components/dot-title.svg';

            
            if (file_exists($svg_file_path)) {
                
                $svg_content = file_get_contents($svg_file_path);
                
                
                echo $svg_content;
            } else {
                
                echo '<!-- SVG file not found -->';
            }
        ?>
        <h1>Cocktails</h1>

        <?php
            
            $svg_file_path = get_template_directory() . '/assets/components/dot-title.svg';

            
            if (file_exists($svg_file_path)) {
                
                $svg_content = file_get_contents($svg_file_path);
                
                
                echo $svg_content;
            } else {
                
                echo '<!-- SVG file not found -->';
            }
        ?>
    </div>

    <div data-aos-once="true" data-aos="fade-up"
    data-aos-duration="1000" class="ck-text">
        <p>Enjoy a variety of cocktails at Senses Restaurant. 
        Our mixologists create both classic and unique
        drinks with high-quality ingredients. Whether
        you prefer something fruity or a more re<g style="font-family:'Thin';font-weight: 100;margin-right:-.05vh;">f</g>ined
        <g style="font-family:'Thin';font-weight: 100;margin-right:-.05vh;">f</g>lavor, our cocktails are designed to enhance
        your dining experience and delight your
        taste buds.</p>
    </div>
    
</div>




</div>

<style>
    .quote{
        width: 100%;
        height:50vh;
     
        position:relative;
        display: flex;
        justify-content:center;
        align-items:center;
        background-position: center !important;
        background-repeat: no-repeat !important;
        background-size: 100vw 50vh !important;
    }
    .quote h1{
        position:relative;
        width: 68vw;
        text-align:center;
        color:white;
        font-family:'Regular Italic';
        font-size:3.7vh;
        font-weight:100;
    }
    .quote span{
        color:white;
        font-size:4.7vh;
        font-family:'Arial';
        position:absolute;
    }
    html{
        overflow-x:hidden !important;
    }
</style>
<div style="background: url('<?php echo get_template_directory_uri();?>/assets/components/quote.jpg')" class="quote">
    
    <h1 data-aos-once="true" data-aos="fade-up"
    data-aos-anchor-placement="bottom-bottom"
    data-aos-duration="1000"><span style="top:-1vh; left:0vw;">"</span>At senses, we create memorable dining experiences with every
    dish and drink, delighting your taste buds and engaging your senses. <span style="bottom:-1vh; right:0vw;">"</span></h1>
    
</div>

<style>
    .footer-reserve{
        width:100vw;
        height:100vh;
        background-size: 100vw 100vh !important;
        background-repeat: no-repeat !important;
        background-position: center !important;
        position:relative;
        margin-top:-4vh;
    }
    .fr-green{
        width: 42.4vw;
        height:100vh;
        background:#2D473A;
        opacity:68%;
        position:absolute;
        left:0;
        top:0;
    }
    .fr-c{
        z-index:10;
        position: absolute;
        left:4.1vw;
        top:30vh;
        bottom:30vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    .fr-logo svg{
        width: 16.44vw;
    }
    .fr-c p{
        margin-top:5vh;
        margin-bottom:5vh;
        padding:0px;
        font-size:2.8vh;
        color:white;
        font-family:'Regular Italic';
        width: 34.2vw;
    }
    [data-aos^=fade][data-aos^=fade].fr-green {
        opacity:68% !important;
        
    }
</style>
<div style="background:url('<?php echo get_template_directory_uri();?>/assets/components/reserve-home.jpg')" class="footer-reserve">
    <div data-aos-once="true" data-aos-anchor-placement="center-bottom" data-aos="fade-right" data-aos-duration="1000" class="fr-green"></div>
    <div data-aos-once="true" data-aos="fade-up" data-aos-duration="1000" class="fr-c">
        <div class="fr-logo">
            <?php
                
                $svg_file_path = get_template_directory() . '/assets/components/f-reserve-logo.svg';

                
                if (file_exists($svg_file_path)) {
                    
                    $svg_content = file_get_contents($svg_file_path);
                    
                    
                    echo $svg_content;
                } else {
                    
                    echo '<!-- SVG file not found -->';
                }
            ?>
        </div>
        <p>Book your table now to enjoy our 
            exquisite dishes and crafted cocktails. Click 
            here to make a reservation and ensure your 
            spot for an unforgettable dining experience. 
            We look forward to serving you soon!</p>
        <a href="/reservations" class="r_button">Make a reservation</a>
    </div>
</div>
<style>
    
    @media only screen and (max-width: 1000px){

        .main-one {
            background: #2D473A;
            width: 100%;
            height: 50vh;
            margin: 0px;
            padding: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .inside h1 {
            color: white;
            font-size: 3.7553648vh;
            font-family: 'Light';
            text-align: center;
            font-weight: 100;
            margin: 0px;
            padding: 0px;
            display: block;
            width: 69.511628vw;
            font-weight:100;
            line-height: 3.8vh;
        }
        .inside span {
            font-size: 4.0772532vh;
            font-family: 'Regular';
            font-weight:400;
        }
        .inside p {
            color: white;
            font-size: 1.6094421vh;
            font-family: 'Light';
            text-align: center;
            font-weight: 100;
            margin: 0px;
            padding: 0px;
            width: 76.27907vw;
            display: block;
            margin-top: 1.3vh;
        }
        .inside p g{
            margin-right: -.3vh;
        }
        .main-two img {
            width: 446.511629vw;
            height: 54vh;
            display: flex;
            display: block;
            align-self: center;
        }
        .mbt-t {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .mbt-t svg {
            height: auto !important;
            margin: 0px 4.2vh;
            width: 52.183721vw;
        }
        .mbt-t p {
            width: 84.837209vw;
            font-size: 1.6094421vh !important;
            color: white;
            font-family: 'Light Italic';
            font-weight: 100;
            text-align: center;
            margin-top: 8.9vh;
            margin-bottom: 8.9vh;
        }
        .mbt-t p g{
            margin-right: -.3vh;
        }
        .main-gallery {
            display: flex;
            flex-direction: column;
            margin: 4vh;
            justify-content:center;
            align-items:center;
            width: 100%;
        }
        .g1 {
            overflow: hidden;
            height: 62.124464vh;
            width: 88.372093vw;
            margin-right: 0vh;
            margin-bottom: 2.6824034vh;
        }
        .g1 img {
            height: auto !important;
            width: 88.372093vw;
            transition: height .3s ease;
        }
        .g-first {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
        }
        .g2 {
            overflow: hidden;
            height: 62.124464vh;
            width: 88.372093vw;
            margin-right: 0;
            margin-bottom: 2.6824034vh;
        }
        .g2 img{
            width: 88.372093vw;
            height:auto!important;
        }
        .g-second{
            display:none;
        }
        .g4 {
            overflow: hidden;
            height: 17.274678vh;
            width: 41.27907vw;
            margin-right: 5.8139535vw;
        }
        .g4 img{
            width: 41.27907vw;
            height:auto !important;
        }
        .g5 {
            overflow: hidden;
            height: 17.274678vh;
            width: 41.27907vw;
        }
        .g5 img{
            width: 41.27907vw;
            height:auto !important;
        }
        .gg-g {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .g3 {
            overflow: hidden;
            height: 40.55794vh;
            width: 88.372093vw;
            margin-top: 2.6824034vh;
        }
        .g3 img{
            width: 88.372093vw;
            height:auto!important;
        }
        .g-two{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .our-special {
            margin: 0px 0px 4.6824034vh 0px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .our-special svg {
            width: 5.560465vw;
            margin: 0vh 3.3vh;
        }
        .our-special h1 {
            font-family: 'Thin';
            font-size: 3.7553648vh;
            color: white;
            font-weight: 100;
            margin: 0px;
        }
        .carousel-container {
            position: relative;
            width: 100vw;
            display: flex;
            max-width: 156vh;
            overflow: hidden;
            justify-content: center;
            align-items: center;
            margin: auto;
            margin-bottom: 2vh;
        }
        .carousel-item {
            min-width: 33.33%;
            width: 43.72093vw;
            box-sizing: border-box;
            text-align: center;
            position: relative;
            opacity: 0.5;
            transform: scale(0.8);
            transition: transform 0.5s, opacity 0.5s;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .carousel-item p {
            position: absolute;
            z-index: 10;
            color: white;
            top: 0;
            text-align: center;
            font-family: 'Thin';
            font-size: 3.7553648vh;
            padding: 2.6824034vh 0px;
            width: 100%;
        }
        .ck1 {
            width: 73.255814vw;
            height: 40.021459vh;
            position: relative;
            top: 14.16309vh;
            left: 5.8139535vw;
        }
        .ck1 img {
            width: 73.255814vw;
        }
        .ck2 {
            width: 50vw;
            height: 25.536481vh;
            position: absolute;
            top: 35.944206vh;
            right: 5.8139535vw;
                left: auto;
            bottom: auto;
        }
        .ck2 img {
            width: 50vw;
        }
        .ck-title {
            margin: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            left: 0px;
            top: -2vh;
            width: 100%;
        }
        .ck-title h1 {
            font-family: 'Thin';
            font-size: 3.7553648vh;
            color: white;
            font-weight: 100;
            margin: 6vh 0px;
        }
        .ck-title svg {
            width: 5.560465vw;
            height: auto !important;
            margin: 0vh 3.3vh;
        }
        .ck-text {
            position: relative;
            bottom: -30.5vh;
            right: auto;
            width: 100%;
            text-align: center;
            justify-content: center;
            display: flex;
        }
        .ck-text p {
            color: white;
            width: 76.744186vw;
            font-size: 1.6094421vh;
            font-family: 'Thin';
            font-weight: 100;
            text-align: center;
        }
        .ck3 {
            width: 88.372093vw;
            height: 40.772532vh;
            position: absolute;
            left: 5.8139535vw;
            right: 5.8139535vw;
            bottom: 15.8139535vw;
            top:auto;
        }
        .ck3 img{
            width: 88.372093vw;
        }
        .cocktails {
            width: 100%;
            height: 145vh;
            position: relative;
        }
        .quote {
            width: 100%;
            height: 50vh;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            background-position: -76.046512vw !important;
            background-repeat: no-repeat !important;
            background-size: 449.511628vw 57.939914vh !important;
        }
        .quote h1 {
            position: relative;
            width: 68vw;
            text-align: center;
            color: white;
            font-family: 'Regular Italic';
            font-size: 1.6094421vh;
            font-weight: lighter;
        }
        .quote span {
            color: white;
            font-family: 'Arial';
            font-size: 2.609442vh;
            position: absolute;
        }
        .footer-reserve {
            width: 100vw;
            height: 100vh;
            background-size: 381.162791vw 100vh !important;
            background-repeat: no-repeat !important;
            background-position: -203.4883721vw !important;
            position: relative;
            margin-top: -4vh;
        }
        .fr-green {
            width: 100vw;
            height: 50vh;
            background: #2D473A;
            opacity: 68%;
            position: absolute;
            left: 0;
            top: 0;
        }
        .fr-c {
            z-index: 5;
            position: relative;
            left: auto;
            top: auto;
            bottom: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 100vw;
            height: 50vh;
            padding-top: 10vh;
        }
        .fr-logo svg {
            width: 39.816279vw;
        }
        .fr-c p {
            margin-top: 2.6824034vh;
            margin-bottom: 2.6824034vh;
            padding: 0px;
            font-size: 1.6094421vh;
            color: white;
            font-family: 'Regular Italic';
            width: 73.953488vw;
        }
    }
    @media only screen and (min-width: 1900px) {
    .header-video video {
        max-width: 140vw;
        overflow-y: hidden;
        height:100vh;
    }
    }

    
</style>

</main>

<script>
const carousel = document.querySelector('.carousel');
const carouselItems = document.querySelectorAll('.carousel-item');
const prevButton = document.querySelector('.carousel-button.prev');
const nextButton = document.querySelector('.carousel-button.next');
let currentIndex = 2; // Start at the third item (index 2)
let autoSlideInterval;

function updateCarousel() {
  const itemsCount = carouselItems.length;
  const offset = -((currentIndex - 1) * (100 / 3)); // Offset by one item to center the active item
  carouselItems.forEach((item, index) => {
    item.classList.remove('active');
    if (index === currentIndex) {
      item.classList.add('active');
    }
  });

  carousel.style.transform = `translateX(${offset}%)`;
}

function showNextSlide() {
  currentIndex = (currentIndex + 1) % carouselItems.length;
  updateCarousel();
  checkLoop();
}

function showPrevSlide() {
  currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
  updateCarousel();
  checkLoop();
}

function startAutoSlide() {
  autoSlideInterval = setInterval(showNextSlide, 8000);
}

function stopAutoSlide() {
  clearInterval(autoSlideInterval);
}

function checkLoop() {
  const itemsCount = carouselItems.length;
  if (currentIndex >= itemsCount) {
    setTimeout(() => {
      carousel.style.transition = 'none';
      currentIndex = itemsCount - 1;
      updateCarousel();
    }, 500);
  } else if (currentIndex < 0) {
    setTimeout(() => {
      carousel.style.transition = 'none';
      currentIndex = itemsCount - 1;
      updateCarousel();
    }, 500);
  } else {
    carousel.style.transition = 'transform 0.5s ease-in-out';
  }
}



// Start the automatic slide change
startAutoSlide();

// Initial update
updateCarousel();
</script>

<?php get_footer(); ?>
