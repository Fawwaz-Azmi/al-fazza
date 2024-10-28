<x-layout-adm>
    <x-slot:title>Konten</x-slot:title>
    <x-bg />
    <div class="py-20">
        <div class="xl:container mx-auto px-6 md:px-12">
            <div class="pb-5">
                <a href="{{route('content.create') }}"
                    class="bg-blue-500 hover:bg-blue-600 text-white text-base py-2 px-4 rounded-md">
                    Create
                </a>
            </div>
            <div class="grid gap-6 px-4 sm:px-0 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($contents as $content)
                    <div class="group relative rounded-3xl space-y-6 overflow-hidden">
                        <img class="mx-auto h-[26rem] w-full grayscale object-cover object-top transition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                            src="{{ asset('storage/' . $content->gambar) }}" alt="woman" loading="lazy" width="640"
                            height="805" />
                        <div
                            class="absolute bottom-0 inset-x-0 h-max mt-auto px-3 py-6 bg-gray-800 dark:bg-white translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                            <div>
                                <h4 class="text-xl font-semibold text-center dark:text-gray-700 text-white">
                                    {{Str::limit ($content->title, 15)}}
                                </h4>
                                <span class="block text-sm mt-2 px-3 text-gray-300">{{Str::limit($content->body,50)}}</span>
                            </div>
                            <!-- Tombol CRUD -->
                            <div class="mt-4 flex space-x-2">
                                <a href="{{route('content.edit', $content)}}" class="bg-yellow-500 hover:bg-yellow-600 text-white text-sm py-2 px-4 rounded-md">
                                    Update
                                </a>
                                @include('admin.content.delete')
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <x-bg1 />
</x-layout-adm>