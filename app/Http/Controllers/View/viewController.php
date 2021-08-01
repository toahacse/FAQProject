<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Illuminate\Http\Request;

class viewController extends Controller
{
    public function index()
    {
        $faqs = FAQ::where('publication_status',1)
            ->orderBy('priority','ASC')
            ->take(10)
            ->get();
        return view('View.home.index',['faqs'=>$faqs]);
    }



    public function faq_search($search){
        $faq = FAQ::where('question','LIKE','%'.$search.'%')
            ->get();

//        $output="";
//
//        foreach ($faq as $data){
//            $output.= '<div class="card my_accordian">
//                                    <div class="card-body" id="headingTwo">
//                                         <a id="data" class="collapsed w-100 faq_link float-left" type="button" data-toggle="collapse" data-target="#collapseTwo'.$data->id.'" aria-expanded="false" aria-controls="collapseTwo'.$data->id.'">
//                                           <b><p class="faq_link">'.$data->question.'</p></b>
//                                        </a>
//                                    </div>
//                                    <div style="font-size:13px" id="collapseTwo{{ $faq->id }}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample{{$faq->id}}">
//                                        <hr style="margin-left: 20px;margin-right: 20px"/>
//                                        <p class="faq_p">'. $data->answer .'</p>
//                                    </div>
//                                </div>';
//        }

        return $faq;

    }
}
