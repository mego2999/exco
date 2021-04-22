<?php

namespace App\Http\Controllers;

use App\Models\crossref;
use App\Models\description;
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


    public function advancedsearch($thedata)
    {
//        $states = crossref::where('country_id',$thedata)->pluck("name", "id");
//        return json_encode($states);
        return view('advancedsearch');
    }

}
