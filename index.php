<?php
    error_reporting(0);
    require_once __DIR__."./lib/lotto_api.php";

    require_once __DIR__."./num.php";
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotto API</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark border-light shadow-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            Lotto API
        </a>
    </div>
    </nav>
    <div class="container text-center mt-3">
        <h2>ผลสลากกินแบ่งรัฐบาล งวดประจำวันที่ <span class="badge badge-success"> <?=$result_lotto['Latestdate']?></span></h2>
        <div class="row mx-auto mt-3">
            <div class="col-md-3 mt-1">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?=$result_lotto['PrizeFirst']['name']?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">รางวัลละ 6,000,000 บาท</h6>                     
                        <strong><?=$result_lotto['PrizeFirst']['number']?></strong>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-1">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?=$result_lotto['FrontThree']['name']?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">2 รางวัลๆละ 4,000 บาท</h6>
                          <strong><?=$result_lotto['FrontThree']['numberOne']?></strong> <strong><?=$result_lotto['FrontThree']['numberTwo']?></strong>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-1">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?=$result_lotto['BackThree']['name']?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">2 รางวัลๆละ 4,000 บาท</h6>
                        <strong><?=$result_lotto['BackThree']['numberOne']?></strong> <strong><?=$result_lotto['BackThree']['numberTwo']?></strong>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-1">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?=$result_lotto['BackTwo']['name']?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">1 รางวัลๆละ 2,000 บาท</h6>
                          <strong><?=$result_lotto['BackTwo']['number']?></strong>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-left">
                <h6 class="mt-2 lotto-text"><?=$result_lotto['PrizeFirstNear']['name']?></h6>
                <small>2 รางวัลๆละ 100,000 บาท </small>                                 
            </div>
            <div class="col-md-4">
                <br>
               <strong class="text-center"><?=$result_lotto['PrizeFirstNear']['numberOne']?></strong>
            </div>
            <div class="col-md-4">
                <br>
                <strong class="text-center"><?=$result_lotto['PrizeFirstNear']['numberTwo']?></strong>
            </div>

            <span class="border-inline"></span>


            <div class="col-md-12 text-center mt-3"> 
                <h5 class="lotto-text">ผลสลากกินแบ่งรัฐบาล <?=$result_lotto['PrizeSecond']['name']?> มี 5 รางวัลๆละ 200,000 บาท</h5>
            </div>


            <?php 
                for($i=0; $i<=count($numPrizeSecond); $i++) {?>
                <div class="col-md-2 ml-4">
                    <br>
                    <strong class="text-center"><?=$result_lotto['PrizeSecond'][$numPrizeSecond[$i]]?></strong>
                </div>
            <?php }?>

         
            <div class="col-md-12 text-center mt-3"> 
                <h5 class="lotto-text">ผลสลากกินแบ่งรัฐบาล <?=$result_lotto['PrizeThird']['name']?> มี 10 รางวัลๆละ 80,000 บาท</h5>
            </div>
            <?php for($i=0; $i<=count($numPrizeThird); $i++) {?>
                <div class="col-md-2 ml-4">
                    <br>
                    <strong class="text-center"><?=$result_lotto['PrizeThird'][$numPrizeThird[$i]]?></strong>
                </div>
            <?php }?>

     

            <div class="col-md-12 text-center mt-3"> 
                <h5 class="lotto-text">ผลสลากกินแบ่งรัฐบาล <?=$result_lotto['PrizeForth']['name']?> มี 50 รางวัลๆละ 40,000 บาท</h5>
            </div>
            <?php for($i=0; $i<=count($numPrizeForth); $i++) {?>
                <div class="col-md-2 ml-4">
                    <br>
                    <strong class="text-center"><?=$result_lotto['PrizeForth'][$numPrizeForth[$i]]?></strong>
                </div>
            <?php }?>


            <div class="col-md-12 text-center mt-3"> 
                <h5 class="lotto-text">ผลสลากกินแบ่งรัฐบาล <?=$result_lotto['PrizeFifth']['name']?> มี 100 รางวัลๆละ 20,000 บาท</h5>
            </div>
            <?php for($i=0; $i<=count($numPrizeFifth); $i++) {?>
                <div class="col-md-2 ml-4">
                    <br>
                    <strong class="text-center"><?=$result_lotto['PrizeFifth'][$numPrizeFifth[$i]]?></strong>
                </div>
            <?php }?>




        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>