<?php

namespace App\Http\Controllers;

use App\Models\Survey;

class testimages extends Controller
{
    public function getAllImages() {
        $test = Survey::all();

        return response([
            'status' => true,
            'test' => $test
        ]);
    }
}
