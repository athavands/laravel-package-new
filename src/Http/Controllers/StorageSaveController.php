<?php

namespace Athavands\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Athavands\Contact\Mail\COntactMailable;
use Athavands\Contact\Models\Contact;
use Athavands\Contact\Models\StorageSave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StorageSaveController extends Controller
{
    public function index(){
        // vithushan
        return view('contact::contact');
    }

    public function send(Request $request){
        Mail::to(config('contact.send_email_to'))->send(new COntactMailable($request->message,$request->name));
       Contact::create($request->all());
       return redirect(route('contact'));
    }

    public function store(Request $request)
    {
        if($file = $request->file('media')) {
            $fileData = $this->uploads($file,'user/avatar/');
            $media = StorageSave::create([
                       'media_name' => $fileData['fileName'],
                       'media_type' => $fileData['fileType'],
                       'media_path' => $fileData['filePath'],
                       'media_size' => $fileData['fileSize']
                    ]);
        }
        return $media;
    }

    public function img(StorageSave $gravatar)
    {
        $data = $gravatar->first();
        return view('contact::storage',compact('data'));
    }
}
