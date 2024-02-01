@extends('dashboard.partials.main')

@section('container')

<div class="container-fluid">
    <div class="d-flex">
        <h3 class="text-dark mb-4">Data Operator</h3>
        <a href="" class="ms-auto"><button class="btn btn-primary ">Tambah Data</button></a>
    </div>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Employee Info</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                </div>
                <div class="col-md-6">
                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                </div>
            </div>
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Umur</th>
                            <th>Tanggal lahir</th>
                            <th class="row-2">Menu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img class="rounded-circle me-2" width="30" height="30" src="/assets/img/avatars/avatar1.jpeg?h=0ecc82101fb9a10ca459432faa8c0656">Airi Satou</td>
                            <td>X</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>
                                <a href="#" style="text-decoration: none">
                                    <button type="button" class="btn btn-success">
                                    Edit
                                </button>
                                </a>
                            </td>
                            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Hapus
                            </button></td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle me-2" width="30" height="30" src="/assets/img/avatars/avatar2.jpeg?h=5d142be9441885f0935b84cf739d4112">Angelica Ramos</td>
                            <td>X</td>
                            <td>London</td>
                            <td>47</td>
                            <td>
                                <a href="#" style="text-decoration: none">
                                    <button type="button" class="btn btn-success">
                                    Edit
                                </button>
                                </a>
                            </td>
                            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Hapus
                            </button></td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle me-2" width="30" height="30" src="/assets/img/avatars/avatar3.jpeg?h=c5166867f10a4e454b5b2ae8d63268b3">Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>
                                <a href="#" style="text-decoration: none">
                                    <button type="button" class="btn btn-success">
                                    Edit
                                </button>
                                </a>
                            </td>
                            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Hapus
                            </button></td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle me-2" width="30" height="30" src="/assets/img/avatars/avatar4.jpeg?h=fefb30b61c8459a66bd338b7d790c3d5">Bradley Greer</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>41</td>
                            <td>
                                <a href="#" style="text-decoration: none">
                                    <button type="button" class="btn btn-success">
                                    Edit
                                </button>
                                </a>
                            </td>
                            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Hapus
                            </button></td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle me-2" width="30" height="30" src="/assets/img/avatars/avatar5.jpeg?h=35dc45edbcda6b3fc752dab2b0f082ea">Brenden Wagner</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>
                                <a href="#" style="text-decoration: none">
                                    <button type="button" class="btn btn-success">
                                    Edit
                                </button>
                                </a>
                            </td>
                            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Hapus
                            </button></td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle me-2" width="30" height="30" src="/assets/img/avatars/avatar1.jpeg?h=0ecc82101fb9a10ca459432faa8c0656">Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>
                                <a href="#" style="text-decoration: none">
                                    <button type="button" class="btn btn-success">
                                    Edit
                                </button>
                                </a>
                            </td>
                            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Hapus
                            </button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                </div>
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="py-5 my-5">
    <div class="container py-5">
        <div class="row mb-2">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="display-6 fw-bold mb-2"><span class="pb-3 underline">Data Evaluasi<br></span></h2>
                <p class="text-muted mb-2">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices.</p>
                <a class="btn btn-primary" href="/form-evaluasi" role="button">Buat Data Evaluasi</a>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-8 mx-auto">
                <div class="accordion text-muted mt-2" role="tablist" id="accordion-1">
                    @foreach ($evaluations as $evaluation)
                        <div class="accordion-item">
                            <h2 class="accordion-header" role="tab"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1" aria-expanded="true" aria-controls="accordion-1 .item-1">{{ $evaluation['title'] }}</button></h2>
                            <div class="accordion-collapse collapse show item-1" role="tabpanel" data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <p>{{ $evaluation['content'] }}</p>
                                    <tr>
                                        <td>
                                            <form action="/hapus/{{ $evaluation->id }}" method="post" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin?')"><i class="bi bi-trash-fill"></i>Hapus</button> 
                                            </form>
                                        </td>
                                    </tr>
                                </div>
                            </div>
                        </div>  
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>

{{-- hasil evaluasi --}}
<section class="clean-block clean-testimonials dark">
    <div class="container my-4">
        <div class="block-heading text-center">
            <h2 class="text-info">Hasil Evaluasi</h2>
        </div>
        <div class="row">
            @foreach ($evaluations as $evaluation)
                <div class="col-lg-4">
                    <div class="card clean-testimonial-item border-0 rounded-0">
                        <div class="card-body">
                            @if ($evaluation['reviewer_reply'] != NULL)
                                <p class="card-text">Operator : {{ $evaluation['operator_name'] }}</p>
                                <p class="card-text">Evaluasi : {{ $evaluation['content'] }}</p>
                                <p class="card-text">KPS : {{ $evaluation['kps_name'] }}</p>
                                <p class="card-text">Tindak Lanjut KPS : {{ $evaluation['kps_reply'] }}</p>
                                <p class="card-text">Pimpinan : {{ $evaluation['pimpinan_name'] }}</p>
                                <p class="card-text">Tanggapan Pimpinan : {{ $evaluation['pimpinan_reply'] }}</p>
                                <p class="card-text">Reviewer : {{ $evaluation['reviewer_name'] }}</p>
                                <p class="card-text">Tanggapan Reviewer : {{ $evaluation['reviewer_reply'] }}</p>
                            @endif
                            @if ($evaluation['reviewer_reply'] == NULL)
                                <p class="card-text">Hasil Evaluasi belum rampung!</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection