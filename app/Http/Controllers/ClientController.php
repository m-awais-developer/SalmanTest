<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

use Illuminate\Support\Facades\Auth;

use App\Models\Contacts;

use App\Models\Service;


class ClientController extends Controller
{
     // 1. Home / Welcome Page
    public function showHome()
    {

    $service = \App\Models\Service::all();

     $blogs = \App\Models\Blog::all();

    return view('Clientside.welcome', compact('service', 'blogs'));
    }

    // 2. About Page
    public function showAbout()
    {
        return view('Clientside.about');
    }

    // 3. Services Page
    public function showServices()
    {
    $services = Service::latest()->get();

    return view('Clientside.services', compact('services'));
    }

    // 4. Pricing Page
    public function showPricing()
    {
        return view('Clientside.pricing');
    }

    // 5. Blog Page
    public function showBlog()
    {
    $blogs = Blog::latest()->get();

    return view('Clientside.blog', compact('blogs'));

}
    // 6. Contact Page
    public function showContact()
    {
        return view('Clientside.contact');
    }

    // 6. store Contact Page

  
public function storecontact(Request $request)
{
    $request->validate(
        [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:contacts,email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ],
        [
            'email.unique' => 'This email is already in use.',
        ]
    );

    Contacts::create([
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
    ]);

    return back()->with('success', 'Your message has been sent successfully.');
}



 // 6. service  detail Page

public function serviceDetail($id)
{
    $service = Service::findOrFail($id);

    return view('clientside.servicedetail', compact('service'));

}


public function blogDetail($id)
 { $blog = Blog::findOrFail($id); 
 return view('clientside.blogdetail', compact('blog')); }

// /login page/////

 public function showLogin()
{
    return view('Clientside.login');
}

// <-------login function-------->
public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {

        $request->session()->regenerate();

        return redirect()
            ->route('dashboard.home')
            ->with('success', 'Login successful! Welcome back.');
    }

    return back()
        ->withErrors([
            'email' => 'The email or password is incorrect.',
        ])
        ->withInput($request->only('email'));
}
////logout function/////
public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()
        ->route('login')
        ->with('success', 'You have been logged out successfully.');
}
}
