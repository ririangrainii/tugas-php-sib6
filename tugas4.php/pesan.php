<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pesanan Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        h2 {
            margin-bottom: 20px;
        }

        .detail-pesanan {
            margin-bottom: 20px;
        }

        .detail-pesanan p {
            margin: 5px 0;
        }

        .btn-back {
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Detail Pesanan Produk</h2>
        <div class="detail-pesanan">
            <p><strong>Nama Produk:</strong> Kopi Padan</p>
            <p><strong>Jumlah:</strong> 2</p>
            <p><strong>Total Harga:</strong> Rp 40.000</p>
        </div>
        <button class="btn-back" onclick="window.history.back()">Kembali</button>
    </div>
</body>
</html>
