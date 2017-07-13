<ul>
    @foreach ($employers as $employer)
        <li>
            <span>{{ $employer->full_name }}</span>
            @if( isset($employer->children) && count($employer->children ) > 0 )
                @include('pages.employers.tree.children', ['nodes' => $employer->children, 'test' => 'true'])
            @endif
        </li>
    @endforeach
</ul>