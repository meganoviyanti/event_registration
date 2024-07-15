<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Reviews</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #1c1c1c; /* Warna latar belakang gelap */
            color: #f5f5f5; /* Warna teks terang */
            padding: 20px;
            background-image: url('concert-background.jpg'); /* Gambar latar belakang konser */
            background-size: cover;
            background-repeat: no-repeat;
        }
        h1 {
            text-align: center;
            color: #f44336; /* Warna merah mencolok */
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5); /* Efek bayangan pada teks */
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: rgba(34, 34, 34, 0.9); /* Latar belakang item dengan transparansi */
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out;
        }
        li:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
            transform: translateY(-5px);
        }
        .rating {
            font-size: 20px;
            color: #ffeb3b; /* Warna rating kuning */
            margin-bottom: 10px;
        }
        .review-text {
            margin-bottom: 15px;
            color: #e0e0e0; /* Warna teks review */
        }
        .actions {
            margin-top: 10px;
        }
        .actions a, .actions button {
            text-decoration: none;
            color: #03a9f4; /* Warna link biru */
            margin-right: 15px;
            cursor: pointer;
        }
        .actions button {
            background-color: #ff5722; /* Warna tombol oranye */
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .actions button:hover {
            background-color: #e64a19; /* Warna tombol hover */
        }
        .create-button {
            text-align: center;
            margin-bottom: 20px;
        }
        .create-button a {
            background-color: #4caf50; /* Warna tombol hijau */
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .create-button a:hover {
            background-color: #45a049; /* Warna tombol hover */
        }
        .back-to-home {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .back-to-home a {
            background-color: #a55102; /* Warna tombol biru */
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .back-to-home a:hover {
            background-color: #868889; /* Warna tombol hover */
        }
    </style>
</head>
<body>
    <div class="back-to-home">
        <a href="{{ route('home') }}">Back to Home</a>
    </div>

    <h1>All Reviews</h1>

    <div class="create-button">
        <a href="{{ route('reviews.create') }}">Create New Review</a>
    </div>

    <ul>
        @foreach($reviews as $review)
            <li>
                <div class="rating">Rating: {{ $review->rating }}</div>
                <div class="review-text">{{ $review->review }}</div>
                <div class="actions">
                    <a href="{{ route('reviews.show', $review->id) }}">Show</a>
                    <a href="{{ route('reviews.edit', $review->id) }}">Edit</a>
                    <form action="{{ route('reviews.destroy', $review->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this review?');" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</body>
</html>
