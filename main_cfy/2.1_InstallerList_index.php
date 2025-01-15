
<html>
  <head>
    <title>PHP Test</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.3.6/require.min.js"></script>      
  </head>
  <body> 
    
    <div id="div1"><h2 id="h2_1">获取【VSTO】安装包列表<?php echo '*************';?></h2></div>  
    <button id="btn_1">点击获取</button>    
    <div id="div2"><h2 id="h2_2">结果是：</h2></div>     
    <script>
      $(document).ready(function(){
        $("#btn_1").click(function(){
          $.post("./data_cfy/2_InstallerList/d2_scandir.php",{
            name:"菜鸟教程",
            url:"http://www.runoob.com"
          },
          function(data,status){
            document.getElementById("h2_2").innerHTML=data;
          });
        });
      });
      
     var myArr = ["Google", "Taobao", "Runoob", "Facebook" ];
     console.log(myArr);     
    </script> 
    <br/>
    <hr/>

  </body>
</html>