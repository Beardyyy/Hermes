<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::paginate(10);

        return view('images.index')->with('images',$images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImageRequest $request)
    {
        $image = new Image();
        $image->size = $request->size;
        $image->name = $request->name;
        $image->path = $request->path;

        /*Upload slike dodje ovde*/

        $image->save();

        return redirect()->route('images.show',$image);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        return view('images.show')->with('image',$image);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return view('images.edit')->with('image',$image);
    }

    /**
     * @param UpdateImageRequest $request
     * @param Image $image
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateImageRequest $request, Image $image)
    {
        $image->name = $request->name;
        $image->path = $request->path;

        /**
         * itd sta sve jos imas od parametaras
         *
         * Upload slike npr ponovo
         */

        $image->save();
        return redirect()->route('images.show',$image);

    }

    /**
     * @param Image $image
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Image $image)
    {
        /*Ovde samo delete*/

        $image->delete();

        return redirect()->route('images.index');
    }
}
