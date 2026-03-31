Route::get('home', function () {
    return view('Home');
}); or Route::view('/', 'welcome');

##both routes above works but view works only for static webpages.

Route::get('/about', function () {
    return view('About');
});

Route::get('/contact', function () {
    return view(Contact');
});

Route::get('/services', function () {
    return view('Services');
});

Route::get('/showcases',function () {
    return view('showcases');
});

Route::('/blog', function () {
    return view('Blog');
});

...