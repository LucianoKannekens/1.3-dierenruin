<!DOCTYPE html>
<?php
    require ("dierDB.php");
    
    
?>
<html>
    <head>
        <title>lege verblijven</title>
        <link rel="stylesheet" href="styles.css"/>
    </head>
    <body>
        <div id="verblijf">
        <form method="POST">
           <!--knop naar home pagina -->
        <input type="submit" name="btnHome" value="HOME" class="homebtn"/>
        <?php
            if(isset($_POST['btnHome'])){
                header('location:home.php');
            }
        ?></br>
            verblijf nummer:<input type="text" name="txtverblijf_num"/><br/>
            gebied:<select  name="gebied">
                    <option value="">                   </option>
                    <option value="Afrika">       Afrika</option>
                    <option value="Australië">    Australië</option>
                    <option value="Azië">         Azië</option>
                    <option value="Europa">       Europa</option>
                    <option value="Oceanium">     Oceanium</option>
                    <option value="Noord-Amerika">Noord-Amerika</option>
                    <option value="Zuid-Amerika"> Zuid-Amerika</option>
                  </select><br/>
            <input type="submit" name="btnSave" value="TOEVOEGEN"
            style="width: 150px; height: 25px; background-color: rgb(232, 255, 198);  border-color: green;"/>
        </form>
        
        <?php
        if(isset($_POST['btnSave']))
        {
            
            $verblijf_num=$_POST['txtverblijf_num'];
            $gebied=$_POST['gebied'];

            $query1="INSERT INTO verblijf ( verblijf_num, gebied) values($verblijf_num,'$gebied' )";
            $stm=$conn->prepare($query1);
            if($stm->execute());
                echo "gelukt";
        }

        ?>
        </div>
        
    </body>
    

</html>