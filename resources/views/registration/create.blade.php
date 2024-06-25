<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
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

        /* Styles for the popup */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .popup-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1>Formulir Pendaftaran</h1>

        <form id="registration-form" action="{{ route('registration.store') }}" method="POST">
            @csrf

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="telepon">Telepon:</label>
            <input type="text" id="telepon" name="telepon" required><br>

            <button type="submit">Simpan</button>
        </form>
    </div>

    <!-- Popup confirmation -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <h1>Registrasi Berhasil</h1>
            <p>Terima kasih telah mendaftar!</p>
            <a href="{{ route('registration.index') }}" class="nav-link">
                <button id="close-popup">Lanjutkan</button>
            </a>
        </div>
    </div>

    <script>
        document.getElementById('registration-form').addEventListener('submit', function(event) {
            event.preventDefault();
            // Show the popup
            document.getElementById('popup').style.display = 'flex';
        });

        document.getElementById('close-popup').addEventListener('click', function() {
            // Hide the popup and submit the form
            document.getElementById('popup').style.display = 'none';
            // Submit the form
            document.getElementById('registration-form').submit();
        });
    </script>
</body>
</html>
