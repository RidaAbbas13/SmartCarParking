<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsLetter;

class NewsletterController extends Controller
{
    public function index()
    {
        $allNewsletters = NewsLetter::orderBy("id","DESC")->get();

        return view('Admin.Newsletter.view_newsletters',["allNewsletters" =>$allNewsletters]);
    }

    public function destroy($id)
    {
        $deleteNewsletter = NewsLetter::find($id)->delete();

        return redirect('view-newsletters');
    }
}
