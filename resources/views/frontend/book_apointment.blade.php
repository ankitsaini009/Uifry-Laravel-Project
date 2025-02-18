@include('frontend.layout.header')
<section class="book-appoinment-step1">
    <div class="grid grid-cols-12 overflow-hidden items-center">
        <div class="col-span-6 relative lg:block hidden">
            <img class="w-full rounded-tr-[10px]" src="{{asset('front_assets/public/images/uifry-book-appointment-steps.webp')}}" width="674" height="817" alt="book-appointment">
        </div>
        <div class="lg:col-span-6 col-span-12 lg:pl-[110px] lg:px-0 px-6 py-[70px] form-section">
            <div class="max-w-[440px] lg:mx-0 mx-auto">
                <form action="{{route('store.bookapintment')}}" method="post" id="multiStepForm">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::guard('front_user')->user()->id }}">
                    <div id="step1">
                        <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold lg:text-left text-center">Welcome Back</h2>
                        <p class="text-[#3C4959] text-lg lg:text-left text-center mt-2">Discover a better way of spandings with Uifry.</p>
                        <div class="mt-10">
                            <label for="first_name" class="text-lg text-[#3C4959]">First Name</label>
                            <div class="rounded-lg flex items-center gap-2 bg-[#FFFFFF] w-full mx-auto border border-[#D0D5DD] p-4 mt-2.5">
                                <i class="fa-regular fa-user text-2xl text-[#AFAFAF]"></i>
                                <input type="text" autocomplete="off" id="first_name" name="first_name"
                                    class="text-base outline-none w-full" placeholder="First Name"
                                    required>
                            </div>
                        </div>

                        <div class="lg:mt-6 mt-4">
                            <label for="last_name" class="text-lg text-[#3C4959]">Last name</label>
                            <div class="rounded-lg flex items-center gap-2 bg-[#FFFFFF] w-full mx-auto border border-[#D0D5DD] p-4 mt-2.5">
                                <i class="fa-solid fa-user-tie text-2xl text-[#AFAFAF]"></i>
                                <input type="text" autocomplete="off" id="last_name" name="last_name" class="text-base outline-none w-full" placeholder="Last Name" required>
                            </div>
                        </div>

                        <div class="lg:mt-6 mt-4">
                            <label for="email" class="text-lg text-[#3C4959]">Email</label>
                            <div class="rounded-lg flex items-center gap-2 bg-[#FFFFFF] w-full mx-auto border border-[#D0D5DD] p-4 mt-2.5">
                                <i class="fa-regular fa-envelope text-2xl text-[#AFAFAF]"></i>
                                <input type="text" value="{{ Auth::guard('front_user')->check() ? Auth::guard('front_user')->user()->email : '' }}" autocomplete="off" name="email" id="email" class="text-base outline-none w-full" placeholder="Email" required>
                            </div>
                        </div>

                        <div class="lg:mt-6 mt-4">
                            <label for="phone" class="text-lg text-[#3C4959]">Phone Number</label>
                            <div class="rounded-lg flex items-center gap-2 bg-[#FFFFFF] w-full mx-auto border border-[#D0D5DD] p-4 mt-2.5">
                                <i class="fa-solid fa-phone text-2xl text-[#AFAFAF]"></i>
                                <input id="phone" type="number" autocomplete="off" value="{{ Auth::guard('front_user')->check() ? Auth::guard('front_user')->user()->phone : '' }}" name="phone" class="text-base outline-none w-full" placeholder="Phone No." required>
                            </div>
                        </div>


                    </div>
                    <div id="step2" class="hidden">
                        <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold lg:text-left text-center">Welcome Back</h2>
                        <p class="text-[#3C4959] text-lg lg:text-left text-center mt-2">Discover a better way of spandings with Uifry.</p>

                        <div class="mt-10">
                            <label for="date" class="text-lg text-[#3C4959]">Date</label>
                            <input id="date" type="date" name="appointment_date" class="bg-white outline-none text-[#AFAFAF] mt-2.5 w-full text-base border border-[#D0D5DD] p-4 rounded-lg shadow-sm" value="" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required>
                        </div>

                        <div class="lg:mt-6 mt-4">
                            <label for="time" class="text-lg text-[#3C4959]">Time</label>
                            <input id="time" type="time" name="appointment_time" class="bg-white outline-none text-[#AFAFAF] mt-2.5 w-full text-base border border-[#D0D5DD] p-4 rounded-lg shadow-sm" value="12:00" required>
                        </div>

                        <div class="lg:mt-6 mt-4">
                            <label for="select-service" class="text-lg text-[#3C4959]">Select Services</label>
                            <select id="select-service" name="service" type="text" placeholder="Last name" class="outline-none h-auto bg-white text-[#AFAFAF] mt-2.5 w-full text-base border border-[#D0D5DD] p-4 rounded-lg shadow-sm" required>
                                <option value="">Select Services</option>
                                @foreach($ServiceServices as $Service)
                                <option value="{{$Service->name}}">{{$Service->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="lg:mt-6 mt-4">
                            <label for="message" class="text-lg text-[#3C4959]">Message</label>
                            <textarea id="message" name="message" class="mt-2.5 outline-none resize-none bg-white text-[#667085] h-[120px] w-full text-base border border-[#D0D5DD] p-4 rounded-lg shadow-sm" placeholder="Message"></textarea>
                        </div>

                    </div>
                    <div class="mt-6 flex justify-between gap-5">
                        <button type="button" id="prevBtn" class="w-full lg:py-4 py-3.5 text-white bg-[#1376F8] hover:bg-[#011632] duration-700 rounded-xl text-base hidden">Back</button>
                        <button type="button" id="nextBtn" class="w-full lg:py-4 py-3.5 text-white bg-[#1376F8] hover:bg-[#011632] duration-700 rounded-xl text-base">Next Step</button>
                        <button type="submit" id="submitBtn" class="w-full lg:py-4 py-3.5 text-white bg-[#1376F8] hover:bg-[#011632] duration-700 rounded-xl text-base hidden">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- SweetAlert CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    let currentStep = 1;

    function updateStep() {
        if (currentStep === 1) {
            $("#step1").show();
            $("#step2").hide();
            $("#prevBtn").hide();
            $("#nextBtn").show();
            $("#submitBtn").hide();
        } else {
            $("#step1").hide();
            $("#step2").show();
            $("#prevBtn").show();
            $("#nextBtn").hide();
            $("#submitBtn").show();
        }
    }

    $("#nextBtn").click(() => {
        currentStep++;
        updateStep();
    });

    $("#prevBtn").click(() => {
        currentStep--;
        updateStep();
    });

    // Ensure CSRF token is included in all AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#multiStepForm").submit(function(e) {
        e.preventDefault();

        let formData = $(this).serialize() + "&_token=" + $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: "{{ route('store.bookapintment') }}",
            type: "POST",
            data: formData,
            success: function(response) {
                Swal.fire({
                    title: "Success!",
                    text: "Your appointment has been booked successfully.",
                    icon: "success",
                    confirmButtonText: "OK"
                }).then(() => {
                    window.location.reload(); // Page reload karega
                });

                $("#multiStepForm")[0].reset();
                currentStep = 1;
                updateStep();
            },
            error: function(xhr) {
                Swal.fire({
                    title: "Error!",
                    text: "Something went wrong. Please try again.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        });
    });

    updateStep();
</script>
<script src="{{asset('front_assets/public/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('front_assets/public/js/swiper.min.js')}}"></script>
<script src="{{asset('front_assets/public/js/jquery.min.js')}}"></script>
<script src="{{asset('front_assets/public/js/index.js')}}"></script>
</body>