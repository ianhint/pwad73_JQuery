<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <script src="../js/jquery.min.js"></script>


</head>
<body>

      <form action="">
        Name:
        <input type="text" id="fullname" placeholder="Your Name.."><br><br>
        Address:
        <textarea id="address" placeholder="Your Address..."></textarea><br><br>
        <button type="button" class="btn_submit">Submit</button>
      </form>

      <!-- <button id="btn1">GEt Data From Server</button> -->

      <script>
        $(document).ready(function(){
            // $("#btn1").click(function(){
            //     $.get("data.php",{name:"Ismail"},function(data,status){
            //         alert(data);
            //     })
            // })

            $(".btn_submit").click(function(){
              let fullname =  $("#fullname").val();
              let address =  $("#address").val();
              alert (fullname);
              
              $.get("insert.php",{name :fullname,add :address},function(){
                alert(data);
              })
            })


        })
      </script>
    
</body>
</html>