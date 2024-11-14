@extends('layouts/landing-pages/app')
@section('content')
    <div class="body-wrapper">
        <div class="container-fluid">

            <section class="header">
                <div class="card bg-light-info shadow-none position-relative overflow-hidden">
                    <div class="card-body px-4 py-3" style="background-color:  rgb(179, 186, 185)">
                        <div class="row align-items-center">
                            <div class="col-9">
                                {{--  content 1  --}}
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        {{--  content 2  --}}
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-3">
                                <div class="text-center mb-n5">
                                    <img src="{{ asset('admin-assets/images/breadcrumb/ChatBc.png') }}" alt=""
                                        class="img-fluid mb-n4" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row">
                    <div class="col-md-8">

                        <div class="card-body position-relative">
                            <div class="d-flex flex-column justify-content-between h-100">

                                <div class="mt-5">
                                    <p class="fs-7 my-4 fw-semibold text-dark d-block lh-sm">
                                        Early Black Friday Amazon deals: cheap TVs, headphones, laptops
                                    </p>
                                    <p class="fs-4 my-4 fw-semibold text-dark d-block lh-sm">
                                        Early Black Friday Amazon deals: cheap TVs, headphones, laptops
                                        Early Black Friday Amazon deals: cheap TVs, headphones, laptops
                                        Early Black Friday Amazon deals: cheap TVs, headphones, laptops
                                        Early Black Friday Amazon deals: cheap TVs, headphones, laptops
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card blog position-relative overflow-hidden hover-img" style="border-radius: 50%;">
                            <div class="position-relative"
                                style="overflow: hidden; width: 100%; padding-top: 100%; border-radius: 50%;">
                                <img src="{{ asset('admin-assets/images/blog/blog-img9.jpg') }}" alt="Blog Image"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
                            </div>
                            <div class="card-body position-relative" style="border-radius: 50%;">
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Mollie Underwood">
                                            <!-- Additional content can go here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </div>
        </section>

    </div>
    </div>
@endsection
