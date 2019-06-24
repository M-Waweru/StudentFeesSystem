<?php

namespace App\Http\Controllers;

use App\Review;
use App\Car;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function addReview()
    {
        return view('review.addreviews');
    }

    public function storeReview(Request $request)
    {
        $validated = $request->validate([
            'carid' => 'required',
            'carreview' => 'required',
        ]);

        $id = $request->input('carid');
        $review = $request->input('carreview');

        $reviews = new Review;
        $reviews->car_id = $id;
        $reviews->content = $review;

        if ($reviews->save()) {
            $request->session()->flash('success', 'Save successful');
        } else {
            $request->flash('failure', 'Ooh, something went wrong');
        }

        return redirect('/addreview');
    }

    public function getCar($id)
    {
        $car = Car::where('id', '=', $id)->get();
        // return $car;
        return view('car.particularcar', ['car' => $car]);
    }

    public function getCarReviews($id)
    {
        $carreviews = Review::where('id', '=', $id)->get();
        return view('review.carreviews', ['cars' => $carreviews]);
        // return $carreviews;
    }

    public function getApiCarReviews($id)
    {
        $carreviews = Review::where('id', '=', $id)->get();
        return response()->json($carreviews);
    }
}
