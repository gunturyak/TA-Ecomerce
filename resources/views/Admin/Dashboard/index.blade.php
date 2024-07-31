<x-admin>
    <h1>Selamat Datang</h1>
    <h1 style="font-weight:">
        @if (auth()->check())
            {{ auth()->user()->nama}}
    </h1>
    @endif
</x-admin>
