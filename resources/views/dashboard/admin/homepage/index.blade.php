@extends('dashboard.layouts.admin')
@section('content')
@can('permission_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success"  data-toggle="modal" data-target="#add_page" style="color: white">
                {{ trans('global.add') }} HomePage Content
            </a>
        </div>
    </div>
@endcan
<style>
    .c-header.c-header-fixed{
        z-index:100 !important;
    }
    .modal-open .modal{
        z-index:103 !important;
    }
    .modal-backdrop.show{
         z-index:102 !important;
    }
</style>
<div class="card">
    <div class="card-header">
        HomePage {{ trans('global.list') }}
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
                            {{ trans('Content') }}
                        </th>
                        <th>
                            {{ trans('Image') }}
                        </th>
                        <th>
                            {{ trans('Sub Content') }}
                        </th>
                        <th>
                            {{ trans('Section Position') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <tr data-entry-id="{{ $logo->id ?? '' }}">
                        <td>

                        </td>
                        <td>
                           Web Logo
                        </td>
                        <td>
                           Alt
                        </td>
                        <td>
                            {{ $logo->alt ?? '' }}
                        </td>
                        <td>
                            @if ( $logo->image)
                                <a href="{{ $logo->image }}" target="_blank" style="display: inline-block">
                                    <img style="width: 55px; height:55px; border-radius:50%;" src="{{ $logo->image }}">
                                </a>
                            @endif
                        </td>
                        <td>
                            {{ $logo->sub_homepages_count ?? '' }}
                        </td>
                        <td>
                            <p><i>NULL</i></p>
                        </td>
                        <td>

                            @can('menu_edit')
                                <a class="btn btn-xs btn-info" style="color: white"  data-toggle="modal" data-target="#add_page{{ $logo->id }}">
                                    {{ trans('global.edit') }}
                                </a>
                            @endcan

                        </td>
                    </tr>

                    <!-- Logo Update -->
                    <div class="modal fade" id="add_page{{ $logo->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document" style="max-width:60%">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">&emsp;Home page Meta Content  Edit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>     
                                <div class="modal-body">
                                <form  method="POST" action="{{ route('admin.homepage.update', $logo->id) }}" enctype="multipart/form-data">
                                    @csrf 
                                    <input type="hidden" name="last_url" value="{{  URL::current() }}">
                                    @method('PUT')
                                        <input type="hidden" name="title" value="www">
                                        <input type="hidden" name="content" value="sss">
                                    <div class="row">
                                        <div class="form-group col-12 mt-2">
                                            <label for="title">Web Logo</label>
                                            <input  class="form-control" type="file" name="img">
                                        </div>

                                        <div class="form-group col-12 mt-2">
                                            <label for="title">ALt</label>
                                            <input  class="form-control" type="text" name="alt" value="{{ old('alt', $logo->alt) }}">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-rounded btn-fw">Submit</button>     
                                </form> 
                            </div>
                            </div>
                        </div>
                    </div>

                    <tr data-entry-id="{{ $metadata->id ?? '' }}">
                        <td>

                        </td>
                        <td>
                            Meta Data
                        </td>
                        <td>
                            {{ strip_tags($metadata->title) ?? '' }}
                        </td>
                        <td>
                            {!!substr(strip_tags($metadata->content),0,25)!!}...
                        </td>
                        <td>
                            @if ( $metadata->image)
                                <a href="{{ $metadata->image }}" target="_blank" style="display: inline-block">
                                    <img style="width: 55px; height:55px; border-radius:50%;" src="{{ $metadata->image }}">
                                </a>
                            @endif
                        </td>
                        <td>
                            {{ $metadata->sub_homepages_count ?? '' }}
                        </td>
                        <td>
                            <p><i>NULL</i></p>
                        </td>
                        <td>

                            @can('menu_edit')
                                <a class="btn btn-xs btn-info" style="color: white"  data-toggle="modal" data-target="#add_page{{ $metadata->id }}">
                                    {{ trans('global.edit') }}
                                </a>
                            @endcan

                        </td>
                    </tr>

                    <!-- Meta Update -->
                    <div class="modal fade" id="add_page{{ $metadata->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document" style="max-width:60%">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">&emsp;Home page Meta Content  Edit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>     
                                <div class="modal-body">
                                <form  method="POST" action="{{ route('admin.homepage.update', $metadata->id) }}" enctype="multipart/form-data">
                                    @csrf 
                                    <input type="hidden" name="last_url" value="{{  URL::current() }}">
                                    @method('PUT')
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="title">Meta Title</label>
                                            <textarea class="form-control" type="text" id="title" name="title" placeholder="Enter something...." rows="2">{{ old('title',  $metadata->title) }}</textarea>                
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="blog">Meta Description</label>
                                            <textarea class="form-control" type="text" id="content" name="content" placeholder="Enter something...." rows="10">{{ old('content', $metadata->content) }}</textarea>                
                                        </div>
                                    </div> 
                        
                                        
                                    <div class="row">
                                        <div class="form-group col-12 mt-2">
                                            <label for="title">Meta Image</label>
                                            <input  class="form-control" type="file" name="img">
                                        </div>

                                        <div class="form-group col-12 mt-2">
                                            <label for="title">Meta Keywords</label>
                                            <input  class="form-control" type="text" name="alt" value="{{ old('alt', $metadata->alt) }}">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-rounded btn-fw">Submit</button>     
                                </form> 
                            </div>
                            </div>
                        </div>
                    </div>

                    <tr data-entry-id="{{ $footerdata->id ?? '' }}">
                        <td>

                        </td>
                        <td>
                           Footer Data
                        </td>
                        <td>
                            {{ strip_tags($footerdata->title) ?? '' }}
                        </td>
                        <td>
                            {!!substr(strip_tags($footerdata->content),0,25)!!}...
                        </td>
                        <td>
                            @if ( $footerdata->image)
                                <a href="{{ $footerdata->image }}" target="_blank" style="display: inline-block">
                                    <img style="width: 55px; height:55px; border-radius:50%;" src="{{ $footerdata->image }}">
                                </a>
                            @endif
                        </td>
                        <td>
                            {{ $footerdata->sub_homepages_count ?? '' }}
                        </td>
                        <td>
                            <p><i>NULL</i></p>
                        </td>
                        <td>

                            @can('menu_edit')
                                <a class="btn btn-xs btn-info" style="color: white"  data-toggle="modal" data-target="#add_page{{ $footerdata->id }}">
                                    {{ trans('global.edit') }}
                                </a>
                            @endcan

                        </td>
                    </tr>

                    <!-- Footer Update -->
                    <div class="modal fade" id="add_page{{ $footerdata->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document" style="max-width:60%">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">&emsp;Footer Content  Edit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>     
                                <div class="modal-body">
                                <form  method="POST" action="{{ route('admin.homepage.update', $footerdata->id) }}" enctype="multipart/form-data">
                                    @csrf 
                                    <input type="hidden" name="last_url" value="{{  URL::current() }}">
                                    @method('PUT')
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="title">Footer Section 1</label>
                                            <textarea class="form-control ckeditor" type="text" id="title" name="title" placeholder="Enter something...." rows="2">{{ old('title',  $footerdata->title) }}</textarea>                
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="blog">Footer Section 2</label>
                                            <textarea class="form-control ckeditor" type="text" id="content" name="content" placeholder="Enter something...." rows="10">{{ old('content', $footerdata->content) }}</textarea>                
                                        </div>
                                    </div> 
                        
                                        
                                    <div class="row">
                                        <div class="form-group col-12 mt-2">
                                            <label for="title">Footer Section 3</label>
                                            <textarea  class="form-control ckeditor" type="text" name="alt" placeholder="Enter something...." rows="10">{{ old('alt', $footerdata->alt) }}</textarea>  
                                        </div>

                                        <div class="form-group col-12 mt-2">
                                            <label for="title">Footer Section 4</label>
                                            <textarea  class="form-control ckeditor" type="text" name="image" placeholder="Enter something...." rows="10">{{ old('image', $footerdata->image) }}</textarea>  
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-rounded btn-fw">Submit</button>     
                                </form> 
                            </div>
                            </div>
                        </div>
                    </div>

                    @foreach($homepages as $key => $homepage)
                        <tr data-entry-id="{{ $homepage->id }}">
                            <td>

                            </td>
                            <td>
                                {{ ++$key ?? '' }}
                            </td>
                            <td>
                              <a href="{{ route('admin.homepage.sub', $homepage->id ) }}"> {{ strip_tags($homepage->title) ?? '' }} </a>
                            </td>
                            <td>
                                {!!substr(strip_tags($homepage->content),0,25)!!}...
                            </td>
                            <td>
                                @if ( $homepage->image)
                                    <a href="{{ $homepage->image }}" target="_blank" style="display: inline-block">
                                        <img style="width: 55px; height:55px; border-radius:50%;" src="{{ $homepage->image }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $homepage->sub_homepages_count ?? '' }}
                            </td>
                            <td>
                                {{ $homepage->section_position ?? '' }}
                            </td>
                            <td>

                                @can('menu_edit')
                                    <a class="btn btn-xs btn-info" style="color: white"  data-toggle="modal" data-target="#add_page{{ $homepage->id }}">
                                        {{ trans('global.edit') }}
                                    </a>
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
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <label for="title">Title</label>
                                                <textarea class="form-control ckeditor" type="text" id="title" name="title" placeholder="Enter something...." rows="2">{{ old('title',  $homepage->title) }}</textarea>                
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="blog">Content</label>
                                                <textarea class="form-control ckeditor" type="text" id="content" name="content" placeholder="Enter something...." rows="10">{{ old('content', $homepage->content) }}</textarea>                
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
                                        </div>
                                        
                                        <div class="row">
                                            <div class="form-group col-12 mt-2">
                                                <label for="title">Bg Image</label>
                                                <input  class="form-control" type="file" name="bg_img">
                                            </div>

                                            <div class="form-group col-6 mt-2">
                                                <label for="title">Bg Color</label>
                                                <input  class="form-control" type="color" name="bg_color" value="{{ old('bg_color', $homepage->bg_color) }}">
                                            </div>
                                            <div class="form-group col-6 mt-2">
                                                <label for="title">Bg Alt</label>
                                                <input  class="form-control" type="text" name="bg_alt" value="{{ old('bg_alt', $homepage->bg_alt) }}">
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
                                <h5 class="modal-title" id="exampleModalLabel">&emsp;Add Content</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>     
                            <div class="modal-body">
                               <form  method="POST" action="{{ route('admin.homepage.store') }}" enctype="multipart/form-data">
                                   @csrf
                                   <input type="hidden" name="last_url" value="{{  URL::current() }}"> 
                                 <div class="row">
                                    <div class="form-group col-12">
                                        <label for="title">Title</label>
                                        <textarea class="form-control ckeditor" type="text" id="title" name="title" placeholder="Enter something...." rows="2">{{ old('title') }}</textarea>                
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="blog">Content</label>
                                        <textarea class="form-control ckeditor" type="text" id="content" name="content" placeholder="Enter something...." rows="10">{{ old('content') }}</textarea>                
                                    </div>
                                 </div> 
                    
                                    
                                <div class="row">
                                    <div class="form-group col-12 mt-2">
                                        <label for="title">Image</label>
                                        <input  class="form-control" type="file" name="img">
                                    </div>

                                    <div class="form-group col-12 mt-2">
                                        <label for="title">Alt</label>
                                        <input  class="form-control" type="text" name="alt" value="{{ old('alt') }}">
                                    </div>

                                    <div class="form-group col-12 mt-2">
                                        <label for="title">Page</label>
                                        <input  class="form-control" type="text" name="page" value="{{ old('page') }}">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col-12 mt-2">
                                        <label for="title">Bg Image</label>
                                        <input  class="form-control" type="file" name="bg_img">
                                    </div>

                                    <div class="form-group col-6 mt-2">
                                        <label for="title">Bg Color</label>
                                        <input  class="form-control" type="color" name="bg_color" value="{{ old('bg_color') }}">
                                    </div>
                                    <div class="form-group col-6 mt-2">
                                        <label for="title">Bg Alt</label>
                                        <input  class="form-control" type="text" name="bg_alt" value="{{ old('bg_alt') }}">
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
    $(document).ready(function () {
      function SimpleUploadAdapter(editor) {
        editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
          return {
            upload: function() {
              return loader.file
                .then(function (file) {
                  return new Promise(function(resolve, reject) {
                    // Init request
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', '{{ route('admin.content-pages.storeCKEditorImages') }}', true);
                    xhr.setRequestHeader('x-csrf-token', window._token);
                    xhr.setRequestHeader('Accept', 'application/json');
                    xhr.responseType = 'json';
    
                    // Init listeners
                    var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                    xhr.addEventListener('error', function() { reject(genericErrorText) });
                    xhr.addEventListener('abort', function() { reject() });
                    xhr.addEventListener('load', function() {
                      var response = xhr.response;
    
                      if (!response || xhr.status !== 201) {
                        return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                      }
    
                      $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');
    
                      resolve({ default: response.url });
                    });
    
                    if (xhr.upload) {
                      xhr.upload.addEventListener('progress', function(e) {
                        if (e.lengthComputable) {
                          loader.uploadTotal = e.total;
                          loader.uploaded = e.loaded;
                        }
                      });
                    }
    
                    // Send request
                    var data = new FormData();
                    data.append('upload', file);
                    data.append('crud_id', '{{ $contentPage->id ?? 0 }}');
                    xhr.send(data);
                  });
                })
            }
          };
        }
    }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter],
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