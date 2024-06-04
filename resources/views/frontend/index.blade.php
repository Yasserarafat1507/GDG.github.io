<x-frontend.layout>
  @section('title', 'Landing Page')

  <section id="heroSection" class="container relative max-w-screen-xl pt-10 pb-24">
      <div class="flex flex-wrap items-center justify-between w-full gap-8">
          <div class="w-full max-w-[400px] flex flex-col gap-4">
              <div class="inline-flex gap-[6px] items-center bg-blue-500 rounded-full px-4 py-[6px] w-max">
                  <img src="{{ asset('assets/svgs/ic-champion-cup.svg') }}" alt="tickety-assets">
                  <p class="text-sm font-semibold text-white">
                      Buy one get three tickets
                  </p>
              </div>
              <h1 class="text-[36px] md:text-[48px] text-zinc-950 font-bold">
                  Empower Your
                  <span
                      class="text-white bg-blue-500 inline-flex items-center h-[49px] w-max">Passions</span>
                  Today with <span
                  class="text-white bg-blue-500 inline-flex items-center h-[49px] w-max">GDG</span>
              </h1>
              <p class="text-base leading-8 md:text-lg text-neutral-500">
                  You deserve new experiences that enhance
                  the things you are truly passionate about.
              </p>
              <div class="mt-[14px]">
                  <a href="#eventSection" class="btn-secondary bg-blue-500 text-white">
                      Explore Now
                  </a>
              </div>
          </div>

          <img src="{{ asset('assets/images/GDG/Hero.webp') }}" class="max-w-[584px] max-h-[400px] w-full h-full rounded-lg border-solid border-2 border-black"
              alt="tickety-assets">
      </div>
  </section>

  {{-- Wavy line ornament --}}
  <img src="{{ asset('assets/svgs/wavy-line-1.svg') }}" class="absolute -z-10 md:top-[160px] w-full"
  alt="tickety-assets">

  <section id="eventSection" class="container relative max-w-screen-xl py-10">
      <!-- Section Header -->
      <div class="flex justify-between items-center gap-4 mb-[50px]">
          <h5 class="text-[24px] md:text-[38px] font-bold text-black">
              <span class="text-blue-500">Big</span> Events, <br>
              Coming <span class="text-blue-500">Soon</span>
          </h5>

          @if (!request()->has('all_events'))
        <a href="{{ request()->fullUrlWithQuery(['all_events' => 1]) }}" class="btn-primary bg-blue-500">
          View All
        </a>
      @endif
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">
        @foreach ($events as $event)
        <x-frontend.card-event :cover="$event->thumbnail" :title="$event->name" :category="$event->name" :date="$event->start_time"
        :price="$event->start_from" :description="$event->headline"  :route="route('detail', $event->slug)" :isPopuler="$event->is_populer"/>
        @endforeach
      </div>
  </section>

  <section id="categoriesSection" class="relative pb-[100px] overflow-hidden">
      <div class="container relative max-w-screen-xl py-10">
          <!-- Section Header -->
          <div class="flex justify-between items-center gap-4 mb-[50px]">
              <h5 class="text-[24px] md:text-[38px] font-bold text-black">
                  <span class="text-blue-500">Browse</span> by <br>
                  Top <span class="text-blue-500">Categories</span>
              </h5>

              @if (!request()->has('all_categories'))
        <a href="{{ request()->fullUrlWithQuery(['all_categories' => 1]) }}" class="btn-primary bg-blue-500">
          View All
        </a>
      @endif
          </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-[30px] relative">
                @foreach ($categories as $category)
                    <x-frontend.card-category :name="$category->name" :totalEvents="$category->events_count" :icon="$category->icon ?? asset('assets/svgs/ic-chart-growth.svg')" />
                @endforeach
            </div>
        </div>

      <!-- Wavy line ornament -->
      <img src="{{ asset('assets/svgs/wavy-line-2.svg') }}" class="absolute -z-10 top-[250px] w-full" alt="tickety-assets">
  </section>
</x-frontend.layout>