<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Summernote extends Controller
{
    public function insertImageFile(Request $request)
    {
        $currentDate = Carbon::now()->format('Ymd');
        $uuid =  (string) Str::uuid();
        $ext = $request->file('file')->extension();
        $file = $currentDate . '_' . $uuid . '.' . $ext;
        $imgpath = $request->file('file')->storeAs('images/attachments', $file, 'public');
        $url = asset('storage/' . $imgpath);
        return response()->json(['result' => 'OK', 'url' => $url]);
    }
}
