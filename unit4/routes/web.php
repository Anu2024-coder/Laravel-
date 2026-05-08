<?php

use App\Http\Controllers\uploadYZController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\uploadYZControllerController;
use App\Http\Controllers\demoController;
use App\Http\Controllers\EmailYZController;
use App\Http\Controllers\sessionYZController;
use App\Http\Controllers\EmployeeController;
use App\Mail\TestingYZMail;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

//upload file
// Route::get('/abc',[uploadYZController::class,'show']);
// Route::post('/upload',[uploadYZController::class,'upload']);

//laravel localization
//Localization in Laravel is the process of displaying content in different languages based on user preference.
//It allows your application to support multiple languages
// Route::get('/',function(){
//     return view('homeP');
// });

//que- make use of 5 diff languages display one by one content,


//Dynamic localization
// Route::get('/',function(){
//     return view('homeP');
// });

// Route::get('/lang/{locale}', function ($locale) {
//     session(['locale'=>$locale]);
//     return redirect()->back();
// });

//Task - student are required to develop cookie based functionalities using routes and practical implementation.
//a)The student needs to create an application with two routes, where one route sets a cookie city=mumbai and another route retrives and display its value
//b)Additionaly, the student must write code to check whether the cookie exists before displaying it, if the cookie is not found, the message "cookie not found" should be shown.
//c)the student is also required to implement functionality using Cookie::queue() to set multiple cookies such as name and email
//d)further the student must design a mini feature that includes a form where a user enter

//hints
//how to test(flow)
//1 Open /set-city -> cookie is created(city=mumbai)
//2 open /get-city -> displays stored cookie value
//3 open /check-city -> verifies whether cookie exists
//4 open /set-multiple ->sets multiple cookie(name,email)
//5 open /form -> enter name and submit
//6 open /login -> simulate login and store user_id in cookie
//7 open /dashboard -> check if user is logged in using cookie
//8 open /logout -> delete cookie and end session

//1)Route to set cookie(city=mumbai)
// Route::get('/set-city', function () {
//     return response("City cookie has been set to Mumbai")
//         ->cookie('city', 'mumbai', 60); // 60 minutes
// });

// //2)Retrieve and display cookie
// Route::get('/get-city', function (Request $request) {
//     return "City is: " . $request->cookie('city');
// });

// //3)verify whether cookie exists
// Route::get('/check-city', function (Request $request) {
//     if ($request->hasCookie('city')) {
//         return "City exists: " . $request->cookie('city');
//     } else {
//         return "cookie not found";
//     }
// });

// //4) Set multiple cookie using Cookie::queue()
// Route::get('/set-multiple', function () {
//     Cookie::queue('name', 'Anu', 60);
//     Cookie::queue('email', 'anu@example.com', 60);

//     return "Multiple cookies (name, email) have been set";
// });

// //form page
// Route::get('/form', function () {
//     return '
//         <form method="POST" action="/submit">
//             '.csrf_field().'
//             <input type="text" name="name" placeholder="Enter Name" required>
//             <button type="submit">Submit</button>
//         </form>
//     ';
// });

// //handle form submission
// Route::post('/submit', function (Request $request) {
//     return response("Name stored in cookie")
//         ->cookie('name', $request->name, 60);
// });

// //Simulate Login (store user_id in cookie)
// Route::get('/login', function () {
//     return response("User logged in")
//         ->cookie('user_id', 101, 60);
// });

// //Dashboard(check if user logged in)
// Route::get('/dashboard', function (Request $request) {
//     if ($request->hasCookie('user_id')) {
//         return "Welcome User ID: " . $request->cookie('user_id');
//     } else {
//         return "Please login first";
//     }
// });

// //logout-delete cookie and end session
// Route::get('/logout', function () {
//     return response("Logged out")
//         ->cookie(Cookie::forget('user_id'));
// });

//Sending emails
//Route::get('/abc',[EmailYZController::class,'send']);


//Task
//You are working as a Laravel developer in a company called HireFast The HR team reports a problem
//"Many candidates are uploading wrong files like images, large files, or empty submissions. This is breaking our system"
//The company wants to strictly validate resume uploads before accepting them.

//Session 
// Route::view('/loginform','MyFormYZ');
// Route::post('/login',[sessionYZController::class,'login']);
// Route::get('/form',function(){
//     return view('sessionYZ');
// });
// Route::get('/logout',[sessionYZController::class,'logout']);

//steps- session topic adding,storing and deleting in laravel form
//step1 - create a basic form with input field makw sure @csrf is used inside form so that 419 page expired will not occur
//step2 - make sure form use POST method and there will be same action used inside form which is used in the post route for controller
//step3 - create a controller with two functions login and logout , login will add the session and logout will flush the session
//step4 - create a sessionYZ blade which is going to check for session value
//step5 - Add suitable imports and route in the web.php


//Task - Needs to be implemented by students-IN-BUILT
//Simran, a software developer at Google is building an employee registration system using Laravel. To ensure that only valid and secure data is entered she applies several constraints through in-bullt validation rules
//a)She makes the name field mandatory, allowing only alphabetic characters with a minimum length of three characters.

//b)the email field is also required and must follow a proper email format while being unique in the database to avoid duplicaton

//c)The password held must contain at least six characters and should match the confirmation field to ensure correctness.

//d)Additionally the age field is required, must be numeric, and should be at least 18. By applying these constraints.
//Simran ensures data accuracy, consistency, and security before storing the information in the system.
//Note- No regex will be used.

//Route::post('/register', [employeeController::class, 'store']);

//Task 2-

// Siya working at Google, is developing a secure employee onboarding system using Laravel.
// Since the system handles sensitive company data, she applies strong in-built validation constraints to ensure maximum security and correctness a) The name field is mandatory, must contain only alphabets and spaces, and should be between 5 to 10 characters. b) The email field is regived must follow a valid email format, belong to a specific company domain (g..
// google.com) and must be unique in the database.c) The password field is compulsory, mus be at least 8 characters long, include at least one uppercase letter, one lowercase letter, one number, and oneapestal character, and must match the confirmation field.
// ai The phone number field is required, must be numeric, and exactly 10 digits long.
// el Additionally the life of birth field is required and must ensure that the employee is at least years old
// 24
// Do this via in-built and custom nule class

//query builder using form
Route::get('/form', [demoController::class, 'show']);
Route::post('/insert', [demoController::class, 'insert']);

Route::get('/read', [demoController::class, 'read']);

Route::get('/edit/{id}', [demoController::class, 'edit']);
Route::post('/update/{id}', [demoController::class, 'update']);

Route::get('/delete/{id}', [demoController::class, 'delete']);