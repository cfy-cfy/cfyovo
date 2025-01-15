
<html>
  <head>
    <title>PHP Test</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.3.6/require.min.js"></script>      
  </head>
  <body> 
    
    <div id="div1"><h2 id="h2_1">获取【VSTO】安装包列表<?php echo '*************';?></h2></div>  
    <button id="btn_1">点击获取</button>
    <button id="btn_2">发送邮件</button>  
    <hr/>      
    <div id="div2">
      <h2 id="h2_2"></h2>
      <hr/>       
      <h2 id="h2_3"></h2> 
      <hr/>       
    </div>     
    
    <script>
 // ——————————————————————————————————————————————————————————————【获取安装包列表】     
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

    <script>  
// ——————————————————————————————————————————————————————————————【发送邮件】      
     $(document).ready(function(){
        $("#btn_2").click(function(){
          $.post("./data_cfy/3_Mail/d3_sendEmail.php",{
            name:"菜鸟教程",
            url:"http://www.runoob.com"
          },
          function(data,status){
            document.getElementById("h2_3").innerHTML="<?php echo "finish".date('时间：Y年m月d日  H:i'); ?> ";   
          });
        });
      });
    </script>       

  </body>
</html>