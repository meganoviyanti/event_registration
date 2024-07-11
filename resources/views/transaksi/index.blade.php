<!DOCTYPE html>
<html>
<head>
    <title>Transaction Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Transaction Form</h2>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="ticket_quantity">Ticket Quantity:</label>
            <input type="number" class="form-control" id="ticket_quantity" name="ticket_quantity" required>
        </div>
        <div class="form-group">
            <label for="total_price">Total Price:</label>
            <input type="number" class="form-control" id="total_price" name="total_price" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
