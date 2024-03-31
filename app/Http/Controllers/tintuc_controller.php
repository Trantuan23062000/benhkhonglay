<?php

namespace App\Http\Controllers;

use App\Models\tintuc;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;

class tintuc_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tintuc=tintuc::all();
        return view('admin.tintuc.index',compact('tintuc'));
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
            'TIN_THUONG'=>'required',
            'IMAGE_TIN_THUONG'=>'image',
            'TEN_TIN_TUC'=>'required',

        ], [
              'TIN_THUONG.required'=>'Tin tức không được bỏ trống !',
              'IMAGE_TIN_THUONG.image'=>'Hình ảnh không đúng định dạng !',
              'TEN_TIN_TUC.required'=>'Tên tin tức không được bỏ trống'
        ]);

        if ($val->passes()) {

            if ($request->has('IMAGE_TIN_THUONG')) {
                $file = $request->IMAGE_TIN_THUONG;
                $ex = $request->IMAGE_TIN_THUONG->extension();
                $IMAGE = time() . '' . Str::slug($request->TEN_TIN_TUC) . '' . '.' . $ex;
                $file->move(storage_path('tintuc'), $IMAGE);
            }
            $tintuc = [
                'THOI_GIAN_DANG'=>$request->THOI_GIAN_DANG = Carbon::now(),
                'TEN_TIN_TUC' => $request->TEN_TIN_TUC,
                'IMAGE_TIN_THUONG' => $request->IMAGE,
                'TRANG_THAI'=>$request->TRANG_THAI,
                'TIN_THUONG' => $request->TIN_THUONG,
            ];
            //dd($request->all());
            //$request->merge(['anh'=>$file_name]);
            if (tintuc::create($tintuc)) {
                return response()->json([
                    'code' => 200,
                    'mess' => 'Thêm tin tức thành công !',
                ]);
            }
        }
        return response()->json([
            'code' => 500,
            'error' => $val->errors()->all(),
        ]);
    }
    public function data()
    {
        $tintuc = tintuc::all();
        return view('admin.tintuc.tintucdata',compact('tintuc'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tintuc  $tintuc
     * @return \Illuminate\Http\Response
     */
    public function show(tintuc $tintuc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tintuc  $tintuc
     * @return \Illuminate\Http\Response
     */
    public function edit(tintuc $tintuc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tintuc  $tintuc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tintuc $tintuc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tintuc  $tintuc
     * @return \Illuminate\Http\Response
     */
    public function destroy(tintuc $tintuc)
    {
        //
    }
}
