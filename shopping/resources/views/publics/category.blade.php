<ul class="menu level1">
    @foreach($datas as $item)
        <li class="item parent">
            <a href="#" class="hasicon" title="SIDE TABLE">
                <img src="{{asset('client_template/img/home/table-lamp.png')}}" alt="img">{{ $item->name }}
            </a>
            @if($item->categoryChildren <> null)
                <div class="dropdown-menu">
                    <div class="menu-items">
                        <ul>
                            @foreach($item->categoryChildren as $subItem)
                            <li class="item">
                                <a href="#" title="Aliquam lobortis">{{ $subItem->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
        </li>
    @endforeach
</ul>