<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Review</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e0d8ca; /* Warna latar belakang coklat soft */
            padding: 20px;
            background-image: url('wood-texture.jpg'); /* Gambar latar belakang */
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            text-align: center;
            color: #4d3319; /* Warna judul */
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3); /* Efek bayangan pada teks */
            font-size: 2.5em; /* Ukuran teks judul sedikit lebih kecil */
        }
        form {
            max-width: 600px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.95); /* Transparansi pada latar belakang form */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
            color: #4d3319; /* Warna label */
        }
        input[type="number"], textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box; /* Untuk mengatur agar ukuran input dan textarea termasuk padding dan border */
        }
        input[type="number"]:focus, textarea:focus {
            outline: none;
            border-color: #007bff; /* Warna border input focus */
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
            resize: vertical; /* Biarkan textarea dapat diresize hanya secara vertikal */
        }

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
    </style>
</head>
<body class="light-mode">
    <div class="theme-toggle">
        <button onclick="toggleMode()">Dark or Light Mode</button>
    </div>
    <h1>EDIT REVIEW</h1>

    <form action="{{ route('reviews.update', $review->id) }}" method="post">
        @csrf
        @method('PATCH') <!-- Ubah method dari POST menjadi PATCH -->
        <label for="rating">Rating:</label>
        <input type="number" id="rating" name="rating" value="{{ $review->rating }}" required min="1" max="5">

        <label for="review">Review:</label>
        <textarea id="review" name="review" rows="6" required>{{ $review->review }}</textarea>

        <button type="submit">Update Review</button>
    </form>
    <script>
        function toggleMode() {
            document.body.classList.toggle('dark-mode');
        }
    </script>
</body>
</html>
