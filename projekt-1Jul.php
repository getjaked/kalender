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
            for($i=1;$i<=24;$i++) {
                echo "<div onclick='pressed{$i}()'>$i";
                echo "<img id='b{$i}' src='brown.png' alt=''>";
                echo "</div>";                
            }
            ?>        
        </div>        
        
        <script>
            function hide1(){
                document.getElementById("b0").style.display = 'none';
            }
            <?php
            for($i=1;$i<=24;$i++) {
                ?>

                function pressed<?php echo $i;?>() {
                    if(year== 2022 && month == 11 && day == <?php echo $i;?>) {
                        document.getElementById(<?php echo "b$i";?>).src = "tomteluva.png";
                    }else{
                        document.getElementById("b0").style.display = 'block';
                        document.getElementById("b0").src = "RedX.jpg";
                    }
                } 
                
                    <?php
        }
        ?>
        </script>   
    </body>
    
</html>