@include('frontend.layout.header')

<section class="my-account pb-10 mt-5">
    <div class="container">
        <div class="grid grid-cols-12 lg:gap-5 gap-y-10">
            @include('frontend.layout.profile_sidebar')

            <div class="col-span-12 md:col-span-8">
                <div>
                    <h2 class="lg:text-3xl text-2xl font-semibold text-[#011632]">Current And Upcoming Appointment</h2>
                    <div class="lg:overflow-x-visible overflow-x-auto border lg:border-transparent border-[#DDDDDD] lg:mt-7 mt-5 ">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-[#FFFFFF] text-left text-xs font-semibold text-[#011632] text-nowrap">
                                    <th class="py-5 px-5">DATE AND TIME</th>
                                    <th class="py-5 px-5">NAME</th>
                                    <th class="py-5 px-5">SERVICES</th>
                                    <th class="py-5 px-5">STATUS</th>
                                    <th class="py-5 px-5">PHONE NO.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Apointmentments as $appointment)
                                <tr class="border border-[#DDDDDD] text-[#011632] text-sm lg:text-nowrap">
                                    <td class="py-5 px-5 w-full">
                                        {{ \Carbon\Carbon::parse($appointment->date)->format('d/m/Y') }} - {{ $appointment->time }}
                                    </td>
                                    <td class="py-5 px-5 w-full">{{ $appointment->name }}</td>
                                    <td class="py-5 px-5 w-full">{{ $appointment->sevrices }}</td>
                                    <td class="py-5 px-5 w-full @if($appointment->status == 'Coming Appointment') text-[#1376F8] @endif">
                                        {{ $appointment->status }}
                                    </td>
                                    <td class="py-5 px-5 w-full">{{ $appointment->phone_number }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-12">
                    <h2 class="lg:text-3xl text-2xl font-semibold text-[#011632]">Past Appointment</h2>
                    <div class="lg:overflow-x-visible overflow-x-auto border lg:border-transparent border-[#DDDDDD] lg:mt-7 mt-5">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-[#FFFFFF] text-left text-xs font-semibold text-[#011632] text-nowrap">
                                    <th class="py-5 px-5">DATE AND TIME</th>
                                    <th class="py-5 px-5">NAME</th>
                                    <th class="py-5 px-5">SERVICES</th>
                                    <th class="py-5 px-5">STATUS</th>
                                    <th class="py-5 px-5">PHONE NO.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Apointmentments_COMPLETE as $appointment)
                                @if($appointment->status == 'Completed')
                                <tr class="border border-[#DDDDDD] text-[#011632] text-sm lg:text-nowrap">
                                    <td class="py-5 px-5 w-full">
                                        {{ \Carbon\Carbon::parse($appointment->date)->format('d/m/Y') }} - {{ $appointment->time }}
                                    </td>
                                    <td class="py-5 px-5 w-full">{{ $appointment->name }}</td>
                                    <td class="py-5 px-5 w-full">{{ $appointment->sevrices }}</td>
                                    <td class="py-5 px-5 w-full">Completed</td>
                                    <td class="py-5 px-5 w-full">{{ $appointment->phone_number }}</td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('front_assets/public/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('front_assets/public/js/swiper.min.js')}}"></script>
<script src="{{asset('front_assets/public/js/jquery.min.js')}}"></script>
<script src="{{asset('front_assets/public/js/index.js')}}"></script>
</body>