<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Review</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ga+Maamli:wght@400;700&display=swap'); /* Sesuaikan URL sesuai ketersediaan font */

        /* Shared Styles */
        body {
            font-family: 'Ga Maamli', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        p.message {
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.2em;
            line-height: 1.5;
        }

        form {
            max-width: 600px;
            width: 100%;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }

        input[type="number"],
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="number"]:focus,
        textarea:focus {
            outline: none;
            border-color: #007bff;
        }

        button[type="submit"] {
            background-color: #4d3319; /* Warna tombol submit */
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #63462c; /* Warna tombol submit hover */
        }
        ::placeholder {
            color: #ccc; /* Warna placeholder */
        }
        textarea {
            resize: vertical;
        }

        /* Light Mode */
        .light-mode {
            background-color: #e0d8ca;
            color: #4d3319;
        }

        .light-mode form {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Dark Mode */
        .dark-mode {
            background-color: #222;
            color: #eee;
        }

        .dark-mode form {
            background-color: rgba(0, 0, 0, 0.8);
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.2);
            border: 1px solid #555;
        }

        .dark-mode label {
            color: #ccc;
        }

        .dark-mode input[type="number"],
        .dark-mode textarea {
            background-color: #333;
            color: #eee;
            border-color: #555;
        }

        .dark-mode input[type="submit"] {
            background-color: #555;
        }

        .dark-mode input[type="submit"]:hover {
            background-color: #777;
        }

        .dark-mode ::placeholder {
            color: #888;
        }

        /* Toggle Button Styles */
        .theme-toggle {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .theme-toggle button {
            background-color: gray;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .theme-toggle button:hover {
            background-color: skyblue;
        }

        /* Footer Styles */
        footer {
            background-color: #333;
            color: #eee;
            padding: 20px;
            text-align: center;
            font-size: 1em;
            border-top: 1px solid #555;
            position: absolute;
            bottom: 0;
            width: 100%;
            box-sizing: border-box;
        }

        .light-mode footer {
            background-color: #f8f8f8;
            color: #4d3319;
        }

        .light-mode footer {
            border-top: 1px solid #ddd;
        }
        .dark-mode footer {
            background-color: black;
            color: white;
        }

        .light-mode footer {
            border-top: 1px solid #ddd;
        }
    </style>
</head>

<body class="light-mode">
    <div class="theme-toggle">
        <button onclick="toggleMode()">Dark or Light Mode</button>
    </div>
    <h1>SAMPAIKAN RATING DAN ULASAN ANDA</h1>
   
    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
        <label for="rating">Rating:</label>
        <input type="number" name="rating" id="rating" required>

        <label for="review">Review:</label>
        <textarea name="review" id="review" required></textarea>

        <label for="events_id">Event ID:</label>
        <input type="number" name="events_id" id="events_id" required>

        <button type="submit">Kirim Ulasan</button>
    </form>

    <footer>
        Terima kasih telah menikmati festival musik kami! Kami berharap Anda memiliki pengalaman yang luar biasa. Kami ingin mendengar pendapat Anda tentang band favorit Anda. Berikan rating dari 1 sampai 100 dan ulasan Anda, dan masukkan Event ID dari acara band tersebut. Event ID bisa Anda temukan di jadwal acara atau di dibawah barcode tiket Anda.
    </footer>

    <script>
        function toggleMode() {
            document.body.classList.toggle('dark-mode');
        }
    </script>
</body>

</html>
