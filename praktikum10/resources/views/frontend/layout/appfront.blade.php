@include('frontend.layout.top')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            @yield('content')
        </div>
    </main>
</div>
@include('frontend.layout.bottom')