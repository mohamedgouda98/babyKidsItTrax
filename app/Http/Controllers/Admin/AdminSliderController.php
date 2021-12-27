<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\AddSliderRequest;
use App\Http\Traits\ImagesTrait;
use App\Models\Slider;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminSliderController extends Controller
{
    use ImagesTrait;

    public function create()
    {
      return view('Admin.slider.create');
    }

    public function store(Request $request)
    {
        $fileName = time() . '_slider.png';

        $this->uploadImage($request->image, $fileName, 'slider');

        Slider::create([
            'image' => $fileName
        ]);

        Alert::success('Success', 'Slider Was Created !');
        return redirect()->back();

    }
}
