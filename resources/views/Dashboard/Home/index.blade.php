@extends('Layout.Dashboard')
@section('content')
<div class="app-main flex-column flex-row-fluid">
    <div class="container-fluid">
        <div class="col-xl">
            <!--begin::Tables Widget 9-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Laporan Kerusakan</span>
                    </h3>
                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                        title="Tambah">
                        <button type="submit"
                            class="btn btn-icon btn-outline-primary btn-active-light-primary border border-primary"
                            data-bs-toggle="modal" data-bs-target="#ktmodalwaktutanggap"title="Lapor Kerusakan"><span
                                class="indicator-label">
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16">
                                        <path
                                            d="m.5 3 .04.87a2 2 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2m5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19q-.362.002-.683.12L1.5 2.98a1 1 0 0 1 1-.98z" />
                                        <path
                                            d="M13.5 9a.5.5 0 0 1 .5.5V11h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V12h-1.5a.5.5 0 0 1 0-1H13V9.5a.5.5 0 0 1 .5-.5" />
                                    </svg>
                                </span>
                            </span>
                        </button>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bolder text-muted">
                                    <th class="w-25px">
                                        No
                                    </th>
                                    <th class="min-w-10px">No Tiket</th>
                                    <th class="min-w-150px">Keterangan</th>
                                    <th class="min-w-120px">Waktu Pelaporan</th>
                                    <th class="min-w-140px">Waktu Respon</th>
                                    <th class="min-w-90px">status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($LaporanPengirimian as $p)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                {{ $p->id }}
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-success fw-bolder  d-block fs-6">
                                                {{ $p->keterangan }}</span>
                                        </td>
                                        <td>
                                            <span
                                                class="text-primary fw-bolder  d-block fs-6">{{ $p->FormatWaktuLapor }}</span>
                                        </td>
                                        <td>
                                            <span class="text-primary fw-bolder  d-block fs-6">
                                                @if (!empty($p->Respon_Time))
                                                    {{ $p->Respon_Time }}
                                                @endif
                                            </span>
                                        </td>
                                        <td>
                                            @if ($p->status == 1)
                                                <span class="text-success fw-bolder  d-block fs-6">diterima</span>
                                            @else
                                                <span class="text-danger fw-bolder  d-block fs-6">belum diterima</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--begin::Body-->
            </div>
            <!--end::Tables Widget 9-->
        </div>
    </div>
</div>

{{-- modal --}}
<div class="modal fade " tabindex="-1" id="ktmodalwaktutanggap">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('storeLaporanKerusakan')}}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Lapor Kerusakan</h5>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>
                <div class="modal-body">
                    <div class="fv-row mb-3">
                        <label class="text-dark fw-bolder text-hover-primary fs-6">Keterangan Kerusakan</label>
                        <textarea type="text" name="keterangan" class="form-control form-control-solid mb-3 mb-lg-0" required> </textarea>
                    </div>
                    <div class="fv-row mb-3">
                        <label class="text-dark fw-bolder text-hover-primary fs-6">Waktu Pelaporan</label>
                        <input class="form-control form-control-solid mb-3 mb-lg-0" name="waktu_lapor"
                            id="waktu_lapor" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Proses</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- end modal --}}  
@endsection