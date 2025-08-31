<x-frontend-layout>
    <section>
        <div class="container py-10 text-center space-y-4">
            <h1 class="text-3xl font-bold">Register your business</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae voluptatem rem expedita facere doloremque
                ullam quas blanditiis accusantium tempora. Voluptatem tenetur soluta id ratione fuga culpa, facere autem
                dolorum eligendi?</p>
            <div>
                <button data-modal-target="request-modal" data-modal-toggle="request-modal" type="button"
                    class="btn-primary cursor-pointer">Send Request</button>
            </div>

            <!-- Main modal -->
            <div id="request-modal" tabindex="-1" aria-hidden="true"
                class="hidden text-left overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                            <h3>Sent Request</h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="request-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <form action="{{ route('seller_store') }}" method="post">
                                @csrf
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="name" class="block mb-2 text-sm font-medium">
                                            Your Name <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" id="name" name="name" required class="w-full">
                                    </div>
                                    <div>
                                        <label for="email" class="block mb-2 text-sm font-medium">
                                            Your Email <span class="text-red-500">*</span>
                                        </label>
                                        <input type="email" id="email" name="email" required class="w-full">
                                    </div>
                                    <div>
                                        <label for="contact_number" class="block mb-2 text-sm font-medium">
                                            Contact Number <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" id="contact_number" name="contact_number" required
                                            class="w-full">
                                    </div>
                                    <div>
                                        <label for="address" class="block mb-2 text-sm font-medium">
                                            Shop Address <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" id="address" name="address" required class="w-full">
                                    </div>
                                    <div>
                                        <label for="pan_number" class="block mb-2 text-sm font-medium">
                                            Pan Number <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" id="pan_number" name="pan_number" required class="w-full">
                                    </div>
                                    <div>
                                        <label for="reg_number" class="block mb-2 text-sm font-medium">
                                            Registration Number <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" id="reg_no" name="reg_number" required class="w-full">
                                    </div>
                                    <div class="col-span-2">
                                        <button type="submit" class="btn-primary w-full">Send</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container py-10">
                <h1 class="text-3xl font-bold text-center">Get Featured Product with limited time offer</h1>
            <div class="grid grid-cols-3 gap-4 py-5">
                @foreach ($offer_products as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <div class="container py-10 space-y-4 flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-center">About Us</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis quisquam recusandae omnis
                    labore, molestias laborum eos! Odio quo sint, rerum, deserunt laboriosam optio nesciunt ratione
                    voluptatem vero suscipit nisi debitis?
                </p>
                <a href="{{ route('about') }}">Read More</a>
            </div>
            <div>
                <img src="https://media.istockphoto.com/id/1221653457/photo/close-up-of-a-touchscreen-social-media-concept.jpg?s=612x612&w=0&k=20&c=thcgiLGWFoRNMrMiDXDGUGPy50i9jhXhiHSy-vokyqI="
                    alt="">
            </div>

        </div>
    </section>
</x-frontend-layout>
