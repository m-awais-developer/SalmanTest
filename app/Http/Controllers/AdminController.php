<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

use App\Models\WebsiteSetting;


use App\Models\Contacts;

use App\Models\Service;

use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    // 1. Home / Admin Dashboard Page
    public function dashboard(){
        return view('Adminside.home');
    }

     // 2. Admin Dashboard add blogs form page

     public function addblog(){
      
        return view('Adminside.Addblog');
    }

    // 2. Admin Dashboard add blogs function

public function storeblog(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',

        'tagline' => 'nullable|string|max:255',
        'detail' => 'nullable|string',

        'image' => 'nullable|image|mimes :jpg,jpeg,png,webp|max:10240',
    ]);


    // ================= IMAGE =================

    $imageName = null;

    if ($request->hasFile('image')) {

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(
            public_path('uploads/blogs'),
            $imageName
        );
    }


    // ================= SAVE BLOG =================

    Blog::create([
        'title' => $request->title,
        'description' => $request->description,

        'tagline' => $request->tagline,
        'detail' => $request->detail,

        'image' => $imageName,
    ]);


    // ================= REDIRECT =================

    return redirect()
        ->route('admin.blogs.create')
        ->with('success', 'Blog saved successfully.');
}

 // 2. Admin Dashboard manage blogs page
 
public function manageBlogs()
{
    $blogs = Blog::latest()->get();

    return view('Adminside.ManageBlogs', compact('blogs'));
}

 // 2. Admin Dashboard update  blogs function
 public function updateblog(Request $request, $id)
{
    $blog = Blog::findOrFail($id);

    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image| mimes:jpg,jpeg,png,webp|max:10240',
    ]);

    $blog->title = $request->title;
    $blog->description = $request->description;

    if ($request->hasFile('image')) {

        // Delete old image
        if ($blog->image) {
            $oldImage = public_path('uploads/blogs/' . $blog->image);

            if (file_exists($oldImage)) {
                unlink($oldImage);
            }
        }

        // Save new image
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(
            public_path('uploads/blogs'),
            $imageName
        );

        $blog->image = $imageName;
    }

    $blog->save();

    return redirect()
        ->route('admin.blogs.manage')
        ->with('success', 'Blog updated successfully.');
}

 // 2. Admin Dashboard delete  blogs function

 public function deleteblog($id)
{
    $blog = Blog::findOrFail($id);

    // Delete image from folder
    if ($blog->image) {

        $imagePath = public_path('uploads/blogs/' . $blog->image);

        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    $blog->delete();

    return redirect()
        ->route('admin.blogs.manage')
        ->with('success', 'Blog deleted successfully.');
}


 // 2. Admin Dashboard add services page
public function addservice(){
    return view('Adminside.Addservice');
}

 // 2. Admin Dashboard store services function


public function storeservice(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',

        'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:10240',
        'description' => 'required|string',

        'tagline' => 'nullable|string|max:255',

        'detail' => 'nullable|string',
    ]);

    $imageName = null;

    if ($request->hasFile('image')) {

        $imageName = time() . '_' . $request->file('image')->getClientOriginalName();

        $request->file('image')->move(
            public_path('storage/services'),
            $imageName
        );
    }

    Service::create([
        'title' => $request->title,

        'image' => $imageName,

        'description' => $request->description,

        'tagline' => $request->tagline,

        'detail' => $request->detail,
    ]);

    return redirect()
        ->route('admin.services.create')
        ->with('success', 'Service published successfully.');
}



// 2. Admin Dashboard  services manage page

public function manageservice()
{
    $service = Service::latest()->get();

    return view('Adminside.ManageService', compact('service'));
}


// 2. Admin Dashboard  services manage update function

public function updateservice(Request $request, $id)
{
    $service = Service::findOrFail($id);

    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|mimes:jpg,jpeg,png,webp|max:10240',
    ]);

    // Update title and description
    $service->title = $request->title;
    $service->description = $request->description;

    // If a new image is uploaded
    if ($request->hasFile('image')) {

        // Delete old image
        if ($service->image) {
            $oldImage = public_path('storage/services/' . basename($service->image));

            if (File::exists($oldImage)) {
                File::delete($oldImage);
            }
        }

        // Generate new image name
        $imageName = time() . '_' . $request->file('image')->getClientOriginalName();

        // Move new image
        $request->file('image')->move(
            public_path('storage/services'),
            $imageName
        );

        $service->image = $imageName;
    }

    $service->save();

    return redirect()
        ->back()
        ->with('success', 'Service updated successfully.');
}


// 2. Admin Dashboard  services manage delete function 

public function deleteservice($id)
{
    $service = Service::findOrFail($id);

    // Delete service image
    if ($service->image) {
        $imagePath = public_path(
            'storage/services/' . basename($service->image)
        );

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
    }

    // Delete database record
    $service->delete();

    return redirect()
        ->back()
        ->with('success', 'Service deleted successfully.');
}


// website setting changes page  

        public function settings()
    {
        $setting = WebsiteSetting::first();

        return view('Adminside.WebsiteSetting', compact('setting'));
    }

    
    // website setting changes update function  

     public function savesettings(Request $request)
    {
        $request->validate([
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'email' => 'nullable|email|max:255',
            'street' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:50',
        ]);


        $setting = WebsiteSetting::first();


        if (!$setting) {
            $setting = new WebsiteSetting();
        }


        $setting->email = $request->email;
        $setting->street = $request->street;
        $setting->phone = $request->phone;


        if ($request->hasFile('logo')) {

            if ($setting->logo) {

                $oldLogo = public_path(
                    'storage/settings/' . basename($setting->logo)
                );

                if (File::exists($oldLogo)) {
                    File::delete($oldLogo);
                }
            }


            $folder = public_path('storage/settings');

            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0755, true);
            }


            $logoName = time() . '_' .
                $request->file('logo')->getClientOriginalName();


            $request->file('logo')->move(
                $folder,
                $logoName
            );


            $setting->logo = $logoName;
        }


        $setting->save();


        return redirect()
            ->route('admin.website.settings')
            ->with('success', 'Website settings updated successfully!');
    }


    public function contactslist()
{
    $contacts = Contacts::latest()->get();

    return view('Adminside.contactslist', compact('contacts'));
}
}

