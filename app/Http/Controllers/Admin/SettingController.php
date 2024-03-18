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
        if ($request->footer_logo_image) {
            
            setting('footer_logo_image') != null ? Storage::disk('local')->delete('public/uploads/' . setting('footer_logo_image')) : '';
            $request->footer_logo_image->store('public/uploads/settings/');
            $requestData['footer_logo_image'] = $request->footer_logo_image->hashName();
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
        
        if ($request->blog_header_image) {
            setting('blog_header_image') != null ? Storage::disk('local')->delete('public/uploads/settings/' . setting('blog_header_image')) : '';
            $request->blog_header_image->store('public/uploads/settings');
            $requestData['blog_header_image'] = $request->blog_header_image->hashName();
        }
        
        if ($request->about_header_image) {
            setting('about_header_image') != null ? Storage::disk('local')->delete('public/uploads/settings/' . setting('about_header_image')) : '';
            $request->about_header_image->store('public/uploads/settings');
            $requestData['about_header_image'] = $request->about_header_image->hashName();
        }
        
        if ($request->shop_header_image) {
            setting('shop_header_image') != null ? Storage::disk('local')->delete('public/uploads/settings/' . setting('shop_header_image')) : '';
            $request->shop_header_image->store('public/uploads/settings');
            $requestData['shop_header_image'] = $request->shop_header_image->hashName();
        }
        
        if ($request->contact_header_image) {
            setting('contact_header_image') != null ? Storage::disk('local')->delete('public/uploads/settings/' . setting('contact_header_image')) : '';
            $request->contact_header_image->store('public/uploads/settings');
            $requestData['contact_header_image'] = $request->contact_header_image->hashName();
        }
          
        if ($request->cart_header_image) {
            setting('cart_header_image') != null ? Storage::disk('local')->delete('public/uploads/settings/' . setting('cart_header_image')) : '';
            $request->cart_header_image->store('public/uploads/settings');
            $requestData['cart_header_image'] = $request->cart_header_image->hashName();
        }

        if ($request->checkout_header_image) {
            setting('checkout_header_image') != null ? Storage::disk('local')->delete('public/uploads/settings/' . setting('checkout_header_image')) : '';
            $request->checkout_header_image->store('public/uploads/settings');
            $requestData['checkout_header_image'] = $request->checkout_header_image->hashName();
        }

        if ($request->product_header_image) {
            setting('product_header_image') != null ? Storage::disk('local')->delete('public/uploads/settings/' . setting('product_header_image')) : '';
            $request->product_header_image->store('public/uploads/settings');
            $requestData['product_header_image'] = $request->product_header_image->hashName();
        }

        setting($requestData)->save();
        session()->flash('success', __('Update Successfully'));
        return redirect()->back();

    }// end of store

}//end of controller


