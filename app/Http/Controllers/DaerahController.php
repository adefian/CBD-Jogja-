<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\Regency;
use App\District;
use App\Village;

class DaerahController extends Controller
{
    public function provinces_select(Request $request)
    {
        $provinces = [];

        if ($request->has('q')) {
            $search = $request->q;
            $provinces = Province::select("id", "name")
                ->Where('name', 'LIKE', "%$search%")
                ->get();
        } else {
            $provinces = Province::limit(10)->get();
        }
        return response()->json($provinces);
    }

    public function regencies_select(Request $request)
    {
        $regencies = [];
        $provinceID = 34; // Yogyakarta
        if ($request->has('q')) {
            $search = $request->q;
            $regencies = Regency::select("id", "name")
                ->where('province_id', $provinceID)
                ->Where('name', 'LIKE', "%$search%")
                ->get();
        } else {
            $regencies = Regency::where('province_id', $provinceID)->get();
            return $regencies;
        }
        return response()->json($regencies);
    }

    public function districts_select(Request $request)
    {
        $districts = [];
        $regencyID = $request->regencyID;
        if ($request->has('q')) {
            $search = $request->q;
            $districts = District::select("id", "name")
                ->where('regency_id', $regencyID)
                ->Where('name', 'LIKE', "%$search%")
                ->get();
        } else {
            $districts = District::where('regency_id', $regencyID)->get();
        }
        return response()->json($districts);
    }

    public function villages_select(Request $request)
    {
        $villages = [];
        $districtID = $request->districtID;
        if ($request->has('q')) {
            $search = $request->q;
            $villages = Village::select("id", "name")
                ->where('district_id', $districtID)
                ->Where('name', 'LIKE', "%$search%")
                ->get();
        } else {
            $villages = Village::where('district_id', $districtID)->get();
        }
        return response()->json($villages);
    }
}
