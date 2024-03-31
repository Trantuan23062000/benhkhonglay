<?php

namespace App\Http\Controllers;

use App\Models\soyte;
use Illuminate\Http\Request;
use Validator;
use App\Imports\soyteimport;
use Excel;


class soyte_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soyte = soyte::all();
        return view('admin.soyte.index', compact('soyte'));
    }
    public function loaddata()
    {
        $soyte = soyte::all();
        return response()->json($soyte);
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
            'TEN_SO_Y_TE' => 'required|max:255|unique:soyte',
            'DIA_CHI' => 'required|max:255',
            'SDT' => 'required|numeric|unique:soyte',
            'TEN_SO_Y_TE' => 'required|max:255|unique:soyte',
        ], [
            'TEN_SO_Y_TE.required' => 'Tên cơ sở y tế không được bỏ trống !',
            'TEN_SO_Y_TE.max' => 'Tên cơ sở y tế tối đa 255 kí tự !',
            'TEN_SO_Y_TE.unique' => 'Tên cơ sở y tế đã tồn tại !',
            'DIA_CHI.required' => 'Địa chỉ không được bỉ trống !',
            'DIA_CHI.max' => 'Địa chỉ tối đa 255 kí tự !',
            'SDT.unique' => 'SDT y tế đã tồn tại !',
            'SDT.numeric' => 'Không được nhập chữ !',
            'SDT.required' => 'Số điện thoại không được bỏ trống !',

        ]);
        if ($val->passes()) {
            $soyte = new soyte;
            $soyte->TEN_SO_Y_TE = $request->TEN_SO_Y_TE;
            $soyte->DIA_CHI = $request->DIA_CHI;
            $soyte->SDT = $request->SDT;
            $soyte->EMAIL = $request->EMAIL;
            $soyte->save();
            return response()->json(
                [
                    'code' => 200,
                    'mess' => 'Thêm sở y tế thành công',
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
     * @param  \App\Models\soyte  $soyte
     * @return \Illuminate\Http\Response
     */
    public function show(soyte $soyte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\soyte  $soyte
     * @return \Illuminate\Http\Response
     */
    public function edit($ID)
    {
        $soyte = soyte::find($ID);
        return view('admin.soyte.edit', compact('soyte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\soyte  $soyte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ID)
    {
        $val = Validator::make($request->all(), [
            'DIA_CHI' => 'required|max:255',
            'SDT' => 'required|numeric',
        ], [
            'TEN_SO_Y_TE.required' => 'Tên cơ sở y tế không được bỏ trống !',
            'TEN_SO_Y_TE.max' => 'Tên cơ sở y tế tối đa 255 kí tự !',

            'DIA_CHI.required' => 'Địa chỉ không được bỉ trống !',
            'DIA_CHI.max' => 'Địa chỉ tối đa 255 kí tự !',
            'SDT.numeric' => 'Không được nhập chữ !',
            'SDT.required' => 'Số điện thoại không được bỏ trống !',
        ]);
        if ($val->passes()) {
            $soyte = soyte::find($ID);
            $soyte->TEN_SO_Y_TE = $request->TEN_SO_Y_TE;
            $soyte->DIA_CHI = $request->DIA_CHI;
            $soyte->SDT = $request->SDT;
            $soyte->EMAIL = $request->EMAIL;
            if ($soyte->save()) {
                return response()->json(
                    [
                        'code' => 200,
                        'mess' => 'Thêm sở y tế thành công',
                    ]
                );
            }
            return response()->json(['error' => $val->errors()->all()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\soyte  $soyte
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID)
    {
        $soyte = soyte::find($ID);
        if ($soyte->delete()) {

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
    public function delete($ID)
    {
    }
    public function postNhap(Request $request)
    {
        Excel::import(new soyteimport, $request->file('file'));

        return redirect()->back();
    }
}
