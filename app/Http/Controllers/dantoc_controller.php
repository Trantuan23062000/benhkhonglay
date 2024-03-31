<?php

namespace App\Http\Controllers;

use App\Models\dantoc;
use Illuminate\Http\Request;
use Validator;

class dantoc_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dantoc=dantoc::all();
        return view('admin.dantoc.index',compact('dantoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $val = Validator::make($request->all(), [
            'MA_DAN_TOC' => 'required|max:50|unique:dantoc',
            'TEN_DAN_TOC' => 'required|max:255|unique:dantoc',
            
        ], [
            'MA_DAN_TOC.required'=>'Mã dân tộc không được bỏ trống !',
            'MA_DAN_TOC.max'=>'Mã dân tộc tối đa 255 kí tự!',
            'MA_DAN_TOC'=>'Mã dân tộc đã tồn tại !',
            'TEN_DAN_TOC'=>'Tên dân tộc không được bỏ trống !',
            'TEN_DAN_TOC.max'=>'Tên dân tộc tối đa 255 kí tự !',
            'TEN_DAN_TOC.unique'=>'Tên dân tộc đã tồn tại !',

        ]);
        if ($val->passes()) {
            $dantoc = new dantoc;
            $dantoc->MA_DAN_TOC = $request->MA_DAN_TOC;
            $dantoc->TEN_DAN_TOC = $request->TEN_DAN_TOC;
            $dantoc->save();
            return response()->json(
                [
                    'code' => 200,
                    'mess' => 'Thêm dữ liệu thành công !',
                ]
            );
        }
        return response()->json([
            'error' => $val->errors()->all(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dantoc  $dantoc
     * @return \Illuminate\Http\Response
     */
    public function show(dantoc $dantoc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dantoc  $dantoc
     * @return \Illuminate\Http\Response
     */
    public function edit($MA_DAN_TOC)
    {
        $dantoc=dantoc::find($MA_DAN_TOC);
        return view('admin.dantoc.edit',compact('dantoc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dantoc  $dantoc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $MA_DAN_TOC)
    {
        $val = Validator::make($request->all(), [
            'MA_DAN_TOC' => 'required|max:2',
            'TEN_DAN_TOC' => 'required',
        ], [
            'TEN_DAN_TOC.required' => 'Tên dân tộc không được bỏ trống !',
            'MA_DAN_TOC.max' => 'Mã dân tộc tối đa 2 kí tự !',
            'MA_DAN_TOC.required' => 'Mã dân tộc không được bỏ trống !',
        ]);
        if ($val->passes()) {
            $dantoc = dantoc::find($MA_DAN_TOC);
            $dantoc->MA_DAN_TOC = $request->MA_DAN_TOC;
            $dantoc->TEN_DAN_TOC = $request->TEN_DAN_TOC;     
            if ($dantoc->save()) {
                return response()->json(
                    [
                        'code' => 200,
                        'mess' => 'Update đữ liệu thành công',
                    ]
                );
            }
            
        }
        return response()->json(['error'=>$val->errors()->all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dantoc  $dantoc
     * @return \Illuminate\Http\Response
     */
    public function destroy($MA_DAN_TOC)
    {
        $dantoc = dantoc::find($MA_DAN_TOC);
        if ($dantoc->delete()) {
            
            return response()->json([
                'code' => 200,
                'message' => 'Đã xóa thành công.'
            ]);
        }

        return response()->json([
            'code' => 400,
            'message' => 'Xóa không thành công.'
        ]);
    }
    public function loaddata(){
        $dantoc = dantoc::all();
        return response()->json($dantoc);
    }
}
