<?php
    $url = 'https://lotto.api.rayriffy.com/latest';

    $curl = curl_init();
    curl_setopt_array(
        $curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        )
    );

    $response = curl_exec($curl);
    curl_close($curl);

    $data = json_decode($response, true);
    // print_r($data);
    
    // exit();
    // print_r($response);


    foreach($data as $key => $value) {
        //รางวัลที่ 1
        if($value['prizes'][0]['id'] == 'prizeFirst') {
            $prizeFirst = [
                'name' => $value['prizes'][0]['name'],
                'number' => $value['prizes'][0]['number'][0],
                'reward' => $value['prizes'][0]['reward']
            ];
        }

        //รางวัลข้างเคียงรางวัลที่ 1
        if($value['prizes'][1]['id'] == 'prizeFirstNear') {
            $prizeFirstNear = [
                'name' => $value['prizes'][1]['name'],
                'numberOne' => $value['prizes'][1]['number'][0],
                'numberTwo' => $value['prizes'][1]['number'][1],
                'reward' => $value['prizes'][1]['reward']
            ];
        }

        //รางวัลที่ 2
        if($value['prizes'][2]['id'] == 'prizeSecond') {
            $prizeSecond = [
                'name' => $value['prizes'][2]['name'],
                'numberOne' => $value['prizes'][2]['number'][0],
                'numberTwo' => $value['prizes'][2]['number'][1],
                'numberThree' => $value['prizes'][2]['number'][2],
                'numberFour' => $value['prizes'][2]['number'][3],
                'numberFive' => $value['prizes'][2]['number'][4],
                'reward' => $value['prizes'][2]['reward']
            ];
        }

        //รางวัลที่ 3
        if($value['prizes'][3]['id'] == 'prizeThird') {
            $prizeThird = [
                'name' => $value['prizes'][3]['name'],
                'numberOne' => $value['prizes'][3]['number'][0],
                'numberTwo' => $value['prizes'][3]['number'][1],
                'numberThree' => $value['prizes'][3]['number'][2],
                'numberFour' => $value['prizes'][3]['number'][3],
                'numberFive' => $value['prizes'][3]['number'][4],
                'numberSix' => $value['prizes'][3]['number'][5],
                'numberSeven' => $value['prizes'][3]['number'][6],
                'numberEight' => $value['prizes'][3]['number'][7],
                'numberNine' => $value['prizes'][3]['number'][8],
                'numberTen' => $value['prizes'][3]['number'][9],
                'reward' => $value['prizes'][3]['reward']
            ];
        }

        //รางวัลที่ 4
        if($value['prizes'][4]['id'] == 'prizeForth') {
            $prizeForth = [
            'name' => $value['prizes'][4]['name'],
               'numberOne' => $value['prizes'][4]['number'][0],
               'numberTwo' => $value['prizes'][4]['number'][1], 
               'numberThree' => $value['prizes'][4]['number'][2], 
               'numberFour' => $value['prizes'][4]['number'][3], 
               'numberFive' => $value['prizes'][4]['number'][4],
               'numberSix' => $value['prizes'][4]['number'][5],
               'numberSeven' => $value['prizes'][4]['number'][6],
               'numberEight' => $value['prizes'][4]['number'][7],
               'numberNine' => $value['prizes'][4]['number'][8],
               'numberTen' => $value['prizes'][4]['number'][9],
               'numberEleven' => $value['prizes'][4]['number'][10],
               'numberTwelve' => $value['prizes'][4]['number'][11],
               'numberThirteen' => $value['prizes'][4]['number'][12],
               'numberFourteen' => $value['prizes'][4]['number'][13],
               'numberFifteen' => $value['prizes'][4]['number'][14],
               'numberSixteen' => $value['prizes'][4]['number'][15],
               'numberSeventeen' => $value['prizes'][4]['number'][16],
               'numberEighteen' => $value['prizes'][4]['number'][17],
               'numberNineteen' => $value['prizes'][4]['number'][18],
               'numberTwenty' => $value['prizes'][4]['number'][19],
               'numberTwentyOne' => $value['prizes'][4]['number'][20],
               'numberTwentyTwo' => $value['prizes'][4]['number'][21],
               'numberTwentyThree' => $value['prizes'][4]['number'][22],
               'numberTwentyFour' => $value['prizes'][4]['number'][23],
               'numberTwentFive' => $value['prizes'][4]['number'][24],
               'numberTwentySix' => $value['prizes'][4]['number'][25],
               'numberTwentySeven' => $value['prizes'][4]['number'][26],
               'numberTwentyEight' => $value['prizes'][4]['number'][27],
               'numberTwentyNine' => $value['prizes'][4]['number'][28],
               'numberThirty' => $value['prizes'][4]['number'][29],
               'numberThirtyOne' => $value['prizes'][4]['number'][30],
               'numberThirtyTwo' => $value['prizes'][4]['number'][31],
               'numberThirtyThree' => $value['prizes'][4]['number'][32],
               'numberThirtyFour' => $value['prizes'][4]['number'][33],
               'numberTwentFive' => $value['prizes'][4]['number'][34],
               'numberThirtySix' => $value['prizes'][4]['number'][35],
               'numberThirtySeven' => $value['prizes'][4]['number'][36],
               'numberThirtyEight' => $value['prizes'][4]['number'][37],
               'numberThirtyNine' => $value['prizes'][4]['number'][38],
               'numberFifty' => $value['prizes'][4]['number'][39],
               'numberFortyOne' => $value['prizes'][4]['number'][40],
               'numberFortyTwo' => $value['prizes'][4]['number'][41],
               'numberFortyThree' => $value['prizes'][4]['number'][42],
               'numberFortyFour' => $value['prizes'][4]['number'][43],
               'numberTwentFive' => $value['prizes'][4]['number'][44],
               'numberFortySix' => $value['prizes'][4]['number'][45],
               'numberFortySeven' => $value['prizes'][4]['number'][46],
               'numberFortyEight' => $value['prizes'][4]['number'][47],
               'numberFortyNine' => $value['prizes'][4]['number'][48],
               'numberFifty' => $value['prizes'][4]['number'][49],
                'reward' => $value['prizes'][4]['reward']
            ];
        }

        //รางวัลที่ 5
        if($value['prizes'][5]['id'] == 'prizeFifth') {
            $prizeFifth = [
                'name' => $value['prizes'][5]['name'],
                'numberOne' => $value['prizes'][5]['number'][0],
                'numberTwo' => $value['prizes'][5]['number'][1], 
                'numberThree' => $value['prizes'][5]['number'][2], 
                'numberFour' => $value['prizes'][5]['number'][3], 
                'numberFive' => $value['prizes'][5]['number'][4],
                'numberSix' => $value['prizes'][5]['number'][5],
                'numberSeven' => $value['prizes'][5]['number'][6],
                'numberEight' => $value['prizes'][5]['number'][7],
                'numberNine' => $value['prizes'][5]['number'][8],
                'numberTen' => $value['prizes'][5]['number'][9],
                'numberEleven' => $value['prizes'][5]['number'][10],
                'numberTwelve' => $value['prizes'][5]['number'][11],
                'numberThirteen' => $value['prizes'][5]['number'][12],
                'numberFourteen' => $value['prizes'][5]['number'][13],
                'numberFifteen' => $value['prizes'][5]['number'][14],
                'numberSixteen' => $value['prizes'][5]['number'][15],
                'numberSeventeen' => $value['prizes'][5]['number'][16],
                'numberEighteen' => $value['prizes'][5]['number'][17],
                'numberNineteen' => $value['prizes'][5]['number'][18],
                'numberTwenty' => $value['prizes'][5]['number'][19],
                'numberTwentyOne' => $value['prizes'][5]['number'][20],
                'numberTwentyTwo' => $value['prizes'][5]['number'][21],
                'numberTwentyThree' => $value['prizes'][5]['number'][22],
                'numberTwentyFour' => $value['prizes'][5]['number'][23],
                'numberTwentFive' => $value['prizes'][5]['number'][24],
                'numberTwentySix' => $value['prizes'][5]['number'][25],
                'numberTwentySeven' => $value['prizes'][5]['number'][26],
                'numberTwentyEight' => $value['prizes'][5]['number'][27],
                'numberTwentyNine' => $value['prizes'][5]['number'][28],
                'numberThirty' => $value['prizes'][5]['number'][29],
                'numberThirtyOne' => $value['prizes'][5]['number'][30],
                'numberThirtyTwo' => $value['prizes'][5]['number'][31],
                'numberThirtyThree' => $value['prizes'][5]['number'][32],
                'numberThirtyFour' => $value['prizes'][5]['number'][33],
                'numberTwentFive' => $value['prizes'][5]['number'][34],
                'numberThirtySix' => $value['prizes'][5]['number'][35],
                'numberThirtySeven' => $value['prizes'][5]['number'][36],
                'numberThirtyEight' => $value['prizes'][5]['number'][37],
                'numberThirtyNine' => $value['prizes'][5]['number'][38],
                'numberFifty' => $value['prizes'][5]['number'][39],
                'numberFortyOne' => $value['prizes'][5]['number'][40],
                'numberFortyTwo' => $value['prizes'][5]['number'][41],
                'numberFortyThree' => $value['prizes'][5]['number'][42],
                'numberFortyFour' => $value['prizes'][5]['number'][43],
                'numberTwentFive' => $value['prizes'][5]['number'][44],
                'numberFortySix' => $value['prizes'][5]['number'][45],
                'numberFortySeven' => $value['prizes'][5]['number'][46],
                'numberFortyEight' => $value['prizes'][5]['number'][47],
                'numberFortyNine' => $value['prizes'][5]['number'][48],
                'numberFifty' => $value['prizes'][5]['number'][49],
                'numberFiftyOne' => $value['prizes'][5]['number'][50],
                'numberFiftyTwo' => $value['prizes'][5]['number'][51],
                'numberFiftyThree' => $value['prizes'][5]['number'][52],
                'numberFiftyFour' => $value['prizes'][5]['number'][53],
                'numberTwentFive' => $value['prizes'][5]['number'][54],
                'numberFiftySix' => $value['prizes'][5]['number'][55],
                'numberFiftySeven' => $value['prizes'][5]['number'][56],
                'numberFiftyEight' => $value['prizes'][5]['number'][57],
                'numberFiftyNine' => $value['prizes'][5]['number'][58],
                'numberSixty' => $value['prizes'][5]['number'][59],
                'numberSixtyOne' => $value['prizes'][5]['number'][60],
                'numberSixtyTwo' => $value['prizes'][5]['number'][61],
                'numberSixtyThree' => $value['prizes'][5]['number'][62],
                'numberSixtyFour' => $value['prizes'][5]['number'][63],
                'numberTwentFive' => $value['prizes'][5]['number'][64],
                'numberSixtySix' => $value['prizes'][5]['number'][65],
                'numberSixtySeven' => $value['prizes'][5]['number'][66],
                'numberSixtyEight' => $value['prizes'][5]['number'][67],
                'numberSixtyNine' => $value['prizes'][5]['number'][68],
                'numberSeventy' => $value['prizes'][5]['number'][69],
                'numberSeventyOne' => $value['prizes'][5]['number'][70],
                'numberSeventyTwo' => $value['prizes'][5]['number'][71],
                'numberSeventyThree' => $value['prizes'][5]['number'][72],
                'numberSeventyFour' => $value['prizes'][5]['number'][73],
                'numberTwentFive' => $value['prizes'][5]['number'][74],
                'numberSeventySix' => $value['prizes'][5]['number'][75],
                'numberSeventySeven' => $value['prizes'][5]['number'][76],
                'numberSeventyEight' => $value['prizes'][5]['number'][77],
                'numberSeventyNine' => $value['prizes'][5]['number'][78],
                'numberEighty' => $value['prizes'][5]['number'][79],
                'numberEightyOne' => $value['prizes'][5]['number'][80],
                'numberEightyTwo' => $value['prizes'][5]['number'][81],
                'numberEightyThree' => $value['prizes'][5]['number'][82],
                'numberEightyFour' => $value['prizes'][5]['number'][83],
                'numberTwentFive' => $value['prizes'][5]['number'][84],
                'numberEightySix' => $value['prizes'][5]['number'][85],
                'numberEightySeven' => $value['prizes'][5]['number'][86],
                'numberEightyEight' => $value['prizes'][5]['number'][87],
                'numberEightyNine' => $value['prizes'][5]['number'][88],
                'numberNinety' => $value['prizes'][5]['number'][89],
                'numberNinetyOne' => $value['prizes'][5]['number'][90],
                'numberNinetyTwo' => $value['prizes'][5]['number'][91],
                'numberNinetyThree' => $value['prizes'][5]['number'][92],
                'numberNinetyFour' => $value['prizes'][5]['number'][93],
                'numberTwentFive' => $value['prizes'][5]['number'][94],
                'numberNinetySix' => $value['prizes'][5]['number'][95],
                'numberNinetySeven' => $value['prizes'][5]['number'][96],
                'numberNinetyEight' => $value['prizes'][5]['number'][97],
                'numberNinetyNine' => $value['prizes'][5]['number'][98],
                'numberOnehundred' => $value['prizes'][5]['number'][99],
                'reward' => $value['prizes'][5]['reward']
            ];
        }


        if(is_array($value['runningNumbers']) || is_object($value['runningNumbers'])) {
            foreach($value['runningNumbers'] as $vl) {
                //รางวัลเลขหน้า 3 ตัว
                if($vl['id'] == 'runningNumberFrontThree') {
                    $lottoFrontThree = [
                        'name' => $vl['name'],
                        'numberOne' => $vl['number'][0],
                        'numberTwo' => $vl['number'][1],
                        'reward' => $vl['reward']
                    ];
                }

                //รางวัลเลขท้าย 3 ตัว
                if($vl['id'] == 'runningNumberBackThree') {
                    $lottoBackThree = [
                        'name' => $vl['name'],
                        'numberOne' => $vl['number'][0],
                        'numberTwo' => $vl['number'][1],
                        'reward' => $vl['reward']
                    ];
                }

                //รางวัลเลขท้าย 2 ตัว
                if($vl['id'] == 'runningNumberBackTwo') {
                    $lottoBackTwo = [
                        'name' => $vl['name'],
                        'number' => $vl['number'][0],
                        'reward' => $vl['reward']
                    ];
                }
            }


            $latestDate = $value['date'];

            $result_lotto = [
                'PrizeFirst' => $prizeFirst,
                'PrizeFirstNear' => $prizeFirstNear,
                'PrizeSecond' => $prizeSecond,
                'PrizeThird' => $prizeThird,
                'PrizeForth' => $prizeForth,
                'PrizeFifth' => $prizeFifth,
                'FrontThree' => $lottoFrontThree,
                'BackThree' => $lottoBackThree,
                'BackTwo' => $lottoBackTwo,
                'Latestdate' => $latestDate
            ];

            // print_r($result_lotto);

             
        }
      
    }

   


?>