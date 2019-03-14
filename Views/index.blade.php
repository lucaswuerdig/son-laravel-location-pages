<h1>{{ trans('Page::pages.title') }}</h1>
<ul>
    @foreach($pages AS $p)
        <li>
            {{ $p->title }}
        </li>
    @endforeach
</ul>