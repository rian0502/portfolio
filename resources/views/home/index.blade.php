@extends('layouts.home')
@section('content')
    <header class="text-center text-white bg-header masthead">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 p-3">
                    <h1 class="text-start">Muhammad Febrian Hasibuan</h1>
                    <hr>
                    <h2 class="font-weight-light text-start">Software Developer</h2>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid d-block mx-auto mb-5" src="assets/img/profile.png">
                </div>
            </div>

        </div>
    </header>
    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary">Certifications</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                @foreach ($certifications as $item)
                    <div class="col-md-4 col-lg-3">
                        <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-{{ $loop->iteration }}"
                            data-bs-toggle="modal">
                            <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                                <div class="text-center text-white my-auto portfolio-item-caption-content w-100"><i
                                        class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid card-image" src="/{{ $item->image }}">
                        </a>
                    </div>
                    <div class="modal text-center" role="dialog" tabindex="-1"
                        id="portfolio-modal-{{ $loop->iteration }}">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button></div>
                                <div class="modal-body">
                                    <div class="container text-center">
                                        <div class="row">
                                            <div class="col-lg-8 mx-auto">
                                                <h3 class="text-uppercase text-secondary">{{ $item->title }}</h3>
                                                <hr class="star-dark mb-5"><img class="img-fluid mb-3 card-image"
                                                    src="/{{ $item->image }}">
                                                <p class="mb-3">{{ $item->description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer pb-5"><a
                                        class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss"
                                        role="button" data-bs-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Close
                                        Certificat</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="text-white bg-primary mb-0" id="about">
        <div class="container">
            <h2 class="text-uppercase text-center text-white">About</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">Saya adalah seorang Software Developer dengan passion dalam pengembangan perangkat
                        lunak.
                        Sejak masa kuliah, saya telah mendalami berbagai teknologi dan terus mengasah keterampilan untuk
                        membangun solusi inovatif.</p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead">Saya percaya bahwa teknologi dapat memberikan dampak besar bagi dunia. Dengan
                        pengalaman dan keterampilan yang saya miliki,
                        saya berkomitmen untuk menciptakan solusi yang efisien dan berkualitas.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="project">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">Project</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card p-3">
                        <table class="table" width="100%" id="projectTable">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle" scope="col">No</th>
                                    <th class="text-center align-middle" scope="col">Project</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Technology</th>
                                    <th scope="col">Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $item)
                                    <tr>
                                        <th class="text-center align-middle" scope="row">{{ $loop->iteration }}</th>
                                        <td class="text-center align-middle"><strong>{{ $item->title }}</strong></td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->technologies }}</td>
                                        <td><a class="btn btn-sm btn-dark" href="{{ $item->link }}"
                                                target="_blank">Link</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="skill"> 
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-4">Skill</h2>
            <hr class="star-dark mb-4">
            <div class="row justify-content-center">
                @foreach ($skills as $item)
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                        <div class="card custom-card">
                            <div class="card-body d-flex align-items-center justify-content-center">
                                <h4 class="text-center">{{ $item->name }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
