<html
    class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths"
    lang="en"
    style=""
>
    @include('layouts.includes.head')

    <body>
        @include('layouts.includes.header')

        @yield('content')

        @include('layouts.includes.footer')
        @include('layouts.includes.scroll-up')
        @include('layouts.includes.scripts')
    </body>
</html>
