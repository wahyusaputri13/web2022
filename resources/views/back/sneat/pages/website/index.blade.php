@extends('back.sneat.layouts.app')
@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Pengaturan Website</a>
            </li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <div class="card-content">
                {{Form::model($data, ['route' => ['settings.update', $data->id],'method' => 'put', 'files' =>
                'true', ''])}}

                <div class="row">
                    <div class="form-group col-md-6 col-sm-12 text-center">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Gambar Halaman Depan</h5>
                                @if($data->image_hero)
                                <img class="img-fluid d-flex mx-auto my-4"
                                    src="{{ asset('storage') }}/{{ $data->image_hero }}" width="500px">
                                @else
                                <img class="img-fluid d-flex mx-auto my-4"
                                    src="{{ asset('assets/back/material/img/image_placeholder.jpg') }}" width="500px">
                                @endif
                                <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                                <a href="javascript:void(0);" class="card-link">Card link</a>
                                <a href="javascript:void(0);" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-6 col-sm-12 text-center">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Gambar Icon Website</h5>
                                @if($data->favicon == 'assets/pemda.ico')
                                <img src="{{ asset('') }}{{ $data->favicon }}" alt="...">
                                @elseif($data->favicon)
                                <img src="{{ asset('storage') }}/{{ $data->favicon }}" alt="...">
                                @else
                                <img src="{{ asset('assets/back/assets/img/image_placeholder.jpg') }}" alt="...">
                                @endif
                                <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                                <a href="javascript:void(0);" class="card-link">Card link</a>
                                <a href="javascript:void(0);" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-sm-12 col-md-6">
                        <label for="defaultFormControlInput" class="form-label">Nama Website</label>
                        {{Form::text('web_name', null,['class' => 'form-control',
                        'placeholder'=>'Masukkan Nama Website'])}}
                    </div>
                    @error('web_name')
                    <div id="defaultFormControlHelp" class="form-text" style="color: red;">
                        Tidak Boleh Kosong
                    </div>
                    @enderror

                    <div class="form-group col-sm-12 col-md-6">
                        <label for="defaultFormControlInput" class="form-label">Deskripsi Website</label>
                        {{Form::text('web_description', null,['class' => 'form-control',
                        'placeholder'=>'Masukkan Deskripsi Website'])}}
                    </div>
                    @error('web_description')
                    <div id="defaultFormControlHelp" class="form-text" style="color: red;">
                        Tidak Boleh Kosong
                    </div>
                    @enderror

                    <div class="form-group col-sm-12 col-md-6">
                        <label for="defaultFormControlInput" class="form-label">Email</label>
                        {{Form::text('email', null,['class' => 'form-control',
                        'placeholder'=>'Email Website'])}}
                    </div>
                    @error('email')
                    <div id="defaultFormControlHelp" class="form-text" style="color: red;">
                        Tidak Boleh Kosong
                    </div>
                    @enderror

                    <div class="form-group col-sm-12 col-md-6">
                        <label for="defaultFormControlInput" class="form-label">Alamat</label>
                        {{Form::text('address', null,['class' => 'form-control',
                        'placeholder'=>'Alamat'])}}
                    </div>
                    @error('address')
                    <div id="defaultFormControlHelp" class="form-text" style="color: red;">
                        Tidak Boleh Kosong
                    </div>
                    @enderror

                    <div class="form-group col-sm-12 col-md-6">
                        <label for="defaultFormControlInput" class="form-label">Telepon</label>
                        {{Form::text('phone', null,['class' => 'form-control',
                        'placeholder'=>'Masukkan Nomor Telepon'])}}
                    </div>
                    @error('phone')
                    <div id="defaultFormControlHelp" class="form-text" style="color: red;">
                        Tidak Boleh Kosong
                    </div>
                    @enderror

                    <div class="form-group col-sm-12 col-md-6">
                        <label for="defaultFormControlInput" class="form-label">Instagram</label>
                        {{Form::text('instagram', null,['class' => 'form-control',
                        'placeholder'=>'Alamat Instagram'])}}
                    </div>
                    @error('instagram')
                    <div id="defaultFormControlHelp" class="form-text" style="color: red;">
                        Tidak Boleh Kosong
                    </div>
                    @enderror

                    <div class="form-group col-sm-12 col-md-6">
                        <label for="defaultFormControlInput" class="form-label">Twitter</label>
                        {{Form::text('twitter', null,['class' => 'form-control',
                        'placeholder'=>'Alamat Twitter'])}}
                    </div>
                    @error('twitter')
                    <div id="defaultFormControlHelp" class="form-text" style="color: red;">
                        Tidak Boleh Kosong
                    </div>
                    @enderror

                    <div class="form-group col-sm-12 col-md-6">
                        <label for="defaultFormControlInput" class="form-label">Facebook</label>
                        {{Form::text('facebook', null,['class' => 'form-control',
                        'placeholder'=>'Alamat Facebook'])}}
                    </div>
                    @error('facebook')
                    <div id="defaultFormControlHelp" class="form-text" style="color: red;">
                        Tidak Boleh Kosong
                    </div>
                    @enderror

                    <div class="form-group col-sm-12 col-md-6">
                        <label for="defaultFormControlInput" class="form-label">YouTube</label>
                        {{Form::text('youtube', null,['class' => 'form-control',
                        'placeholder'=>'Alamat YouTube'])}}
                    </div>
                    @error('youtube')
                    <div id="defaultFormControlHelp" class="form-text" style="color: red;">
                        Tidak Boleh Kosong
                    </div>
                    @enderror

                    <div class="form-group col-sm-12 col-md-6">
                        <label for="defaultFormControlInput" class="form-label">Jam Operasional</label>
                        {{Form::text('open_hours', null,['class' => 'form-control',
                        'placeholder'=>'Jam Operasional'])}}
                    </div>
                    @error('open_hours')
                    <div id="defaultFormControlHelp" class="form-text" style="color: red;">
                        Tidak Boleh Kosong
                    </div>
                    @enderror

                </div>

                <div class="row">
                    <div class="col text-center">
                        <legend>Maps</legend>
                        <div id="map" style="height: 500px;"></div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group label-floating">
                                {{Form::hidden('latitude', null,['class' => 'form-control', 'id' =>
                                'Latitude'])}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group label-floating">
                                {{Form::hidden('longitude', null,['class' => 'form-control', 'id' =>
                                'Longitude'])}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>
<!-- / Content -->
<div class="content">
    <div class="container-fluid">
        @if ($message = Session::get('success'))
        <div id="elementId" hidden>{{ $message }}</div>
        @endif
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="green">
                        <i class="material-icons">settings</i>
                    </div>
                    <div class="card-content">
                        <!-- <h4 class="card-title">Stacked Form</h4> -->

                        <div class="row">
                            <div class="col"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <legend>Hero Image</legend>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        @if($data->image_hero)
                                        <img src="{{ asset('storage') }}/{{ $data->image_hero }}" alt="...">
                                        @else
                                        <img src="{{ asset('assets/back/material/img/image_placeholder.jpg') }}"
                                            alt="...">
                                        @endif
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-success btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            {{Form::file('image_hero', null,['class' => 'form-control'])}}
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                            data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <legend>Favicon Image</legend>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        @if($data->favicon == 'assets/pemda.ico')
                                        <img src="{{ asset('') }}{{ $data->favicon }}" alt="...">
                                        @elseif($data->favicon)
                                        <img src="{{ asset('storage') }}/{{ $data->favicon }}" alt="...">
                                        @else
                                        <img src="{{ asset('assets/back/assets/img/image_placeholder.jpg') }}"
                                            alt="...">
                                        @endif
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-success btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            {{Form::file('favicon', null,['class' => 'form-control'])}}
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                            data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('after-script')
<!-- Start Load Script LeafletJS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<!-- End Load Script LeafletJS -->
<script>
    $(document).ready(function () {
        if ($('#elementId').length > 0) {
            const pesan = document.getElementById('elementId').innerText;
            console.log(pesan);
            demo.showNotification('top', 'center', pesan)
        }

        $.getJSON('getAlamat', function (data) {
            navigator.geolocation.getCurrentPosition(function (location) {
                var map = L.map('map').setView([data.latitude, data.longitude], 19);
                var marker = L.marker([data.latitude, data.longitude], {
                    draggable: 'true'
                }).addTo(map);
                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
                    maxZoom: 18,
                    tileSize: 512,
                    zoomOffset: -1,
                }).addTo(map);

                $("#Latitude").val(location.coords.latitude),
                    $("#Longitude").val(location.coords.longitude),
                    marker.on('dragend', function (event) {
                        var position = marker.getLatLng();
                        marker.setLatLng(position, {
                            draggable: 'true'
                        }).bindPopup(position).update();
                        $("#Latitude").val(position.lat);
                        $("#Longitude").val(position.lng).keyup();
                    });

                $("#Latitude, #Longitude").change(function () {
                    var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
                    marker.setLatLng(position, {
                        draggable: 'true'
                    }).bindPopup(position).update();
                    map.panTo(position);
                });
            });
        });
    });
</script>
@endpush
