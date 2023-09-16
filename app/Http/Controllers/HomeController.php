<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Category;
use App\Models\Field;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $fields = Field::all();
        $categories = Category::all();
        $items = Booking::where('status', 'pending');


        return view('welcome', [
            'categories' => $categories,
            'fields' => $fields,
            'items' => $items,
            'title' => 'All product'
        ]);
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $categories = Category::all();
        if ($category == NULL) {
            $fields = Field::all();
        } else {
            $fields = Field::where('kategori_id', $category->id)->orderBy('id', 'DESC')->get();
        }

        return view('home', [
            'title' => 'category',
            'category' => $category,
            'categories' => $categories,
            'fiel$fields' => $fields,
        ]);
    }

    public function detail($slug)
    {
        $fields = Field::where('slug', $slug)->first();
        $all = Field::orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('name', 'ASC')->get();


        return view('pages.customer.detail', [
            'title' => 'Detail',
            'fields' => $fields,
            'all' => $all,
            'categories' => $categories,
        ]);
    }

    public function booking($slug) {
        {
            $item = Booking::all();
            $fields = Field::where('slug', $slug)->first();
            $categories = Category::all();

            return view('pages.customer.checkout', [
                'title' => 'Manajemen lapangan',
                'categories' => $categories,
                'item' => $item,
                'fields' => $fields
            ]);
        }
    }
}
