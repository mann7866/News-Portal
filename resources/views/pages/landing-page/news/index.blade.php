@extends('layouts.landing-page.app')

@section('title', 'Berita | News Portal')
@section('content')
    <!-- Start Breadcrumb
                ============================================= -->
    <div class="breadcrumb-area shadow dark bg-cover text-center text-light"
        style="background-image: url(storage/Background-Berita.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Berita</h1>
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
    <div class="blog-area right-sidebar full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content col-lg-8 col-md-12">
                        <div class="blog-item-box">
                            <!-- Single Item -->
                            @forelse ($news as $item)
                                <div class="single-item">
                                    <div class="item">
                                        <div class="thumb">
                                            <a href="blog-single-with-sidebar.html"><img
                                                    src="{{ asset('storage/' . $item->image) }}" alt="Thumb"></a>
                                            <div class="date">
                                                {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="meta">
                                                <ul>
                                                    <li>
                                                        <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}"
                                                            alt="Author">
                                                        <span>By </span>
                                                        <a href="#">{{ $item->user->name }}</a>
                                                    </li>
                                                    <li>
                                                        <span>In </span>
                                                        <a href="#">
                                                            {{ $item->categories->implode('name', ' | ') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3>
                                                <a href="{{ route('news.detail', $item->slug) }}">{{ $item->title }}</a>
                                            </h3>
                                            <p>
                                                {{ $item->description }}
                                            </p>
                                            <a class="btn circle btn-theme-effect btn-sm"
                                                href="{{ route('news.detail', $item->slug) }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>

                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area text-center">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $news->previousPageUrl() }}">
                                                <i class="fas fa-angle-double-left"></i>
                                            </a>
                                        </li>

                                        @for ($i = 1; $i <= $news->lastPage(); $i++)
                                            <li class="page-item {{ $news->currentPage() == $i ? 'active' : '' }}">
                                                <a class="page-link" href="{{ $news->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor

                                        <li class="page-item">
                                            <a class="page-link" href="{{ $news->nextPageUrl() }}">
                                                <i class="fas fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                    <!-- Start Sidebar -->
                    @include('pages.landing-page.news.partials.side-content')
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
