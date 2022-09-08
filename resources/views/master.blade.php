@php
    use Illuminate\Support\Facades\Route;
@endphp
@include('common.header', ['seo'=>$seo, 'settings'=>$settings])
@yield('content')
@include('common.footer', ['seo'=>$seo, 'settings'=>$settings])