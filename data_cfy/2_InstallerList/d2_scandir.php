    <?php
        // echo str_repeat('——', 30),"<br/>";
        // https://phptry1v1.cfy-cfy.repl.co/data_cfy/2_InstallerList/d2_scandir.php
        // https://phptry1v1.cfy-cfy.repl.co/resources_cfy/2_Kingsoft/WPS_WinFormsOcean.rar
        function selectdir($dir, $level=0) {
            $address="https://phptry1v1.cfy-cfy.repl.co";
            $temp=scandir($dir);   //首先先读取文件夹         
            $level++;
            foreach($temp as $v){  //遍历文件夹
                $a=$dir.'/'.$v;   
                // echo "a:{$a}||","<br/>";                                 
                if(is_dir($a)){    //如果是文件夹则执行
                    if($v=='.' || $v=='..'){  //判断是否为系统隐藏的文件.和..  如果是则跳过
                       continue;
                    }
                    // echo str_repeat('——', $level-1).$v,"<br/>";
                    // echo "<a href=" . $address . mb_substr($a,22) . ">". mb_substr($a,1) . "</a>","<br>"; 
                    echo "<br/>";
                    echo "【 $v 】" . "<hr/>";
                    selectdir($a, $level);    //因为是文件夹所以再次调用 selectdir，把这个文件夹下的文件遍历出来
                }else{
                    // echo str_repeat('——', $level-1).$v,"<br/>";   
                    echo "<a href=" . $address . mb_substr($a,22) . ">". $v . "</a>","<br>";     // mb_substr($a,1)               
                }
            }
        }
        $path = "/home/runner/PHPTry1v1/resources_cfy";
        selectdir($path);
    ?>