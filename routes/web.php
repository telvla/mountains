<?php

Route::get('/', function () {
    return view('page.index');
});

Route::get('/selection-housing', function () {
    return view('page.selection_housing');
});

Route::get('/current-housing', function () {
    return view('page.current_housing');
});
