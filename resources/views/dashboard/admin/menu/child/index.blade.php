@extends('dashboard.layouts.admin')
@section('content')
    @can('permission_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.menu.sub.create', $menu->id) }}">
                    {{ trans('global.add') }} {{ $menu->title }} Child{{ trans('cruds.menu.title') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            Child {{ trans('cruds.menu.title') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
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
                                {{ trans('cruds.menu.fields.slug') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $key => $menu)
                            <tr data-entry-id="{{ $menu->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ ++$key ?? '' }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.menu.child-sub', $menu->id) }}">{{ $menu->title ?? '' }}</a>
                                </td>
                                <td>
                                    {{ $menu->slug ?? '' }}
                                </td>
                                <td>
                                    @can('menu_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('post', $menu->slug) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('menu_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.menu.sub.edit', $menu->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('menu_edit')
                                        <a class="btn btn-xs btn-warning addContent" data-id="{{ $menu->id }}" data-target="#add_content">
                                            {{ trans('Content') }}
                                        </a>
                                    @endcan

                                    @can('menu_delete')
                                        <form action="{{ route('admin.menu.destroy', $menu->id) }}" method="POST"
                                            onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                            style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-xs btn-danger"
                                                value="{{ trans('global.delete') }}">
                                        </form>
                                    @endcan

                                </td>

                            </tr>
                        @endforeach
                    </tbody>

                    <!-- Modal -->
                    <div class="modal fade" id="add_content" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document" style="max-width:60%">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">&emsp;Add Content Section</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.menu.child-sub.add-content') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="last_url" value="{{ URL::current() }}">
                                        <input type="hidden" name="menu_id" id="menu_id" value="">

                                        <div class="row">
                                            <div class="form-group col-12">
                                                <label for="title">Title</label>
                                                <textarea class="form-control ckeditor" type="text" id="title" name="title" placeholder="Enter something...."
                                                    rows="2">{{ old('title') }}</textarea>
                                            </div>

                                            <div class="form-group col-12">
                                                <label for="blog">Description</label>
                                                <textarea class="form-control ckeditor" type="text" id="content" name="content" placeholder="Enter something...."
                                                    rows="10">{{ old('content') }}</textarea>
                                            </div>

                                            <div class="form-group col-12 mt-2">
                                                <label for="title">Image</label>
                                                <input class="form-control" type="file"
                                                    accept="image/png, image/webp, image/jpeg, image/jpg" name="img">
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
            @can('menu_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('admin.menu.massDestroy') }}",
                    className: 'btn-danger',
                    action: function(e, dt, node, config) {
                        var ids = $.map(dt.rows({
                            selected: true
                        }).nodes(), function(entry) {
                            return $(entry).data('entry-id')
                        });

                        if (ids.length === 0) {
                            alert('{{ trans('global.datatables.zero_selected') }}')

                            return
                        }

                        if (confirm('{{ trans('global.areYouSure') }}')) {
                            $.ajax({
                                    headers: {
                                        'x-csrf-token': _token
                                    },
                                    method: 'POST',
                                    url: config.url,
                                    data: {
                                        ids: ids,
                                        _method: 'DELETE'
                                    }
                                })
                                .done(function() {
                                    location.reload()
                                })
                        }
                    }
                }
                dtButtons.push(deleteButton)
            @endcan

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

            $('.addContent').each(function() {
                var $this = $(this);
                $this.on("click", function() {
                    $("menu_id").val($(this).data('id'))
                    $('#add_content').modal('toggle');
                });
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
        })
    </script>
@endsection
