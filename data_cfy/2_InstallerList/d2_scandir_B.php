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
          
            <section class="hero-section hero-section--image clearfix clip" >
                <div class="hero-section__wrap">
                    <div class="hero-section__option">
                        <img src="/assets/images/index1.jpg" alt="Hero section image">
                    </div>                 
                    <div class="container" style="float:left;top:100px;">
                        <div class="row">
                            <div class="offset-lg-2 col-lg-8" style="width:1500px" >
                              
                              <!-- ———————————————————————————————————————【1】——————————————————————————————————————————————————————— -->                             
                                <div class="title-01 title-01--11 text-center" style="position:absolute;top:0px;left:0px;width:400px;height:100%;">
                                     <div class="title__description"><strong style="color:#7FFFD4">1_VSTO_Microsoft list</strong></div>   
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
                                                        echo "<strong style='color:#DEB850;'>【 $v 】</strong>". "<br/>";
                                                        selectdir($a, $level); 
                                                    }else{
                                                        echo "<a href=" . $address . mb_substr($a,22) . ">". $v . "</a>","<br>";                                               
                                                    }
                                                }
                                            }
                                            $path = "/home/runner/PHPTry1v1/resources_cfy/1_VSTO_Microsoft";
                                            selectdir($path);
                                    ?> 
                                </div> 
                              
                              <!-- ———————————————————————————————————————【2】——————————————————————————————————————————————————————— -->    
                              <div class="title-01 title-01--11 text-center" style="margin:0px 700px 0px 500px;width:400px;height:100%;">
                                     <div class="title__description"><strong style="color:#7FFFD4">2_VSTO_Kingsoft list</strong></div>  
                                     <hr/>                            
                                     <?php
                                            function selectdir_1($dir, $level=0) {
                                                $address="https://phptry1v1.cfy-cfy.repl.co";
                                                $temp=scandir($dir); 
                                                $level++;
                                                foreach($temp as $v){ 
                                                    $a=$dir.'/'.$v;                                 
                                                    if(is_dir($a)){ 
                                                        if($v=='.' || $v=='..'){ 
                                                           continue;
                                                        }
                                                        echo "<strong style='color:#DEB851;'>【 $v 】</strong>". "<br/>";
                                                        selectdir_1($a, $level); 
                                                    }else{
                                                        echo "<a style='float:left;' href=" . $address . mb_substr($a,22) . ">". $v . "</a>","<br>";                                               
                                                    }
                                                }
                                            }
                                            $path = "/home/runner/PHPTry1v1/resources_cfy/2_VSTO_Kingsoft";
                                            selectdir($path);
                                    ?> 
                                </div> 
                              
                              <!-- ———————————————————————————————————————【3】——————————————————————————————————————————————————————— -->   
                              <div class="title-01 title-01--11 text-center" style="position:absolute;top:0px;right:0px;width:400px;height:100%;">
                                     <div class="title__description"><strong style="color:#7FFFD4">3_VBA list</strong></div>   
                                     <hr/>
                                     <?php
                                            function selectdir_2($dir, $level=0) {
                                                $address="https://phptry1v1.cfy-cfy.repl.co";
                                                $temp=scandir($dir); 
                                                $level++;
                                                foreach($temp as $v){ 
                                                    $a=$dir.'/'.$v;                                 
                                                    if(is_dir($a)){ 
                                                        if($v=='.' || $v=='..'){ 
                                                           continue;
                                                        }
                                                        echo "<strong style='width:200px;color:#DEB845;'>【 $v 】</strong>" . "<br>"; 
                                                        selectdir_2($a, $level); 
                                                    }else{
                                                        echo "<a href=" . $address . mb_substr($a,22) . " style='width:200px;'>". $v . "</a>","<br>";                              
                                                    }
                                                }
                                            }
                                            $path = "/home/runner/PHPTry1v1/resources_cfy/3_VBA";
                                            selectdir($path);
                                    ?> 
                                </div>
                              <!-- ————————————————————————————————————————————————————————————————————————————————————————————————— -->
                              
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
