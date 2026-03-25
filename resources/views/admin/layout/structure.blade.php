@php
    $header = 'admin.layout.header';
    if(Request::is('photographer/*') || Auth::guard('photographer')->check()) {
        $header = 'photographer.layout.header';
    } elseif(Request::is('editor/*') || session()->has('editor_id')) {
        $header = 'editor.layout.header';
    }
@endphp

@include($header)

<div class="main-content">
    @yield('content')
</div>

@include('admin.layout.footer')