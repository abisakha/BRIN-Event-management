<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.home',[
        "title" => "Home"
    ]);
});


Route::get('/event', function () {
    return view('user.events.event',[
        "title" => "Event"
    ]);
});

Route::get('/event-detail', function () {
    return view('user.events.detail-event',[
        "title" => "Event-detail"
    ]);
});

Route::get('/calendar', function () {
    return view('user.calendar.calendar',[
        "title" => "Calendar"
    ]);
});

Route::get('/my-event', function () {
    return view('user.my-event.my-event',[
        "title" => "My Event"
    ]);
});

