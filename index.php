<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="myStyle.css">

        <title>CIS2102: Final Exam</title>
        <script> </script>
    </head>
    <body>
        <div class="header"> <h2>RYAN OMONGOS</h2></div>
        <div style="background-color:  #FDFD96;"> <h2><center>Best Travel Destination in Philippines</center><h4 id="sum"></h4></div>
        <div class="container">
            <div class="row">
        <!--Php Starts-->
        <?php
            $candidate_list = file_get_contents('candidates.json');
            $decoded_json = json_decode($candidate_list, true);
            $candidates = $decoded_json['candidates'];
            foreach($candidates as $places){ 
                $name = $places['name'];
                $nmbr = $places['num'];
        ?>
            <div class="card flex-row">
                <img class="myImg card-img-left" src="img/candidate<?php echo $nmbr?>.jpg"/>
                <div class="card-body">
                    <h4 class="card-title h5 h4-sm"><?php echo $name?></h4>
                    <i class="glyphicon glyphicon-chevron-down" onclick="downVote(<?php echo $nmbr?>)"></i>
                    <i class="glyphicon glyphicon-chevron-up" onclick="upVote(<?php echo $nmbr?>)"></i>
                    <p id="sum<?php echo $nmbr?>"></p>
                </div>
            </div>
        <?php 
            }
        ?>
            </div>
        
        </div>

        <script>

            var counter = [];
            var x;
            for(x=0; x<8; x++){
                counter[x]=0;
            }
            function upVote(num){
                switch(num){
                    case 1:
                        counter[0]++;
                        document.getElementById('sum1').innerHTML = (counter[0]>=0)?counter[0]:0;
                        break;
                    case 2:
                        counter[1]++;
                        document.getElementById('sum2').innerHTML = (counter[1]>=0)?counter[1]:0;
                        break;
                    case 3:
                        counter[2]++;
                        document.getElementById('sum3').innerHTML = (counter[2]>=0)?counter[2]:0;
                        break;
                    case 4:
                        counter[3]++;
                        document.getElementById('sum4').innerHTML = (counter[3]>=0)?counter[3]:0;
                        break;
                    case 5:
                        counter[4]++;
                        document.getElementById('sum5').innerHTML = (counter[4]>=0)?counter[4]:0;
                        break;
                    case 6:
                        counter[5]++;
                        document.getElementById('sum6').innerHTML = (counter[5]>=0)?counter[5]:0;
                        break;
                    case 7:
                        counter[6]++;
                        document.getElementById('sum7').innerHTML = (counter[6]>=0)?counter[6]:0;
                        break;
                    case 8:
                        counter[7]++;
                        document.getElementById('sum8').innerHTML = (counter[7]>=0)?counter[7]:0;
                        break;    
                }
                
                
            }

            function downVote(num){
                switch(num){
                    case 1:
                        counter[0]--;
                        document.getElementById('sum1').innerHTML = (counter[0]>=0)?counter[0]:counter[0]=0;
                        break;
                    case 2:
                        counter[1]--;
                        document.getElementById('sum2').innerHTML = (counter[1]>=0)?counter[1]:counter[1]=0;
                        break;
                    case 3:
                        counter[2]--;
                        document.getElementById('sum3').innerHTML = (counter[2]>=0)?counter[2]:counter[2]=0;
                        break;
                    case 4:
                        counter[3]--;
                        document.getElementById('sum4').innerHTML = (counter[3]>=0)?counter[3]:counter[3]=0;
                        break;
                    case 5:
                        counter[4]--;
                        document.getElementById('sum5').innerHTML = (counter[4]>=0)?counter[4]:counter[4]=0;
                        break;
                    case 6:
                        counter[5]--;
                        document.getElementById('sum6').innerHTML = (counter[5]>=0)?counter[5]:counter[5]=00;
                        break;
                    case 7:
                        counter[6]--;
                        document.getElementById('sum7').innerHTML = (counter[6]>=0)?counter[6]:counter[6]=0;
                        break;
                    case 8:
                        counter[7]--;
                        document.getElementById('sum8').innerHTML = (counter[7]>=0)?counter[7]:counter[7]=0;
                        break;    
                }
                
            }

        </script>
    </body>
</html>
