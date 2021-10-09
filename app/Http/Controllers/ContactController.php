<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request) {
        if ($request->has('fix')) {
            $fistname = explode(' ', trim($request->fullname))[0];
            $surname = explode(' ', trim($request->fullname))[1];
            $requests = [
                'firstname' => $fistname,
                'surname' => $surname,
                'gender' => $request->gender,
                'email' => $request->email,
                'postcode' => $request->postcode,
                'address' => $request->address,
                'building_name' => $request->building_name,
                'opinion' => $request->opinion];
        } else {
            $requests = [
                'firstname' => '',
                'surname' => '',
                'gender' => 1,
                'email' => '',
                'postcode' => '',
                'address' => '',
                'building_name' => '',
                'opinion' => ''];
        }
        return view('contact', $requests);
    }

    public function check(Request $request) {
        return view('check', [
            'fullname' => $request->firstname . " " . $request->surname,
            'gender' => $request->gender,
            'email' => $request->email,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'building_name' => $request->building_name,
            'opinion' => $request->opinion]);
    }

    public function create(Request $request) {
        $this->validate($request, Contact::$rules);
        Contact::create($request->all());
        $request->session()->put('create_token', $request->_token);
        return redirect('/thanks?create_token=' . $request->_token);
    }

    public function thanks(Request $request) {
        if (($request->create_token !== '') && ($request->session()->get('create_token') !== '') &&
            ($request->create_token === $request->session()->get('create_token'))) {
                $request->session()->put('create_token', '');
                return view('thanks');
        } else {
            return 'error: invalid token.';
        }
    }

}
