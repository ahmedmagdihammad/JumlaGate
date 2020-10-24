<base href="">
<meta charset="utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Jumla Gate</title>
<meta name="description" content="Updates and statistics" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<!--begin::Fonts-->
{{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />--}}
<!--end::Fonts-->
<!--begin::Page Vendors Styles(used by this page)-->
<link href="{{asset('admin_assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
<!--end::Page Vendors Styles-->
<!--begin::Global Theme Styles(used by all pages)-->
<link href="{{asset('admin_assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin_assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin_assets/css/'. App::getLocale() .'/style.bundle.css')}}" rel="stylesheet" type="text/css" />
<!--end::Global Theme Styles-->
<!--begin::Layout Themes(used by all pages)-->
<link href="{{asset('admin_assets/css/'. App::getLocale() .'/themes/layout/header/base/'.Setting::get('theme').'.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin_assets/css/'. App::getLocale() .'/themes/layout/header/menu/'.Setting::get('theme').'.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin_assets/css/'. App::getLocale() .'/themes/layout/brand/'.Setting::get('theme').'.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin_assets/css/'. App::getLocale() .'/themes/layout/aside/'.Setting::get('theme').'.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin_assets/css/ar/pages/users/login-6.css')}}" rel="stylesheet" type="text/css" />

<!--end::Layout Themes-->
<link rel="shortcut icon" href="{{asset('admin_assets/media/logos/favicon.ico')}}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
