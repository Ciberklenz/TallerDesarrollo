

@if(Auth::user()->type == 'admin')@include('menus.admin')@endif
@if(Auth::user()->type == 'member')@include('menus.user')@endif
