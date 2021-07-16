<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pasia'
        ];
        // return view('welcome_message');
        return view('admin/index', $data);
    }



    //--------------------------------------------------------------------

}
