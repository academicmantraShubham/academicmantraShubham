@extends('dashboard.layouts.admin')
@section('content')
    @can('permission_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.menu.sub.create', $menu->id) }}">
                    {{ trans('global.add') }} {{ $menu->title }} Sub{{ trans('cruds.menu.title') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            Sub{{ trans('cruds.menu.title') }} {{ trans('global.list') }}
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
                                {{ trans('Sub Menu') }}
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
                                    <a href="{{ route('admin.menu.child', $menu->id) }}">{{ $menu->title ?? '' }}</a>
                                </td>
                                <td>
                                    {{ $menu->slug ?? '' }}
                                </td>
                                <td>
                                    {{ $menu->sub_menus_count ?? '' }}
                                </td>
                                <td>
                                    @can('menu_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.menu.show', $menu->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('menu_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.menu.sub.edit', $menu->id) }}">
                                            {{ trans('global.edit') }}
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

        })
    </script>
@endsection
