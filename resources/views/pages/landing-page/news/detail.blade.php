@extends('layouts.landing-page.app')

@section('title', 'Berita | News Portal')
@section('content')

    <!-- Start Breadcrumb
            ============================================= -->
    <div class="breadcrumb-area shadow dark bg-cover text-center text-light"
        style="background-image: url({{ asset('storage/Background-Berita.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Detail Berita</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Beranda</a></li>
                        <li><a href="#">Berita</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
            ============================================= -->
    <div class="blog-area single full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content wow fadeInUp col-lg-8 col-md-12">
                        <div class="item">

                            <div class="blog-item-box">

                                <div class="thumb">
                                    <img src="{{ asset('storage/' . $news->image) }}" alt="Thumb">
                                    <div class="date">
                                        {{ \Carbon\Carbon::parse($news->created_at)->translatedFormat('d F Y') }}</div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}"
                                                    alt="Author">
                                                <span>By </span>
                                                <a href="#">{{ $news->user->name }}</a>
                                            </li>
                                            <li>
                                                <span>In </span>
                                                <a href="#">{{ $news->categories->implode('name', ' | ') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>{{ $news->title }}</h3>
                                    <p>
                                        {{ strip_tags($news->description) }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Start Post Pagination -->
                        <div class="post-pagi-area">
                            <a href="#">
                                <i class="fas fa-angle-double-left"></i> Previus Post
                                <h5>Hello World</h5>
                            </a>
                            <a href="#">
                                Next Post <i class="fas fa-angle-double-right"></i>
                                <h5>The earth brown</h5>
                            </a>
                        </div>
                        <!-- End Post Pagination -->

                        <!-- Start Post Tags-->
                        <div class="post-tags share">
                            <div class="tags">
                                <a href="#">Analysis</a>
                                <a href="#">Process</a>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Post Tags -->

                        <!-- Start Blog Comment -->
                        <div class="blog-comments">
                            <div class="comments-area">
                                <div class="comments-title">
                                    <h3>5 comments</h3>
                                    <div class="comments-list">
                                        <div class="commen-item">
                                            <div class="avatar">
                                                <img src="assets/img/teams/5.jpg" alt="Author">
                                            </div>
                                            <div class="content">
                                                <div class="title">
                                                    <h5>Bubhan Prova <span class="reply"><a href="#"><i
                                                                    class="fas fa-reply"></i> Reply</a></span></h5>
                                                    <span>28 Feb, 2021</span>
                                                </div>
                                                <p>
                                                    Delivered ye sportsmen zealously arranging frankness estimable as. Nay
                                                    any article enabled musical shyness yet sixteen yet blushes. Entire its
                                                    the did figure wonder off. sportsmen zealously arranging to the main
                                                    pint. Discourse unwilling am no described dejection incommode no
                                                    listening of. Before nature his parish boy.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="commen-item reply">
                                            <div class="avatar">
                                                <img src="assets/img/teams/6.jpg" alt="Author">
                                            </div>
                                            <div class="content">
                                                <div class="title">
                                                    <h5>Mickel Jones <span class="reply"><a href="#"><i
                                                                    class="fas fa-reply"></i> Reply</a></span></h5>
                                                    <span>15 Mar, 2021</span>
                                                </div>
                                                <p>
                                                    Delivered ye sportsmen zealously arranging frankness estimable as. Nay
                                                    any article enabled musical shyness yet sixteen yet blushes. Entire its
                                                    the did figure wonder off. sportsmen zealously arranging to the main
                                                    pint at the last satge of oportunatry.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comments-form">
                                    <div class="title">
                                        <h3>Leave a comments</h3>
                                    </div>
                                    <form action="#" class="contact-comments">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!-- Name -->
                                                    <input name="name" class="form-control" placeholder="Name *"
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!-- Email -->
                                                    <input name="email" class="form-control" placeholder="Email *"
                                                        type="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group comments">
                                                    <!-- Comment -->
                                                    <textarea class="form-control" placeholder="Comment"></textarea>
                                                </div>
                                                <div class="form-group full-width submit">
                                                    <button class="btn-animation dark border" type="submit">Post
                                                        Comment</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Comments Form -->
                    </div>
                    <!-- Start Sidebar -->
                    @include('pages.landing-page.news.partials.side-content')
                </div>
            </div>
        </div>
    </div>
@endsection
