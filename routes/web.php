<?php

Route::get('/', function () {
    return view('page.index');
});

Route::get('/selection-housing', function () {
    return view('page.selection_housing');
});
