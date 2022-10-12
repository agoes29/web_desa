<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; /* <--- UDAH BERES MASALAHNYA CUMA KURANG INI - WOKEY MAKASI*/
use Illuminate\Support\Facades\Storage;

// use app\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = DB::select('select * from blog');

        return view('dashboard.pages.blog', ['blog' => $blog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image',
            'content' => 'required',
        ]);

        // Get and manage file from Request
        if ($request->file('image')) {
            $file = $request->file('image');

            // Get Name of File
            $filename = $file->getClientOriginalName();

            // Define the place for image file
            $imagepath = 'assets/Image/';

            // Place Image into storage
            Storage::putFileAs('public/'.$imagepath, $file, $filename);

            // Image full path for database
            $image = $imagepath.'/'.$filename;

            /*
             * Note: after that, run in terminal/cmd 'php artisan storage:link'
             */
        }

        $bl = DB::table('blog')->insert([
            'title' => $request->title,
            'image' => $image,
            'content' => $request->content,
        ]);

        $blog = DB::select('select * from blog');

        return view('dashboard.pages.blog', ['blog' => $blog]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = DB::table('blog')->where('id', $id)->first();

        return view('dashboard.pages.blogupdate', ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'title' => 'required',
        //     'image' => 'required',
        //     'conten' => 'required'
        // ]);

        $bl = DB::table('blog')
        ->where('id', $id)
        ->update(
            ['title' => $request->title,
            'image' => $request->image,
            'conten' => $request->conten, ]
        );

        $blog = DB::select('select * from blog');

        return view('dashboard.pages.blog', ['blog' => $blog]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bl = DB::table('blog')->where('id', $id);
        $bl->delete();

        if ($bl) {
            return redirect()->back()->with([
                'success' => 'Data Berhasil Dihapus',
            ]);
        } else {
            return redirect()->back()->with([
                'error' => 'Terjadi Kesalahan',
            ]);
        }
    }

    public function blogview()
    {
        $blog = DB::select('select * from blog');

        return view('dashboard.pages.blog', ['blog' => $blog]);
    }

    public function bloginput()
    {
        return view('dashboard.pages.bloginput');
    }
}
