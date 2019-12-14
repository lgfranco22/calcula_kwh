<!DOCTYPE html>
<html>
    <head>
        <meta >
        <meta charset="utf-8">
        <meta id="viewport" name="viewport" content="width=device-width, user-scalable=no">
        <title>CSS</title>
        <style>
        body{
            margin:0px;
        }
        input{
            background-color:white;
        }
        #bt{
            color:black;
            margin-bottom:10px;
        }
        header{
            height:60px;
            width:100%;
            background-color:green;
        }
        form, h1{
            
            text-align:center;
        }
        footer{
            height:60px;
            width:100%;
            background-color:green;   
        }
        </style>

    </head>
    <body>
            <?php
                require_once "recebe.php";
            ?>
    <header>

    </header>
        <nav>
            <h1>Calculo de KWh</h1>
            <form method="POST">
                <label>What Hora:</label><br>
                <input type="text" name="wh" required><br>
                <label>Horas por dia:</label><br>
                <input type="text" name="hrdia" required><br>
                <label>Dias por Mes:</label><br>
                <input type="text" name="diames" required><br>
                <label>Preco KWh:</label><br>
                <input type="text" name="precowh" required><br><br>
                <input type="submit" value="Calcular" id="bt">
            </form>
        </nav>
        <footer>

        </footer>
    </body>
</html>

        <!--  
        /*
        
            if(isset($_POST['name']) && !empty($_POST['name'])){
                if(isset($_POST['pass']) && !empty($_POST['pass'])){
                    $email = $_POST['name'];
                    $pass = $_POST['pass'];
                    echo 'Meu Email eh: '.$email.' e minha senha eh '.$pass;
                    echo '<hr>';
            }
        }
        */
        
        <form method="POST">
        <input type="text" name="name" id="name">
        <input type="password" name="pass" id="pass">
        <input type="submit" value="vai">
        </form>
        
        /*
            $x = 123;
            switch($x)
            {
                case 0:
                case 1:
                case 2:
                    echo "x eh de 0 a 2";
                    break;
                case 3:
                    echo "x eh 3";
                    break; 
                default:
                    echo "nada";
                    break;
            }
        */
        -->
          