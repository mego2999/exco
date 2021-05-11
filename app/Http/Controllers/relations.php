<?php

namespace App\Http\Controllers;

use App\Models\country;
use App\Models\crossref;
use App\Models\description;
use App\Models\state;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class relations extends Controller
{
    /*
    public function mohamed($id){

        $exco = new crossref();
        $exco->part = ('b99');
        $exco->crossref = ($id);
        $exco->save();
        return 'Dina';

    }
 */
    public function product(Request $request){

        $mego = DB::table('cross')
            ->join('descriptions','descriptions.excopart','=','cross.excopart')
            ->select('descriptions.*', 'cross.*')
            ->where('cross.excopart','=', $request->input('product'))
            ->limit(1)
            ->get();
        if($mego -> count() > 0)
        {
            return view('description',compact('mego'));

        }else{
            return redirect()->back()->with('noitems', 'This item not found in our records');
        }

    }

    public function cross(Request $request){

        $exco = DB::table('cross')
            //->join('descriptions','descriptions.excopart','LIKE','cross.excopart')
            ->select('cross.*')
            ->where('cross.replacePartNumber','LIKE', '%'.$request->input('cross').'%')
            ->get();
        if($exco -> count() > 0)
        {
            return view('searchresults',compact('exco'));

        }else{
            return redirect()->back()->with('noitems', 'This item not found in our records');
        }

    }


    public function relation(Request $request){

        $moga = DB::table('cross')
            //->join('descriptions','descriptions.excopart','LIKE','cross.excopart')
            ->select('cross.*')
            ->where('cross.replacePartNumber','LIKE', '%'.$request->input('myid').'%')
            ->orWhere('cross.excopart','LIKE', '%'.$request->input('myid').'%')
            ->orWhere('cross.replaceBrand','LIKE', '%'.$request->input('myid').'%')
            ->orWhere('cross.baldwin','LIKE', '%'.$request->input('myid').'%')
            ->get();
        $myid = DB::table('application')
            ->select('application.*')
            ->where('manufacturer','LIKE', '%'.$request->input('myid').'%')
            ->orWhere('equipmentType','LIKE', '%'.$request->input('myid').'%')
            ->orWhere('make','LIKE', '%'.$request->input('myid').'%')
            ->orWhere('model','LIKE', '%'.$request->input('myid').'%')
            ->orWhere('modelsn','LIKE', '%'.$request->input('myid').'%')
            ->orWhere('enginemanufacturer','LIKE', '%'.$request->input('myid').'%')
            ->orWhere('engine','LIKE', '%'.$request->input('myid').'%')
            ->orWhere('enginesn','LIKE', '%'.$request->input('myid').'%')
            ->orWhere('year','LIKE', '%'.$request->input('myid').'%')
            ->get();

        if($moga -> count() > 0 && $myid -> count() > 0){
            return view('mainsearchresults',compact('moga','myid'));
        }
        elseif ($moga -> count() > 0)
        {
            return view('mainsearchresults',compact('moga'));
        }
        elseif ($myid -> count() > 0)
        {
            return view('mainsearchresults',compact('myid'));
        }
        else
        {
            return redirect()->back()->with('noitems', 'This item not found in our records');
        }

    }


    public function description($part){

        $exco = description::where('excopart',$part)->get();

        return view('description',compact('exco'));

    }

    public function equipmentType($thedata)
    {
        $equipment = DB::table('application')
            ->select('manufacturer', 'equipmentType')
            ->where('manufacturer',$thedata)
            ->distinct("equipmentType")
            ->pluck("equipmentType","equipmentType");
        return json_encode($equipment);
    }

    public function getMake($equipmentTypeID,$manufacturer)
    {
        $make = DB::table('application')
            ->select('make', 'equipmentType')
            ->where('equipmentType','=',$equipmentTypeID)
            ->where('manufacturer','=',$manufacturer)
            //->distinct("equipmentType")
            ->pluck("make","make");
        return json_encode($make);
    }

    public function getmodel($makeID,$manufacturer,$equipmentType)
    {
        $model = DB::table('application')
            ->select('make', 'model')
            ->where('make',$makeID)
            ->where('manufacturer',$manufacturer)
            ->where('equipmentType',$equipmentType)
            ->distinct("make")
            ->pluck("model","model");
        return json_encode($model);
    }

    public function getmodelsn($modelID,$makeID,$manufacturer,$equipmentType)
    {
        $modelsn = DB::table('application')
            ->select('modelsn', 'model')
            ->where('model',$modelID)
            ->where('make',$makeID)
            ->where('manufacturer',$manufacturer)
            ->where('equipmentType',$equipmentType)
            ->distinct("model")
            ->pluck("modelsn","modelsn");
        return json_encode($modelsn);
    }

    public function enginemanu($modelID,$makeID,$manufacturer,$equipmentType)
    {
        $enginemanufacturer = DB::table('application')
            ->select('enginemanufacturer', 'model')
            ->where('model',$modelID)
            ->where('make',$makeID)
            ->where('manufacturer',$manufacturer)
            ->where('equipmentType',$equipmentType)
            ->distinct("model")
            ->pluck("enginemanufacturer","enginemanufacturer");
        return json_encode($enginemanufacturer);
    }

    public function getIngine($enginemanuID,$modelID,$makeID,$manufacturer,$equipmentType)
    {
        $myengine = DB::table('application')
            ->select('enginemanufacturer', 'engine')
            ->where('enginemanufacturer',$enginemanuID)
            ->where('model',$modelID)
            ->where('make',$makeID)
            ->where('manufacturer',$manufacturer)
            ->where('equipmentType',$equipmentType)
            ->distinct("enginemanufacturer")
            ->pluck("engine","engine");
        return json_encode($myengine);
    }

    public function getIngineSN($engineID,$enginemanuID,$modelID,$makeID,$manufacturer,$equipmentType)
    {
        $myengineSN = DB::table('application')
            ->select('engine', 'enginesn')
            ->where('engine',$engineID)
            ->where('enginemanufacturer',$enginemanuID)
            ->where('model',$modelID)
            ->where('make',$makeID)
            ->where('manufacturer',$manufacturer)
            ->where('equipmentType',$equipmentType)
            ->distinct("engine")
            ->pluck("enginesn","enginesn");
        return json_encode($myengineSN);
    }

    public function year($engineID,$enginemanuID,$modelID,$makeID,$manufacturer,$equipmentType)
    {
        $year = DB::table('application')
            ->select('engine', 'year')
            ->where('engine',$engineID)
            ->where('enginemanufacturer',$enginemanuID)
            ->where('model',$modelID)
            ->where('make',$makeID)
            ->where('manufacturer',$manufacturer)
            ->where('equipmentType',$equipmentType)
            ->distinct("engine")
            ->pluck("year","year");
        return json_encode($year);
    }


    public function getData($manufacturer,$equipmentType,$make,$model,$modelSN,$engineManufacturer,$engine,$engineSerial,$year)
    {
        $alldata = DB::table('application')
            ->select('application.*')
            ->where('manufacturer', 'LIKE', '%' . $manufacturer . '%')
            ->where('equipmentType', 'LIKE', '%' . $equipmentType . '%')
            ->where('make', 'LIKE', '%' . $make . '%')
            ->where('model', 'LIKE', '%' . $model . '%')
            ->where('model', 'LIKE', '%' . $model . '%')
            ->where('modelsn', 'LIKE', '%' . $modelSN . '%')
            ->where('enginemanufacturer', 'LIKE', '%' . $engineManufacturer . '%')
            ->where('engine', 'LIKE', '%' . $engine . '%')
            ->where('enginesn', 'LIKE', '%' . $engineSerial . '%')
            ->where('year', 'LIKE', '%' . $year . '%')
            ->get();

        if ($alldata->count() > 0) {
            return view('advancedsearch', compact('alldata'));

        }else{
            return redirect()->back()->with('noitem', 'This item not found in our records');
        }


    }



    public function advancedsearch()
    {
        $country = DB::table('country')
            ->select('country.*')
            ->get();
        return view('advancedsearch',compact('country'));
    }

}
