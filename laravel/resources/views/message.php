<html>
   <head>
      <title>Ajax Example</title>
      <meta name="csrf-token" content="lPvEaJPWKkPIh1LIRPTOQEv5VTYMdS4P9ySGAzAO">
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      
      <script>
         function getMessage(){
            $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
            
            $.ajax({
               type:'POST',
               url:'/getmsg',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data){                  
                  $("#msg").html(data.msg);
               }
            });
         }
      </script>
   </head>
   
   <body>
      <div id = 'msg'>This message will be replaced using Ajax. 
         Click the button to replace the message.</div>
         <a href="javascript:void(0)" onClick=console.log('a');getMessage();>Click</a>      
   </body>

</html>