<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestNews = News::latest()->take(3)->get();
        $upcomingEvents = Event::where('date', '>=', now())->orderBy('date')->take(3)->get();
        $testimonials = Testimonial::latest()->take(3)->get();
        
        return view('pages.home', compact('latestNews', 'upcomingEvents', 'testimonials'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function academics()
    {
        return view('pages.academics');
    }

    public function admissions()
    {
        return view('pages.admissions');
    }

    public function news()
    {
        $news = News::latest()->paginate(6);
        return view('pages.news', compact('news'));
    }

    public function events()
    {
        $events = Event::orderBy('date')->paginate(6);
        return view('pages.events', compact('events'));
    }

    public function gallery()
    {
        $galleries = Gallery::with('images')->latest()->paginate(12);
        return view('pages.gallery', compact('galleries'));
    }

    public function testimonials()
    {
        $testimonials = Testimonial::latest()->paginate(6);
        return view('pages.testimonials', compact('testimonials'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
