<x-layout>
  <x-slot:title>Prestasi</x-slot>
    <x-bg />
    <div class="py-20">
      <div class="xl:container mx-auto px-6 md:px-12">
        <div class="mb-16 md:w-2/3 lg:w-1/2">
          <h2 class="mb-4 text-2xl font-bold text-gray-800 dark:text-white md:text-4xl">
            Berbagai prestasi peserta didik
          </h2>
          <p class="text-gray-600 dark:text-gray-300">
            Berikut kami sajikan berbagai prestasi dan capaian peserta didik kami
            yang sukses meraih suatu pencapaian di Sekolah maupun diperlombaan.
          </p>
        </div>
        <div class="grid gap-6 px-4 sm:px-0 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($prestasi as $content)
        <div class="group relative rounded-3xl  space-y-6 overflow-hidden">
            <img
              class="mx-auto h-[26rem] w-full grayscale object-cover object-top ransition duration-500 group-hover:scale-105 group-hover:grayscale-0"
              src="{{asset('storage/' . $content->gambar)}}" alt="woman" loading="lazy" width="640" height="805" />
            <div
              class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
              <div>
                <h4 class="text-xl font-semibold dark:text-gray-700 text-white">{{$content->title}}</h4>
                <span class="block text-sm text-gray-500">{{Str::limit($content->body, 50)}}</span>
              </div>
              <!-- <p class="mt-8 text-gray-300 dark:text-gray-600">casncbabhcb</p> -->
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <x-bg1 />
</x-layout>