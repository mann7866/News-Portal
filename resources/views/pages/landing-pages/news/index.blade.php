@extends('layouts.landing-pages.app')
@section('content')

    <div class="body-wrapper overflow-hidden" style="background-color: rgb(238, 238, 238)">
      
        <div class="container">
            <div class="card bg-success card-body mb-0 mt-5 rounded-0">
                <div class="d-flex gap-4">
                    <a href="#" class="text-white">Olahraga</a>
                    <a href="#" class="text-white">Perlombaan</a>
                    <a href="#" class="text-white">Study</a>
                    <a href="#" class="text-white">Meeting</a>
                    <a href="#" class="text-white">Siswa</a>
                    <a href="#" class="text-white">Guru</a>
                    <a href="#" class="text-white">RPL</a>
                </div>
            </div>

            <div class="card card-body mt-0 rounded-0">
                <div class="row">
                    <div class="col-md-4 col-xl-3">
                        <form class="position-relative">
                            <input type="text" class="form-control product-search ps-5" id="input-search"
                                placeholder="Cari Berita..." />
                            <i
                                class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                        </form>
                    </div>
                    <div
                        class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                        <!-- Konten lainnya -->
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-6 col-lg-8">
                    <div class="card rounded-2 overflow-hidden hover-img">
                        <div class="position-relative">
                            <div class="card-body p-4">
                                <a class="d-block my-4 fs-10 text-dark fw-semibold" href="#">As yen tumbles,
                                    gadget-loving Japan goes for secondhand iPhones</a>
                            </div>
                            <a href="javascript:void(0)"><img src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                    class="card-img-top rounded-0" alt="..."></a>
                            {{--  <span
                                    class="badge bg-white text-dark fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2
                                    min Read</span>  --}}
                            <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt=""
                                class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Addie Keller">
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex gap-1">
                                <span
                                    class="badge bg-light-danger text-danger fs-2 rounded-4 py-1 px-2 lh-sm  mt-3">Gadget</span>
                                <span
                                    class="badge bg-light-danger text-danger fs-2 rounded-4 py-1 px-2 lh-sm  mt-3">Gadget</span>
                            </div>
                            <a class="d-block my-4 fs-5 text-dark fw-semibold" href="#">As yen tumbles,
                                gadget-loving Japan goes for secondhand iPhones gadget-loving Japan goes for secondhand
                                iPhonesgadget-loving Japan goes for secondhand iPhones
                                gadget-loving Japan goes for secondhand iPhonesgadget-loving Japan goes for secondhand
                                iPhones
                                gadget-loving Japan goes for secondhand iPhonesgadget-loving Japan goes for secondhand
                                iPhones
                            </a>
                            <div class="d-flex align-items-center gap-4">
                                <div class="badge bg-light-warning text-warning d-flex align-items-center fs-2 ms-auto"><i
                                        class="ti ti-point text-dark"></i>Mon, Jan 16</div>
                            </div>
                            <div class="mt-5 row">
                                <hr>
                                <div class="d-flex text-dark gap-2">Tinggalkan Balasan</div>
                                <div class="d-flex mt-2 fs-1 text-muted align-items-center gap-2">Alamat email Anda tidak
                                    akan dipublikasikan. Ruas yang wajib ditandai *</div>
                                <div class="mt-1 col-6">
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Masukkan Nama anda..." value="" />
                                </div>
                                <div class="col-6">
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Masukkan e-mail anda..." value="" />
                                </div>
                                <div class="mt-2 col-12">
                                    <textarea class="form-control" id="notes" rows="4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</textarea>
                                </div>

                                {{--  button news --}}
                                    <div class="d-flex ">
                                        <div class="mt-2 ">
                                            <a href="javascript:void(0);" id="toggle-comments">
                                                <button type="button" class="btn btn-sm btn-outline-muted mt-1">
                                                    <i class="ti ti-message"></i>
                                                    <span class="comment-count">10</span>
                                                    komentar
                                                </button>
                                            </a>
                                            <a href="">
                                                <button type="button" class="btn btn-sm btn-outline-primary mt-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-send-2">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4.698 4.034l16.302 7.966l-16.302 7.966a.503 .503 0 0 1 -.546 -.124a.555 .555 0 0 1 -.12 -.568l2.468 -7.274l-2.468 -7.274a.555 .555 0 0 1 .12 -.568a.503 .503 0 0 1 .546 -.124z" />
                                                        <path d="M6.5 12h14.5" />
                                                      </svg>
                                                    Simpan
                                                </button>
                                            </a>
                                        </div>
                                    </div>

                                <div class="mt-2">
                                    <hr>
                                    <style>
                                        .comment-count {
                                            font-weight: bold;
                                        }
                                        .comment-section-wrapper {
                                            max-height: 400px;
                                            overflow-y: auto;
                                        }

                                        /* Custom scrollbar styles */
                                        .comment-section-wrapper::-webkit-scrollbar {
                                            width: 5px; /* Width of the scrollbar */
                                        }

                                        .comment-section-wrapper::-webkit-scrollbar-track {
                                            background: #ffffff; /* Background of the scrollbar track */
                                        }

                                        .comment-section-wrapper::-webkit-scrollbar-thumb {
                                            background-color: #e8e5e5; /* Color of the scrollbar thumb */
                                            border-radius: 30px; /* Roundness of the scrollbar thumb */
                                            border: 1px solid #ffffff; /* Padding around the scrollbar thumb */
                                        }

                                        .comment-section-wrapper::-webkit-scrollbar-thumb:hover {
                                            background: #f6f6f6; /* Color when hovered */
                                        }
                                    </style>
                                    <script>
                                        document.getElementById('toggle-comments').addEventListener('click', function() {
                                            var commentSection = document.getElementById('comment-section');
                                            if (commentSection.style.display === 'none' || commentSection.style.display === '') {
                                                commentSection.style.display = 'block';
                                            } else {
                                                commentSection.style.display = 'none';
                                            }
                                        });
                                    </script>

                                    {{--  comment-news  --}}
                                    <div class="comment-section-wrapper" id="comment-section">
                                        <div class="comment-section">
                                            <div class="p-4 rounded-2 bg-light-success mb-3">
                                                <div class="d-flex align-items-center gap-3">
                                                    <h6 class="fw-semibold mb-0 fs-2">Rusdi</h6>
                                                </div>
                                                <p class="my-1 mb-0 fs-1">Es do ujurus nejson imju azgudpi toceztep ji cocicoci
                                                    bosawrop korze ta.
                                                    Casetlu udumej umocu wanaro webmos ijafa ud muli amja softoj ma pijum.
                                                </p>
                                                <div class="d-flex align-items-center gap-2">
                                                    <a class="text-white d-flex align-items-center justify-content-center bg-success p-1 mt-1 fs-3 rounded-circle"
                                                        href="javascript:void(0)" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="Reply">
                                                        <i class="ti ti-arrow-back-up"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="p-4 rounded-2 bg-light-success mb-3 ms-7">
                                                <div class="d-flex align-items-center gap-3">
                                                    <h6 class="fw-semibold mb-0 fs-2"><i class="ti ti-corner-down-right-double"></i>Don Russell</h6>
                                                </div>
                                                <p class="my-1 mb-0 fs-1">Es do ujurus nejson imju azgudpi toceztep ji cocicoci
                                                    bosawrop korze ta.
                                                    Casetlu udumej umocu wanaro webmos ijafa ud muli amja softoj ma pijum.
                                                </p>
                                                <div class="d-flex align-items-center gap-2">
                                                    <a class="text-white d-flex align-items-center justify-content-center bg-success p-1 mt-1 fs-3 rounded-circle"
                                                        href="javascript:void(0)" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="Reply">
                                                        <i class="ti ti-arrow-back-up"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="p-4 rounded-2 bg-light-success mb-3">
                                                <div class="d-flex align-items-center gap-3">
                                                    <h6 class="fw-semibold mb-0 fs-2">Rusdi</h6>
                                                </div>
                                                <p class="my-1 mb-0 fs-1">Es do ujurus nejson imju azgudpi toceztep ji cocicoci
                                                    bosawrop korze ta.
                                                    Casetlu udumej umocu wanaro webmos ijafa ud muli amja softoj ma pijum.
                                                </p>
                                                <div class="d-flex align-items-center gap-2">
                                                    <a class="text-white d-flex align-items-center justify-content-center bg-success p-1 mt-1 fs-3 rounded-circle"
                                                        href="javascript:void(0)" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="Reply">
                                                        <i class="ti ti-arrow-back-up"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Tambahkan lebih banyak komentar di sini jika diperlukan -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="mt-5 align-items-center gap">
                                <hr>
                                <div class="row">

                                    {{--  news 1  --}}
                                    <div class="col-md-4 col-lg-4">
                                        <div class="card rounded-2 overflow-hidden hover-img">
                                            <div class="position-relative">
                                                <a href="javascript:void(0)"><img
                                                        src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                                        class="card-img-top rounded-0" alt="..."></a>
                                                <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}"
                                                    alt=""
                                                    class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                                    width="40" height="40" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Addie Keller">
                                            </div>
                                            <div class="card-body p-1">
                                                <div class="d-flex mt-1">
                                                    <a class="text-danger fs-1 rounded-4 lh-sm  mt-3" href="">
                                                        <span>Gadget/</span>
                                                    </a>
                                                    <a class="text-danger fs-1 rounded-4 lh-sm  mt-3" href="">
                                                        <span>Gadget/</span>
                                                    </a>
                                                </div>
                                                <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen
                                                    tumbles, gadget-loving Japan goes for secondhand iPhones</a>
                                                <div class="d-flex align-items-center gap-4">
                                                    <div
                                                        class="bg-light-warning text-warning d-flex align-items-center fs-1 ms-auto">
                                                        <i class="ti ti-point text-dark"></i>Mon, Jan 16
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="card rounded-2 overflow-hidden hover-img">
                                            <div class="position-relative">
                                                <a href="javascript:void(0)"><img
                                                        src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                                        class="card-img-top rounded-0" alt="..."></a>
                                                <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}"
                                                    alt=""
                                                    class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                                    width="40" height="40" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Addie Keller">
                                            </div>
                                            <div class="card-body p-1">
                                                <div class="d-flex mt-1">
                                                    <a class="text-danger fs-1 rounded-4 lh-sm  mt-3" href="">
                                                        <span>Gadget/</span>
                                                    </a>
                                                    <a class="text-danger fs-1 rounded-4 lh-sm  mt-3" href="">
                                                        <span>Gadget/</span>
                                                    </a>
                                                </div>
                                                <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen
                                                    tumbles, gadget-loving Japan goes for secondhand iPhones</a>
                                                <div class="d-flex align-items-center gap-4">
                                                    <div
                                                        class="bg-light-warning text-warning d-flex align-items-center fs-1 ms-auto">
                                                        <i class="ti ti-point text-dark"></i>Mon, Jan 16
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="card rounded-2 overflow-hidden hover-img">
                                            <div class="position-relative">
                                                <a href="javascript:void(0)"><img
                                                        src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                                        class="card-img-top rounded-0" alt="..."></a>
                                                <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}"
                                                    alt=""
                                                    class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                                    width="40" height="40" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Addie Keller">
                                            </div>
                                            <div class="card-body p-1">
                                                <div class="d-flex mt-1">
                                                    <a class="text-danger fs-1 rounded-4 lh-sm  mt-3" href="">
                                                        <span>Gadget/</span>
                                                    </a>
                                                    <a class="text-danger fs-1 rounded-4 lh-sm  mt-3" href="">
                                                        <span>Gadget/</span>
                                                    </a>
                                                </div>
                                                <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen
                                                    tumbles, gadget-loving Japan goes for secondhand iPhones</a>
                                                <div class="d-flex align-items-center gap-4">
                                                    <div
                                                        class="bg-light-warning text-warning d-flex align-items-center fs-1 ms-auto">
                                                        <i class="ti ti-point text-dark"></i>Mon, Jan 16
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="card rounded-2 overflow-hidden hover-img">
                                            <div class="position-relative">
                                                <a href="javascript:void(0)"><img
                                                        src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                                        class="card-img-top rounded-0" alt="..."></a>
                                                <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}"
                                                    alt=""
                                                    class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                                    width="40" height="40" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Addie Keller">
                                            </div>
                                            <div class="card-body p-1">
                                                <div class="d-flex mt-1">
                                                    <a class="text-danger fs-1 rounded-4 lh-sm  mt-3" href="">
                                                        <span>Gadget/</span>
                                                    </a>
                                                    <a class="text-danger fs-1 rounded-4 lh-sm  mt-3" href="">
                                                        <span>Gadget/</span>
                                                    </a>
                                                </div>
                                                <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen
                                                    tumbles, gadget-loving Japan goes for secondhand iPhones</a>
                                                <div class="d-flex align-items-center gap-4">
                                                    <div
                                                        class="bg-light-warning text-warning d-flex align-items-center fs-1 ms-auto">
                                                        <i class="ti ti-point text-dark"></i>Mon, Jan 16
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <a class="d-flex justify-content-center" href="">
                                            <button class="mb-3 btn btn-secondary btn-sm">Lihat lainnya <i
                                                    class="ti ti-corner-down-right-double"></i></button>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">

                    {{--  news 2  --}}
                    <div class="card">
                        <div class="card-body overflow-hidden hover-img">
                            <div class="d-flex">
                                <div class="position-relative">
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                            class="card-img-top rounded-0 " style="height: 100px; width: 150px"
                                            alt="..."></a>

                                </div>
                                <div class="card-body p-1" style="font-size: 1px">
                                    <div class="d-flex gap-1">
                                        <a href="">
                                            <span
                                                class="badge bg-light-danger text-danger fs-1 rounded-0 py-0 px-0 lh-sm  mt-0">Gadget</span>
                                            <span
                                                class="badge bg-light-danger text-danger fs-1 rounded-0 py-0 px-0 lh-sm  mt-0">Gadget</span>

                                        </a>

                                    </div>
                                    <a class="d-block my-1 fs-2 text-dark fw-semibold" href="#">As yen
                                        tumbles,
                                        gadget-loving Japan goes for secondhand iPhones</a>
                                    <div class="d-flex align-items-center gap-4">
                                        <div class="badge bg-light-warning text-warning d-flex align-items-center  ms-auto"
                                            style="font-size: 800%">Mon, Jan
                                            16</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body overflow-hidden hover-img">
                            <div class="d-flex">
                                <div class="position-relative">
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                            class="card-img-top rounded-0 " style="height: 100px; width: 150px"
                                            alt="..."></a>

                                </div>
                                <div class="card-body p-1" style="font-size: 1px">
                                    <div class="d-flex gap-1">
                                        <a href="">
                                            <span
                                                class="badge bg-light-danger text-danger fs-1 rounded-0 py-0 px-0 lh-sm  mt-0">Gadget</span>
                                            <span
                                                class="badge bg-light-danger text-danger fs-1 rounded-0 py-0 px-0 lh-sm  mt-0">Gadget</span>

                                        </a>

                                    </div>
                                    <a class="d-block my-1 fs-2 text-dark fw-semibold" href="#">As yen
                                        tumbles,
                                        gadget-loving Japan goes for secondhand iPhones</a>
                                    <div class="d-flex align-items-center gap-4">
                                        <div class="badge bg-light-warning text-warning d-flex align-items-center  ms-auto"
                                            style="font-size: 800%">Mon, Jan
                                            16</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body overflow-hidden hover-img">
                            <div class="d-flex">
                                <div class="position-relative">
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                            class="card-img-top rounded-0 " style="height: 100px; width: 150px"
                                            alt="..."></a>

                                </div>
                                <div class="card-body p-1" style="font-size: 1px">
                                    <div class="d-flex gap-1">
                                        <a href="">
                                            <span
                                                class="badge bg-light-danger text-danger fs-1 rounded-0 py-0 px-0 lh-sm  mt-0">Gadget</span>
                                            <span
                                                class="badge bg-light-danger text-danger fs-1 rounded-0 py-0 px-0 lh-sm  mt-0">Gadget</span>

                                        </a>

                                    </div>
                                    <a class="d-block my-1 fs-2 text-dark fw-semibold" href="#">As yen
                                        tumbles,
                                        gadget-loving Japan goes for secondhand iPhones</a>
                                    <div class="d-flex align-items-center gap-4">
                                        <div class="badge bg-light-warning text-warning d-flex align-items-center  ms-auto"
                                            style="font-size: 800%">Mon, Jan
                                            16</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body overflow-hidden hover-img">
                            <div class="d-flex">
                                <div class="position-relative">
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                            class="card-img-top rounded-0 " style="height: 100px; width: 150px"
                                            alt="..."></a>

                                </div>
                                <div class="card-body p-1" style="font-size: 1px">
                                    <div class="d-flex gap-1">
                                        <a href="">
                                            <span
                                                class="badge bg-light-danger text-danger fs-1 rounded-0 py-0 px-0 lh-sm  mt-0">Gadget</span>
                                            <span
                                                class="badge bg-light-danger text-danger fs-1 rounded-0 py-0 px-0 lh-sm  mt-0">Gadget</span>

                                        </a>

                                    </div>
                                    <a class="d-block my-1 fs-2 text-dark fw-semibold" href="#">As yen
                                        tumbles,
                                        gadget-loving Japan goes for secondhand iPhones</a>
                                    <div class="d-flex align-items-center gap-4">
                                        <div class="badge bg-light-warning text-warning d-flex align-items-center  ms-auto"
                                            style="font-size: 800%">Mon, Jan
                                            16</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body overflow-hidden hover-img">
                            <div class="d-flex">
                                <div class="position-relative">
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                            class="card-img-top rounded-0 " style="height: 100px; width: 150px"
                                            alt="..."></a>

                                </div>
                                <div class="card-body p-1" style="font-size: 1px">
                                    <div class="d-flex gap-1">
                                        <a href="">
                                            <span
                                                class="badge bg-light-danger text-danger fs-1 rounded-0 py-0 px-0 lh-sm  mt-0">Gadget</span>
                                            <span
                                                class="badge bg-light-danger text-danger fs-1 rounded-0 py-0 px-0 lh-sm  mt-0">Gadget</span>

                                        </a>

                                    </div>
                                    <a class="d-block my-1 fs-2 text-dark fw-semibold" href="#">As yen
                                        tumbles,
                                        gadget-loving Japan goes for secondhand iPhones</a>
                                    <div class="d-flex align-items-center gap-4">
                                        <div class="badge bg-light-warning text-warning d-flex align-items-center  ms-auto"
                                            style="font-size: 800%">Mon, Jan
                                            16</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a class="d-flex justify-content-center" href="">
                                <button class="mb-3 btn btn-sekunder btn-sm">Lihat lainnya <i
                                        class="ti ti-corner-down-right-double"></i></button>
                            </a>
                        </div>
                    </div>

                    {{--  news 3  --}}
                    <div class="card">
                        <div class=" rounded-2 overflow-hidden hover-img">
                            <div class="position-relative">
                                <a href="javascript:void(0)"><img
                                        src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                        class="card-img-top rounded-0" alt="..."></a>
                                <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt=""
                                    class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                    width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Addie Keller">
                            </div>
                            <div class="p-1">
                                <div class=" d-flex mt-1">
                                    <span
                                        class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm  mt-3">Gadget</span>
                                    <span
                                        class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm  mt-3">Gadget</span>
                                </div>
                                <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen
                                    tumbles, gadget-loving Japan goes for secondhand iPhones secondhand iPhones secondhand
                                    iPhones secondhand iPhones</a>
                                <div class="d-flex align-items-center gap-4">
                                    <div
                                        class="badge bg-light-warning text-warning d-flex align-items-center fs-1 ms-auto">
                                        <i class="ti ti-point text-dark"></i>Mon, Jan 16
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class=" rounded-2 overflow-hidden hover-img">
                            <div class="position-relative">
                                <a href="javascript:void(0)"><img
                                        src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                        class="card-img-top rounded-0" alt="..."></a>
                                <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt=""
                                    class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                    width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Addie Keller">
                            </div>
                            <div class="p-1">
                                <div class=" d-flex mt-1">
                                    <span
                                        class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm  mt-3">Gadget</span>
                                    <span
                                        class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm  mt-3">Gadget</span>
                                </div>
                                <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen
                                    tumbles, gadget-loving Japan goes for secondhand iPhones secondhand iPhones secondhand
                                    iPhones secondhand iPhones</a>
                                <div class="d-flex align-items-center gap-4">
                                    <div
                                        class="badge bg-light-warning text-warning d-flex align-items-center fs-1 ms-auto">
                                        <i class="ti ti-point text-dark"></i>Mon, Jan 16
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class=" rounded-2 overflow-hidden hover-img">
                            <div class="position-relative">
                                <a href="javascript:void(0)"><img
                                        src="{{ asset('admin-assets/images/blog/blog-img6.jpg') }}"
                                        class="card-img-top rounded-0" alt="..."></a>
                                <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt=""
                                    class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                    width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Addie Keller">
                            </div>
                            <div class="p-1">
                                <div class=" d-flex mt-1">
                                    <span
                                        class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm  mt-3">Gadget</span>
                                    <span
                                        class="badge bg-light-danger text-danger fs-1 rounded-1 lh-sm  mt-3">Gadget</span>
                                </div>
                                <a class="d-block my-1 fs-1 text-dark fw-semibold" href="#">As yen
                                    tumbles, gadget-loving Japan goes for secondhand iPhones secondhand iPhones secondhand
                                    iPhones secondhand iPhones</a>
                                <div class="d-flex align-items-center gap-4">
                                    <div
                                        class="badge bg-light-warning text-warning d-flex align-items-center fs-1 ms-auto">
                                        <i class="ti ti-point text-dark"></i>Mon, Jan 16
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    @endsection
