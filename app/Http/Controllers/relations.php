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

   public function dina($id){

        $exco = new cater();
        $exco->length = ('10');
        $exco->width = ('100');
        $exco->cross = ($id);
        $exco->save();
        return 'mohamed';

    }
 */


    public function relation(Request $request){

        $mego = DB::table('cross')
            ->join('descriptions','descriptions.excopart','=','cross.excopart')
            ->select('descriptions.*', 'cross.*')
            ->where('cross.excopart','LIKE', '%'.$request->input('myid').'%')
            ->get();

        $exco = DB::table('cross')
            //->join('descriptions','descriptions.excopart','LIKE','cross.excopart')
            ->select('cross.*')
            ->where('cross.replacePartNumber','LIKE', '%'.$request->input('myid').'%')
            ->get();

          if($mego -> count() > 0)
          {
              return view('description',compact('mego'));

          }else if($exco -> count() > 0){
              return view('searchresults',compact('exco'));
          }else{
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

    public function getMake($equipmentTypeID)
    {
        $make = DB::table('application')
            ->select('make', 'equipmentType')
            ->where('equipmentType',$equipmentTypeID)
            ->distinct("equipmentType")
            ->pluck("make","make");
        return json_encode($make);
    }

    public function getmodel($makeID)
    {
        $model = DB::table('application')
            ->select('make', 'model')
            ->where('make',$makeID)
            ->distinct("make")
            ->pluck("model","model");
        return json_encode($model);
    }

    public function getmodelsn($modelID)
    {
        $modelsn = DB::table('application')
            ->select('modelsn', 'model')
            ->where('model',$modelID)
            ->distinct("model")
            ->pluck("modelsn","modelsn");
        return json_encode($modelsn);
    }

    public function enginemanu($modelID)
    {
        $enginemanufacturer = DB::table('application')
            ->select('enginemanufacturer', 'model')
            ->where('model',$modelID)
            ->distinct("model")
            ->pluck("enginemanufacturer","enginemanufacturer");
        return json_encode($enginemanufacturer);
    }

    /*public function getCompanies($mydata){
        $company = DB::table('companies')
            ->select('companies.*')
            ->where('user_id',$mydata)
            ->pluck("name", "id");
        return json_encode($company);
    }*/

    public function getData($finaldata){
        $mycompanies = DB::table('companies')
            ->select('companies.*')
            ->where('id',$finaldata)
            ->get();
        return view('advancedsearch',compact('mycompanies'));

    }



    public function advancedsearch()
    {
        $country = DB::table('country')
            ->select('country.*')
            ->get();
        return view('advancedsearch',compact('country'));
    }

}
