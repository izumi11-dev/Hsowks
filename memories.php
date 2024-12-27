<?php

require_once("../db/dbconnnevction.php");
require_once("./navbar.php");

$nmm = "select * from nmm";

$res = $pdo->prepare($nmm);
$res->execute();

$datanmm = $res->fetchAll(PDO::FETCH_ASSOC);


$ama = "select * from ama";

$res = $pdo->prepare($ama);
$res->execute();

$dataama = $res->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUR MEMORIES</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
     <div class="container">
        <div class="row ">
            <div class="text-center mt-5">
                <h2>OUR MEMORIES</h2>
            </div>
            <div class="col mt-5"> 
                <div class="col text-center">
                    <h3>AYE MYAT AUNG</h3>
                 </div>
                
                <?php

foreach($dataama as $item){
    $heading = $item['heading'];
    $note = $item['note'];
    $id = $item['id'];
    $update = $item['update_at'];

 echo " <div class='col  ' >
     <div class='border border-dark-subtle mt-5 fs-4 shadow p-3 mb-5 bg-body-tertiary rounded'>
         <div class='col text-start  mt-2 text-danger fw-bold'>
             <small>$heading</small>
         </div>
         <div class='col mt-4'>

         $note

         </div>

         <div class='col mt-4 my-3 text-end me-4'>

         <small class='btn btn-dark'><i class='fa-solid fa-clock me-3'></i>$update</small>

         </div>
     </div>
 </div>";
}

?></div>
            <div class="col mt-5 ">
                 <div class="col text-center">
                    <h3>NAY MYO MAUNG</h3>
                 </div>
                
                <?php

foreach($datanmm as $item){
    $heading = $item['heading'];
    $note = $item['note'];
    $id = $item['id'];
    $update = $item['update_at'];

 echo " <div class='col  ' >
     <div class='border border-dark-subtle mt-5 fs-4 shadow p-3 mb-5 bg-body-tertiary rounded'>
         <div class='col text-start mt-2 text-danger fw-bold'>
             <small>$heading</small>
         </div>
         <div class='col mt-4'>

         $note

         </div>

         <div class='col mt-4 my-3 text-end me-4'>

         <small class='btn btn-dark'><i class='fa-solid fa-clock me-3'></i>$update</small>

         </div>
     </div>
 </div>";
}

?></div>
            
        </div>
     </div>
</body>
</html>


<?php

require_once("../footer/footer.php")
?>