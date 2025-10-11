        <div class="lg:pt-[50px] pt-12">
            <div class="flex justify-center">
                <div class="max-w-4xl">
                    <h1 class="mb-2 mt-[10px] text-3xl lg:text-6xl font-medium text-center leading-tight text-black">
                        Informasi Kontak
                    </h1>
                </div>
            </div>
        </div>

        <div>

            <div class="max-w-7xl mx-auto px-4 sm:px-0 md:px-8 2xl:px-0 pt-[45px] pb-[100px]">
                <div class="flex flex-wrap gap-8">
                    <!-- MAP -->
                    <div class="w-full md:basis-[calc(50%-1rem)]">
                        <div class="h-[300px] rounded-3xl overflow-hidden shadow-lg">
                            @if (!empty($kontak->maps))
                                {!! $kontak->maps !!}
                            @else
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63834.043238042555!2d99.78460018618!3d0.5600730999321379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302a5188270a4fc1%3A0xf3de2fab3d4c75e9!2sHuta%20Godang%2C%20Kec.%20Ulu%20Pungkut%2C%20Kabupaten%20Mandailing%20Natal%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1760173509560!5m2!1sid!2sid"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            @endif
                        </div>
                    </div>

                    <!-- KONTAK -->
                    <div class="w-full md:basis-[calc(50%-1rem)]">
                        <div class="rounded-3xl shadow-lg bg-[#D9D9D9] p-8 space-y-6">
                            <!-- Lokasi -->
                            <div class="flex items-start space-x-3">
                                <img src="{{ URL('images/map.svg') }}" alt="icon" class="lg:w-8 lg:h-8 w-7 h-7">
                                <div>
                                    <div class="font-semibold text-black">Lokasi:</div>
                                    <p class="text-black">{{ $kontak->lokasi ?? 'Lokasi belum tersedia' }}</p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex items-start space-x-3">
                                <img src="{{ URL('images/email.svg') }}" alt="icon" class="lg:w-8 lg:h-8 w-7 h-7">
                                <div>
                                    <div class="font-semibold text-black">Email:</div>
                                    <p class="text-black">{{ $kontak->email ?? 'Email belum tersedia' }}</p>
                                </div>
                            </div>

                            <!-- WhatsApp -->
                            <div class="flex items-start space-x-3">
                                <img src="{{ URL('images/phone.svg') }}" alt="icon" class="lg:w-8 lg:h-8 w-7 h-7">
                                <div>
                                    <div class="font-semibold text-black">WhatsApp:</div>
                                    <p class="text-black">{{ $kontak->whatsapp ?? 'Nomor WhatsApp belum tersedia' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
