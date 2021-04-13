<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Http\Controllers\Controller;
use App\Models\Requisition;
use App\Models\RequisitionComment;
use Illuminate\Http\Request;

class RequisitionCommentController extends Controller
{
    /**
     * Display a listing of the Requisition Comments.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Requisition $requisition)
    {
        return view('admin.requisition.comment.index')
        ->withRequisition($requisition)
        ->withData(RequisitionComment::where('requisition_id',$requisition->id)->with('user')->paginate(20));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.requisition.comment.create');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequisitionComment  $requisitionComment
     * @return \Illuminate\Http\Response
     */
    public function show(Requisition $requisition,$requisitionComment)
    {
        // dd($requisition,$requisitionComment);
        $data = RequisitionComment::where(["requisition_id"=>$requisition->id,'id'=>$requisitionComment])
        ->with('user')
        ->firstOrFail();
        
        return view('admin.requisition.comment.show')
        ->withData($data)
        ->withRequisition($requisition);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequisitionComment  $requisitionComment
     * @return \Illuminate\Http\Response
     */
    public function destroy($requisition,$requisitionComment)
    {
        $getData = RequisitionComment::where(['requisition_id'=>$requisition,'id'=>$requisitionComment])->firstOrFail();
        $getData->delete();
        return redirect()->back()->with('success','Comment Deleted successfully.');
        
    }
}
