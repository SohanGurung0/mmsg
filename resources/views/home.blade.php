<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>
    <div class="max-w-2xl mx-auto">
        @foreach($mmsgs as $mmsg)
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <div>
                    <div class="font-semibold">{{ $mmsg['author'] }}</div>
                    <div class="mt-1">{{ $mmsg['message'] }}</div>
                    <div class="text-sm text-gray-500 mt-2">{{ $mmsg['time'] }}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>
