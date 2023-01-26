<!-- start looping component -->
@foreach(App\Models\Component::where('active', '1')->get() as $component)
@if($component->slug != 'seputar-wonosobo')
<li>
    <a class="nav-link scrollto" href="{{ url($component->slug) }}">
        {{ $component->name }}
    </a>
</li>
@endif
@endforeach
<!-- end looping component -->