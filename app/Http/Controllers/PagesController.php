<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
	public function getIndex(){
		return view('pages.welcome');
	}
	public function getAbout(){
		$first = 'Alex';
		$last = 'Curtis';

		$full = $first . " " . $last;
		$email = 'gnovruzov2018@ada.edu.az';
		$data = [];
		$data['email'] = $email;
		$data['full'] = $full;
 		return view('pages.about');
	}
	public function getContact(){
			return view('pages.contact');
	}

}