@extends('front.pesonafm.layouts.app')
@section('content')
<div class="container mx-auto py-1">

    <div class="flex mt-10">
        <div class="basis-1/2 text-right">
            <a href="{{url('/')}}" class="sm:text-4xl font-bold">
                <h1 class="font-bold text-right"> Chart</h1>
        </div>
        <div class="basis-1/2">
            <span class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">Music</span>
            </a>
        </div>
    </div>

    <div class="mt-10">
        <a class="bg-red-500 px-10 py-2 w-20 h-30  text-white text-center rounded-lg" href="{{ url('/') }}">Back</a>
    </div>

    <section id="music" class="mb-32"">
        <table class="table-auto mx-auto mt-10">
            <thead class="text-xl uppercase bg-black">
                <tr>
                    <th class="px-4 py-2 col-span-2 text-center"> Ranking </th>
                    <th class="px-4 py-2 col-span-4 text-center"> Song </th>
                    <th class="px-4 py-2 col-span-2 text-center"> Years </th>
                </tr>
            </thead>
            <tbody>
                @foreach($music as $m)
                <tr class="bg-slate-600 capitalize">
                    <td class="px-4 py-2 text-center col-span-2 row-span-2"> {{ $m->ranking }} </td>
                    <td class="px-4 py-2 col-span-4"> <a target="_blank" rel="noopener noreferrer" href="{{ $m->artist }}">{{ $m->song }}</a> </td>
                    <td class="px-4 py-2 text-center col-span-2 row-span-2"> {{ $m->years }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

</div>
@endsection
@push('after-script')
@endpush