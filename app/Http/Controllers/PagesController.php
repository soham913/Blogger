<?php
    namespace App\Http\Controllers;

    class PagesController extends Controller
    {
        public function getIndex()
        {
            $name = "There";
            return view('Pages/welcome')->withShivi($name);
        }

        public function getAbout()
        {
            $first = "Soham";
            $last = "Sagade";
            $full = $first . " " . $last;
            return view('Pages/about')->withShivi($first);
        }

        public function getContact()
        {
            return view('Pages/contact');
        }
    }
?>