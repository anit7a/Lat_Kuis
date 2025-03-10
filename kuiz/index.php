<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">

</head>
<body>

<?php
    if(isset($_POST['bln'])){
        $bulan = $_POST['bln'];

        if($bulan== 'December' || $bulan== 'January' || $bulan== 'February'){
            header("Location: winter.php");
        }else if($bulan== 'March' || $bulan== 'April' || $bulan== 'May'){
            header("Location: spring.php");
        }else if($bulan== 'June' || $bulan== 'July' || $bulan== 'August'){
            header("Location: summer.php");
        }else if($bulan== 'September' || $bulan== 'October' || $bulan== 'November'){
            header("Location: autumn.php");
        }
        exit();
    }
    ?>

     <div  class="card position-absolute top-50 start-50 translate-middle" style="width: 30rem;">
    <div class = "card-body">
     <h5 class = "card-title text-center">what the <span style = "color: red">s</span><span style= "color: orange">e</span><span style="color: yellow">a</span><span style= "color: green">s</span><span style= "color: blue">o</span><span style= "color: purple">n</span> at that time?</h5>
        
     <form action="#" method="POST">
     <table class="table text-center">       
               <tr>
                 <td><input type="radio" name="bln" value="January"><label >January</label></td>
                 <td><input type="radio" name="bln" value="February"><label >February</label></td>
                 <td><input type="radio" name="bln" value="March"><label >March</label></td>
                 <td><input type="radio" name="bln" value="April"><label >April</label></td>
               </tr>
               <tr>
                 <td><input type="radio" name="bln" value="May"><label >May</label></td>
                 <td><input type="radio" name="bln" value="June"><label >June</label></td>
                 <td><input type="radio" name="bln" value="July"><label >July</label></td>
                 <td><input type="radio" name="bln" value="August"><label >August</label></td>
               </tr>
               <tr>
                 <td><input type="radio" name="bln" value="September"><label >September</label></td>
                 <td><input type="radio" name="bln" value="October"><label >October</label></td>
                 <td><input type="radio" name="bln" value="November"><label >November</label></td>
                 <td><input type="radio" name="bln" value="December"><label >December</label></td>
               </tr>
           </table>
           <div class = "text-center">
            <button type="submit" class="btn btn-primary">See Season</button>
           </div>
    </form>
     </div>
   </div>




</body>
</html>