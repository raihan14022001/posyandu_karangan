@extends('layouts.app')
@section('head')
    @if (isset($data))
        <title>Edit | Posyandu lansia</title>
    @else
        <title>Tambah | Posyandu lansia</title>
    @endif
@endsection
@section('konten')
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Lansia</h1>
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted"><a href="{{ route('lansia.petugas') }}">List lansia</a></li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    @if (isset($data))
                        <li class="breadcrumb-item text-dark">Edit lansia</li>
                    @else
                        <li class="breadcrumb-item text-dark">Tambah lansia</li>
                    @endif
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>
    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Form Lansia</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::Form-->
            <form class="form" action="{{ url('Lansia/save') }}" method="POST">
                @csrf
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    @if (isset($data))
                        <!--begin::Input group-->
                        <input type="hidden" name="id" value="{{ $data->id }}">

                        <!--end::Input group-->
                        <!--begin::Input group-->

                        <!--end::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="name" class="form-control form-control-lg form-control-solid"
                                    value="{{ $data->name }}" placeholder="Masukan Nama Lengkap"
                                    @error('name') is-invalid @enderror required />
                                @error('name')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="number" name="nik" class="form-control form-control-lg form-control-solid"
                                    value="{{ $data->nik }}" placeholder="Masukan Nomor Induk kependudukan"
                                    @error('nik') is-invalid @enderror required />
                                @error('nik')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Umur</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="number" name="umur" class="form-control form-control-lg form-control-solid"
                                    placeholder="Masukan Umur" value="{{ $data->umur }}"
                                    @error('umur') is-invalid @enderror required />
                                @error('umur')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Jenis Kelamin</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="gender" id="gender"
                                    class="form-control form-control-lg form-control-solid">
                                    <option></option>
                                    <option value='pria'>Pria</option>
                                    <option value='wanita'>Wanita</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Alamat</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="alamat" class="form-control form-control-lg form-control-solid"
                                    placeholder="Masukan Alamat" value="{{ $data->alamat }}"
                                    @error('alamat') is-invalid @enderror required />
                                @error('alamat')
                                    <div class="invalid-feddback " role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Desa</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="desa_id" id="desa_id"
                                    class="form-control form-control-lg form-control-solid">
                                    <option></option>
                                    @foreach ($desa as $key => $value)
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                </div>
            @else
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="name" class="form-control form-control-lg form-control-solid"
                            placeholder="Masukan Nama Lengkap" @error('name') is-invalid @enderror required />
                        @error('name')
                            <div class="invalid-feddback " role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">NIK</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="number" name="nik" class="form-control form-control-lg form-control-solid"
                            placeholder="Masukan Nomor Induk kependudukan" @error('nik') is-invalid @enderror required />
                        @error('nik')
                            <div class="invalid-feddback " role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Umur</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="number" name="umur" class="form-control form-control-lg form-control-solid"
                            placeholder="Masukan Umur" @error('umur') is-invalid @enderror required />
                        @error('umur')
                            <div class="invalid-feddback " role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Jenis Kelamin</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <select name="gender" id="gender" class="form-control form-control-lg form-control-solid">
                            <option></option>
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select>
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Alamat</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="alamat" class="form-control form-control-lg form-control-solid"
                            placeholder="Masukan Alamat" @error('alamat') is-invalid @enderror required />
                        @error('alamat')
                            <div class="invalid-feddback " role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!--end::Col-->
                </div>

                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Desa</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <select name="desa_id" id="desa_id" class="form-control form-control-lg form-control-solid">
                            <option></option>
                            @foreach ($desa as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!--end::Col-->
                </div>
        </div>
        @endif
    </div>
    <div class="card-footer d-flex justify-content-end py-6 px-9">
        <button type="reset" class="btn btn-light btn-active-light-primary me-2"><a
                href="{{ route('lansia.petugas') }}">Cancel</a> </button>
        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save</button>
    </div>
    </form>
    </div>
@endsection
@section('script')
    <script>
        @isset($data)
            $('#gender').val('{{ $data['gender'] }}').toString();
            $('#desa_id').val('{{ $data['desa_id'] }}').toString();
            @if ($FisikSelected != null)
                $('#konseling').val('{{ $FisikSelected['konseling'] }}').toString();
                $('#rujuk').val('{{ $FisikSelected['rujuk'] }}').toString();
            @endif
            @if ($GangguanSelected != null)
                $('#g_ginjal').val('{{ $GangguanSelected['g_ginjal'] }}').toString();
                $('#g_pengelihatan').val('{{ $GangguanSelected['g_pengelihatan'] }}').toString();
                $('#g_pendengaran').val('{{ $GangguanSelected['g_pendengaran'] }}').toString();
            @endif
            @if ($P3gSelected != null)
                $('#tingkat_kemandirian').val('{{ $P3gSelected['tingkat_kemandirian'] }}').toString();
                $('#g_emosional').val('{{ $P3gSelected['g_emosional'] }}').toString();
                $('#g_kognitiv').val('{{ $P3gSelected['g_kognitiv'] }}').toString();
                $('#p_resiko_malnutrisi').val('{{ $P3gSelected['p_resiko_malnutrisi'] }}').toString();
                $('#p_resiko_jatuh').val('{{ $P3gSelected['p_resiko_jatuh'] }}').toString();
            @endif
        @endisset
    </script>
@endsection
