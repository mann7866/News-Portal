@extends('layouts.super-admin.app')
@section('content')
<div class="container-fluid">
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Blog Detail</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted text-decoration-none"
                                    href="index-2.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Blog Details</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{asset('admin-assets/images/breadcrumb/ChatBc.png')}}" alt="" class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card rounded-2 overflow-hidden">
        <div class="position-relative">
            <a href="javascript:void(0)"><img src="{{asset('admin-assets/images/blog/blog-img5.jpg')}}"
                    class="card-img-top rounded-0 object-fit-cover" alt="..." height="440"></a>
            <span
                class="badge bg-white text-dark fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2
                min Read</span>
            <img src="{{asset('admin-assets/images/profile/user-5.jpg')}}" alt=""
                class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40"
                height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Esther Lindsey">
        </div>
        <div class="card-body p-4">
            <span class="badge text-bg-light fs-2 rounded-4 py-1 px-2 lh-sm  mt-3">Lifestyle</span>
            <h2 class="fs-9 fw-semibold my-4">Streaming video way before it was cool, go dark tomorrow</h2>
            <div class="d-flex align-items-center gap-4">
                <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>2252</div>
                <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>3</div>
                <div class="d-flex align-items-center fs-2 ms-auto"><i class="ti ti-point text-dark"></i>Sat, Jan 14
                </div>
            </div>
        </div>
        <div class="card-body border-top p-4">
            <h2 class="fs-8 fw-semibold mb-3">Title of the paragraph</h2>
            <p class="mb-3">
                But you cannot figure out what it is or what it can do. MTA web directory is the simplest way in which
                one can bid on a link, or a few links if they wish to do so. The link
                directory on MTA displays all of the links it currently has, and does so in alphabetical order, which
                makes it much easier for someone to find what they are looking for if it is
                something specific and they do not want to go through all the other sites and links as well. It allows
                you to start your bid at the bottom and slowly work your way to the top
                of the list.
            </p>
            <p class="mb-3">
                Gigure out what it is or what it can do. MTA web directory is the simplest way in which one can bid on a
                link, or a few links if they wish to do so. The link directory on MTA
                displays all of the links it currently has, and does so in alphabetical order, which makes it much
                easier for someone to find what they are looking for if it is something
                specific and they do not want to go through all the other sites and links as well. It allows you to
                start your bid at the bottom and slowly work your way to the top of the
            </p>
            <p class="text-dark mb-0"><strong>This is strong text.</strong></p>
            <p class="mb-0"><em>This is italic text.</em></p>
            <div class="border-top mt-7 pt-7">
                <h3 class="fw-semibold">Unorder list.</h3>
                <ul class="my-3 ps-4 text-dark">
                    <li class="d-flex align-items-center gap-2"><span class="p-1 bg-dark rounded-circle"></span> Gigure
                        out what it is or</li>
                    <li class="d-flex align-items-center gap-2"><span class="p-1 bg-dark rounded-circle"></span> The
                        links it currently</li>
                    <li class="d-flex align-items-center gap-2"><span class="p-1 bg-dark rounded-circle"></span> It
                        allows you to start your bid</li>
                    <li class="d-flex align-items-center gap-2"><span class="p-1 bg-dark rounded-circle"></span> Gigure
                        out what it is or</li>
                    <li class="d-flex align-items-center gap-2"><span class="p-1 bg-dark rounded-circle"></span> The
                        links it currently</li>
                    <li class="d-flex align-items-center gap-2"><span class="p-1 bg-dark rounded-circle"></span> It
                        allows you to start your bid</li>
                </ul>
            </div>
            <div class="border-top mt-7 pt-7">
                <h3 class="fw-semibold">Order list.</h3>
                <ol class="my-3 text-dark">
                    <li>Gigure out what it is or</li>
                    <li>The links it currently</li>
                    <li>It allows you to start your bid</li>
                    <li>Gigure out what it is or</li>
                    <li>The links it currently</li>
                    <li>It allows you to start your bid</li>
                </ol>
            </div>
            <div class="border-top mt-7 pt-7">
                <h3 class="fw-semibold">Quotes</h3>
                <div class="p-3">
                    <h6 class="mb-0 fs-4 fw-semibold"><i class="ti ti-quote fs-7"></i>Life is short, Smile while you
                        still have teeth!</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="mb-4 fw-semibold">Post Comments</h4>
            <form>
                <textarea class="form-control mb-4" rows="5"></textarea>
                <button class="btn btn-primary">Post Comment</button>
            </form>
            <div class="d-flex align-items-center gap-3 mb-4 mt-7 pt-8">
                <h4 class="mb-0 fw-semibold">Comments</h4>
                <span class="badge bg-light-primary text-primary fs-4 fw-semibold px-6 py-8 rounded">3</span>
            </div>
            <div class="position-relative">
                <div class="p-4 rounded-2 bg-light mb-3">
                    <div class="d-flex align-items-center gap-3">
                        <img src="{{asset('admin-assets/images/profile/user-2.jpg')}}" alt="" class="rounded-circle"
                            width="33" height="33">
                        <h6 class="fw-semibold mb-0 fs-4">Don Russell</h6>
                        <span class="p-1 bg-light-dark rounded-circle d-inline-block"></span>
                    </div>
                    <p class="my-3">Es do ujurus nejson imju azgudpi toceztep ji cocicoci bosawrop korze ta.
                        Casetlu udumej umocu wanaro webmos ijafa ud muli amja softoj ma pijum.
                    </p>
                    <div class="d-flex align-items-center gap-2">
                        <a class="text-white d-flex align-items-center justify-content-center bg-secondary p-2 fs-4 rounded-circle"
                            href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-title="Reply">
                            <i class="ti ti-arrow-back-up"></i>
                        </a>
                    </div>
                </div>
                <div class="p-4 rounded-2 bg-light mb-3">
                    <div class="d-flex align-items-center gap-3">
                        <img src="{{asset('admin-assets/images/profile/user-3.jpg')}}" alt="" class="rounded-circle"
                            width="33" height="33">
                        <h6 class="fw-semibold mb-0 fs-4">Cordelia Potter</h6>
                        <span class="p-1 bg-light-dark rounded-circle d-inline-block"></span>
                    </div>
                        etdebluj.
                        Obdevo bo fa siztes laobeir agoemugo rut sapaviw mulati do re dabelul wo tumnik wih mu.
                    </p>
                    <div class="d-flex align-items-center gap-2">
                        <a class="text-white d-flex align-items-center justify-content-center bg-secondary p-2 fs-4 rounded-circle"
                            href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-title="Reply">
                            <i class="ti ti-arrow-back-up"></i>
                        </a>
                    </div>
                </div>
                <div class="p-4 rounded-2 bg-light mb-3 ms-7">
                    <div class="d-flex align-items-center gap-3">
                        <img src="{{asset('admin-assets/images/profile/user-3.jpg')}}" alt="" class="rounded-circle"
                            width="40" height="40">
                        <h6 class="fw-semibold mb-0 fs-4">Irene Hanson</h6>
                        <span class="p-1 bg-light-dark rounded-circle d-inline-block"></span>
                    </div>
                    <p class="my-3">Uborofgic be rof lom sedge vapozi ohoinu nutremcuc ro ko atmeg anrov git ve vuj
                        ki teb or.
                        Lohi hafa faddegon horoz ebema kew idful ducam nev rol iga wikkobsu sucdu gud.
                    </p>
                </div>
                <div class="p-4 rounded-2 bg-light">
                    <div class="d-flex align-items-center gap-3">
                        <img src="{{asset('admin-assets/images/profile/user-4.jpg')}}" alt="" class="rounded-circle"
                            width="33" height="33">
                        <h6 class="fw-semibold mb-0 fs-4">Seth Ortiz</h6>
                        <span class="p-1 bg-light-dark rounded-circle d-inline-block"></span>
                    </div>
                    <p class="my-3">Icme rasejmat ciwo ifekemug owoca vicoz ukikitus famiftat nuk eroewu za upe.
                        Pobrikvup kivofvac tuba ot veh ozoab sa gesi hahoniha hop burbip volo hufotobo di uted vojoamu.
                    </p>
                    <div class="d-flex align-items-center gap-2">
                        <a class="text-white d-flex align-items-center justify-content-center bg-secondary p-2 fs-4 rounded-circle"
                            href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-title="Reply">
                            <i class="ti ti-arrow-back-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
