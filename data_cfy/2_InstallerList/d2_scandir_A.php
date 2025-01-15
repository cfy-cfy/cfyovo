<!DOCTYPE html>
<html lang="en">
    <head>
        <title>VSTO/VBA - Easy Work , Happy Life</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600&amp;subset=latin-ext" rel="stylesheet">

        <!-- CSS -->
        <link href="/assets/css/main.css" rel="stylesheet">

        <!-- JS -->
        <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="/assets/js/vendor/jquery-1.12.0.min.js"></script>
    </head>
    <body>
        <div class="site" id="page" >
            <a class="skip-link sr-only" href="#main">Skip to content</a>

            <!-- Options headline effects: .rotate | .slide | .zoom | .push | .clip -->
            <section class="hero-section hero-section--image clearfix clip" >
                <div class="hero-section__wrap">
                    <div class="hero-section__option">
                        <img src="/assets/images/index1.jpg" alt="Hero section image">
                    </div>
                    <!-- .hero-section__option -->

                    <div class="container">
                        <div class="row">
                            <div class="offset-lg-2 col-lg-8">
                                <div class="title-01 title-01--11 text-center">
<!--                                     <h2 class="title__heading">
                                        <span>We are</span>
                                        <strong class="hero-section__words">
                                            <span class="title__effect is-visible">AweSome</span>
                                            <span class="title__effect">Creative</span>
                                            <span class="title__effect">Free</span>
                                        </strong>
                                    </h2> -->
                                    <div class="title__description"><strong style="color:#7FFFD4">VSTO/VBA Installation package list</strong></div>
                                     <hr/>
                                     <hr/>
                                     <?php
                                    
                                            function selectdir($dir, $level=0) {
                                                $address="https://phptry1v1.cfy-cfy.repl.co";
                                                $temp=scandir($dir); 
                                                $level++;
                                                foreach($temp as $v){ 
                                                    $a=$dir.'/'.$v;                                 
                                                    if(is_dir($a)){ 
                                                        if($v=='.' || $v=='..'){ 
                                                           continue;
                                                        }
                                    
                                                        echo "<br/>";
                                                        echo "<strong style='color:#DEB850;'>【 $v 】</strong>" . "<hr/>";    // RGB, RGBA, HEX, HSL,HSLA
                                                        selectdir($a, $level); 
                                                    }else{
                                                        echo "<a href=" . $address . mb_substr($a,22) . ">". $v . "</a>","<br>";       
                                                    }
                                                }
                                            }
                                            $path = "/home/runner/PHPTry1v1/resources_cfy";
                                            selectdir($path);
                                        ?> 

                                </div> <!-- .title-01 -->
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
  
        <!-- JS -->
        <script src="/assets/js/plugins/animate-headline.js"></script>
        <script src="/assets/js/main.js"></script>
    </body>
 
</html>
