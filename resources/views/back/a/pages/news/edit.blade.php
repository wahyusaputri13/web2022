@extends('back.a.layouts.app')
@push('after-style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/dropzone.css"
    integrity="sha256-6X2vamB3vs1zAJefAme/aHhUeJl13mYKs3VKpIGmcV4=" crossorigin="anonymous">
@endpush
@section('content')
<div class="content">
    <div class="container-fluid">
        {{ Breadcrumbs::render('news') }}
        <div class="row">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="green">
                    <i class="material-icons">event_note</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Form Edit News</h4>
                    {{Form::model($data, ['route' => ['news.update', $data->id],'method' => 'put', 'files' =>
                    'true', ''])}}
                    <input type="text" value="{{ $data->id }}" id="malika" hidden>
                    <div class="dropzone" id="my-awesome-dropzone"></div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 62d9a61 (upgrade composer)
=======
>>>>>>> c7dc4a1 (ganti ckeditor)
                    @endif
=======
>>>>>>> f2a97bb (ganti ckeditor)
                    <!-- <div class="form-group label-floating">
                        <label class="control-label">Highlight</label>
                        {{Form::select('highlight', $highlight, null, ['class' => 'form-control'])}}
<<<<<<< HEAD
                    </div> -->
<<<<<<< HEAD
<<<<<<< HEAD
                    <div class="form-group label-floating">
                        <label class="control-label">Tag Bagian</label>
                        {{Form::select('tag[]', $categori, $terpilih,['class' =>
                        'form-control
                        js-example-basic-multiple',
                        'multiple' => 'multiple',
                        ])}}
                        @error('tag') <span class="text-danger">Tidak boleh kosong</span> @enderror
                    </div>
=======
>>>>>>> 62d9a61 (upgrade composer)
=======
>>>>>>> c7dc4a1 (ganti ckeditor)
                    @if(!$data->dip)
                    <div class="form-group label-floating jip">
                        <label class="control-label">Jenis Informasi Publik</label>
                        {{Form::select('kategori', get_code_group('INFORMASI_ST'), null, ['class' =>
                        'form-control','placeholder' => ''])}}
                    </div>
<<<<<<< HEAD
                    @endif
                    @if($data->dip)
                    <div class="form-group label-floating dip">
<<<<<<< HEAD
                        <label class="control-label">Tahun Daftar Informasi Publik</label>
                        {{Form::number('dip_tahun', null, ['class' =>
                        'form-control','placeholder' => ''])}}
=======
                    <div class="form-group label-floating">
                        <label class="control-label">Kategori</label>
                        {{Form::select('kategori', $categori, null, ['class' => 'form-control'])}}
<<<<<<< HEAD
>>>>>>> ff5bfae (update tagging)
=======
=======
                    <div class="form-group label-floating">
                        <label class="control-label">Tag Bagian</label>
                        {{Form::select('tag[]', $categori, $terpilih, ['class' => 'form-control
                        js-example-basic-multiple',
                        'multiple' => 'multiple',
                        ])}}
                        @error('tag') <span class="text-danger">Tidak boleh kosong</span> @enderror
                    </div>
                    <div class="form-group label-floating jip">
                        <label class="control-label">Jenis Informasi Publik</label>
                        {{Form::select('kategori', get_code_group('INFORMASI_ST'), null, ['class' =>
                        'form-control','placeholder' => ''])}}
                    </div>
                    <div class="form-group label-floating dip" style="display: none;">
                        <label class="control-label">Tahun Daftar Informasi Publik</label>
                        {{Form::number('dip_tahun', null, ['class' =>
                        'form-control','placeholder' => ''])}}
>>>>>>> f2a97bb (ganti ckeditor)
>>>>>>> c7dc4a1 (ganti ckeditor)
                    </div>
                    @endif
=======
                    </div>
=======
                    <!-- <div class="form-group label-floating">
                        <label class="control-label">Highlight</label>
                        {{Form::select('highlight', $highlight, null, ['class' => 'form-control'])}}
                    </div> -->
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 121ae8f (tampilkan error ke news)
                    <!-- <div class="form-group label-floating">
                        <label class="control-label">Kategori</label>
                        {{Form::select('kategori', $categori, null, ['class' => 'form-control'])}}
                    </div> -->
>>>>>>> d99ddb5 (hide kategori)
=======
                    <div class="form-group label-floating">
=======
                    <div class="form-group label-floating jip">
>>>>>>> be6c8e1 (perbaikan update news)
                        <label class="control-label">Jenis Informasi Publik</label>
                        {{Form::select('kategori', get_code_group('INFORMASI_ST'), null, ['class' =>
                        'form-control','placeholder' => ''])}}
                    </div>
<<<<<<< HEAD
                    @error('kategori')
                    <div class="error text-danger">Tidak Boleh Kosong</div>
                    @enderror
>>>>>>> 3c71dcd (berita tambah kategori ppid)
=======
                    <div class="form-group label-floating dip" style="display: none;">
=======
>>>>>>> 62d9a61 (upgrade composer)
                        <label class="control-label">Tahun Daftar Informasi Publik</label>
                        {{Form::number('dip_tahun', null, ['class' =>
                        'form-control','placeholder' => ''])}}
                    </div>
<<<<<<< HEAD
>>>>>>> be6c8e1 (perbaikan update news)
=======
                    @endif
>>>>>>> 62d9a61 (upgrade composer)
                    <div class="form-group label-floating">
                        <label class="control-label">Judul Postingan</label>
                        {{Form::text('title', null,['class' => 'form-control'])}}
                        @error('title') <span class="text-danger">Tidak boleh kosong</span> @enderror

                    </div>
                    @error('title')
                    <div class="error text-danger">Tidak Boleh Kosong</div>
                    @enderror
                    <div class="form-group">
                        <label class="control-label">Tanggal</label>
                        {{Form::text('date', null,['class' => 'form-control datepicker'])}}
                        @error('date') <span class="text-danger">Tidak boleh kosong</span> @enderror
                    </div>
                    @error('date')
                    <div class="error text-danger">Tidak Boleh Kosong</div>
                    @enderror
                    <div class="form-group label-floating">
                        <label class="control-label">Description</label>
<<<<<<< HEAD
<<<<<<< HEAD
                        {{Form::textarea('description', null,['class' => 'my-editor form-control','id'=>'my-editor'])}}
                        @error('description') <span class="text-danger">Tidak boleh kosong</span> @enderror
=======
                        {{Form::textarea('description', null,['class' => 'form-control','id'=>'my-editor'])}}
>>>>>>> d435741 (ganti ckeditor)
=======
                        {{Form::textarea('description', null,['class' => 'my-editor form-control'])}}
>>>>>>> ff5bfae (update tagging)
                    </div>
<<<<<<< HEAD
                    @error('description')
                    <div class="error text-danger">Tidak Boleh Kosong</div>
                    @enderror
=======
                    <div class="togglebutton">
                        <label>
                            Data DIP? <input type="checkbox" id="hideButton">
                        </label>
                    </div>
>>>>>>> f2a97bb (ganti ckeditor)
                    <div class="d-flex text-right">
                        <a href="{{ route('news.index') }}" class="btn btn-default btn-fill">Kembali</a>
                        <button type="submit" class="btn btn-success btn-fill">Ubah</button>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('after-script')
<script>
    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c7dc4a1 (ganti ckeditor)

        $("#hideButton").click(function () {
            if ($(this).is(":checked")) {
                $(".dropzone").hide();
                $(".jip").hide();
                $(".dip").show();
            } else {
                $(".dropzone").show();
                $(".jip").show();
                $(".dip").hide();
            }
        });
    });
