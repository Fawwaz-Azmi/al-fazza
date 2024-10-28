<x-layout>
  <x-slot:title>{{ $title }}</x-slot>
  <!-- Hero Section -->
  <div class="relative isolate px-6 pt-10 lg:px-8"></div>
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="grid lg:grid-cols-2 py-2">
      <div class="lg:col-span-1 m-auto">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Data to enrich your online business</h1>
        <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
        <div class="mt-10 flex items-left justify-start gap-x-6">
          <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
        </div>
      </div>
      <div class="lg:col-span-1 text-center">
        <img src="{{asset('img/Childrenn.png')}}">
      </div>
    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
</div>

<!-- Statistik -->
<!-- <div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
      <div class="mx-auto flex max-w-xs flex-col gap-y-4">
        <dt class="text-base leading-7 text-gray-600">Siswa/i SD</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">44</dd>
      </div>
      <div class="mx-auto flex max-w-xs flex-col gap-y-4">
        <dt class="text-base leading-7 text-gray-600">Assets under holding</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">$119 trillion</dd>
      </div>
      <div class="mx-auto flex max-w-xs flex-col gap-y-4">
        <dt class="text-base leading-7 text-gray-600">New users annually</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">46,000</dd>
      </div>
    </dl>
  </div>
</div> -->

