<form action="tugas2.php" name="frmBelanja"  method="POST">
<table border="1" cellpadding="10" align="center">
    <thead>
        <tr bgcolor="orange">
            <th colspan="2">Form Belanja</th>
             </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nama Customer</td>
            <td><input type="text" name="customer" value="" size="50" /></td>
        </tr>
        <tr>
            <td>Produk Pilihan</td>
            <td>TV : Rp. 3.000.000 <br> AC : Rp. 4.000.000 <br> Mesin Cuci : 2.500.000 <br> Kulkas : Rp. 5.000.000<br/>
                <select name="produk">
                    <option value="">---Pilihan Produk---</option>
                    <option value="Tv">TV</option>
                    <option value="Ac">AC</option>
                    <option value="Mesin Cuci">Mesin Cuci</option>
                    <option value="Kulkas">Kulkas</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Jumlah Beli </td>
            <td><input type="text" name="Jumlah" value="" size="5" /></td>
        </tr>
    </tbody>

    <tfoot>
        <tr bgcolor="grey">
            <th colspan="2">
                <input type="submit" value="Simpan" name="proses" >
            </th>
             </tr>
    </tfoot>
</table>
</form>
<hr>


<?php
	$customer=$_POST["customer"];
	$produk=$_POST["produk"];
	$jlh=$_POST["Jumlah"];
	$proses=$_POST["proses"];

	// harga satuan
	switch ($produk) 
	{
		case "Tv":
			$harga="3000000";
			break;
		case "AC":
			$harga="4000000";
			break;
		case "Mesin Cuci":
			$harga="2500000";
			break;
		case "Kulkas":
			$harga="5000000";
			break;
		default:
			$harga=0;
			break;
	}

	$total_harga= $harga*$jlh;
	$disc=$total_harga*0.20; 
	$ppn=($total_harga-$disc)*0.1;
	$hbersih=($total_harga-$disc)+$ppn;

	
	if (!empty($proses)) 
		{
			echo'Nama Customer: '.$customer;
			echo'<br/>Produk Pilihan: '.$produk;
			echo'<br/>Jumlah Belanja: '.$jlh;
			echo'<br/>Harga Satuan: '. number_format($harga);
			echo'<br/>Total Belanja: '.number_format($total_harga);
			echo'<br/>Potongan Diskon 20%: '.number_format($disc);
			echo'<br/>Pajak 10%: '.number_format($ppn);
			echo'<br/>Harus Dibayar: '.number_format($hbersih);
		}
    
?>
