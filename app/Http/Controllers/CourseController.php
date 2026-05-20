<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::latest()->paginate(10);
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'

        ]);
        $thumbnail = $request->file('thumbnail')->store('courses', 'public');
        Course::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'thumbnail' => $thumbnail
        ]);
        // Course::create($validated);
        return redirect('/courses')->with('success', 'course berhasil di buat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Course $course) {}



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('courses.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric'
        ]);
        Course::update($validated);
        return redirect('/courses')->with('success', 'course berhasil di updae');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('/courses')->with('success', 'course berhasil di hapus');
    }
}
