<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Panitia;

class AgtsController extends Controller
{
    public function agtsnews()
    {
        return view('agts.agtsnews', [
            "news" => News::latest()->get()
        ]);
    }

    public function universitynews()
    {
        return view('agts.universitynews', [
            "news" => News::latest()->get()
        ]);
    }
    public function schoolarsnews()
    {
        return view('agts.schoolarsnews', [
            "news" => News::latest()->get()
        ]);
    }
    public function jobnews()
    {
        return view('agts.jobnews', [
            "news" => News::latest()->get()
        ]);
    }

    public function singlenew(News $new) {
        return view('agts.singlenew', [
            'new' => $new
        ]);
    }

    public function jobdesk()
    {
        return view('alumni.jobdesk', [
            'news' => News::all()
        ]);
    }

    public function registrasi()
    {
        return view('alumni.registrasi');
    }
    
    public function singlejobdesk(News $new) {
        return view('alumni.singlejobdesk', [
            'new' => $new
        ]);
    }

    public function storeregistrasi(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|unique:Panitia',
            'sekbid' => 'required'
        ]);
        
        Panitia::create($validatedData);

        return redirect('/alumni/jobdesk');
    }
}
