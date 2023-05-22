<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HANDPHONE SHOP</title>
</head>
<body>
        <?php
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
            $member = $_POST['member'];
            $pembayaran = @$_POST['pembayaran'];
            $handphone1 = @$_POST['handphone1'];
            $handphone2 = @$_POST['handphone2'];
            $handphone3 = @$_POST['handphone3'];
            $handphone4 = @$_POST['handphone4'];
            $handphone5 = @$_POST['handphone5'];
            
            $harga_handphone = array (
                "handphone1" => 350000,
                "handphone2" => 465000,
                "handphone3" => 485000,
                "handphone4" => 865000,
                "handphone5" => 1624000,
            );

            $harga = 0;
            $diskon_member = 0.1;

        ?>
        
        <?php
            if(isset($_POST['submit'])){
                echo "Produk yang dibeli : <br><br>";

                if($handphone1 || $handphone2 || $handphone3 || $handphone4 || $handphone5 == true){
                    if($handphone1){
                        echo $handphone1. "<br>";
                        $harga += $harga_handphone['handphone1'];
                    }
                    if($handphone2){
                        echo $handphone2. "<br>";
                        $harga += $harga_handphone['handphone2'];
                    }
                    if($handphone3){
                        echo $handphone3. "<br>";
                        $harga += $harga_handphone['handphone3'];
                    }
                    if($handphone4){
                        echo $handphone4. "<br>";
                        $harga += $harga_handphone['handphone4'];
                    }
                    if($handphone5){
                        echo $handphone5. "<br>";
                        $harga += $harga_handphone['handphone5'];
                    }
                    echo "=========================<br>";

                    if($id && $nama && $email && $alamat && $pembayaran == true){
                        echo "Data Customer :<br><br>";
                        echo "ID Customer : ".$id. "<br>";
                        echo "Nama : ".$nama. "<br>";
                        echo "Emial : ".$email. "<br>";
                        echo "Alamat : ".$alamat. "<br>";
                        echo "Member : ".$member. "<br>";
                        echo "Pembayaran : ".$pembayaran. "<br>";
                        echo "Total Pembayaran : Rp.".$harga. "<br>";

                        if($member == "Member"){
                            echo "Diskon Member : 10%<br>";
                            $total_harga = $harga - ($harga * $diskon_member);
                        }else{
                            echo "Diskon Member : -<br>";
                            $total_harga = $harga;
                        }

                        echo "Pembayaran Akhir : Rp.".$total_harga;
                        
                    }else{
                        echo "Untuk melanjutkan transaksi, harap masukan data diri dengan lengkap!";
                    }
                    
                }else{
                    echo "Anda tidak memilih produk apapun.<br>";
                    echo "Mohon pilih produk untuk melanjutkan pemesanan!<br>";
                }
                
            }
        ?>
</body>
</html>