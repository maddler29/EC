<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

class EntriesController extends Controller
{
    //
    public function index() {
        $entries = Entry::all();

        return view('entries.index', ['entries'=>$entries]);
    }

    // findで見つかったものを1件、entryという変数で渡してviewファイルを作成
    public function view($id) {
        $entry = Entry::findOrFail($id);

        return view('entries.view', ['entry'=>$entry]);
    }
}
