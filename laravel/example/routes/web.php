<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    return view(
        'jobs',
        [
            'jobs' => [
                [
                    'id' => '1',
                    'title' => 'Director',
                    'salary' => '$10,000',
                ],
                [
                    'id' => '2',
                    'title' => 'Developer',
                    'salary' => '$5,000',
                ],
                [
                    'id' => '3',
                    'title' => 'Designer',
                    'salary' => '$3,000',
                ]
            ]
        ]


    );
});


//new route for getting inteded job
Route::get('/jobs/{id}', function ($id) {

    $jobs = [
        [
            'id' => '1',
            'title' => 'Director',
            'salary' => '$10,000',
        ],
        [
            'id' => '2',
            'title' => 'Developer',
            'salary' => '$5,000',
        ],
        [
            'id' => '3',
            'title' => 'Designer',
            'salary' => '$3,000',
        ]
    ];

    $job = Arr::first($jobs, fn ($job) => $job['id'] == $id); //searching the job with intended id
    // dd($job);
    return View('job', ['job' => $job]);
});


Route::get('/contact', function () {
    return view('contact');
});
