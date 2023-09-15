<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SettingSlider;


class SliderController extends Controller
{
    public function sliderPage()
    {
        
        $data=SettingSlider::all()->take(200);

        return view('backend.pages.settings.slider',['slider_data'=>$data]);
    }


    public function create(request $request)
    {

        $datafile=$request->file('logo')->store('public/uploads');
        $SettingSlider= new SettingSlider;

        $SettingSlider->title=$request->name;
        $SettingSlider->image_path=str_replace('public/','',$datafile);

        $SettingSlider->save();

        if ($SettingSlider) 
        {
            $request->session()->flash('msg', 'Add successfully.');
        } else {
            // Handle the case where no records were updated
            $request->session()->flash('msg', 'No records were Added.');
        }

        return redirect('admin/settings/slider');

    }


    public function sliderShow(request $request)
    {
        
        $data = SettingSlider::where('id', $request->id)->get();

        return view('backend.pages.settings.editslider_show',['slider_show_data'=>$data]);
    }


    public function UploadSlider(Request $request)
    {
        if ($request->hasFile('logo')) {
            $datafile = $request->file('logo')->store('public/uploads');
        }

        if (isset($datafile)) {
            $affectedRows = SettingSlider::where('id', $request->sid)
                ->update([
                    'title' => $request->name,
                    'image_path' => isset($datafile) ? str_replace('public/', '', $datafile) : null
                ]);

            if ($affectedRows > 0) {
                $request->session()->flash('msg', 'Updated successfully.');
            } else {
                // Handle the case where no records were updated
                $request->session()->flash('msg', 'No records were updated.');
            }
        } else {
            $request->session()->flash('msg', 'No records were updated.');
        }

        return redirect("admin/settings/slider");
    }


    public function deleteSlider($id)
    {
        $slider = SettingSlider::find($id);

        if ($slider) {
            $slider->delete();
            session()->flash('msg', 'Record deleted successfully.');
        } else {
            session()->flash('msg', 'Record not found.');
        }

        return redirect('admin/settings/slider');
    }

    

}
