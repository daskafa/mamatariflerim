@include('back.layouts.header')
@include('back.layouts.left-menu')
<div class="page-container">
@include('back.layouts.header-top');
    <div class="main-content">

        @yield('content')

    </div>
</div>
@include('back.layouts.footer')
</html>
