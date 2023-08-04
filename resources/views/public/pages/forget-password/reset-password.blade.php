@extends('public.layout.base')

@section('login-form')
    <form method="post" action="{{ route('admin-login') }}">
        @csrf
        
    </form>
@endsection


@push('scripts')
@endpush