<!-- Price List -->
<div class="xl:container m-auto px-6 py-20 md:px-12 lg:px-20">
  <div class="m-auto text-center lg:w-7/12">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white md:text-4xl">
      Al-Fazza Blocks subscription gives you access to our components and more.
    </h2>
  </div>
  <div class="mt-12 grid items-center gap-6 md:grid-cols-2 lg:flex lg:space-x-8">
    <div class="group relative md:col-span-1 lg:w-[32%]">
      <div
        aria-hidden="true"
        class="absolute top-0 h-full w-full rounded-3xl border border-gray-100 dark:border-gray-700 bg-white dark:bg-gray-800 shadow-2xl shadow-gray-600/10 dark:shadow-none transition duration-500 group-hover:scale-105 lg:group-hover:scale-110"
      ></div>
      <div class="relative space-y-8 p-8">
        <h3 class="text-center text-3xl font-semibold text-gray-700 dark:text-white">Monthly</h3>
        <div class="relative flex justify-around">
          <div class="flex">
            <span class="-ml-24 mt-2 text-3xl font-bold text-primary">Rp</span>
            <span class="leading-0 text-8xl font-bold text-gray-800 dark:text-white">50</span>
          </div>
          <span class="absolute right-9 bottom-2 text-xl font-bold text-primary"
            >/ Month</span>
        </div>
        <ul role="list" class="m-auto w-max space-y-4 pb-6 text-gray-600 dark:text-gray-300">
          <li class="space-x-2">
            <span class="font-semibold text-primary">&check;</span>
            <span>First premium advantage</span>
          </li>
          <li class="space-x-2">
            <span class="font-semibold text-primary">&check;</span>
            <span>Second premium advantage</span>
          </li>
          <li class="space-x-2">
            <span class="font-semibold text-primary">&check;</span>
            <span>Third advantage</span>
          </li>
        </ul>
        <button class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
          <span class="relative text-base font-semibold text-white dark:text-dark">Start plan</span>
        </button>
      </div>
    </div>

    <div class="group relative row-start-1 md:col-span-2 lg:w-[36%]">
      <div
        aria-hidden="true"
        class="absolute top-0 h-full w-full rounded-3xl border border-gray-100 dark:border-gray-700 bg-white dark:bg-gray-800 shadow-2xl shadow-gray-600/10 dark:shadow-none transition duration-500 group-hover:scale-105 lg:group-hover:scale-110"
      ></div>
      <div class="relative space-y-8 p-8">
        <h3 class="text-center text-3xl font-semibold text-gray-700 dark:text-white">Annual</h3>
        <div class="overflow-hidden">
          <div class="-mr-20 flex items-end justify-center">
            <div class="flex">
              <span class="-ml-6 mt-2 text-3xl font-bold text-primary">$</span>
              <span class="leading-0 text-8xl font-bold text-gray-800 dark:text-white">15</span>
            </div>
            <div class="mb-2">
              <span class="block text-xl font-bold text-gray-500 dark:text-gray-400">.56</span>
              <span class="block text-xl font-bold text-primary">/ Month</span>
            </div>
          </div>
          <div class="text-center text-2xl font-medium">
            <span class="text-gray-400 line-through">$234</span>
            <span class="font-semibold text-gray-700 dark:text-white">$190</span>
          </div>
          <span class="block text-center text-xs uppercase text-primary">BILLED YEARLY</span>
          <span
            class="m-auto mt-4 block w-max rounded-full bg-gradient-to-r from-yellow-300 to-pink-300 px-4 py-1 text-sm font-medium text-yellow-900"
            >1 Discount applied</span
          >
        </div>
        <ul role="list" class="m-auto w-max space-y-4 pb-6 text-gray-600 dark:text-gray-300">
          <li class="space-x-2">
            <span class="font-semibold text-primary">&check;</span>
            <span>First premium advantage</span>
          </li>
          <li class="space-x-2">
            <span class="font-semibold text-primary">&check;</span>
            <span>Second premium advantage</span>
          </li>
          <li class="space-x-2">
            <span class="font-semibold text-primary">&check;</span>
            <span>Third advantage</span>
          </li>
          <li class="space-x-2">
            <span class="font-semibold text-primary">&check;</span>
            <span>Fourth organizations advantage</span>
          </li>
        </ul>
        <button class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
          <span class="relative text-base font-semibold text-white dark:text-dark">Start plan</span>
        </button>
      </div>
    </div>

    <div class="group relative md:col-span-1 lg:w-[32%]">
      <div
        aria-hidden="true"
        class="absolute top-0 h-full w-full rounded-3xl border border-gray-100 dark:border-gray-700 bg-white dark:bg-gray-800 shadow-2xl shadow-gray-600/10 dark:shadow-none transition duration-500 group-hover:scale-105 lg:group-hover:scale-110"
      ></div>
      <div class="relative space-y-8 p-8">
        <h3 class="text-center text-3xl font-semibold text-gray-700 dark:text-white">Free</h3>
        <div class="relative flex justify-around">
          <div class="flex">
            <span class="-ml-2 mt-2 text-3xl font-bold text-primary">$</span>
            <span class="leading-0 text-8xl font-bold text-gray-800 dark:text-white">0</span>
          </div>
        </div>
        <ul role="list" class="m-auto w-max space-y-4 pb-6 text-gray-600 dark:text-gray-300">
          <li class="space-x-2">
            <span class="font-semibold text-primary">&check;</span>
            <span>First premium advantage</span>
          </li>
          <li class="space-x-2">
            <span class="font-semibold text-primary">&check;</span>
            <span>Second premium advantage</span>
          </li>
          <li class="space-x-2">
            <span class="font-semibold text-primary">&check;</span>
            <span>Third advantage</span>
          </li>
        </ul>
        <button class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:bg-sky-50 before:border before:border-sky-500 dark:before:border-gray-600 dark:before:bg-gray-700 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
          <span class="relative text-base font-semibold text-sky-600 dark:text-white">Get Started</span>
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Testimoni -->

