<!DOCTYPE html>
<html lang="en">
@include('templates.partials.superadmin._head')
<body class="light">
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->
@include('templates.partials.superadmin._navbar')
<!-- #Top Bar -->
<div>
    <!-- Left Sidebar -->
    @include('templates.partials.superadmin._sidebar')
    <!-- #END# Left Sidebar -->
</div>
        @yield('content')

@include('templates.partials.superadmin._script')
</body>