@extends('dashboard.layouts.admin')
@section('content')
    @can('permission_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" data-toggle="modal" data-target="#add_page" style="color: white">
                    {{ trans('global.add') }} Vouchers
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            Vouchers {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.homepage.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover datatable datatable-Permission">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.menu.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.menu.fields.title') }}
                            </th>
                            <th>
                                {{ trans('Description') }}
                            </th>
                            <th>
                                {{ trans('Value') }}
                            </th>
                            <th>
                                {{ trans('Featured') }}
                            </th>
                            <th>
                                {{ trans('Image') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vouchers as $key => $homepage)
                            <tr data-entry-id="{{ $homepage->id }}">
                                <td>

                                </td>
                                <td class="text-center">
                                    {{ ++$key ?? '' }}
                                </td>
                                <td class="text-center">
                                    {{ strip_tags($homepage->title) ?? '' }}
                                </td>
                                <td class="text-center">
                                    {!! substr(strip_tags($homepage->description), 0, 25) !!}...
                                </td>
                                <td class="text-center">
                                    {{ @$homepage->value }}
                                </td>
                                <td class="text-center">
                                    <button
                                        class="btn btn-xs @if ($homepage->is_featured == 0) btn-danger @else btn-success @endif">
                                        @if ($homepage->is_featured == 0)
                                            Not Featured
                                        @else
                                            Featured
                                        @endif
                                    </button>
                                </td>
                                <td class="text-center">
                                    @if ($homepage->image)
                                        <a href="{{ $homepage->image }}" target="_blank" style="display: inline-block">
                                            <img loading="lazy" style="width: 55px; height:55px; border-radius:50%;"
                                                src="{{ $homepage->image }}">
                                        </a>
                                    @endif
                                </td>
                                <td class="text-center">

                                    @can('menu_edit')
                                        <a class="btn btn-xs btn-info" style="color: white" data-toggle="modal"
                                            data-target="#add_page{{ $homepage->id }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('menu_delete')
                                        <form action="{{ route('admin.voucher.destroy') }}" method="POST"
                                            onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                            style="display: inline-block;">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $homepage->id }}">
                                            <input type="submit" class="btn btn-xs btn-danger"
                                                value="{{ trans('global.delete') }}">
                                        </form>
                                    @endcan

                                </td>
                            </tr>
                            <!-- Update -->
                            <div class="modal fade" id="add_page{{ $homepage->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">&emsp;Edit Voucher</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('admin.voucher.update') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="last_url" value="{{ URL::current() }}">
                                                <input type="hidden" name="id" value="{{ $homepage->id }}">
                                                <div class="row">
                                                    <div class="form-group col-12">
                                                        <label for="title">Title</label>
                                                        <input class="form-control" type="text" id="title"
                                                            name="title" placeholder="Enter something...." rows="2"
                                                            value="{{ old('title', $homepage->title) }}">
                                                    </div>

                                                    <div class="form-group col-12">
                                                        <label for="blog">Title & Description</label>
                                                        <textarea class="form-control" type="text" id="content" name="description" placeholder="Enter something...."
                                                            rows="5">{{ old('description', $homepage->description) }}</textarea>
                                                    </div>

                                                    <div class="form-group col-12 mt-2">
                                                        <label for="title">Select Type</label>
                                                        <select class="form-control" name="type" required>
                                                            <option disabled value="">Select Type</option>
                                                            <option value="0"
                                                                {{ $homepage->type == 0 ? 'selected' : '' }}>Percentage
                                                            </option>
                                                            <option value="1"
                                                                {{ $homepage->type == 1 ? 'selected' : '' }}>Off</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="form-group col-12 mt-2">
                                                        <label for="title">Image</label>
                                                        <input class="form-control" type="file"
                                                            accept="image/png, image/webp, image/jpeg, image/jpg"
                                                            name="img">
                                                    </div>

                                                    <div class="form-group col-12 mt-2">
                                                        <label for="title">Code</label>
                                                        <input class="form-control" type="text" name="code"
                                                            value="{{ old('code', $homepage->code) }}">
                                                    </div>
                                                    <div class="form-group col-12 mt-2">
                                                        <label for="title">Value</label>
                                                        <input class="form-control" type="number" min="1"
                                                            max="100" name="value"
                                                            value="{{ old('value', $homepage->value) }}" required>
                                                    </div>
                                                    <div class="form-group col-12 mt-2">
                                                        <label for="title">Select Featured</label>
                                                        <select class="form-control" name="is_featured" required>
                                                            <option disabled value="">Select Featured</option>
                                                            <option value="0"
                                                                {{ $homepage->is_featured == 0 ? 'selected' : '' }}>No
                                                            </option>
                                                            <option value="1"
                                                                {{ $homepage->is_featured == 1 ? 'selected' : '' }}>Yes
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-12 mt-2">
                                                        <label for="title">Select Status</label>
                                                        <select class="form-control" name="status" required>
                                                            <option disabled value="">Select Status</option>
                                                            <option value="0"
                                                                {{ $homepage->status == 0 ? 'selected' : '' }}>Disabled
                                                            </option>
                                                            <option value="1"
                                                                {{ $homepage->status == 1 ? 'selected' : '' }}>Active
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button type="submit"
                                                    class="btn btn-success btn-rounded btn-fw">Updated</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>


                    <!-- Modal -->
                    <div class="modal fade" id="add_page" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">&emsp;Add Voucher</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.voucher.add') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="last_url" value="{{ URL::current() }}">

                                        <div class="row">
                                            <div class="form-group col-12">
                                                <label for="title">Name</label>

                                                <input class="form-control" type="text" id="title" name="title"
                                                    placeholder="Enter something...." rows="2"
                                                    value="{{ old('title') }}">
                                            </div>

                                            <div class="form-group col-12">
                                                <label for="blog">Description</label>
                                                <textarea class="form-control" type="text" id="content" name="description" placeholder="Enter something...."
                                                    rows="5">{{ old('description') }}</textarea>
                                            </div>

                                            <div class="form-group col-12 mt-2">
                                                <label for="title">Select Type</label>
                                                <select class="form-control" name="type" required>
                                                    <option disabled selected value="">Select Type</option>
                                                    <option value="0">Percentage</option>
                                                    <option value="1">Off</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-12 mt-2">
                                                <label for="title">Image</label>
                                                <input class="form-control" type="file"
                                                    accept="image/png, image/webp, image/jpeg, image/jpg" name="img"
                                                    required>
                                            </div>

                                            <div class="form-group col-12 mt-2">
                                                <label for="title">Code</label>
                                                <input class="form-control" type="text" name="code"
                                                    value="{{ old('code') }}">
                                            </div>
                                            <div class="form-group col-12 mt-2">
                                                <label for="title">Value</label>
                                                <input class="form-control" type="number" min="1" max="100"
                                                    name="value" value="{{ old('value') }}" required>
                                            </div>
                                            <div class="form-group col-12 mt-2">
                                                <label for="title">Select Featured</label>
                                                <select class="form-control" name="is_featured" required>
                                                    <option disabled value="">Select Featured</option>
                                                    <option value="0"
                                                        {{ old('is_featured') == 0 ? 'selected' : '' }}>No</option>
                                                    <option value="1"
                                                        {{ old('is_featured') == 1 ? 'selected' : '' }}>Yes</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-12 mt-2">
                                                <label for="title">Select Status</label>
                                                <select class="form-control" name="status" required>
                                                    <option disabled value="">Select Status</option>
                                                    <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>
                                                        Disabled</option>
                                                    <option selected value="1"
                                                        {{ old('status') == 1 ? 'selected' : '' }}>Active</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-rounded btn-fw">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            $.extend(true, $.fn.dataTable.defaults, {
                orderCellsTop: true,
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            });
            let table = $('.datatable-Permission:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })
    </script>

    <script>
        $(document).ready(function() {
            $('.modal').on('shown.bs.modal', function() {
                $('#title').trigger('focus');
            });

            var allEditors = document.querySelectorAll('.ckeditor');
            for (var i = 0; i < allEditors.length; ++i) {
                ClassicEditor.create(
                    allEditors[i], {
                        toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList',
                            'blockQuote'
                        ],
                        heading: {
                            options: [{
                                    model: 'paragraph',
                                    title: 'Paragraph',
                                    class: 'ck-heading_paragraph'
                                },
                                {
                                    model: 'heading1',
                                    view: 'h1',
                                    title: 'Heading 1',
                                    class: 'ck-heading_heading1'
                                },
                                {
                                    model: 'heading2',
                                    view: 'h2',
                                    title: 'Heading 2',
                                    class: 'ck-heading_heading2'
                                },
                                {
                                    model: 'heading3',
                                    view: 'h3',
                                    title: 'Heading 3',
                                    class: 'ck-heading_heading3'
                                },
                                {
                                    model: 'heading4',
                                    view: 'h4',
                                    title: 'Heading 4',
                                    class: 'ck-heading_heading4'
                                },
                                {
                                    model: 'heading5',
                                    view: 'h5',
                                    title: 'Heading 5',
                                    class: 'ck-heading_heading5'
                                },
                                {
                                    model: 'heading6',
                                    view: 'h6',
                                    title: 'Heading 6',
                                    class: 'ck-heading_heading6'
                                }
                            ]
                        }
                    }
                );
            }
        });
    </script>
@endsection
