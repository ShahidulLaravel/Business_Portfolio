<?php

namespace App\Http\Controllers;

use App\Models\HeaderInfo;
use App\Models\Message;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Headers;
use Intervention\Image\Facades\Image;

class FrontEndController extends Controller
{
    public function index_page(){
         $headers = HeaderInfo::find(1);
         $headers_two = HeaderInfo::find(3);
         $projects = Project::all();
        return view('Frontends.index',[
            'headers' => $headers,
            'headers_two' => $headers_two,
            'projects' => $projects 
        ]);
    }
    public function add_header(){
        $headers = HeaderInfo::all();
        return view('Admins.header.add',[
            'headers' => $headers,
        ]);
    }

    public function insert_header(Request $request){
        $header_image = $request->header_photo;
        $extension = $header_image->getClientOriginalExtension();
        $file_name = Str::lower(str_replace(' ', '-', 'header_photo')) . '-' . rand(10, 100000) . '.' . $extension;

        Image::make($header_image)->save(public_path('uploads/headers/' . $file_name));
      
        HeaderInfo::insert([
            'designation_one' => $request->designation_one,
            'designation_two' => $request->designation_two,
            'name' => $request->name,
            'header_photo' => $file_name,
        ]);
        return back();
    }

    public function add_project(){
        $all_projects = Project::all();
        return view('Admins.projects.add',[
            'all_projects' => $all_projects,
        ]);
    }
    
    public function project_insert(Request $request){
        $header_image = $request->photo;
        $extension = $header_image->getClientOriginalExtension();
        $file_name = Str::lower(str_replace(' ', '-', 'project_photo')) . '-' . rand(10, 100000) . '.' . $extension;

        Image::make($header_image)->save(public_path('uploads/projects/' . $file_name));
        Project::insert([
            'name' => $request->name,
            'link' => $request->link,
            'photo' => $file_name,         
        ]);
        return back()->with('session', 'Project Added Succescfully');
    }

    public function view_message(){
        $messages = Message::all();
        return view('Admins.message.show',[
            'messages' => $messages,
        ]);
    }

    public function send_message(Request $request)
    {
        Message::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'desp' => $request->desp,
        ]);
        return back()->with('success', 'Message Send to Developer Successfully');
    }


    // product
    function new_product(){
        return view('Frontends.akib');
    }
}
