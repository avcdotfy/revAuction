@extends('admin.layout.base')
@section('page_style')
@endsection
@section('main_section')
    <div class="w3-display-middle" style="
    text-align: center;
    padding: 54px;
    ">
        <h1 class="w3-jumbo w3-animate-top w3-center"><code>Access Denied</code></h1>
        <hr class="w3-border-white w3-animate-left" style="margin:auto;width:50%">
        <h3 class="w3-center w3-animate-right">You dont have permission to view this section.</h3>
        <h3 class="w3-center w3-animate-zoom">🚫🚫🚫🚫</h3>
        <h6 class="w3-center w3-animate-zoom"><strong>Error Code</strong>: 403 forbidden</h6>
    </div>
@endsection
