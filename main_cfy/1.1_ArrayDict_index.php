
<html>
  <head>
    <title>PHP Test</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.3.6/require.min.js"></script>      
  </head>
  <body> 
    
    <div id="div1"><h2 id="h2_1">PHP: Array【foreach】示例</h2></div>  
    <button id="btn_1">点击获取</button>  
    <br/>
    <hr/>    
    <div id="div2"><h2 id="h2_2">结果：</h2></div>  
    <script >
        $(document).ready(function(){
        $("#btn_1").click(function(){      
          $('#h2_2').load('./data_cfy/1_ArrayDict/d1_foreach.php');               
        })
      })    
    </script>   

  </body>
</html>