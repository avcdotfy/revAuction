@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom: 20px">
        <h1>Items | Create New Item </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_nr" class="row">
                            <form action="{{ route('item.store') }}" method="post">
                                @csrf
                                @include('admin.partials.item-form')
                            </form>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@push('scripts')
    <script>
        let row = `<tr>
                    <td>1</td>
                    <td>
                        <span style="font-size:11px;color:red;font-weight:600;display:none;">Please
                            Select Item Region</span>
                            <select class="form-control" name="region[]">
                            <option value="">Select Region</option>
                             @foreach ($regions as $reg)
                                <option value="{{ $reg->id }}">{{ $reg->name }}</option>
                            @endforeach 

                        </select>
                    </td>
                    <td>
                        <span style="font-size:11px;color:red;font-weight:600;display:none;">Please
                            Enter Item Price</span>
                        <input type="number" name='price[]' min="1" class="form-control">
                    </td>
                    <td>
                        <span style="font-size:11px;color:red;font-weight:600;display:none;">Please
                            Enter Item Unit</span>
                        <input type="number" name='unit[]' min="1" class="form-control">
                    </td>
                    <td>
                        <span id="ContentPlaceHolder1_RequiredFieldValidator8" style="font-size:11px;color:red;font-weight:600;display:none;">Please
                            Enter Item Unit Details</span>
                        <input type="text" name='unit_details[]' min="1" class="form-control">
                    </td>
                    <td>
                        <button id="remove_btn" onClick="$(this).parent().parent().remove();" type="button" class="btn btn-sm btn-danger"><span
                                class="plus-icon"> - </span> Remove</button>
                    </td>
                </tr>`;


        $(document).ready(function() {
            $('#add_btn').on('click', function() {
                $('#tbody').append(row);
            });
        });
    </script>
@endpush
