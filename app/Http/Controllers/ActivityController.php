<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{

    public function index()
    {
        $features = array(
            (object) array(
                'id'      => '1',
                'module'  => 'Student Information',
                'feature' => 'Student',
                'checked' =>  false,
            ),
            (object) array(
                'id'      => '2',
                'feature' => 'Student Report',
                'checked' => false
            ),
            (object) array(
                'id'      => '3',
                'feature' => 'Guardient Report',
                'checked' => true
            ),
            (object) array(
                'id'      => '4',
                'feature' => 'Student History',
                'checked' => false
            )
        );
        sort($features);
        return array_reverse($features);
    }
}
