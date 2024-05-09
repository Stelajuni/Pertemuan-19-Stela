<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    public function index()
    {
        return view('devices', [
            "title"=> "devices",
            "devices"=> Device::all()
        ]);
    }

    public function show($id){
        return view('device', [
            "title"=> "device",
            "device"=> Device::find($id)
        ]);
    }

}
