<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileRequest;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use SplFileInfo;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::all();
        return view('files.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FileRequest $request)
    {

        $isfile = $request->file('file');

        if($isfile){
            $fileType = $request->file->extension();
            $filesize = round(((filesize($isfile)/1024)/1024),2);
            $newFileName = time().'.'.$request->file->extension();
            $fileName = $isfile->getClientOriginalName() ;
            $destinationPath = public_path().'/myfiles' ;
            $isfile->move($destinationPath,$fileName);

            //$isfile->storeAs($destinationPath, $newFileName);

            //$pathfile = Storage::disk('public')->putFile('folders/inside/public', $request->file('post_image'));
            File::create([
                'user_id' => Auth::user()->id,
                'filename' => $request->file->getClientOriginalName(),
                'filetype' => $fileType,
                'filesize' => $filesize,
                'fileurl' => $fileName
            ]);
            //dd($isfile->getRealPath());
            /* $info = new SplFileInfo($isfile);
            var_dump($info->getExtension()); */

            //dd($isfile->getClientOriginalName());
        }
        //File::create($request->all());
        /* $file = File::create([
            'user_id' => Auth::user()->id,
            'filename' => $request->filename,
        ]); */

        //$miniature = CloudinaryStorage::upload($miniature_file->getRealPath(), $miniature_file->getClientOriginalName(), 'radio/noticias');


        return redirect()->route('files.index')->with('success', 'Archivo subido exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        return view('files.show', compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        return view('files.edit', compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(FileRequest $request, File $file)
    {
        $file->update($request->all());
        return redirect()->route('files.index')->with('success', 'Archivo actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        $file->delete();
        return redirect()->route('files.index')->with('success', 'Archivo eliminado exitosamente.');
    }
}
