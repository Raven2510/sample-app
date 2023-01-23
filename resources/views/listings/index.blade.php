<x-layout>
@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@if(count($listings) == 0)
<h3>
    No lists Found.
</h3>
@else
@foreach($listings as $list)
    <x-list-card :list="$list" />

@endforeach
@endunless

</div>
</x-layout>