<div class="bg-gray-50 dark:bg-gray-900 py-16">
  <div class="container m-auto text-gray-600 dark:text-gray-300 md:px-12 xl:px-6">
    <div class="mb-12 space-y-4 px-6 md:px-0">
      <h2 class="text-center text-2xl font-bold text-gray-800 dark:text-white md:text-4xl">
        We have some fans.
      </h2>
      <p class="text-center">
        We don't like to brag, but we don't mind letting our customers do it for us. <br />
        Here are a few nice things folks have said about our themes over the years.
      </p>
    </div>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper pb-8">
        <div class="swiper-slide !bg-transparent px-6 md:px-0">
          <div class="p-2 border border-gray-100 dark:border-gray-700 rounded-3xl bg-white dark:bg-gray-800 shadow-2xl shadow-gray-600/10 dark:shadow-none md:mx-auto lg:w-10/12 xl:w-8/12">
            <div class="grid md:grid-cols-5">
              <img
                src="images/card.webp"
                class="md:col-span-2 h-full w-full rounded-2xl object-cover"
                alt="image"
                width="640"
                height="422"
                loading="lazy"
              />
              <div class="md:col-span-3 mx-auto space-y-6 p-6 text-center sm:p-8">
                <div class="mx-auto w-24">
                  <img
                    src="images/clients/client-4.png"
                    alt="company logo"
                    height="400"
                    width="142"
                    loading="lazy"
                  />
                </div>
                <p>
                  <span class="font-serif">"</span> Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto
                  aliquam consequatur repellat provident, omnis ut, sapiente voluptates
                  veritatis cum deleniti repudiandae ad doloribus.
                  <span class="font-serif">"</span>
                </p>
                <h6 class="text-lg font-semibold leading-none">John Doe</h6>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide !bg-transparent px-6 md:px-0">
          <div class="p-2 border border-gray-100 dark:border-gray-700 rounded-3xl bg-white dark:bg-gray-800 shadow-2xl shadow-gray-600/10 dark:shadow-none md:mx-auto lg:w-10/12 xl:w-8/12">
            <div class="grid md:grid-cols-5">
              <img
                src="images/card3.webp"
                class="md:col-span-2 h-full w-full rounded-2xl object-cover"
                alt="image"
                width="640"
                height="422"
                loading="lazy"
              />
              <div class="md:col-span-3 mx-auto space-y-6 p-6 text-center sm:p-8">
                <div class="mx-auto w-24">
                  <img
                    src="images/clients/client-3.png"
                    alt="company logo"
                    height="400"
                    width="142"
                    loading="lazy"
                  />
                </div>
                <p>
                  <span class="font-serif">"</span> Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto
                  aliquam consequatur repellat provident, omnis ut, sapiente voluptates
                  veritatis cum deleniti repudiandae ad doloribus.
                  <span class="font-serif">"</span>
                </p>
                <h6 class="text-lg font-semibold leading-none">John Doe</h6>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide !bg-transparent px-6 md:px-0">
          <div class="p-2 border border-gray-100 dark:border-gray-700 rounded-3xl bg-white dark:bg-gray-800 shadow-2xl shadow-gray-600/10 dark:shadow-none md:mx-auto lg:w-10/12 xl:w-8/12">
            <div class="grid md:grid-cols-5">
              <img
                src="images/card2.webp"
                class="md:col-span-2 h-full w-full rounded-2xl object-cover"
                alt="image"
                width="640"
                height="422"
                loading="lazy"
              />
              <div class="md:col-span-3 mx-auto space-y-6 p-6 text-center sm:p-8">
                <div class="mx-auto w-24">
                  <img
                    src="images/clients/client-8.png"
                    alt="company logo"
                    height="400"
                    width="142"
                    loading="lazy"
                  />
                </div>
                <p>
                  <span class="font-serif">"</span> Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto
                  aliquam consequatur repellat provident, omnis ut, sapiente voluptates
                  veritatis cum deleniti repudiandae ad doloribus.
                  <span class="font-serif">"</span>
                </p>
                <h6 class="text-lg font-semibold leading-none">John Doe</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>

</x-layout>


<!-- <div class="hidden sm:mb-8 sm:flex sm:justify-center">
  <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
    Announcing our next round of funding. <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
  </div>
</div> -->