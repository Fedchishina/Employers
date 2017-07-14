<ul>
    @foreach ($employers as $employer)
        <li>
            <span>Full name:{{ $employer->full_name }}; position: {{$employer->position->name}}</span>
            @if( isset($employer->children) && count($employer->children ) > 0 )
                @include('pages.employers.tree.children', ['employers' => $employer->children, 'test' => 'true'])
            @endif
        </li>
    @endforeach
</ul>