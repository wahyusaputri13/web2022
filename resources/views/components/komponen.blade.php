<!-- start looping component -->
@foreach(App\Models\Component::where('active', '1')->get() as $component)
@if($component->slug != 'seputar-wonosobo')
<li class="{{ $li }}">
    <a class="{{ $a }}" href="{{ url($component->slug) }}">
        {{ $component->name }}
    </a>
</li>
@endif
@endforeach
<!-- end looping component -->