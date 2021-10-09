<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request) {
        if ($request->has('fix')) {
            $fistname = explode(' ', trim($request->fullname))[0];
            $surname = explode(' ', trim($request->fullname))[1];
            $requests =[
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
}
