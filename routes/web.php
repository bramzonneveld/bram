Route::get('/', function () {
    return view('intro');
});

Route::get('/home', function () {
    return view('home');
});