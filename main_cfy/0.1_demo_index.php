
<html>
  <head>
    <title>PHP Test</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.3.6/require.min.js"></script>      
  </head>
  <body> 
    
    <div id="div2"><h2 id="test3">使用 jQuery AJAX 来改变文本</h2></div>  
    <button id="btn3">调用M1_0_demo_post.php</button>    
    <script>
      $(document).ready(function(){
        $("#btn3").click(function(){
          $.post("./data_cfy/M1_0_demo_post.php",{
            name:"菜鸟教程",
            url:"http://www.runoob.com"
          },
          function(data,status){
            document.getElementById("test3").innerHTML=data ;
          });
        });
      });
    </script> 
    <br/>
    <hr/>
<!--  -->
    
  </body>
</html>