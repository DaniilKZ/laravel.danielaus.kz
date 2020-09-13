<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\AdminPointBilbord;

class SomeurlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
       $adb = new AdminPointBilbord;  

        $data = $request->all(); 
        $count = 0;
        $dataSet = [];

        foreach ($data as $key => $value) {
            foreach ($value as $key => $value) {
                // var_dump($value['type']);
                // var_dump($value['side']);
                $dataSet[] = array(
                    'user_id' => '1',
                    'content' => $value['content'],
                    'height' => $value['height'],
                    'width' => $value['width'],
                    'price' => $value['price'],
                    'locate' => $value['locate']
                );
            }
            $count++;
        }
        $responcce = DB::table('admin_point_bilbords')->insert($dataSet);
        return $responcce;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
