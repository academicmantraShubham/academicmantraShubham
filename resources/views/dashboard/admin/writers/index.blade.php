@extends('dashboard.layouts.admin')
@section('content')
@can('permission_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success"  data-toggle="modal" data-target="#add_page" style="color: white">
                {{ trans('global.add') }} Writers Content 
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
       Writers Content {{ trans('global.list') }}
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
                            {{ trans('Content') }}
                        </th>
                        <th>
                            {{ trans('Service Or Country') }}
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
                    @foreach($writers as $key => $homepage)
                        <tr data-entry-id="{{ $homepage->id }}">
                            <td>

                            </td>
                            <td>
                                {{ ++$key ?? '' }}
                            </td>
                            <td>
                              {{ strip_tags($homepage->title) ?? '' }} 
                            </td>
                            <td>
                                {!!substr(strip_tags($homepage->content),0,25)!!}...
                            </td>
                            <td>
                                {{ @$homepage->Menu->title }}
                            </td>
                            <td>
                                @if ( $homepage->image)
                                    <a href="{{ $homepage->image }}" target="_blank" style="display: inline-block">
                                        <img loading="lazy" style="width: 55px; height:55px; border-radius:50%;" src="{{ $homepage->image }}">
                                    </a>
                                @endif
                            </td>
                            <td>

                                @can('menu_edit')
                                    <a class="btn btn-xs btn-info" style="color: white"  data-toggle="modal" data-target="#add_page{{ $homepage->id }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('menu_delete')
                                <form action="{{ route('admin.homepage.destroy', $homepage->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>
                                @endcan

                            </td>
                        </tr>
                            <!-- Update -->
                        <div class="modal fade" id="add_page{{ $homepage->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document" style="max-width:60%">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">&emsp;Edit Content</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>     
                                    <div class="modal-body">
                                    <form  method="POST" action="{{ route('admin.homepage.update', $homepage->id) }}" enctype="multipart/form-data">
                                        @csrf 
                                        <input type="hidden" name="last_url" value="{{  URL::current() }}">
                                        @method('PUT')
                                        <input type="hidden" name="page" value="{{ old('page', $homepage->page) }}">
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <label for="title">Name</label>
                                                <textarea class="form-control ckeditor" type="text" id="title" name="title" placeholder="Enter something...." rows="2">{{ old('title',  $homepage->title) }}</textarea>                
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="blog">Title & Description</label>
                                                <textarea class="form-control ckeditor" type="text" id="content" name="content" placeholder="Enter something...." rows="10">{{ old('content', $homepage->content) }}</textarea>                
                                            </div>

                                            <div class="form-group col-12 mt-2">
                                                <label for="title">Select Service or Country</label>
                                                <select  class="form-control" name="parent_id" required>
                                                    
                                                    @foreach ($menus as $menu)
                                                        @foreach ( $menu->subMenus as $subMenu)
                                                            @if (count($subMenu->subMenus) > 0)
                                                                <optgroup label="{{ $subMenu->title }}">
                                                                    @foreach ($subMenu->subMenus as $child)
                                                                        <option value="{{ $child->id }}" {{$homepage->parent_id == $child->id ? 'selected': ''  }}>{{ $child->title }}</option>
                                                                    @endforeach
                                                                </optgroup>
                                                                @else    
                                                                <option value="{{ $subMenu->id }}" {{$homepage->parent_id == $subMenu->id ? 'selected': ''  }}>{{ $subMenu->title }}</option>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> 
                            
                                            
                                        <div class="row">
                                            <div class="form-group col-12 mt-2">
                                                <label for="title">Image</label>
                                                <input  class="form-control" type="file" name="img">
                                            </div>

                                            <div class="form-group col-12 mt-2">
                                                <label for="title">Alt</label>
                                                <input  class="form-control" type="text" name="alt" value="{{ old('alt', $homepage->alt) }}">
                                            </div>
                                            <div class="form-group col-12 mt-2">
                                                <label for="title">Ratings</label>
                                                <input  class="form-control" type="number"  min="0" max="5" step="0.1" name="bg_alt" value="{{ old('bg_alt', $homepage->bg_alt) }}" required>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-rounded btn-fw">Submit</button>     
                                    </form> 
                                </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </tbody>
          
                
                <!-- Modal -->
                <div class="modal fade" id="add_page" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document" style="max-width:60%">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">&emsp;Add Writers</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>     
                            <div class="modal-body">
                               <form  method="POST" action="{{ route('admin.homepage.store') }}" enctype="multipart/form-data">
                                   @csrf 
                                   <input type="hidden" name="last_url" value="{{  URL::current() }}">
                                   <input type="hidden" name="page" value="{{ old('page','writers') }}">

                                 <div class="row">
                                    <div class="form-group col-12">
                                        <label for="title">Name</label>
                                        <textarea class="form-control ckeditor" type="text" id="title" name="title" placeholder="Enter something...." rows="2" >{{ old('title') }}</textarea>                
                                    </div>

                                    <div class="form-group col-12">
                                        <label for="blog">Title & Description</label>
                                        <textarea class="form-control ckeditor" type="text" id="content" name="content" placeholder="Enter something...." rows="10" >{{ old('content') }}</textarea>                
                                    </div>

                                    <div class="form-group col-12 mt-2">
                                        <label for="title">Select Service or Country</label>
                                        <select  class="form-control" name="parent_id" required>
                                            <option disabled selected value="">Select Options</option>
                                            @foreach ($menus as $menu)
                                                @foreach ( $menu->subMenus as $subMenu)
                                                    @if (count($subMenu->subMenus) > 0)
                                                        <optgroup label="{{ $subMenu->title }}">
                                                            @foreach ($subMenu->subMenus as $child)
                                                                <option value="{{ $child->id }}">{{ $child->title }}</option>
                                                            @endforeach
                                                        </optgroup>
                                                        @else    
                                                        <option value="{{ $subMenu->id }}">{{ $subMenu->title }}</option>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                 </div> 

                                <div class="row">
                                    <div class="form-group col-12 mt-2">
                                        <label for="title">Image</label>
                                        <input  class="form-control" type="file" name="img" required>
                                    </div>

                                    <div class="form-group col-12 mt-2">
                                        <label for="title">Alt</label>
                                        <input  class="form-control" type="text" name="alt" value="{{ old('alt') }}">
                                    </div>

                                    <div class="form-group col-12 mt-2">
                                        <label for="title">Ratings</label>
                                        <input  class="form-control" type="number" min="0" max="5" step="0.1"  name="bg_alt" value="{{ old('bg_alt') }}" required>
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
    $(function () {
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
        $.extend(true, $.fn.dataTable.defaults, {
            orderCellsTop: true,
            order: [[ 1, 'desc' ]],
            pageLength: 100,
        });
        let table = $('.datatable-Permission:not(.ajaxTable)').DataTable({ buttons: dtButtons })
        $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
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
                toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                        { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                        { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                        { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                    ]
                }
            }
            );
        }
    });
</script>
@endsection