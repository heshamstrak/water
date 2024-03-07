<!DOCTYPE html>
<!--
   Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
   Author: KeenThemes
   Website: http://www.keenthemes.com/
   Contact: support@keenthemes.com
   Follow: www.twitter.com/keenthemes
   Dribbble: www.dribbble.com/keenthemes
   Like: www.facebook.com/keenthemes
   Purchase: https://1.envato.market/EA4JP
   Renew Support: https://1.envato.market/EA4JP
   License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
   -->
<html lang="en" >
   <!--begin::Head-->
   <head>
      <base href="">
      <meta charset="utf-8"/>
      <title>@yield('title', 'Home | Dashboard')</title>
      <meta name="description" content="Updates and statistics"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      <!--begin::Fonts-->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
      <!--end::Fonts-->
      <!--begin::Page Vendors Styles(used by this page)-->
      <link href="{{asset('admin_assets')}}/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>
      <!--end::Page Vendors Styles-->
      <!--begin::Global Theme Styles(used by all pages)-->
      <link href="{{asset('admin_assets')}}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
      <link href="{{asset('admin_assets')}}/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css"/>
      <link href="{{asset('admin_assets')}}/css/style.bundle.css" rel="stylesheet" type="text/css"/>
      <!--end::Global Theme Styles-->
      <!--begin::Layout Themes(used by all pages)-->
      <link href="{{asset('admin_assets')}}/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css"/>
      <link href="{{asset('admin_assets')}}/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css"/>
      <link href="{{asset('admin_assets')}}/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css"/>
      <link href="{{asset('admin_assets')}}/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css"/>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="{{ asset('admin_assets/plugins/noty/noty.css') }}">
      <script src="{{ asset('admin_assets/plugins/noty/noty.min.js') }}"></script>
      <script src="{{ asset('admin_assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!--end::Layout Themes-->
      <link rel="shortcut icon" href="{{asset('admin_assets')}}/media/logos/favicon.ico"/>
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      @stack('css')
   </head>
   <!--end::Head-->
   <!--begin::Body-->
   <body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >
      <!--begin::Main-->
      <!--begin::Header Mobile-->
        @include('layouts.admin._header')
      <!--end::Header Mobile-->
      <div class="d-flex flex-column flex-root">
         <!--begin::Page-->
         <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto"  id="kt_aside">
               <!--begin::Brand-->
               <div class="brand flex-column-auto " id="kt_brand">
                  <!--begin::Logo-->
                  <a href="{{route('admin.home')}}" class="brand-logo">
                  <img alt="Logo" src="{{Storage::url('public/uploads/settings/'.setting('logo_image'))}}"/>
                  </a>
                  <!--end::Logo-->
                  <!--begin::Toggle-->
                  <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                     <span class="svg-icon svg-icon svg-icon-xl">
                        <!--begin::Svg Icon | path:{{asset('admin_assets')}}/media/svg/icons/Navigation/Angle-double-left.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                           <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <polygon points="0 0 24 0 24 24 0 24"/>
                              <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                              <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                           </g>
                        </svg>
                        <!--end::Svg Icon-->
                     </span>
                  </button>
                  <!--end::Toolbar-->
               </div>
               <!--end::Brand-->
               <!--begin::Aside Menu-->
               <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                  <!--begin::Menu Container-->
                  <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
                     <!--begin::Menu Nav-->
                     <ul class="menu-nav ">
                        @include('layouts.admin._aside')
                     </ul>
                     <!--end::Menu Nav-->
                  </div>
                  <!--end::Menu Container-->
               </div>
               <!--end::Aside Menu-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
               <!--begin::Header-->
               <div id="kt_header" class="header  header-fixed " >
                  <!--begin::Container-->
                  <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
                     <!--begin::Header Menu Wrapper-->
                     <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                        <!--begin::Header Menu-->
                        <div id="kt_header_menu" class="header-menu header-menu-mobile  header-menu-layout-default " >
                           <!--begin::Header Nav-->
                           <ul class="menu-nav ">
                              <li class="menu-item  menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here menu-item-active"  data-menu-toggle="click" aria-haspopup="true">
                                 <a  href="javascript:;" class="menu-link menu-toggle"><span class="menu-text">Pages</span><i class="menu-arrow"></i></a>
                                 <div class="menu-submenu menu-submenu-classic menu-submenu-left" >
                                    <ul class="menu-subnav">
                                       <li class="menu-item  menu-item-active "  aria-haspopup="true">
                                          <a  href="index.html" class="menu-link ">
                                             <span class="svg-icon menu-icon">
                                                <!--begin::Svg Icon | path:{{asset('admin_assets')}}/media/svg/icons/Clothes/Briefcase.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                   <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                      <rect x="0" y="0" width="24" height="24"/>
                                                      <path d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z" fill="#000000"/>
                                                      <path d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                   </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                             </span>
                                             <span class="menu-text">My Account</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                           <!--end::Header Nav-->
                        </div>
                        <!--end::Header Menu-->
                     </div>
                     <!--end::Header Menu Wrapper-->
                     <!--begin::Topbar-->
                     <div class="topbar">

                        <!--begin::User-->
                        <div class="topbar-item">
                           <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                              <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                              <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Sean</span>
                              <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                              <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                              </span>
                           </div>
                        </div>
                        <!--end::User-->
                     </div>
                     <!--end::Topbar-->
                  </div>
                  <!--end::Container-->
               </div>
               <!--end::Header-->
               <!--begin::Content-->
               <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                  <!--begin::Subheader-->
                  <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
                     <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center flex-wrap mr-2">
                           <!--begin::Page Title-->
                           <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                              Dashboard                            
                           </h5>
                           <!--end::Page Title-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Toolbar-->
                        <div class="d-flex align-items-center">
                           <!--begin::Daterange-->
                           <a href="#" class="btn btn-sm btn-light font-weight-bold mr-2" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="Select dashboard daterange" data-placement="left">
                           <span class="text-muted font-size-base font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Today</span>
                           <span class="text-primary font-size-base font-weight-bolder" id="kt_dashboard_daterangepicker_date">Aug 16</span>
                           </a>
                           <!--end::Daterange-->
                           <!--begin::Dropdowns-->
                           <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                              <a href="#" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <span class="svg-icon svg-icon-success svg-icon-lg">
                                    <!--begin::Svg Icon | path:{{asset('admin_assets')}}/media/svg/icons/Files/File-plus.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                       <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <polygon points="0 0 24 0 24 24 0 24"/>
                                          <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                          <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"/>
                                       </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                 </span>
                              </a>
                              <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right py-3">
                                 <!--begin::Navigation-->
                                 <ul class="navi navi-hover py-5">
                                    <li class="navi-item">
                                       <a href="#" class="navi-link">
                                       <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                                       <span class="navi-text">New Group</span>
                                       </a>
                                    </li>
                                    <li class="navi-item">
                                       <a href="#" class="navi-link">
                                       <span class="navi-icon"><i class="flaticon2-list-3"></i></span>
                                       <span class="navi-text">Contacts</span>
                                       </a>
                                    </li>
                                    <li class="navi-item">
                                       <a href="#" class="navi-link">
                                       <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
                                       <span class="navi-text">Groups</span>
                                       <span class="navi-link-badge">
                                       <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                       </span>
                                       </a>
                                    </li>
                                    <li class="navi-item">
                                       <a href="#" class="navi-link">
                                       <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                       <span class="navi-text">Calls</span>
                                       </a>
                                    </li>
                                    <li class="navi-item">
                                       <a href="#" class="navi-link">
                                       <span class="navi-icon"><i class="flaticon2-gear"></i></span>
                                       <span class="navi-text">Settings</span>
                                       </a>
                                    </li>
                                    <li class="navi-separator my-3"></li>
                                    <li class="navi-item">
                                       <a href="#" class="navi-link">
                                       <span class="navi-icon"><i class="flaticon2-magnifier-tool"></i></span>
                                       <span class="navi-text">Help</span>
                                       </a>
                                    </li>
                                    <li class="navi-item">
                                       <a href="#" class="navi-link">
                                       <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                       <span class="navi-text">Privacy</span>
                                       <span class="navi-link-badge">
                                       <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                       </span>
                                       </a>
                                    </li>
                                 </ul>
                                 <!--end::Navigation-->
                              </div>
                           </div>
                           <!--end::Dropdowns-->
                        </div>
                        <!--end::Toolbar-->
                     </div>
                  </div>
                  <!--end::Subheader-->
                  <!-- begin::Entry-->
                  <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container-xxl">
                        @include('admin.partials._session')
                        @yield('content')
                    </div>
                    <!--end::Container-->
                 </div>
                  <!--end::Entry -->
               </div>
               <!--end::Content-->
            </div>
            <!--end::Wrapper-->
         </div>
         <!--end::Page-->
      </div>
      <!--end::Main-->

      <!-- begin::User Panel-->
      <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
         <!--begin::Header-->
         <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
            <h3 class="font-weight-bold m-0">
               User Profile
            </h3>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
               <i class="ki ki-close icon-xs text-muted"></i>
            </a>
         </div>
         <!--end::Header-->

         <!--begin::Content-->
         <div class="offcanvas-content pr-5 mr-n5">
            <!--begin::Header-->
            <div class="d-flex align-items-center mt-5">
               <div class="symbol symbol-100 mr-5">
                     <div class="symbol-label" style="background-image: url('{{asset('admin_assets')}}/media/users/300_21.jpg');"></div>
                     <i class="symbol-badge bg-success"></i>
               </div>
               <div class="d-flex flex-column">
                     <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                       Indigo Media
                     </a>
                     <div class="text-muted mt-1">
                        Admin
                     </div>
                     <div class="navi mt-2">
                        <a href="#" class="navi-item">
                           <span class="navi-link p-0 pb-2">
                                 <span class="navi-icon mr-1">
                                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                                       <!--begin::Svg Icon | path:{{asset('admin_assets')}}/media/svg/icons/Communication/Mail-notification.svg-->
                                       <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                   d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                   fill="#000000"
                                                />
                                                <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                             </g>
                                       </svg>
                                       <!--end::Svg Icon-->
                                    </span>
                                 </span>
                                 <span class="navi-text text-muted text-hover-primary">info@indigomedia.co</span>
                           </span>
                        </a>

                        <a href="custom/pages/login/login-3/signin.html" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
                     </div>
               </div>
            </div>
            <!--end::Header-->

            <!--begin::Separator-->
            <div class="separator separator-dashed mt-8 mb-5"></div>
            <!--end::Separator-->

            <!--begin::Nav-->
            <div class="navi navi-spacer-x-0 p-0">
               <!--begin::Item-->
               <a href="custom/apps/user/profile-1/personal-information.html" class="navi-item">
                     <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                           <div class="symbol-label">
                                 <span class="svg-icon svg-icon-md svg-icon-success">
                                    <!--begin::Svg Icon | path:{{asset('admin_assets')}}/media/svg/icons/General/Notification2.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                       <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                             <rect x="0" y="0" width="24" height="24" />
                                             <path
                                                d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                                fill="#000000"
                                             />
                                             <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                                       </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                 </span>
                           </div>
                        </div>
                        <div class="navi-text">
                           <div class="font-weight-bold">
                                 My Profile
                           </div>
                           <div class="text-muted">
                                 Account settings and more
                                 <span class="label label-light-danger label-inline font-weight-bold">update</span>
                           </div>
                        </div>
                     </div>
               </a>
               <!--end:Item-->
            </div>
            <!--end::Nav-->

            <!--begin::Separator-->
            <div class="separator separator-dashed my-7"></div>
            <!--end::Separator-->
         </div>
         <!--end::Content-->
      </div>
      <!-- end::User Panel-->

      @include('layouts.admin._footer')

      <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
      <!--begin::Global Theme Bundle(used by all pages)-->
      <script src="{{asset('admin_assets')}}/plugins/global/plugins.bundle.js"></script>
      <script src="{{asset('admin_assets')}}/plugins/custom/prismjs/prismjs.bundle.js"></script>
      <script src="{{asset('admin_assets')}}/js/scripts.bundle.js"></script>
      <!--end::Global Theme Bundle-->
      <!--begin::Page Vendors(used by this page)-->
      <script src="{{asset('admin_assets')}}/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
      <!--end::Page Vendors-->
      <!--begin::Page Scripts(used by this page)-->
      <script src="{{asset('admin_assets')}}/js/pages/widgets.js"></script>
      <script src="{{asset('admin_assets')}}/js/custom/index.js"></script>
      <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js" type="text/javascript"></script>
      <link rel="stylesheet" href="{{asset('admin_assets/uploadMultiImages/image-uploader.min.css')}}">
      <script src="{{asset('admin_assets/uploadMultiImages/image-uploader.min.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script>
         $(function () {

            $(document).on('change', '.all-roles', function () {

               $(this).parents('tr').find('input[type="checkbox"]').prop('checked', this.checked);

            });

            $(document).on('change', '.role', function () {

               if (!this.checked) {
                  $(this).parents('tr').find('.all-roles').prop('checked', this.checked);
               }

            });

         });//end of document ready
         $(document).ready(function () {
         
            //delete
            $(document).on('click', '.delete, #bulk-delete', function (e) {
            
               var that = $(this)
            
               e.preventDefault();
            
               var n = new Noty({
                     text: "Confirm Delete",
                     type: "alert",
                     killer: true,
                     buttons: [
                        Noty.button("Yes", 'btn btn-success mr-2', function () {
                           let url = that.closest('form').attr('action');
                           let data = new FormData(that.closest('form').get(0));
            
                           let loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i>';
                           let originalText = that.html();
                           that.html(loadingText);
            
                           n.close();
            
                           $.ajax({
                                 url: url,
                                 data: data,
                                 method: 'post',
                                 processData: false,
                                 contentType: false,
                                 cache: false,
                                 success: function (response) {
            
                                    $("#record__select-all").prop("checked", false);
            
                                    $('.datatable').DataTable().ajax.reload();
            
                                    new Noty({
                                       layout: 'topRight',
                                       type: 'alert',
                                       text: response,
                                       killer: true,
                                       timeout: 2000,
                                    }).show();
            
                                    that.html(originalText);
                                 },
            
                           });//end of ajax call
            
                        }),
            
                        Noty.button("No", 'btn btn-danger mr-2', function () {
                           n.close();
                        })
                     ]
               });
            
               n.show();
            
            });//end of delete
         
         });//end of document ready
         
         $(document).ready(function(){
            $('.dropify').dropify();
         });
      </script>
      <!--end::Page Scripts-->
      @stack('js')
   </body>
   <!--end::Body-->
</html>