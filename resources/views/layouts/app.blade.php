<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body class="rbt-header-sticky">
    @include('layouts.header')
    <!-- <main class="rbt-main-wrapper"> -->
    @yield('content')
    <!-- </main> -->
    @include('layouts.footer')
    @include('layouts.js')
</body>

</html>
