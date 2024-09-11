@extends('Layout.Dashboard')
@section('content')
<div class="app-main flex-column flex-row-fluid">
    <div class="container-fluid">
        <div class="row g-5 g-xl-12 ">
            @foreach ($ResponLaporan as $p)
                {{-- @if ($p->status == 0 || $p->status == 1) --}}
                    <div class="col-xl-4">
                        <!--begin::Statistics Widget 1-->
                        <div class="card bgi-no-repeat card-xl-stretch  border-top border-primary"
                            style="background-position: right top; background-size: 30% auto; background-image: url(src/media/svg/shapes/abstract-4.svg)">
                            <!--begin::Body-->
                            <div class="card-header border-3 border-danger pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">No Tiket : {{$p->id}}
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Ruangan : {{$p->ruangan_id}}
                                        </span>
                                </h3>
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Waktu Lapor : {{$p->FormatWaktuLapor}}
                                        </span>
                                </h3>
                            </div>
                            <div class="card-body">                                
                                <p class="text-dark-75 fw-bold fs-5 m-0">{{$p->keterangan}}</p>
                            </div>
                            <div class="modal-footer">
                                {{-- @if ($p->status == 0) --}}
                                    <form action="" method="post"> @method('PUT') @csrf
                                        <input value="" hidden name="notiket">
                                        <button type="submit" id="submitBtn"
                                            class="btn btn-icon btn-outline-success btn-active-light-primary float-end"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Respon">
                                            <span class="indicator-label">
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-arrow-right-square" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </form>
                                {{-- @else --}}
                                    <button type="button"
                                        class="btn btn-icon btn-outline-primary btn-active-light-pimary float-end"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Final">
                                        <span class="indicator-label">
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z" />
                                                    <path
                                                        d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
                                                </svg>
                                            </span>
                                        </span>
                                    </button>
                                    <a href="javascript:void(0)" id="HasilSurvey"
                                        class="btn btn-icon btn-outline-warning btn-active-light-warning float-end"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Isi Hasil Survey">
                                        <span class="indicator-label">
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-list-columns-reverse"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M0 .5A.5.5 0 0 1 .5 0h2a.5.5 0 0 1 0 1h-2A.5.5 0 0 1 0 .5Zm4 0a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10A.5.5 0 0 1 4 .5Zm-4 2A.5.5 0 0 1 .5 2h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm4 0a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5Zm-4 2A.5.5 0 0 1 .5 4h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm4 0a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5Zm-4 2A.5.5 0 0 1 .5 6h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm4 0a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5Zm-4 2A.5.5 0 0 1 .5 8h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm4 0a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5Zm-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm4 0a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10a.5.5 0 0 1-.5-.5Zm-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm4 0a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5Zm-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm4 0a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5Z" />
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
                                {{-- @endif --}}
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Statistics Widget 1-->
                    </div>
                {{-- @endif --}}
            @endforeach
        </div>
    </div>
</div>
@endsection