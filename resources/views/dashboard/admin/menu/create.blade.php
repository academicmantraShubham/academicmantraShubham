@extends('dashboard.layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.menu.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.menu.store') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="last_url" value="{{ URL::previous() }}">
                <input type="hidden" name="parent_id" value="{{ $parentId }}">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="required" for="title">{{ trans('cruds.menu.fields.title') }}</label>
                            <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text"
                                name="title" id="title" value="{{ old('title', '') }}" required>
                            @if ($errors->has('title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.menu.fields.title_helper') }}</span>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="required" for="title">{{ trans('cruds.menu.fields.slug') }}</label>
                            <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text"
                                name="slug" id="slug" value="{{ old('slug', '') }}" required>
                            @if ($errors->has('slug'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('slug') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.menu.fields.slug_helper') }}</span>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="required" for="content">{{ trans('Has Content') }} ?</label>
                            <select class="form-control select2 {{ $errors->has('content') ? 'is-invalid' : '' }}"
                                name="content" id="content" required>
                                <option hidden="" disabled="disabled" selected="selected" value="">Has Content
                                </option>
                                <option value="1" {{ old('content', '') == 1 ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('content', '') == 0 ? 'selected' : '' }}>No</option>
                            </select>
                            @if ($errors->has('content'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('content') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div id="content_data" style="display: none">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="required" for="ctitle">Content
                                    {{ trans('cruds.contentPage.fields.title') }}</label>
                                <input class="form-control {{ $errors->has('ctitle') ? 'is-invalid' : '' }}" type="text"
                                    name="ctitle" id="title" value="{{ old('ctitle', '') }}">
                                @if ($errors->has('ctitle'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('ctitle') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.contentPage.fields.title_helper') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="meta_title">{{ trans('Meta Title') }}</label>
                                <input class="form-control {{ $errors->has('meta_title') ? 'is-invalid' : '' }}"
                                    type="text" name="meta_title" id="meta_title" value="{{ old('meta_title', '') }}">
                                @if ($errors->has('meta_title'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('meta_title') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.contentPage.fields.title_helper') }}</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="meta_keyword">{{ trans('Meta Keywords') }}</label>
                                <input class="form-control {{ $errors->has('meta_keyword') ? 'is-invalid' : '' }}"
                                    type="text" name="meta_keyword" id="meta_keyword"
                                    value="{{ old('meta_keyword', '') }}">
                                @if ($errors->has('meta_keyword'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('meta_keyword') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.contentPage.fields.title_helper') }}</span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="meta_description">{{ trans('Meta Description') }}</label>
                                <textarea class="form-control {{ $errors->has('meta_description') ? 'is-invalid' : '' }}" name="meta_description"
                                    id="meta_description">{{ old('meta_description') }}</textarea>
                                @if ($errors->has('meta_description'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('meta_description') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.contentPage.fields.excerpt_helper') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="page_text">{{ trans('cruds.contentPage.fields.page_text') }}</label>
                        <textarea class="form-control ckeditor {{ $errors->has('page_text') ? 'is-invalid' : '' }}" name="page_text"
                            id="page_text">{!! old('page_text') !!}</textarea>
                        @if ($errors->has('page_text'))
                            <div class="invalid-feedback">
                                {{ $errors->first('page_text') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.contentPage.fields.page_text_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="excerpt">{{ trans('cruds.contentPage.fields.excerpt') }}</label>
                        <textarea class="form-control ckeditor {{ $errors->has('excerpt') ? 'is-invalid' : '' }}" name="excerpt"
                            id="excerpt">{{ old('excerpt') }}</textarea>
                        @if ($errors->has('excerpt'))
                            <div class="invalid-feedback">
                                {{ $errors->first('excerpt') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.contentPage.fields.excerpt_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="featured_image">{{ trans('cruds.contentPage.fields.featured_image') }}</label>
                        <div class="needsclick dropzone {{ $errors->has('featured_image') ? 'is-invalid' : '' }}"
                            id="featured_image-dropzone">
                        </div>
                        @if ($errors->has('featured_image'))
                            <div class="invalid-feedback">
                                {{ $errors->first('featured_image') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.contentPage.fields.featured_image_helper') }}</span>
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>

        $('#slug').keyup(function() {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
            $("#slug").val(Text);
        });

        $('input#title').keyup(function() {
            $(this).val(
                $(this).val().toLowerCase().replace(/\b[a-z]/g, function(letter) {
                    return letter.toUpperCase();
                })
            );
        });

        $('#content').change(function() {
            var Text = $(this).val();
            if (Text == 1) {
                $('#content_data').show();
                $("input#ctitle").prop('required', true);
            } else {
                $('#content_data').hide();
                $("input#ctitle").prop('required', false);
            }
        });

        $(function() {
            var Text = $('#content').val();
            if (Text == 1) {
                $('#content_data').show();
                $("input#ctitle").prop('required', true);
            } else {
                $('#content_data').hide();
                $("input#ctitle").prop('required', false);
            }
        })
    </script>
    <script>
        $(document).ready(function() {
            function SimpleUploadAdapter(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
                    return {
                        upload: function() {
                            return loader.file
                                .then(function(file) {
                                    return new Promise(function(resolve, reject) {
                                        // Init request
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST',
                                            '{{ route('admin.content-pages.storeCKEditorImages') }}',
                                            true);
                                        xhr.setRequestHeader('x-csrf-token', window._token);
                                        xhr.setRequestHeader('Accept', 'application/json');
                                        xhr.responseType = 'json';

                                        // Init listeners
                                        var genericErrorText =
                                            `Couldn't upload file: ${ file.name }.`;
                                        xhr.addEventListener('error', function() {
                                            reject(genericErrorText)
                                        });
                                        xhr.addEventListener('abort', function() {
                                            reject()
                                        });
                                        xhr.addEventListener('load', function() {
                                            var response = xhr.response;

                                            if (!response || xhr.status !== 201) {
                                                return reject(response && response
                                                    .message ?
                                                    `${genericErrorText}\n${xhr.status} ${response.message}` :
                                                    `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`
                                                    );
                                            }

                                            $('form').append(
                                                '<input type="hidden" name="ck-media[]" value="' +
                                                response.id + '">');

                                            resolve({
                                                default: response.url
                                            });
                                        });

                                        if (xhr.upload) {
                                            xhr.upload.addEventListener('progress', function(
                                            e) {
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

    <script>
        Dropzone.options.featuredImageDropzone = {
            url: '{{ route('admin.content-pages.storeMedia') }}',
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif,.webp,.svg',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 2,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('form').find('input[name="featured_image"]').remove()
                $('form').append('<input type="hidden" name="featured_image" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="featured_image"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($contentPage) && $contentPage->featured_image)
                    var file = {!! json_encode($contentPage->featured_image) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="featured_image" value="' + file.file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
@endsection
