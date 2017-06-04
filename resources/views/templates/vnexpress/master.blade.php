@include('templates.vnexpress.header')
<section id="mainContent">
    @yield('slider')
    <div class="content_bottom">
        @yield('content')
        @include('templates.vnexpress.right_bar')
    </div>
</section>
@include('templates.vnexpress.footer')