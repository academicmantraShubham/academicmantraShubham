@extends('dashboard.layouts.admin')
@section('content')
@can('content_page_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.blog_content.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.blogContent.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.blogContent.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-blogContent">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                         <th>
                            {{ trans('cruds.blogContent.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.blogContent.fields.title') }}
                        </th>
                       
                        <th>
                            {{ trans('cruds.blogContent.fields.excerpt') }}
                        </th>
                        <th>
                            {{ trans('cruds.contentPage.fields.featured_image') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogContents as $blogContent)
                        <tr data-entry-id="{{ $blogContent->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $blogContent->id }}
                            </td>
                            <td>
                                {{ $blogContent->title }}
                            </td>
                            
                            <td>
                            {{ substr($blogContent->excerpt, 0, 30) }}
                            </td>
                            <td>
                                @if($blogContent->featured_image)
                                    <a href="{{ $blogContent->featured_image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $blogContent->featured_image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @can('content_page_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.blog_content.show', $blogContent->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('content_page_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.blog_content.edit', $blogContent->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                 @can('content_page_delete')
                                    <form action="{{ route('admin.blog_content.destroy', $blogContent->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
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
