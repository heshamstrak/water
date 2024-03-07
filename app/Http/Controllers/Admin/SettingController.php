<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }// end of __construct


    public function general()
    {
        return view('admin.settings');

    }// end of index

    public function store(Request $request)
    {

        $request->validate([
            'email'         => 'sometimes|nullable|email',
            'phone'         => 'sometimes|nullable',
            'address'       => 'sometimes|nullable',
            'map_link'      => 'sometimes|nullable',
            'logo_header'   => 'sometimes|nullable|mimes:jpeg,png,jpg,gif,svg,webp',
            'logo_footer'   => 'sometimes|nullable|mimes:jpeg,png,jpg,gif,svg,webp',
            'facebook'      => 'sometimes|nullable',
            'twitter'       => 'sometimes|nullable',
            'linkedin'      => 'sometimes|nullable',
            'youtube'       => 'sometimes|nullable',
            'instagram'     => 'sometimes|nullable',
            'title'         => 'sometimes|nullable',
            'description'   => 'sometimes|nullable',
            'link_video'    => 'sometimes|nullable',
        ]);

        $requestData = $request->except(['_token', '_method']);

        if ($request->logo_image) {
            
            setting('logo_image') != null ? Storage::disk('local')->delete('public/uploads/' . setting('logo_image')) : '';
            $request->logo_image->store('public/uploads/settings/');
            $requestData['logo_image'] = $request->logo_image->hashName();
        }

        if ($request->header_image) {
            setting('header_image') != null ? Storage::disk('local')->delete('public/uploads/settings/' . setting('header_image')) : '';
            $request->header_image->store('public/uploads/settings');
            $requestData['header_image'] = $request->header_image->hashName();
        }
        if ($request->contact_image) {
            setting('contact_image') != null ? Storage::disk('local')->delete('public/uploads/' . setting('contact_image')) : '';
            $request->contact_image->store('public/uploads/settings/');
            $requestData['contact_image'] = $request->contact_image->hashName();
        }

        if ($request->about_image) {
            setting('about_image') != null ? Storage::disk('local')->delete('public/uploads/settings/' . setting('about_image')) : '';
            $request->about_image->store('public/uploads/settings');
            $requestData['about_image'] = $request->about_image->hashName();
        }
        setting($requestData)->save();
        session()->flash('success', __('Update Successfully'));
        return redirect()->back();

    }// end of store

}//end of controller


