<!DOCTYPE html>
<html>
    <head>
        <meta >
        <meta charset="utf-8">
        <meta id="viewport" name="viewport" content="width=device-width, user-scalable=no">
        <title>Cálculo de KWh</title>
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
                require "recebe.php";
            ?>
    <header>

    </header>
        <nav>
            <h1>Cálculo de KWh</h1>
            <form method="POST">
                <label>Watt/hora:</label><br>
                <input type="text" name="wh" required><br>
                <label>Horas por dia:</label><br>
                <input type="text" name="hrdia" required><br>
                <label>Dias por Mês:</label><br>
                <input type="text" name="diames" required><br>
                <label>Preço KWh:</label><br>
                <input type="text" name="precowh" required><br><br>
                <input type="submit" value="Calcular" id="bt">
            </form>
        </nav>
        <footer>

        </footer>
    </body>
</html>
          
