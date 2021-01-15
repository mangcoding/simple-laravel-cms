<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonials;

class TestimonialController extends Controller
{
    public function index() {
        return view("dashboard.testi.index");
    }

    public function create() {
        return view("dashboard.testi.create");
    }

    public function store(Request $request) {
        request()->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       if ($files = $request->file('avatar')) {
       	// Define upload path
           $destinationPath = public_path('/profile/'); // upload path
		// Upload Orginal Image           
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $testi = [
                "name" => $request->name,
                "position" => $request->position,
                "testimonials" => $request->testimonials,
                "star" => $request->star,
                "is_featured" => $request->is_featured == "on" ? true : false,
                "avatar" => $profileImage,
           ];

           Testimonials::create($testi);
        }
        
        return back()->with('success', 'Image Upload successfully');
    }
}
