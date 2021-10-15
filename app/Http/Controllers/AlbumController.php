<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    // public function index() {
    //     return view('welcome');
    // }
    public function showAlbumFromID($id) {
        return '請求傳入參數為'.$id.'。取出相簿 ID:'.$id.'的詳細資訊';
    }
}
