<!DOCTYPE html>
<html>
    <head> 
        <title>Julkalender</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Projekt-1Jul.CSS">
    </head>
    <body>
        <script src="projekt-1Jul.JS"></script>
        <h1>Julkalendern</h1>

        <div id="D12">
            <img id="b0" src="RedX.jpg" alt="" onclick="hide1()">

            <?php
            for($i=1;$i<24;$i++) {
                echo "<div onclick='pressed{$i}()'>1";
                echo "<img id='b{$i}' src='brown.png' alt=''>";
                echo "</div>";
                
            }
            ?>        
        </div>        
        
        <script>
            function hide1(){
                document.getElementById("b0").style.display = 'none';
            }

            function pressed1(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 1){
                    document.getElementById("b1").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }    
            }   
            function pressed2(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 2){
                    document.getElementById("b2").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed3(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 3){
                    document.getElementById("b3").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed4(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 4){
                    document.getElementById("b4").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed5(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 5){
                    document.getElementById("b5").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed6(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 6){
                    document.getElementById("b6").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed7(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 7){
                    document.getElementById("b7").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }
            function pressed8(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 8){
                    document.getElementById("b8").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed9(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 9){
                    document.getElementById("b9").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed10(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 10){
                    document.getElementById("b10").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed11(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 11){
                    document.getElementById("b11").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed12(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 12){
                    document.getElementById("b12").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed13(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 13){
                    document.getElementById("b13").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed14(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 14){
                    document.getElementById("b14").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed15(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 15){
                    document.getElementById("b15").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed16(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 16){
                    document.getElementById("b16").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed17(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 17){
                    document.getElementById("b17").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed18(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 18){
                    document.getElementById("b18").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed19(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 19){
                    document.getElementById("b19").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed20(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 20){
                    document.getElementById("b20").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed21(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 21){
                    document.getElementById("b21").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }                
            }  
            function pressed22(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 22){
                    document.getElementById("b22").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed23(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 23){
                    document.getElementById("b23").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
            function pressed24(){
                //var today = document.getElementById("current_date").value;
                if(year== 2022 && month == 11 && day == 24){
                    document.getElementById("b24").src = "tomteluva.png";
                }else{
                    document.getElementById("b0").style.display = 'block';
                    document.getElementById("b0").src = "RedX.jpg";
                }
            }  
        </script>   
    </body>
    
</html>
