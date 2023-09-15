<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Menu_item;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dymenu(Request $request)
    {
        
        $baseUrl = $request->root();
        $data=Page::take(200)->get(['title','slug','category_id']);
       
        $sl=0;
        foreach($data as $row)
        {
            $slg=$row['slug'];
            $val['text']=$row['title'];
            $val['href']=$baseUrl.'/'.$slg;
            $val['icon']="fas fa-home";
            $val['target']="_self";
            $val['title']="title";


            $data[$sl]=$val;

            $sl++;
        }

        $dataCurrentMenu=Menu_item::take(1)->get(['items']);
       
        foreach($dataCurrentMenu as $itms)
        {
            $dataCurrentMenuM=$itms['items'];
        }
        

        return view('backend.pages.settings.dynamic_menu',['menudata'=>$data,'current_menu'=>$dataCurrentMenuM]);
    }


   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        

        $affectedRows = Menu_item::where('id', 1)
        ->update(['items' => $request->menudata]);

        if ($affectedRows > 0) {
            $request->session()->flash('msg', 'Updated successfully.');
        } else {
            // Handle the case where no records were updated
            $request->session()->flash('msg', 'No records were updated.');
        }

        return redirect("admin/settings/dynamic-menu");
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
