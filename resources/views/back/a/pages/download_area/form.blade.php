<!-- Example of a form that Dropzone can take over -->
<div class="dropzone" id="my-awesome-dropzone"></div>
<div class="form-group label-floating">
    <label class="control-label">Judul</label>
    {{Form::text('judul', null,['class' => 'form-control'])}}
</div>
<div class="form-group label-floating">
    <label class="control-label">Sumber</label>
    {{Form::text('sumber', null,['class' => 'form-control'])}}
</div>
<div class="d-flex text-right">
    <a href="{{ route('download_area.index') }}" class="btn btn-default btn-fill">Kembali</a>
    <button type="submit" class="btn btn-success btn-fill">
        {{ (Request::segment(3) == 'create') ? 'Tambah' : 'Perbarui' }}
    </button>
</div>