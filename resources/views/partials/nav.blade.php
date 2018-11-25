<div class="links">
    <a href="/">Home</a>
    
    @foreach($pages as $page)
        <a href="{{ $page->slug }}">{{ $page->title }}</a>
    @endforeach
</div>