<!-- partials/search-results.blade.php -->
<ul>
    @forelse ($news as $item)
        <li>
            <div class="news-item">
                <a href="{{ route('news.detail', $item->slug) }}">
                    <strong>{{ $item->title }}</strong>
                </a>
            </div>
        </li>
    @empty
        <li>
            <p>No results found.</p>
        </li>
    @endforelse
</ul>
