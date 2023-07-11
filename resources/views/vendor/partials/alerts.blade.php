@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ Session::get('success') }}<br />
    </div>
@endif
@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ Session::get('error') }}<br />
    </div>
@endif
@if (Session::has('info'))
    <div class="alert alert-info alert-dismissible fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ Session::get('info') }}<br />
    </div>
@endif
