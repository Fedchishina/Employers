<div class="content">
    <h1>Tree of employers</h1>
    <div class="tree well">
        <ul>
            <li>
                <span><i class="icon-folder-open"></i>Parent</span>
                <ul>
                    <li>
                        <span>Child</span>
                        <ul>
                            <li>
                                <span>Grand Child</span>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span>Child</span>
                        <ul>
                            <li>
                                <span>Grand Child</span>
                            </li>
                            <li>
                                <span>Grand Child</span>
                                <ul>
                                    <li>
                                        <span>Great Grand Child</span>
                                        <ul>
                                            <li>
                                                <span>Great great Grand Child</span>
                                            </li>
                                            <li>
                                                <span>Great great Grand Child</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span><i class="icon-leaf"></i> Great Grand Child</span>
                                    </li>
                                    <li>
                                        <span><i class="icon-leaf"></i> Great Grand Child</span>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span><i class="icon-leaf"></i> Grand Child</span>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <span><i class="icon-folder-open"></i> Parent2</span>
                <ul>
                    <li>
                        <span><i class="icon-leaf"></i> Child</span>
                    </li>
                </ul>
            </li>
        </ul>
        <ul>
            @foreach ($employers as $employer)
                <li>
                    <span>{{ $employer->full_name }}</span>
                    @if( isset( $employer->children ) && count($employer->children ) > 0 )
                        @include('pages.employers.tree.children', ['employers' => $employer->children, 'test' => 'true'])
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>