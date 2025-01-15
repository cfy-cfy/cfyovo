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
    <body >
  
        <div class="site" id="page" >
           
            <a class="skip-link sr-only" href="#main">Skip to content</a>
          
            <section class="hero-section hero-section--image clearfix clip" >
                <div class="hero-section__wrap">
                    <div class="hero-section__option">
                        <img src="/assets/images/index1.jpg" alt="Hero section image">
                    </div>                 
                    <div class="container" style="float:right;top:20px;">
                        <div class="row">
                            <div class="offset-lg-2 col-lg-8" style="width:800px" >
                              
                            <datalist id="existing-tags">
                              <option>1_VSTO_Microsoft</option>
                              <option>2_VSTO_Kingsoft list</option>
                              <option>3_VBA list</option>
                            </datalist>
                              
                            <form action="https://phptry1v1.cfy-cfy.repl.co/data_cfy/2_InstallerList/d2.1_get.php" method="get" style="position:absolute;top:0px;left:650px;">
                              <span style="font-size:120%; color:#7FFF00;font-weight:bold;">Filter:</span> 
                              <input type="search" id="filter-input" class="input" name="downloadList" list="existing-tags" style="width:300px;height:25px;font-size:100%;color:#A52A2A;"><br>
                              <input type="submit" value="查询" style="font-size:100%;padding:10px;box-shadow: 0 0 0px 1000px #283443 inset !important;-webkit-text-fill-color:#fff !important;" > 
                            </form>

                                <div class="title-01 title-01--11 text-center" style="position:absolute;top:0px;left:0px;width:600px;height:100%;">
                                    <strong style="font-size:150%; color: rgb(127, 255, 212); --darkreader-inline-color:#72ffd0;">3_VBA</strong>                                  
                                    <div style="overflow:scroll; height:calc(100vh - 120px); width:450px; border: solid 1px #aaa; margin: 0 auto;padding: 0">
                                    <ul>
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
                                                        echo "<li style='line-height: 15px;float:left;'><strong style='color:#DEB850;'>【 $v 】</strong></li>". "<br/>";
                                                        
                                                        selectdir($a, $level);  
                                                    }else{
                                                       
                                                        echo "<li style='line-height: 10px;float:left;'> <a  href=" . $address . mb_substr($a,22) . ">". $v . "</a></li>","<br>";                                               
                                                    }
                                                }
                                            }
                                            $path = "/home/runner/PHPTry1v1/resources_cfy/3_VBA";
                                            selectdir($path);
                                    ?> 
                                    </ul>
                                  </div>                                           
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
