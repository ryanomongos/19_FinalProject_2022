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
        <div class="header" style="background-color:  #FDFD96;"> <h2><center>Best Travel Destination in Philippines</center></h2></div>
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-body">                    
                        <h4>Sagada, Benguet</h4>
                        <p id="tally"></p>
                        <img src="img\candidate1.jpg" class="pfp" alt="Candidate 1">
                    </div>
                    
                    <div class="row">                        
                        <i class="glyphicon glyphicon-chevron-up" onclick="upVote()"></i>
                        <i class="glyphicon glyphicon-chevron-down" onclick="downVote()"></i>
                        <p id="sum"></p>
                    </div>
                    
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Vigan City, Ilocos Del Sur</h4>
                    </div>
                    <img src="img\candidate2.jpg" class="pfp" alt="Candidate 2">
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4>Taglucop Strawberry Hills, Bukidnon</h4>
                    </div>
                    <img src="img\candidate3.jpg" class="card-img-left pfp" alt="Candidate 3">
                </div>
                <div class="card">
                    <div class="card-body">                    
                        <h4>Sumilon Island, Cebu</h4>
                    </div>
                    <img src="img\candidate4.jpg" class="pfp" alt="Candidate 4">
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body">                    
                        <h4>Rizal Boulevard, Negros Oriental</h4>
                    </div>
                    <img src="img\candidate5.jpg" class="pfp" alt="Candidate 5">
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Rizal Shrine, Zamboanga del Norte</h4>
                    </div>
                    <img src="img\candidate6.jpg" class="pfp" alt="Candidate 6">
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body">                    
                        <h4>Batanes Islands, Batanes</h4>
                    </div>
                    <img src="img\candidate7.jpg" class="pfp" alt="Candidate 7">
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Mr. Apo, Davao de Oro</h4>
                    </div>
                    <img src="img\candidate8.jpg" class="card-img-left pfp" alt="Candidate 8">
                </div>
            </div>
        </div>    

        <script>
            var x = function upVote(){
                return 1;
            }
            var y = function downVote(){
                return -1;
            }
            
            var sum = x + y;

            document.getElementById("sum") = sum;

        </script>
    </body>
</html>
