@props([
    'icon',
    'name',
    'totalEvents',
    ])

<div
    class="p-5 bg-white rounded-2xl relative inline-flex gap-[14px] items-center w-full hover:ring-2 hover:ring-blue-500 transition ease-in-out duration-300 group border-solid border-2 border-black">
    <a href="#!" class="after:absolute after:inset-0">
        <img src="{{$icon}}" alt="tickety-assets">
    </a>
    <div>
        <p class="text-xl text-black font-semibold capitalize">
           {{ $name }}
        </p>
        <p class="mt-[6px] text-sm text-neutral-500">
            {{ number_format($totalEvents) }} events
        </p>
    </div>
    <img src="{{ asset('assets/svgs/ic-arrow-right.svg') }}"
        class="absolute transition duration-300 ease-in-out -translate-x-8 translate-y-1/2 opacity-0 bottom-1/2 right-5 group-hover:translate-x-0 group-hover:opacity-100"
        alt="tickety-assets">
</div>