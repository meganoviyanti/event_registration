<!DOCTYPE html>
<html>
<head>
    <title>Transaksi Pembelian Tiket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Transaksi Pembelian Tiket</h1>
        <form action="{{ route('transaction.process') }}" method="POST">
            @csrf
            <!-- Add any additional fields needed for the transaction -->
            <label for="card_number">Nomor Kartu:</label>
            <input type="text" id="card_number" name="card_number" required><br>

            <label for="expiration_date">Tanggal Kedaluwarsa:</label>
            <input type="text" id="expiration_date" name="expiration_date" required><br>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required><br>

            <button type="submit">Proses Pembayaran</button>
        </form>
    </div>
</body>
</html>
