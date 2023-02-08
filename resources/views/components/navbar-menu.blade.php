@php
$queryMenu = DB::table('front_menus')
->where('menu_parent', '=', '1')
->where('deleted_at', '=', null)
->orderBy('id', 'ASC')
->get();
@endphp
@foreach($queryMenu as $menu)
@php
$menuId = $menu->id;
$subMenus = DB::table('front_menus')
->where('menu_parent', '=' , $menuId)
->where('deleted_at', '=', null)
->orderBy('menu_parent', 'ASC')
->get();
@endphp
@if(count($subMenus) == 0)
<li>
    <a href="{{ url('/page', $menu->menu_url) }}">
        {{ $menu->menu_name }}
    </a>
</li>
@else
<li class="{{ $li }}">
    <a href="#">
        {{ $menu->menu_name }}
    </a>
    <ul class="{{ $ul }}">
        @foreach($subMenus as $sm)
        @php
        $menuId2 = $sm->id;
        $subMenus2 = DB::table('front_menus')
        ->where('menu_parent', '=' , $menuId2)
        ->where('deleted_at', '=', null)
        ->orderBy('menu_parent', 'ASC')
        ->get();
        @endphp
        @if(count($subMenus2) == 0)
        <li>
            <a href="{{ url('page', $sm->menu_url) }}">
                {{ $sm->menu_name }}
            </a>
        </li>
        @else
        <li class="{{ $li }}">
            <a href="#">
                {{$sm->menu_name }}
            </a>
            <ul class="{{ $ul }}">
                @foreach($subMenus2 as $sub3)

                @php
                $menuId3 = $sub3->id;
                $subMenus3 = DB::table('front_menus')
                ->where('menu_parent', '=' , $menuId3)
                ->where('deleted_at', '=', null)
                ->orderBy('menu_parent', 'ASC')
                ->get();
                @endphp

                @if(count($subMenus3) == 0)
                <li>
                    <a href="{{ url('page', $sub3->menu_url) }}">
                        {{ $sub3->menu_name }}
                    </a>
                </li>
                @else
                <li class="{{ $li }}">
                    <a href="#">
                        {{ $sub3->menu_name }}
                    </a>
                    <ul class="{{ $ul }}">
                        @foreach($subMenus3 as $sub4)
                        <li>
                            <a href="{{ url('page', $sub4->menu_url) }}">
                                {{ $sub4->menu_name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                @endif
                @endforeach
            </ul>
        </li>
        @endif
        @endforeach
    </ul>
</li>
@endif
@endforeach

<!-- start looping component -->
@foreach(App\Models\Component::where('active', '1')->get() as $component)
@if($component->slug != 'seputar-wonosobo')
<li class="">
    <a class="" href="{{ url($component->slug) }}">
        {{ $component->name }}
    </a>
</li>
@endif
@endforeach
<!-- end looping component -->