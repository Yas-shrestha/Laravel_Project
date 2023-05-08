<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Files;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = new Files;
        //  $files = $files->get();
        $files = $files->paginate(4);
        return view('Company.admin.Files.index', compact('files'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Company.admin.Files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $files = new Files;
        $validate_data = $request->validate(
            [
                'title' => 'required',
                'img' => 'required',
            ]
        );
        $fileName = $request->id . '-' . time() . '.' . $request->img->extension();
        $request->img->move(public_path('uploads'), $fileName);
        $files->title = $request->title;
        $files->img = $fileName;

        $files->save();
        return redirect('admin/file')->with('message', 'Your data is submitted ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $files = new Files;
        $files = $files->where('id', $id)->First();
        return view('Company.admin.Files.show', compact('files'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $files = new Files;
        $files = $files->where('id', $id)->First();
        return view('Company.admin.Files.edit', compact('files'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $files = new Files;
        $files = $files->where('id', $id)->First();
        $files->title = $request->title;
        if ($request->img != NULL) {
            $fileName = $request->course_code . "-" . time() . '.' . $request->img->extension();
            File::delete(public_path('uploads/' . $files->img));
            $request->img->move(public_path('uploads'), $fileName);
            $files::where('id', $id)
                ->update([
                    'img' => $fileName,
                ]);
        }
        $files->update();
        return redirect('admin/file');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $files = new Files;
        $files = $files->where('id', $id);
        File::delete(public_path('uploads/' . $files->img));
        $files->delete();

        return redirect('admin/file')->with('message', 'Your data has been deleted');
    }
}
