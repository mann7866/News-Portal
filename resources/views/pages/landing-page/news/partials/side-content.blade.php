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
                                <span class="post-date"><i class="fas fa-clock"></i>
                                    {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</span>
                            </div>
                            <a href="{{ route('news.detail', $item->slug) }}">{{ Str::limit($item->title, 40) }}</a>
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
                            <a href="#">{{ $category->name }}
                                <span>{{ $category->news_count }}</span></a>
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
                    @forelse ($galleries as $gallery)
                        <li>
                            <a href="{{ route('news.detail', $gallery->slug) }}">
                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="thumb">
                            </a>
                        </li>
                    @empty
                        <li>
                            <img src="{{ asset('no-data.png') }}" alt="thumb">
                            <p class="text-center">Tidak ada data tersedia.</p>
                        </li>
                    @endforelse
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
