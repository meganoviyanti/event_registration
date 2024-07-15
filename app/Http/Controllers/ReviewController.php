<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all(); // Ambil semua review dari database
        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer',
            'review' => 'required|string',
            'events_id' => 'required|integer', // tambahkan validasi untuk events_id
        ]);
    
        $review = new Review;
        $review->rating = $request->input('rating');
        $review->review = $request->input('review');
        $review->user_id = auth()->id(); // mengasumsikan Anda menggunakan autentikasi bawaan Laravel
        $review->events_id = $request->input('events_id'); // tambahkan events_id
    
        $review->save();
    
        return redirect()->route('reviews.index')->with('success', 'Ulasan berhasil ditambahkan');
    }
    
    // Metode untuk menampilkan review
    public function show($id)
    {
        $review = Review::findOrFail($id);
        return view('reviews.show', compact('review'));
    }

    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string',
        ]);

        // Perbarui data review di database
        $review->update([
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        // Redirect ke halaman yang sesuai, misalnya index reviews
        return redirect()->route('reviews.index')->with('success', 'Review updated successfully!');
    }

    public function destroy(Review $review)
    {
        // Hapus review dari database
        $review->delete();

        // Redirect ke halaman yang sesuai, misalnya index reviews
        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully!');
    }
}
