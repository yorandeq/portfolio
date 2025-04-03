<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    // $jobs = Job::all();

    return view('home');
});
 
Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::all()
    ]);
});

Route::get('/job/create', function () {
    return view('jobs.create');
});

Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

Route::post('jobs', function() {
    dd(request->all());
});

Route::get('contact', function () {
    return view('contact');
});