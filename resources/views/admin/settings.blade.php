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
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="kt_tab_pane_1_4" role="tabpanel" aria-labelledby="kt_tab_pane_1_4">
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
                <div class="tab-pane fade" id="kt_tab_pane_2_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4">

                  <div class="home">
                    <div class="row">
                      <div class="col-md-12">
                        {{-- Title Home --}}
                        @php $name = 'title_home' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Home Title</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                    </div>

                    {{--description--}}
                    @php $name = 'description_home' @endphp
                    <div class="form-group">
                        <label class="text-capitalize">Home Description</label>
                        <textarea name="{{$name}}" class="form-control" cols="30" rows="10">{{ old($name,  setting($name) != null ? setting($name) : '') }}</textarea>
                    </div>  
                  </div>
     
                  <hr>

                  <div class="product">
                    <h4>Main Product</h4>
                    <div class="row">
                      <div class="col-md-6">
                        {{-- Title Main product --}}
                        @php $name = 'main_title_product' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Main Title product</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                    </div>
                  </div>

                  <hr>

                  <div class="facts">
                    <h4>Facts</h4>
                    <div class="row">
                      <div class="col-md-12">
                        {{-- Title Facts --}}
                        @php $name = 'title_facts' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Facts Title</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                      @php $name = 'description_facts' @endphp
                      <div class="col-md-12">
                        <div class="form-group">
                            <label class="text-capitalize">Facts Description</label>
                            <textarea name="{{$name}}" class="form-control" cols="30" rows="10">{{ old($name,  setting($name) != null ? setting($name) : '') }}</textarea>
                        </div>
                      </div>
                    </div>
                  </div>

                  <hr>

                  <div class="slogan">
                    <h4>slogan</h4>
                    <div class="row">
                      <div class="col-md-12">
                        {{-- Title Facts --}}
                        @php $name = 'title_slogan' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Slogan Title</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                    </div>
                  </div>

                  <hr>

                  <div class="about">
                    <h4>About Us</h4>
                    <div class="row">
                      <div class="col-md-12">
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
                        <textarea name="{{$name}}" id="editor" class="form-control" cols="30" rows="10">{{ old($name,  setting($name) != null ? setting($name) : '') }}</textarea>
                    </div> 
                  </div>
                
                  <hr>

                  <div class="blog">
                    <h4>Blog</h4>
                    <div class="row">
                      <div class="col-md-12">
                        {{-- Title Blog --}}
                        @php $name = 'title_blog' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Blog Title</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                    </div>  
                  </div>

                  <hr>

                  <div class="shots">
                    <h4>shots</h4>
                    <div class="row">
                      <div class="col-md-12">
                        {{-- Title Blog --}}
                        @php $name = 'title_shots' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">shots Title</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                    </div>  
                  </div>

                  <hr>

                  <div class="contact">
                    <h4>Contact Us</h4>
                    <div class="row">
                      <div class="col-md-12">
                        {{-- Title Contact --}}
                        @php $name = 'title_contact' @endphp
                        <div class="form-group">
                            <label class="text-capitalize">Contact Title</label>
                            <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name,  setting($name) != null ? setting($name) : '') }}">
                        </div>
                      </div>
                    </div>   
                  </div>
            

                </div>
                <div class="tab-pane fade" id="kt_tab_pane_3_4" role="tabpanel" aria-labelledby="kt_tab_pane_3_4">
                    <h6>Social Links</h6>
                    @php $socials = ['facebook', 'twitter', 'linkedin', 'youtube', 'instagram']; @endphp
                    @foreach($socials as $social)
                      <div class="form-group">
                          <label for="{{$social}}" class="text-capitalize">{{$social}} :</label>
                          <input type="text" name="{{$social}}" class="form-control" id="{{$social}}" value="{{old($social,  setting($social) != null ? setting($social) : '')}}">
                          
                      </div>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="kt_tab_pane_4_4" role="tabpanel" aria-labelledby="kt_tab_pane_4_4">

                  <div class="home">
                      <h4>Home</h4>
                      @php $name = 'logo_image' @endphp
                      <div class="form-group">
                        <label class="text-capitalize">Logo Image</label>
                        <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/>
                      </div> 
                      @php $name = 'footer_logo_image' @endphp
                      <div class="form-group">
                        <label class="text-capitalize">Footer Logo Image</label>
                        <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/>
                      </div> 
                      @php $name = 'header_image' @endphp
                      <div class="form-group">
                        <label class="text-capitalize">Header Image</label>
                        <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/>
                      </div> 
                      {{-- @php $name = 'home_background_image' @endphp
                      <div class="form-group">
                        <label class="text-capitalize">Home Background Image</label>
                        <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/>
                      </div>  --}}
                      <div class="row">
                        <div class="col-6">
                          @php $name = 'about_header_image' @endphp
                          <div class="form-group">
                            <label class="text-capitalize">About Header Image</label>
                            <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/>
                          </div> 
                        </div>
                        <div class="col-6">
                          @php $name = 'shop_header_image' @endphp
                          <div class="form-group">
                            <label class="text-capitalize">Shop Header Image</label>
                            <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/>
                          </div> 
                        </div>
                        <div class="col-6">
                          @php $name = 'blog_header_image' @endphp
                          <div class="form-group">
                            <label class="text-capitalize">Blog Header Image</label>
                            <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/>
                          </div> 
                        </div>
                        <div class="col-6">
                          @php $name = 'contact_header_image' @endphp
                          <div class="form-group">
                            <label class="text-capitalize">Contact Header Image</label>
                            <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/>
                          </div> 
                        </div>
                        <div class="col-6">
                          @php $name = 'cart_header_image' @endphp
                          <div class="form-group">
                            <label class="text-capitalize">Cart Header Image</label>
                            <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/>
                          </div> 
                        </div>
                        <div class="col-6">
                          @php $name = 'checkout_header_image' @endphp
                          <div class="form-group">
                            <label class="text-capitalize">Checkout Header Image</label>
                            <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/>
                          </div> 
                        </div>
                      </div>
                      @php $name = 'product_header_image' @endphp
                      <div class="form-group">
                        <label class="text-capitalize">Single Product Header Image</label>
                        <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/>
                      </div> 
                  </div>
        
                  <hr>
                  
                  <div class="about">
                      <h4>About Us</h4>
                      <div class="row">
                        <div class="col-md-12">
                          @php $name = 'about_image' @endphp
                          <div class="form-group">
                            <label class="text-capitalize">About Image</label>
                            <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/>
                          </div> 
                        </div>
                      </div>
                  </div>

                  <hr>

                  <div class="contact">
                      <h4>Contact Us</h4>
                      @php $name = 'contact_image' @endphp
                      <div class="form-group">
                        <label class="text-capitalize">Contact Image</label>
                        <input type="file" name="{{$name}}" id="input-file-now" class="{{$name}}" data-show-remove="false" @if(setting($name) != null) data-default-file="{{Storage::url('public/uploads/settings/'.setting($name))}}" data-show-remove="false" alue="{{ old($name, setting($name)) }}"@endif  data-height="250"/>
                      </div> 
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
    $('.logo_image, .cart_header_image, .checkout_header_image, .product_header_image, .about_header_image, .blog_header_image, .shop_header_image, .contact_header_image, .footer_logo_image, .header_image, .about_image, .contact_image').dropify();
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

  ClassicEditor.create(document.querySelector("#editor"));
  ClassicEditor.create(document.querySelector("#editor2"));
</script>
@endpush