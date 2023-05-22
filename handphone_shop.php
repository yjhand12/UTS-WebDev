<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handphone Shop</title>
</head>
<form action="proses_handphone_shop.php" method="POST" name="submit">
<body>
        <h1>HANDPHONE SHOP</h1><br>
        <label>Produk GSM Mobile (Best Price) :</label><br><br>
            <input type="checkbox" name="handphone1" value="Nokia 1208 Rp.350.000,-">Nokia 1208 Rp.350.000,- <br> 
            <input type="checkbox" name="handphone2" value="Nokia 1661 Rp.465.000,-">Nokia 1661 Rp.465.000,-<br>
            <input type="checkbox" name="handphone3" value="SonyEricson K330 Rp.485.000,-">SonyEricson K330 Rp. 485.000,-<br>
            <input type="checkbox" name="handphone4" value="Samsung Champ Rp.865.000,-">Samsung Champ Rp.865.000,-<br>
            <input type="checkbox" name="handphone5" value="Samsung B3410 Rp.1.624.000,-">Samsung B3410 Rp.1.624.000,-<br><br>
        =======================================<br>
        <h3>Data Customer</h3>
        <label>ID Customer : </label><input type="number" name="id"><br><br>
        <label>Nama : </label><input type="text" name="nama"><br><br>
        <label>Email : </label><input type="email" name="email"><br><br>
        <label>Alamat : </label><input type="text" name="alamat"><br><br>
        <label>Member : </label><br>
            <input type="radio" name="member" value="Member" checked>Member<br>
            <input type="radio" name="member" value="Bukan" >Bukan<br><br>
        <label>Pembayaran :</label><br>
            <select name="pembayaran">
                <option disabled selected hidden>Pilih metode pembayaran</option>
                <option <?php echo @$_POST['pembayaran'] === 'VISA'; ?> >VISA</option>
                <option <?php echo @$_POST['pembayaran'] === 'Master Card'; ?> >Master Card</option>
                <option <?php echo @$_POST['pembayaran'] === 'Debit BCA'; ?> >Debit BCA</option>
                
            </select><br><br><br>

        <button type="submit" name="submit">Proses</button>
</body>
</form>
</html>