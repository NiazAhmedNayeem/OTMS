<?php

namespace App\Http\Controllers;

use App\Mail\EnrollConfirmationMail;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
//    private $data = [];
//
//    public function sendMail()
//    {
//        $this->data = ['name' => 'BITM', 'course' => 'Laravel'];
//        Mail::to('niazahmed.net@gmail.com')->send(new EnrollConfirmationMail($this->data));
//        return 'success';
//    }
//

    public function index()
    {
        return view('website.home.index', [
            'recent_courses' => Course::where('status', 1)->orderBy('id', 'desc')->take(9)->get(),
            'offer_courses'  => Course::where('offer_status', 1)->orderBy('id', 'desc')->take(10)->get(),
            'courses'  => Course::where('status', 1)->orderBy('id', 'desc')->take(6)->get(),
            'popular_courses' => Course::where('status', 1)->orderBy('hit_count', 'desc')->take(6)->get(),
        ]);
    }

    public function about()
    {
        return view('website.about.index');
    }

    public function categoryTraining($id)
    {
        return view('website.category.index', ['courses' => Course::where('category_id', $id)->orderBy('id', 'desc')->get()]);
    }

    public function allTraining()
    {
        return view('website.training.index', ['courses' => Course::where('status', 1)->orderBy('id', 'desc')->simplePaginate(6)]);
    }

    public function trainingDetail($id)
    {


        return view('website.training.detail', ['course' => Course::updateHitCount($id)]);
    }

    public function contact()
    {
        return view('website.contact.index');
    }

    public function loginRegistration()
    {
        return view('website.auth.index');
    }
}
