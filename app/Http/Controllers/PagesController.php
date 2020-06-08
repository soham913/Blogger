<?php
    namespace App\Http\Controllers;
    use App\User;

    class PagesController extends Controller
    {
        public function getIndex()
        {
            $name = "There";
            return view('Pages/welcome');
        }

        public function getAbout()
        {
            $user = auth()->user()->name;
            return view('Pages/about')->with('Name',$user);
        }

        public function getContact()
        {
            return view('Pages/contact');
        }
    }
?>