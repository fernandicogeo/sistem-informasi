@extends('dashboard.partials.main')

@section('container')
<!-- pertanyaan evaluasi -->
<section class="py-2 my-2">
    <div class="container py-5">
        <div class="row mb-2">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="display-6 fw-bold mb-2"><span class="pb-3 underline">Data Pertanyaan Evaluasi<br></span></h2>
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
                                    <small class="text-primary">Operator : {{ $evaluation['operator_name'] }}</small>
                                    <p>Question : {{ $evaluation['content'] }}</p>
                                    <tr>
                                        <td>
                                            <a class="btn btn-primary" href="/edit-evaluasi/{{ $evaluation->id }}" role="button">Edit Evaluasi</a>
                                        </td>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- tanggapan -->
<section class="py-2 my-2">
    <div class="container py-5">
        <div class="row mb-2">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="display-6 fw-bold mb-2"><span class="pb-3 underline">Hasil Tindak Lanjut<br></span></h2>
                <tr>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-8 mx-auto">
                <div class="accordion text-muted" role="tablist" id="accordion-1">
                    @foreach ($evaluations as $evaluation)
                        <div class="accordion-item">
                            <h2 class="accordion-header" role="tab"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1" aria-expanded="true" aria-controls="accordion-1 .item-1">{{ $evaluation['title'] }}</button></h2>
                            <div class="accordion-collapse collapse show item-1" role="tabpanel" data-bs-parent="#accordion-1">
                                <div class="accordion-body">
                                    <small class="text-primary">Operator : {{ $evaluation['operator_name'] }}</small>
                                    <p>Question : {{ $evaluation['content'] }}</p>

                                    <small class="text-primary">KPS : {{ $evaluation['kps_name'] }}</small>
                                    <p>Reply : {{ $evaluation['kps_reply'] }}</p>

                                    <small class="text-primary">Pimpinan : {{ $evaluation['pimpinan_name'] }}</small>
                                    <p>Reply : {{ $evaluation['pimpinan_reply'] }}</p>
                                    <tr>
                                        <td>
                                            @if ($evaluation['kps_name'] != NULL && $evaluation['pimpinan_name'] != NULL && $evaluation['reviewer_reply'] == NULL) 
                                                <a class="btn btn-primary" href="/tanggapan-reviewer/{{ $evaluation->id }}" role="button">Beri Tanggapan</a>
                                            @endif
                                            @if ($evaluation['kps_name'] == NULL) 
                                                <div class="alert alert-warning" role="alert">
                                                    Evaluasi ini belum ditindak lanjuti oleh KPS.
                                                </div>
                                            @endif
                                            @if ($evaluation['kps_name'] != NULL && $evaluation['pimpinan_name'] == NULL) 
                                                <div class="alert alert-warning" role="alert">
                                                    Evaluasi ini belum ditanggapi oleh Pimpinan.
                                                </div>
                                            @endif
                                            @if ($evaluation['reviewer_reply'] != NULL) 
                                                <div class="alert alert-success" role="alert">
                                                    Sudah Mengisi Tanggapan
                                                </div>
                                            @endif
                                            
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