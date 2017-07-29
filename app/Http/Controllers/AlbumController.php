<?php

namespace App\Http\Controllers;

use App\Album;
use App\Artist;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    }

    public function albums_list()
    {
        $albums = Album::all();
        foreach ($albums as $album)
        {
            $album['artist_name'] = $album->artist->name;
            $album['user_name'] = $album->user->name;
            $album['user_email'] = $album->user->email;
            unset($album['artist']);
            unset($album['user']);
            unset($album['email']);
        }
        return $albums;
    }

    public function collection(Request $request)
    {
        $user_id = $request->all();
        $albums = Album::whereUserId($user_id)->get();

        foreach ($albums as $album)
        {
            $album['artist_name'] = $album->artist->name;
            unset($album['artist']);
        }

        return $albums;
    }
}
