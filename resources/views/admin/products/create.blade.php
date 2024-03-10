@php $nameModel = 'products' @endphp @extends('layouts.admin.app') @section('content')

<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize">{{$nameModel}} | Create</h3>
    </div>
    <div class="card-body">
        <form class="form" action="{{ route('admin.'.$nameModel.'.store') }}" method="POST" enctype="multipart/form-data">
            @csrf @method('post') @include('admin.partials._errors')
            {{-- Name --}}
            <div class="card card-custom gutter-b">
                <div class="card-header card-header-tabs-line">
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-bold nav-tabs-line">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_4">
                                    <span class="nav-icon"><i class="flaticon2-chat-1"></i></span>
                                    <span class="nav-text">Product</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_4">
                                    <span class="nav-icon"><i class="flaticon2-chat-1"></i></span>
                                    <span class="nav-text">Shipping</span>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_6_4">
                                    <span class="nav-icon"><i class="flaticon2-drop"></i></span>
                                    <span class="nav-text">Image</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_tab_pane_1_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4">
                            <h6>Product</h6>
                            @php $nameInput = 'name' @endphp
                            <div class="form-group">
                                <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                                <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput) }}" required />
                            </div>

                            {{--Main Description--}} @php $nameInput = 'main_description' @endphp
                            <div class="form-group">
                                <label class="text-capitalize">Main Description <span class="text-danger">*</span></label>
                                <textarea name="{{$nameInput}}" class="form-control" cols="30" rows="10">{{ old($nameInput) }}</textarea>
                            </div>

                            {{--Description--}} @php $nameInput = 'description' @endphp
                            <div class="form-group">
                                <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                                <textarea name="{{$nameInput}}" id="editor" class="form-control" cols="30" rows="10">{{ old($nameInput) }}</textarea>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    {{-- ingredient --}}
                                    @php $nameInput = 'ingredients' @endphp
                                    <div class="form-group">
                                        <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                                        <select class="js-example-basic-multiple" name="{{$nameInput}}[]" multiple="multiple" style="width: 100%">
                                            <option value="">Select Ingredient</option>
                                            @foreach($ingredients as $row)
                                                <option value="{{$row->id}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    {{-- ingredient --}}
                                    @php $nameInput = 'weights' @endphp
                                    <div class="form-group">
                                        <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                                        <select class="js-example-basic-multiple" name="{{$nameInput}}[]" multiple="multiple" style="width: 100%">
                                            <option value="">Select Weight</option>
                                            @foreach($weights as $row)
                                                <option value="{{$row->id}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    {{-- Count --}} @php $nameInput = 'count' @endphp
                                    <div class="form-group">
                                        <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                                        <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput) }}" required >
                                    </div>
                                </div>
                                <div class="col-3">
                                    {{-- Price --}} @php $nameInput = 'price' @endphp
                                    <div class="form-group">
                                        <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                                        <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput) }}" required />
                                    </div>
                                </div>
                                <div class="col-3">
                                    @php $nameInput = 'discount_type' @endphp
                                    <div class="form-group">
                                        <label class="text-capitalize">{{$nameInput}}</label>
                                        <select name="{{$nameInput}}" class="form-control">
                                            <option value="">Select Your Discount Type</option>
                                            <option value="0">Percent</option>
                                            <option value="1">Amount</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    {{-- discount --}} @php $nameInput = 'discount' @endphp
                                    <div class="form-group">
                                        <label class="text-capitalize">{{$nameInput}}</label>
                                        <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput) }}" />
                                    </div>
                                </div>
                            </div>

                            {{-- Category --}} @php $nameInput = 'category_id' @endphp
                            <div class="form-group">
                                <label class="text-capitalize">Category</label>
                                <select name="{{$nameInput}}" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id == old($nameInput) ? 'selected' : ''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            @php $nameInput = 'type' @endphp
                            <label for="" class="text-capitalize">{{$nameInput}}</label>
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" value="1" id="flexRadioDefault1" name="{{$nameInput}}"/>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Master
                                </label>
                            </div>
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" value="2" id="flexRadioDefault2" name="{{$nameInput}}"/>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Main
                                </label>
                            </div>
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" value="3" id="flexRadioDefault3" name="{{$nameInput}}"/>
                                <label class="form-check-label" for="flexRadioDefault3">
                                    About
                                </label>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_tab_pane_2_4" role="tabpanel" aria-labelledby="kt_tab_pane_1_4">
                            <h4>Shipping</h4>
                            {{--Description--}} @php $nameInput = 'shipping_description' @endphp
                            <div class="form-group">
                                <label class="text-capitalize">Shipping Description<span class="text-danger">*</span></label>
                                <textarea id="editor2" name="{{$nameInput}}" class="form-control" cols="30" rows="10">{{ old($nameInput) }}</textarea>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="kt_tab_pane_6_4" role="tabpanel" aria-labelledby="kt_tab_pane_6_4">
                            <h4>Image</h4>
                            <div class="input-images-2" style="padding-top: 0.5rem; padding-bottom: 0.5rem;"></div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-capitalize">Icon</label>
                                        <input type="file" name="icon" id="input-file-now" class="dropify" data-show-remove="false"  data-height="255"/>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-capitalize">Small Image</label>
                                        <input type="file" name="small_image" id="input-file-now" class="dropify" data-show-remove="false"  data-height="255"/>
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
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
        $('.dropify').dropify();
    });
    ClassicEditor.create(document.querySelector("#editor"));
    ClassicEditor.create(document.querySelector("#editor2"));
    $(".input-images-2").imageUploader({
        imagesInputName: "images",
        preloadedInputName: "old",
    });
</script>
@endpush
