<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassesController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /*
     * RETURN CLASSES VIEW
     */

    public function index() {
        try {
            return view('classes.classes');
        } catch (Exception $ex) {
            \Log::info(" Error : " . $ex);
            return back()->withInput()->withErrors($ex);
        }
    }

    /*
     * SAVE CLASS DETAILS
     */

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validator = \Validator::make($data, ValidationRules::$classes);
            if ($validator->fails()) {
                $errorString = implode(",", ($validator->messages()->all()));
                return back()->withInput()->withErrors($errorString);
            }
            print_r($data);
            exit;
        } catch (Exception $ex) {
            \Log::info(" Error : " . $ex);
            return back()->withInput()->withErrors($ex);
        }
    }

}
