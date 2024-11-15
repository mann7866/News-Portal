@extends('layouts.landing-page.app')

@section('content')
  <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-cover text-center text-light" style="background-image: url(storage/Background-Berita.jpg);">
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
                                        <a href="blog-single-with-sidebar.html"><img src="{{ asset('storage/' . $item->image) }}" alt="Thumb"></a>
                                        <div class="date">January 25, 2021</div>
                                    </div>
                                    <div class="info">
                                        <div class="meta">
                                           <ul>
                                               <li>
                                                   <img src="{{ asset('admin-assets/images/profile/user-1.jpg') }}" alt="Author">
                                                   <span>By </span>
                                                   <a href="#">{{ $item->user->name }}</a>
                                               </li>
                                               <li>
                                                   <span>In </span>
                                                   <a href="#">{{ $item->categories->implode('name', ' | ') }}</a>
                                               </li>
                                           </ul>
                                        </div>
                                        <h3>
                                            <a href="blog-single-with-sidebar.html">{{ $item->title }}</a>
                                        </h3>
                                        <p>
                                            {{ $item->description }}
                                        </p>
                                        <a class="btn circle btn-theme-effect btn-sm" href="blog-single-with-sidebar.html">Read More</a>
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
                                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar wow fadeInLeft col-lg-4 col-md-12">
                        <aside>
                            <div class="sidebar-item search">
                                <div class="sidebar-info">
                                    <form>
                                        <input type="text" name="text" class="form-control">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Berita Populer</h4>
                                </div>
                                <ul>
                                    @forelse ($popularNews as $item)
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="{{ asset('storage/' . $item->image) }}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="meta-title">
                                                <span class="post-date"><i class="fas fa-clock"></i> 12 Feb, 2020</span>
                                            </div>
                                            <a href="#">Commanded household smallness delivered.</a>
                                        </div>
                                    </li>

                                    @empty
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="{{ asset('no-data.png') }}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <p class="mt-3">Tidak ada data tersedia</p>
                                        </div>
                                    </li>
                                    @endforelse
                                </ul>
                            </div>
                            <div class="sidebar-item category">
                                <div class="title">
                                    <h4>category list</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        @forelse ($categories as $category)

                                        <li>
                                            <a href="#">{{ $category->name }} <span>{{ $category->news_count }}</span></a>
                                        </li>
                                        @empty
                                        <li>
                                            <a href="#">tidak ada data <span>69</span></a>
                                        </li>
                                        @endforelse

                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item gallery">
                                <div class="title">
                                    <h4>Gallery</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/gallery/6.jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/gallery/5.jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/gallery/4.jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/gallery/3.jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/gallery/2.jpg" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/gallery/1.jpg" alt="thumb">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item archives">
                                <div class="title">
                                    <h4>Archives</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li><a href="#">Aug 2020</a></li>
                                        <li><a href="#">Sept 2020</a></li>
                                        <li><a href="#">Nov 2020</a></li>
                                        <li><a href="#">Dec 2020</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item social-sidebar">
                                <div class="title">
                                    <h4>follow us</h4>
                                </div>
                                <div class="sidebar-info">
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
                                                <i class="fab fa-pinterest"></i>
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
                            <div class="sidebar-item tags">
                                <div class="title">
                                    <h4>tags</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li><a href="#">Fashion</a>
                                        </li>
                                        <li><a href="#">Education</a>
                                        </li>
                                        <li><a href="#">nation</a>
                                        </li>
                                        <li><a href="#">study</a>
                                        </li>
                                        <li><a href="#">health</a>
                                        </li>
                                        <li><a href="#">food</a>
                                        </li>
                                        <li><a href="#">travel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
