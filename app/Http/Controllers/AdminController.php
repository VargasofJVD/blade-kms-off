<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Student;
use App\Models\Admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function dashboard()
    {
        $stats = [
            'totalStudents' => Student::count(),
            'pendingAdmissions' => Admission::where('status', 'pending')->count(),
            'totalNews' => News::count(),
            'totalEvents' => Event::count(),
        ];

        $recentAdmissions = Admission::latest()->take(5)->get();
        $upcomingEvents = Event::where('date', '>=', now())->orderBy('date')->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentAdmissions', 'upcomingEvents'));
    }

    // News Management
    public function news()
    {
        $news = News::latest()->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    public function createNews()
    {
        return view('admin.news.create');
    }

    public function storeNews(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news', 'public');
            $data['image'] = $imagePath;
        }

        News::create($data);

        return redirect()->route('admin.news')->with('success', 'News created successfully!');
    }

    public function editNews(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function updateNews(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $imagePath = $request->file('image')->store('news', 'public');
            $data['image'] = $imagePath;
        }

        $news->update($data);

        return redirect()->route('admin.news')->with('success', 'News updated successfully!');
    }

    public function deleteNews(News $news)
    {
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        $news->delete();

        return redirect()->route('admin.news')->with('success', 'News deleted successfully!');
    }

    // Events Management
    public function events()
    {
        $events = Event::latest()->paginate(10);
        return view('admin.events.index', compact('events'));
    }

    public function createEvent()
    {
        return view('admin.events.create');
    }

    public function storeEvent(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'venue' => 'required|max:255'
        ]);

        Event::create($request->all());

        return redirect()->route('admin.events')->with('success', 'Event created successfully!');
    }

    public function editEvent(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function updateEvent(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'venue' => 'required|max:255'
        ]);

        $event->update($request->all());

        return redirect()->route('admin.events')->with('success', 'Event updated successfully!');
    }

    public function deleteEvent(Event $event)
    {
        $event->delete();

        return redirect()->route('admin.events')->with('success', 'Event deleted successfully!');
    }

    // Gallery Management
    public function gallery()
    {
        $galleries = Gallery::with('images')->latest()->paginate(10);
        return view('admin.gallery.index', compact('galleries'));
    }

    public function createGallery()
    {
        return view('admin.gallery.create');
    }

    public function storeGallery(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $gallery = Gallery::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('gallery', 'public');
                $gallery->images()->create(['path' => $imagePath]);
            }
        }

        return redirect()->route('admin.gallery')->with('success', 'Gallery created successfully!');
    }

    // Admissions Management
    public function admissions()
    {
        $admissions = Admission::latest()->paginate(15);
        return view('admin.admissions.index', compact('admissions'));
    }

    public function showAdmission(Admission $admission)
    {
        return view('admin.admissions.show', compact('admission'));
    }

    public function updateAdmissionStatus(Request $request, Admission $admission)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected'
        ]);

        $admission->update(['status' => $request->status]);

        return redirect()->route('admin.admissions')->with('success', 'Admission status updated successfully!');
    }

    // Students Management
    public function students()
    {
        $students = Student::with('guardian')->latest()->paginate(15);
        return view('admin.students.index', compact('students'));
    }

    public function createStudent()
    {
        return view('admin.students.create');
    }

    public function storeStudent(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:male,female',
            'class' => 'required|max:255',
            'guardian_name' => 'required|max:255',
            'guardian_phone' => 'required|max:255',
            'guardian_email' => 'nullable|email|max:255',
            'address' => 'required|max:500'
        ]);

        $student = Student::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'class' => $request->class,
            'address' => $request->address
        ]);

        $student->guardian()->create([
            'name' => $request->guardian_name,
            'phone' => $request->guardian_phone,
            'email' => $request->guardian_email
        ]);

        return redirect()->route('admin.students')->with('success', 'Student created successfully!');
    }
}
