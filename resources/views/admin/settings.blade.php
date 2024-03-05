@extends('layouts.admin.app')
@section('content')

<div class="card card-custom gutter-b">
  <div class="card-header flex-wrap py-3">
      <div class="card-title">
          <h3 class="card-label text-capitalize">
              Settings
          </h3>
      </div>
  </div>
  <div class="card-body">
    <form action="{{route('admin.settings.store')}}" method="post" enctype="multipart/form-data" id="setting-form">
      @csrf
      @method('post')

      @include('admin.partials._errors')
      <h6>General Setting</h6>
      <div class="card card-custom gutter-b">
        <div class="card-header card-header-tabs-line">
            <div class="card-toolbar">
                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_4">
                            <span class="nav-icon"><i class="flaticon2-chat-1"></i></span>
                            <span class="nav-text">Main Setting</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_4">
                            <span class="nav-icon"><i class="flaticon2-chat-1"></i></span>
                            <span class="nav-text">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_3_4">
                            <span class="nav-icon"><i class="flaticon2-drop"></i></span>
                            <span class="nav-text">Social Links</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_4_4">
                            <span class="nav-icon"><i class="flaticon2-drop"></i></span>
                            <span class="nav-text">Images</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_5_4">
                            <span class="nav-icon"><i class="flaticon2-drop"></i></span>
                            <span class="nav-text">Counter</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_6_4">
                            <span class="nav-icon"><i class="flaticon2-drop"></i></span>
                            <span class="nav-text">CTA</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="kt_tab_pane_1_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4">
                    <h6>Main Setting</h6>
                    @php $name = 'email' @endphp
                    <div class="form-group">
                        <label for="{{$name}}" class="text-capitalize">{{$name}} :</label>
                        <input type="text" name="{{$name}}" class="form-control" id="{{$name}}" value="{{old($name,  setting($name) != null ? setting($name) : '')}}">
                    </div>
                    @php $name = 'phone' @endphp
                    <div class="form-group">
                        <label for="{{$name}}" class="text-capitalize">{{$name}} :</label>
                        <input type="text" name="{{$name}}" class="form-control" id="{{$name}}" value="{{old($name,  setting($name) != null ? setting($name) : '')}}">
                    </div>
                    @php $name = 'address' @endphp
                    <div class="form-group">
                        <label for="{{$name}}" class="text-capitalize">{{$name}} :</label>
                        <input type="text" name="{{$name}}" class="form-control" id="{{$name}}" value="{{old($name,  setting($name) != null ? setting($name) : '')}}">
                    </div>
                    @php $name = 'location' @endphp
                    <div class="form-group">
                        <label for="{{$name}}" class="text-capitalize">{{$name}} :</label>
                        <input type="text" name="{{$name}}" class="form-control" id="{{$name}}" value="{{old($name,  setting($name) != null ? setting($name) : '')}}">
                    </div>
                </div> 
                <div class="tab-pane fade" id="kt_tab_pane_2_4" role="tabpanel" aria-labelledby="kt_tab_pane_1_4">

                  <div class="home">
                    <div class="row">
                      <div class="col-md-6">
                        {{-- Title Main Home --}}
                        @php $name = 'main_title_home' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Main Title Home</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        {{-- Title Home --}}
                        @php $name = 'title_home' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Home Title</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                    </div>
                    {{-- Video Home --}}
                    @php $name = 'video_home' @endphp
                    <div class="form-group">
                        <label class="text-capitalize">Video Title</label>
                        <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                    </div>

                    {{--description--}}
                    @php $name = 'description_home' @endphp
                    <div class="form-group">
                        <label class="text-capitalize">Home Description</label>
                        <textarea name="{{$name}}" class="form-control" cols="30" rows="10">{{ old($name,  setting($name) != null ? setting($name) : '') }}</textarea>
                    </div>  
                  </div>
     
                  <hr>

                  <div class="feature">
                    <h4>Feature</h4>
                    <div class="row">
                      <div class="col-md-6">
                        {{-- Title Main Feature --}}
                        @php $name = 'main_title_feature' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Main Title Feature</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        {{-- Title Feature --}}
                        @php $name = 'title_feature' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Feature Title</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                    </div>
                    {{--description--}}
                    @php $name = 'description_feature' @endphp
                    <div class="form-group">
                        <label class="text-capitalize">Feature Description</label>
                        <textarea name="{{$name}}" class="form-control" cols="30" rows="10">{{ old($name,  setting($name) != null ? setting($name) : '') }}</textarea>
                    </div>    
                  </div>

                  <hr>

                  <div class="about">
                    <h4>About Us</h4>
                    <div class="row">
                      <div class="col-md-6">
                        {{-- Title Main About --}}
                        @php $name = 'main_title_about' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Main Title About</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        {{-- Title About --}}
                        @php $name = 'title_about' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">About Title</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                    </div>
                    {{--description--}}
                    @php $name = 'description_about' @endphp
                    <div class="form-group">
                        <label class="text-capitalize">About Description</label>
                        
                        <textarea name="{{$name}}" id="{{$name}}" class="form-control" cols="30" rows="10">{{ old($name,  setting($name) != null ? setting($name) : '') }}</textarea>
                    </div> 
                  </div>
             
                  
                  <hr>

                  <div class="service">
                    <h4>Services</h4>
                    <div class="row">
                      <div class="col-md-6">
                        {{-- Title Main Service --}}
                        @php $name = 'main_title_service' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Main Title Service</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        {{-- Title Service --}}
                        @php $name = 'title_service' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Service Title</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                    </div>
                    {{--description--}}
                    @php $name = 'description_service' @endphp
                    <div class="form-group">
                        <label class="text-capitalize">Service Description</label>
                        <textarea name="{{$name}}" class="form-control" cols="30" rows="10">{{ old($name,  setting($name) != null ? setting($name) : '') }}</textarea>
                    </div> 
                  </div>
              
                  <hr>

                  <div class="skill">
                    <h4>Skills</h4>
                    <div class="row">
                      <div class="col-md-6">
                        {{-- Title Main Skill --}}
                        @php $name = 'main_title_skill' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Main Title Skill</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        {{-- Title Skill --}}
                        @php $name = 'title_skill' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Skill Title</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                    </div>
                    {{--description--}}
                    @php $name = 'description_skill' @endphp
                    <div class="form-group">
                        <label class="text-capitalize">Skill Description</label>
                        <textarea name="{{$name}}" class="form-control" cols="30" rows="10">{{ old($name,  setting($name) != null ? setting($name) : '') }}</textarea>
                    </div>      
                             
                  </div>
         
                  <hr>

                  <div class="different">
                    <h4>Different</h4>
                    <div class="row">
                      <div class="col-md-6">
                        {{-- Title Main Different --}}
                        @php $name = 'main_title_different' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Main Title Different</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        {{-- Title Different --}}
                        @php $name = 'title_different' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Different Title</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                    </div>
                    {{--description--}}
                    @php $name = 'description_different' @endphp
                    <div class="form-group">
                        <label class="text-capitalize">Different Description</label>
                        <textarea name="{{$name}}" class="form-control" cols="30" rows="10">{{ old($name,  setting($name) != null ? setting($name) : '') }}</textarea>
                    </div> 
                  </div>
               
                  <hr>

                  <div class="portfolio">
                    <h4>Portfolio</h4>
                    <div class="row">
                      <div class="col-md-6">
                        {{-- Title Main Portfolio --}}
                        @php $name = 'main_title_portfolio' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Main Title Portfolio</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        {{-- Title Portfolio --}}
                        @php $name = 'title_portfolio' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Portfolio Title</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                    </div>
                    {{--description--}}
                    @php $name = 'description_portfolio' @endphp
                    <div class="form-group">
                        <label class="text-capitalize">Portfolio Description</label>
                        <textarea name="{{$name}}" class="form-control" cols="30" rows="10">{{ old($name,  setting($name) != null ? setting($name) : '') }}</textarea>
                    </div>
                  </div>
                          
                  <hr>

                  <div class="testimonial">
                    <h4>Testimonial</h4>
                    <div class="row">
                      <div class="col-md-6">
                        {{-- Title Main Testimonial --}}
                        @php $name = 'main_title_testimonial' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Main Title Testimonial</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        {{-- Title Testimonial --}}
                        @php $name = 'title_testimonial' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Testimonial Title</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                    </div>
                    {{--description--}}
                    @php $name = 'description_testimonial' @endphp
                    <div class="form-group">
                        <label class="text-capitalize">Testimonial Description</label>
                        <textarea name="{{$name}}" class="form-control" cols="30" rows="10">{{ old($name,  setting($name) != null ? setting($name) : '') }}</textarea>
                    </div>      
                          
                  </div>
                
                  <hr>

                  <div class="blog">
                    <h4>Blog</h4>
                    <div class="row">
                      <div class="col-md-6">
                        {{-- Title Main Blog --}}
                        @php $name = 'main_title_blog' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Main Title Blog</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        {{-- Title Blog --}}
                        @php $name = 'title_blog' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Blog Title</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                    </div>
                    {{--description--}}
                    @php $name = 'description_blog' @endphp
                    <div class="form-group">
                        <label class="text-capitalize">Blog Description</label>
                        <textarea name="{{$name}}" class="form-control" cols="30" rows="10">{{ old($name,  setting($name) != null ? setting($name) : '') }}</textarea>
                    </div>  
                  </div>

                  <hr>

                  <div class="contact">
                    <h4>Contact Us</h4>
                    <div class="row">
                      <div class="col-md-6">
                        {{-- Title Main Contact --}}
                        @php $name = 'main_title_contact' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Main Title Contact</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        {{-- Title Contact --}}
                        @php $name = 'title_contact' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Contact Title</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                    </div>
                    {{--description--}}
                    @php $name = 'description_contact' @endphp
                    <div class="form-group">
                        <label class="text-capitalize">Contact Description</label>
                        <textarea name="{{$name}}" class="form-control" cols="30" rows="10">{{ old($name,  setting($name) != null ? setting($name) : '') }}</textarea>
                    </div>     
                  </div>
            

                </div>
                <div class="tab-pane fade" id="kt_tab_pane_3_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4">
                    <h6>Social Links</h6>
                    @php $socials = ['facebook', 'twitter', 'linkedin', 'youtube', 'instagram']; @endphp
                    @foreach($socials as $social)
                      <div class="form-group">
                          <label for="{{$social}}" class="text-capitalize">{{$social}} :</label>
                          <input type="text" name="{{$social}}" class="form-control" id="{{$social}}" value="{{old($social,  setting($social) != null ? setting($social) : '')}}">
                          
                      </div>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="kt_tab_pane_4_4" role="tabpanel" aria-labelledby="kt_tab_pane_3_4">

                  <div class="home">
                      <h4>Home</h4>
                      @php $name = 'logo_image' @endphp
                      <div class="form-group">
                        <label class="text-capitalize">Logo Image</label>
                        <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/>
                      </div> 
                      {{-- @php $name = 'home_background_image' @endphp
                      <div class="form-group">
                        <label class="text-capitalize">Home Background Image</label>
                        <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/>
                      </div>  --}}
                  </div>

                  <hr>
                  
                  <div class="about">
                      <h4>About Us</h4>
                      <div class="row">
                        <div class="col-md-6">
                          @php $name = 'about_image_one' @endphp
                          <div class="form-group">
                            <label class="text-capitalize">About Image One</label>
                            <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/>
                          </div> 
                        </div>
                        <div class="col-md-6">
                          @php $name = 'about_image_two' @endphp
                          <div class="form-group">
                            <label class="text-capitalize">About Image Two</label>
                            <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/>
                          </div> 
                        </div>
                        <div class="col-md-6">
                          @php $name = 'about_image_three' @endphp
                          <div class="form-group">
                            <label class="text-capitalize">About Image Three</label>
                            <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/> 
                          </div> 
                        </div>
                        <div class="col-md-6">
                          @php $name = 'about_image_four' @endphp
                          <div class="form-group">
                            <label class="text-capitalize">About Image Four</label>
                            <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/> 
                          </div> 
                        </div>
                      </div>
                  </div>

                  <hr>

                  <div class="skill">
                      <h4>Skill</h4>
                      @php $name = 'skill_image' @endphp
                      <div class="form-group">
                        <label class="text-capitalize">Skill Image</label>
                        <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/>
                      </div> 
                  </div>

                </div>
                <div class="tab-pane fade" id="kt_tab_pane_5_4" role="tabpanel" aria-labelledby="kt_tab_pane_5_4">

                  <h4>Counter</h4>
                  <div class="row">

                    <div class="col-md-3">
                      {{--Title Counter One--}}
                      @php $name = 'title_counter_one' @endphp
                      <div class="form-group">
                          <label class="text-capitalize">Title Counter One</label>
                          <input type="text" name="{{$name}}" autofocus class="form-control" value="{{old($name,  setting($name) != null ? setting($name) : '') }}" >
                      </div>
                      {{--Icon--}}
                      @php $name = 'icon_counter_one' @endphp
                      <div class="form-group">
                          <label class="text-capitalize">Icon Counter One | get icon form <a href="https://icofont.com"> IcoFont</a></label>
                          <input type="text" name="{{$name}}" autofocus class="form-control" value="{{old($name,  setting($name) != null ? setting($name) : '') }}" >
                      </div>
                      {{--Count--}}
                      @php $name = 'count_counter_one' @endphp
                      <div class="form-group">
                          <label class="text-capitalize">Count Counter One</label>
                          <input type="text" name="{{$name}}" autofocus class="form-control" value="{{old($name,  setting($name) != null ? setting($name) : '') }}" >
                      </div>
                    </div>

                    <div class="col-md-3">
                      {{--Title Counter Two--}}
                      @php $name = 'title_counter_two' @endphp
                      <div class="form-group">
                          <label class="text-capitalize">Title Counter two</label>
                          <input type="text" name="{{$name}}" autofocus class="form-control" value="{{old($name,  setting($name) != null ? setting($name) : '') }}" >
                      </div>
                      {{--Icon--}}
                      @php $name = 'icon_counter_two' @endphp
                      <div class="form-group">
                          <label class="text-capitalize">Icon Counter two | get icon form <a href="https://icofont.com"> IcoFont</a></label>
                          <input type="text" name="{{$name}}" autofocus class="form-control" value="{{old($name,  setting($name) != null ? setting($name) : '') }}" >
                      </div>
                      {{--Count--}}
                      @php $name = 'count_counter_two' @endphp
                      <div class="form-group">
                          <label class="text-capitalize">Count Counter Two</label>
                          <input type="text" name="{{$name}}" autofocus class="form-control" value="{{old($name,  setting($name) != null ? setting($name) : '') }}" >
                      </div>
                    </div>

                    <div class="col-md-3">
                      {{--Title Counter Three--}}
                      @php $name = 'title_counter_three' @endphp
                      <div class="form-group">
                          <label class="text-capitalize">Title Counter Three</label>
                          <input type="text" name="{{$name}}" autofocus class="form-control" value="{{old($name,  setting($name) != null ? setting($name) : '') }}" >
                      </div>
                      {{--Icon--}}
                      @php $name = 'icon_counter_three' @endphp
                      <div class="form-group">
                          <label class="text-capitalize">Icon Counter Three | get icon form <a href="https://icofont.com"> IcoFont</a></label>
                          <input type="text" name="{{$name}}" autofocus class="form-control" value="{{old($name,  setting($name) != null ? setting($name) : '') }}" >
                      </div>
                      {{--Count--}}
                      @php $name = 'count_counter_three' @endphp
                      <div class="form-group">
                          <label class="text-capitalize">Count Counter Three</label>
                          <input type="text" name="{{$name}}" autofocus class="form-control" value="{{old($name,  setting($name) != null ? setting($name) : '') }}">
                      </div>
                    </div>

                    <div class="col-md-3">
                      {{--Title Counter One--}}
                      @php $name = 'title_counter_four' @endphp
                      <div class="form-group">
                          <label class="text-capitalize">Title Counter Four</label>
                          <input type="text" name="{{$name}}" autofocus class="form-control" value="{{old($name,  setting($name) != null ? setting($name) : '') }}">
                      </div>
                      {{--Icon--}}
                      @php $name = 'icon_counter_four' @endphp
                      <div class="form-group">
                          <label class="text-capitalize">Icon Counter Four | get icon form <a href="https://icofont.com"> IcoFont</a></label>
                          <input type="text" name="{{$name}}" autofocus class="form-control" value="{{old($name,  setting($name) != null ? setting($name) : '') }}" >
                      </div>
                      {{--Count--}}
                      @php $name = 'count_counter_four' @endphp
                      <div class="form-group">
                          <label class="text-capitalize">Count Counter Four</label>
                          <input type="text" name="{{$name}}" autofocus class="form-control" value="{{old($name,  setting($name) != null ? setting($name) : '') }}" >
                      </div>
                    </div>

                  </div>
                </div>
                <div class="tab-pane fade" id="kt_tab_pane_6_4" role="tabpanel" aria-labelledby="kt_tab_pane_6_4">

                  <h4>CTA</h4>
                  @php $name = 'title_cta' @endphp
                  <div class="form-group">
                      <label class="text-capitalize">CTA Title</label>
                      <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                  </div>
                
                  {{--description--}}
                  @php $name = 'description_cta' @endphp
                  <div class="form-group">
                      <label class="text-capitalize">CTA Description</label>
                      <textarea name="{{$name}}" class="form-control" cols="30" rows="10">{{ old($name,  setting($name) != null ? setting($name) : '') }}</textarea>
                  </div> 

                  <hr>

                  <h4>Who We Are</h4>

                  <div class="row">
                    <div class="col-md-6">
                      {{-- Title Main Campony --}}
                      @php $name = 'main_title_who' @endphp
                      <div class="form-group">
                          <label class="text-capitalize">Main Title Who We Are</label>
                          <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      {{-- Title Campony --}}
                      @php $name = 'title_who' @endphp
                      <div class="form-group">
                          <label class="text-capitalize">Campony Title Who We Are</label>
                          <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                      </div>
                    </div>
                  </div>
                  {{--description--}}
                  @php $name = 'description_who' @endphp
                  <div class="form-group">
                      <label class="text-capitalize">Campony Description</label>
                      <textarea name="{{$name}}" class="form-control" cols="30" rows="10">{{ old($name,  setting($name) != null ? setting($name) : '') }}</textarea>
                  </div> 

                  {{--description--}}
                  @php $name = 'second_description_who' @endphp
                  <div class="form-group">  
                      <label class="text-capitalize">Campony Second Description</label>
                      <textarea name="{{$name}}" class="form-control" cols="30" rows="10">{{ old($name,  setting($name) != null ? setting($name) : '') }}</textarea>
                  </div> 

                  <hr>

                  <h4>COMPANY</h4>

                  <div class="row">
                    <div class="col-md-6">
                      {{-- Title Main Campony --}}
                      @php $name = 'main_title_company' @endphp
                      <div class="form-group">
                          <label class="text-capitalize">Main Title Campony</label>
                          <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      {{-- Title Campony --}}
                      @php $name = 'title_company' @endphp
                      <div class="form-group">
                          <label class="text-capitalize">Campony Title</label>
                          <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                      </div>
                    </div>
                  </div>
                  {{--description--}}
                  @php $name = 'description_company' @endphp
                  <div class="form-group">
                      <label class="text-capitalize">Campony Description</label>
                      <textarea name="{{$name}}" class="form-control" cols="30" rows="10">{{ old($name,  setting($name) != null ? setting($name) : '') }}</textarea>
                  </div> 

                  <hr>

                  <h4>Partner</h4>

                  <div class="row">
                    <div class="col-md-6">
                      {{-- Title Main Partner --}}
                      @php $name = 'main_title_partner' @endphp
                      <div class="form-group">
                          <label class="text-capitalize">Main Title Partner</label>
                          <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      {{-- Title Partner --}}
                      @php $name = 'title_partner' @endphp
                      <div class="form-group">
                          <label class="text-capitalize">Partner Title</label>
                          <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                      </div>
                    </div>
                  </div>
                  {{--description--}}
                  @php $name = 'description_partner' @endphp
                  <div class="form-group">
                      <label class="text-capitalize">Partner Description</label>
                      <textarea name="{{$name}}" class="form-control" cols="30" rows="10">{{ old($name,  setting($name) != null ? setting($name) : '') }}</textarea>
                  </div> 

                  
                </div>

            </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="row">
            <div class="col-lg-8">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </div>
        </div>
    </div>
    </form>
  </div>
</div>


@endsection

@push('css')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('admin_assets')}}/css/plugins/forms/wizard.min.css"> --}}

@endpush

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js" integrity="sha512-bE0ncA3DKWmKaF3w5hQjCq7ErHFiPdH2IGjXRyXXZSOokbimtUuufhgeDPeQPs51AI4XsqDZUK7qvrPZ5xboZg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script src="{{asset('admin_assets')}}/js/scripts/forms/wizard-steps.min.js"></script> --}}
<script>
  $(document).ready(function(){
    $('.logo_image, .home_background_image, .about_image_one, .about_image_two, .about_image_three, .about_image_four, .skill_image').dropify();
  });

  $(".number-tab-stepss").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
      onFinished: function (event, currentIndex) {
        var form = $(this);
        form.submit();
      }
  });

  CKEDITOR.replace('description_about', {
    height: 300,
  });

  CKEDITOR.replace('second_description_who', {
    height: 300,
  });
</script>
@endpush