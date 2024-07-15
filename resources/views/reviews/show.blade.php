<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Details</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ga+Maamli:wght@400;700&display=swap'); 

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

        .container {
            max-width: 800px;
            width: 100%;
            margin: 20px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #ff4081; /* Warna judul pink cerah */
            margin-bottom: 30px;
            font-size: 2.5em;
        }

        .review-info {
            background-color: #ffebee; /* Warna latar belakang item review merah muda */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .rating {
            font-size: 1.5em;
            color: #ff9800; /* Warna rating kuning */
            margin-bottom: 10px;
            text-align: center;
        }

        .review-text {
            color: #333; /* Warna teks review */
            line-height: 1.6;
            text-align: justify;
        }

        .actions {
            text-align: center;
            margin-top: 20px;
        }

        .actions a, .actions button {
            text-decoration: none;
            color: #fff; /* Warna teks tombol dan link */
            background-color: #4caf50; /* Warna tombol hijau */
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .actions button {
            background-color: #f44336; /* Warna tombol merah */
        }

        .actions a:hover, .actions button:hover {
            background-color: #388e3c; /* Warna tombol hover */
        }

        .light-mode {
            background-color: #e0d8ca;
            color: #4d3319;
        }

        .light-mode .container {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Dark Mode */
        .dark-mode {
            background-color: #222;
            color: #eee;
        }

        .dark-mode .container {
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
    <div class="container">
        <h1>Review Details</h1>

        <div class="review-info">
            <div class="rating">Rating: {{ $review->rating }}</div>
            <div class="review-text">{{ $review->review }}</div>
            <div class="actions">
                <a href="{{ route('reviews.edit', $review->id) }}">Edit</a>
                <form action="{{ route('reviews.destroy', $review->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this review?');" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>

        <a href="{{ route('reviews.index') }}" class="btn btn-primary">Back to Reviews</a>
    </div>
    <script>
        function toggleMode() {
            document.body.classList.toggle('dark-mode');
        }
    </script>
</body>
</html>