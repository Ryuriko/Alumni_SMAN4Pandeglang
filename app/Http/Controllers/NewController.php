<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index', [
            'news' => News::latest()->get()
        ]);
    }

    public function programkerja ()
    {
        return view('admin.programkerja');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'body' => 'required'
        ]);

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        News::create($validatedData);

        return redirect('/admin')->with('success', 'News Has Been Uploaded!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $new = News::find($id);

        return view('admin.edit', [
            'new' => $new
        ]);
        // return view('admin.edit', compact('new'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'body' => 'required'
        ]);

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);


        News::find($request->id)->update($validatedData);

        // $title = $validatedData['title'];
        // $category = $validatedData['category'];
        // $body = $validatedData['body'];
        // $excerpt = $validatedData['excerpt'];
        
        // $conn = mysqli_connect('localhost','root', '', 'alumni');

        // mysqli_query($conn, "UPDATE news SET title = '$title', category = '$category', body = '$body', excerpt = '$excerpt' WHERE id = '$news->id' ");

        return redirect('/admin')->with('success', 'News Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);

        return redirect('/admin');
    }

}