<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
<form method="POST"> 
        <h1>Demo Operator</h1> 
        <h2>Arithmetic</h2>  
            <table width="30%" border="2"> 
                <tr> 
                    <td align="center">Operand Kiri</td> 
                    <td align="center">Operator</td> 
                    <td align="center">Operand Kanan</td> 
                    <td align="center"></td> 
                </tr> 
                <tr>
                    <td><input type="text" name="bilangan1"></td> 
                    <td>
                        <select name="operasi"> 
                            <option value="+">+</option> 
                            <option value="-">-</option> 
                            <option value="*">*</option> 
                            <option value="/">/</option> 
                            <option value="%">%</option> 
                        </select>
                    </td> 
                    <td><input type="text" name="bilangan2"></td> 
                    <td><button type="submit" name="submit">Submit</button></td>
                </tr>
        </table> 
        <?php 

            $bilangan1 = @$_POST['bilangan1'];
            $bilangan2 = @$_POST['bilangan2'];
            $operasi = $_POST['operasi'];
        ?>
        <?php
            
            if(isset($_POST['submit'])){

                if($bilangan1 && $bilangan2 == true){
                    if($operasi == "+"){
                        $hasil = $bilangan1 + $bilangan2;
                    }elseif($operasi == "-"){
                        $hasil = $bilangan1 - $bilangan2;
                    }elseif($operasi == "*"){
                        $hasil = $bilangan1 * $bilangan2;
                    }elseif($operasi == "/"){
                        $hasil = $bilangan1 / $bilangan2;
                    }elseif($operasi == "%"){
                        $hasil = $bilangan1 % $bilangan2;
                    }

                    echo "<br><br><br>
                    <table width='10%'' border='2'>
                        <tr>
                            <td align='center'>Hasil</td> 
                        </tr>
                        <tr>
                            <td align='center'>".$hasil."</td>
                        </tr>
                    </table>";
                }else{
                    echo"<br>Harap masukan operand kanan dan operand kiri";
                }
            }
        ?> 
    </form> 
</body>
</html>