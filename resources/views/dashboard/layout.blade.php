@include('dashboard.partials.header')
<div id="main">
    <div class="wrapper">
        @include('dashboard.partials.left-sidebar')
		
        <section id="content">
        	@yield('breadcrumbs')
            <div class="container">
                @yield('content')
            </div>
        </section>

        @include('dashboard.partials.right-sidebar')
    </div>
</div>
@include('dashboard.partials.footer')