</script>
<!-- ck editor -->
<script src="{{asset('assets/back/assets/ckeditor/ckeditor.js')}}"></script>
<script>
    var konten = document.getElementById("my-editor");
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace(konten, options);
    CKEDITOR.config.allowedContent = true;
</script>
<!-- end ck editor -->
=======
    });
</script>
>>>>>>> ff5bfae (update tagging)
<script src="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/dropzone.js"
    integrity="sha256-IXyEnLo8FpsoOLrRzJlVYymqpY29qqsMHUD2Ah/ttwQ=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function () {
        demo.initFormExtendedDatetimepickers();

        $("#hideButton").click(function () {
            if ($(this).is(":checked")) {
                $(".dropzone").hide();
                $(".jip").hide();
                $(".dip").show();
            } else {
                $(".dropzone").show();
                $(".jip").show();
                $(".dip").hide();
            }
        });
    });

    var uploadedDocumentMap = {};
    let token = $("meta[name='csrf-token']").attr("content");

    Dropzone.autoDiscover = false;
    $(".dropzone").dropzone({

            url: `{{ route('file_image.store') }}`,
            // maxFilesize: 2, // MB
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (file, response) {
                $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
                uploadedDocumentMap[file.name] = response.name
                uploadedDocumentMap[file.path] = response.path
            },
            removedfile: function (file) {
                file.previewElement.remove()
                var name = '';
                var path = '';
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name;
                } else {
                    name = uploadedDocumentMap[file.name];
                    path = uploadedDocumentMap[file.path];
                }

<<<<<<< HEAD
<<<<<<< HEAD
=======
            // console.log(file.name);
=======
                // console.log(file.name);
>>>>>>> ff5bfae (update tagging)

>>>>>>> 121ae8f (tampilkan error ke news)
            $('form').find('input[name="document[]"][value="' + name + '"]').remove();

            $.ajax({
                url: `/admin/file_image/${name}`,
                type: "DELETE",
                cache: false,
                data: {
                    "_token": token
                },
                success: function (response) {
                    console.log(response);
                }
            });
        },
        init: function () {
            myDropzone = this;
            let id_ku = document.getElementById('malika').value;

            this.on("removedfile", function (file) {
                alert("Delete this file?");
                $.ajax({
                    url: '/admin/file_image/' + file.name,
                    type: "DELETE",
                    data: {
                        "_token": token
                    },
                    // data: { 'filetodelete': file.name }
                });
            });

            $.ajax({
                url: `/admin/file_image/${id_ku}`,
                type: 'get',
                // data: { request: 'fetch' },
                dataType: 'json',
                success: function (response) {
                    $.each(response, function (key, value) {
                        var mockFile = { name: value.name, size: value.size };

                        myDropzone.emit("addedfile", mockFile);
                        myDropzone.emit("thumbnail", mockFile, value.path);
                        myDropzone.emit("complete", mockFile);

                    });

                }
            });

            @if (isset($project) && $project -> document)
<<<<<<< HEAD
                var files = {!! json_encode($project -> document) !!}
                    for(var i in files) {
                        var file = files[i]
                        this.options.addedfile.call(this, file)
                        file.previewElement.classList.add('dz-complete')
                        $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
                    }
            @endif
            }
    });
</script>
=======
                var files = {!! json_encode($project -> document)!!
        }
                    for(var i in files) {
        var file = files[i]
        this.options.addedfile.call(this, file)
        file.previewElement.classList.add('dz-complete')
        $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
    }
    @endif
            }
    });
</script>
<!-- ck editor -->
<script src="{{asset('assets/back/assets/ckeditor/ckeditor.js')}}"></script>
<script>
    var konten = document.getElementById("my-editor");
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace(konten, options);
    CKEDITOR.config.allowedContent = true;
</script>
<<<<<<< HEAD
>>>>>>> 121ae8f (tampilkan error ke news)
=======
<!-- end ck editor -->
>>>>>>> d435741 (ganti ckeditor)
@endpush