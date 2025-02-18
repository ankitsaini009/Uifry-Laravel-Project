@extends('frontend.layout.main')
@section('manage_front')
<section class="contact lg:pt-8 pt-[60px]">
  <div class="container mx-auto">
    <h1 class="lg:text-[62px] text-5xl font-semibold text-[#011632] tracking-[-2px] md:text-center"><span class="heading-after">{{$PagesContantManage['hero_section']['hero_section_title']}}</span></h1>
    <p class="text-[#3C4959] text-lg font-normal md:text-center mt-5">{{$PagesContantManage['hero_section']['description']}}</p>
    <div class="grid grid-cols-11 lg:mt-20 mt-[50px] lg:px-[32px] lg:gap-0 gap-y-16">
      <div class="md:col-span-5 col-span-11 md:order-1 order-2 md:pr-2.5 contact-form">
        <div class="map">
          <iframe class="w-full md:h-[311px] h-[450px] lg:rounded-xl rounded-lg border border-[#25B4F8]" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d63387.25157843114!2d39.206766690439174!3d-6.8059102849727315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1stanzania%20bureau%20of%20standards!5e0!3m2!1sen!2sin!4v1738757700827!5m2!1sen!2sin"></iframe>
        </div>
        <div class="mt-5 shadow-xl bg-[#FFFFFF] p-5 rounded-xl flex items-center gap-4">
          <div class="bg-[#1376F8] h-[53px] shrink-0 w-[53px] rounded-full flex items-center justify-center"><img src="{{asset('front_assets/public/images/uifry-time-icon.svg')}}" width="27" height="27" alt="time-icon"></div>
          <div>
            <h4 class="text-[#011632] text-lg font-medium">Office Timings</h4>
            <p class="text-base font-normal text-[#3C4959] mt-0.5 lg:max-w-[300px]">{{$PagesContantManage['home_section']['home_section_office_timings']}}</p>
          </div>
        </div>
        <div class="mt-5 shadow-xl bg-[#FFFFFF] p-5 rounded-xl flex items-center gap-4">
          <div class="bg-[#1376F8] h-[53px] w-[53px] rounded-full flex items-center justify-center"><img src="{{asset('front_assets/public/images/uifry-address-icon.svg')}}" width="27" height="27" alt="address-icon"></div>
          <div>
            <h4 class="text-[#011632] text-lg font-medium">Emai Address</h4>
            <p class="text-base font-normal text-[#3C4959] mt-0.5"><a href="mailto:smile01@gmail.com">{{$PagesContantManage['home_section']['emai_address']}}</a></p>
          </div>
        </div>
        <div class="mt-5 shadow-xl bg-[#FFFFFF] p-5 rounded-xl flex items-center gap-4">
          <div class="bg-[#1376F8] h-[53px] w-[53px] rounded-full flex items-center justify-center"><img src="{{asset('front_assets/public/images/uifry-phone-icon.svg')}}" width="27" height="27" alt="phone-icon"></div>
          <div>
            <h4 class="text-[#011632] text-lg font-medium">Phone Number</h4>
            <p class="text-base font-normal text-[#3C4959] mt-0.5"><a href="tel:0900-78601">{{$PagesContantManage['home_section']['home_section_phone_number']}}</a></p>
          </div>
        </div>
        <div class="mt-5 shadow-xl bg-[#1376F8] p-5 rounded-xl flex items-center justify-center gap-4">
          <div class="bg-[#FFFFFF] h-[53px] w-[53px] rounded-full flex items-center justify-center"><img src="{{asset('front_assets/public/images/uifry-chat-icon.svg')}}" width="32" height="32" alt="chat-icon"></div>
          <div>
            <a href="https://tawk.to/chat/67ad93ef825083258e147398/1ijv0jo6g" target="_blank">
              <h4 class="text-[#FFFFFF] text-lg font-medium">Live chat</h4>
            </a>
          </div>
        </div>
      </div>


      <div class="md:col-span-6 col-span-11 md:order-2 order-1 md:pl-[25px]">
        <div class="lg:border border-[#25B4F8] rounded-xl lg:px-11 lg:pt-10 lg:pb-8">
          @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert" style="color: green;font-size: 15px;">
            {{ session('success') }}
            <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
          </div>
          @endif
          <form action="{{route('contact.store.user')}}" method="POST">
            @csrf
            <div class="grid grid-cols-12 lg:gap-x-8 gap-y-2.5">
              <div class="lg:col-span-6 col-span-12">
                <label for="first-name" class="text-lg text-[#3C4959]">First name</label>
                <input id="first-name" type="text" placeholder="First name" name="fname" class="outline-none h-auto bg-white text-[#667085] mt-2.5 w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm">
                @if ($errors->has('fname'))
                <div class="text-danger" style="color: red;">{{ $errors->first('fname') }}</div>
                @endif
              </div>

              <div class="lg:col-span-6 col-span-12">
                <label for="last-name" class="text-lg text-[#3C4959]">Last name</label>
                <input id="last-name" type="text" placeholder="Last name" name="lname" class="outline-none h-auto bg-white text-[#667085] mt-2.5 w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm">
                @if ($errors->has('lname'))
                <div class="text-danger" style="color: red;">{{ $errors->first('lname') }}</div>
                @endif
              </div>

              <div class="lg:col-span-6 col-span-12">
                <label for="email" class="text-lg text-[#3C4959]">Email</label>
                <input id="email" type="text" placeholder="you@company.com" name="email" class="outline-none h-auto bg-white text-[#667085] mt-2.5 w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm">
                @if ($errors->has('email'))
                <div class="text-danger" style="color: red;">{{ $errors->first('email') }}</div>
                @endif
              </div>

              <div class="lg:col-span-6 col-span-12">
                <label for="number" class="text-lg text-[#3C4959]">Phone number</label>
                <div class="mt-2.5 bg-white flex gap-3 text-sm border border-[#D0D5DD] rounded-lg px-4 p-4">
                  <!-- <select class="w-10 outline-none pl-0 text-[#667085]" name="phone-type" aria-label="select">
                    <option disabled selected>Us</option>
                    <option>india</option>
                    <option>Drama</option>
                    <option>Action</option>
                  </select> -->
                  <input id="number" class="bg-white outline-none text-[#667085] w-full px-0" placeholder=" Enter your phone number" name="phone" type="number">
                </div>
                @if ($errors->has('phone'))
                <div class="text-danger" style="color: red;">{{ $errors->first('phone') }}</div>
                @endif
              </div>

              <div class="lg:col-span-6 col-span-12">
                <label for="date" class="text-lg text-[#3C4959]">Select date</label>
                <input id="date" type="date" class="bg-white outline-none text-[#667085] h-auto mt-2.5 w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm"
                  name="date" min="{{ date('Y-m-d') }}">
              </div>
              @if ($errors->has('date'))
              <div class="text-danger" style="color: red;">{{ $errors->first('date') }}</div>
              @endif

              <div class="lg:col-span-6 col-span-12">
                <label for="time" class="text-lg text-[#3C4959]">Select Time</label>
                <input id="time" type="time" name="time" class="bg-white outline-none text-[#667085] h-auto mt-2.5 w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm" value="12:00">

              </div>
              @if ($errors->has('time'))
              <div class="text-danger" style="color: red;">{{ $errors->first('time') }}</div>
              @endif

              <div class="col-span-12">
                <label for="select-service" class="text-lg text-[#3C4959]">Select Services</label>
                <select name="services" id="select-service" type="text" placeholder="Last name" class="outline-none h-auto bg-white text-[#667085] mt-2.5 w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm">

                  <option value="">Select Services</option>
                  @foreach($ServiceServices as $Service)
                  <option value="{{$Service->name}}">{{$Service->name}}</option>
                  @endforeach
                </select>
                @if ($errors->has('services'))
                <div class="text-danger" style="color: red;">{{ $errors->first('services') }}</div>
                @endif
              </div>

              <div class="col-span-12">
                <label for="message" class="text-lg text-[#3C4959]">Message</label>
                <textarea name="message" id="message" class="outline-none resize-none bg-white text-[#667085] h-[185px] mt-2.5 w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm"></textarea>
                @if ($errors->has('message'))
                <div class="text-danger" style="color: red;">{{ $errors->first('message') }}</div>
                @endif
              </div>

              <div class="col-span-12 text-center lg:mt-7.5 mt-2">
                <button type="submit" class="bg-[#1376F8] hover:bg-[#011632] duration-700 text-white font-semibold text-base rounded-[10px] lg:w-[87%] w-auto lg:py-3.5 py-3 px-8">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>


<section class="ask-questions lg:pt-[120px] pt-[70px] lg:pb-[100px] pb-[70px]">
  <div class="container mx-auto">
    <div class="md:text-center">
      <h2 class="lg:text-[42px] text-4xl text-[#011632] font-semibold inline-block">
        <span class="heading-border">Frequently Ask Question</span>
      </h2>
      <p class="text-[#3C4959] lg:text-lg text-base lg:mt-5 mt-3 font-normal lg:text-center max-w-[440px] mx-auto">We use only the best quality materials on the market in order to provide the best products to our patients. <span class="lg:hidden inline">So don’t worry about anything and book yourself.</span></p>
    </div>
    <div class="lg:max-w-[625px] md:max-w-[500px] mx-auto lg:mt-14 mt-8">

      @foreach($Faqs as $index => $Faq)
      <div class="border-b border-b-[#CFCFCF] accord-item rounded-lg {{ $index == 0 ? 'active' : '' }}">
        <button
          class="accordion-btn relative w-full flex items-center gap-2 justify-between lg:pl-10 pl-8 lg:pr-[20px] pr-4 py-[20px] text-left text-lg text-[#011632] font-medium {{ $index == 0 ? 'active' : '' }} before:content-[''] before:absolute md:before:top-[49%] before:top-[35%] md:before:left-[3%] before:left-[5%] before:bg-[#011632] before:rounded-full before:w-1.5 before:h-1.5"
          onclick="toggleAccordion(this)">
          <span>{{ $Faq->question }}</span>
          <span class="toggle-icon border border-[#011632] h-6 w-6 rounded-full text-center shrink-0 leading-[21px] text-3xl">
            {{ $index == 0 ? '−' : '+' }}
          </span>
        </button>
        <div class="accordion-content lg:px-10 px-4 {{ $index == 0 ? 'active' : '' }}"
          style="{{ $index == 0 ? 'max-height: none; padding-top: 8px; padding-bottom: 8px;' : 'max-height: 0px; padding-top: 0px; padding-bottom: 0px;' }}">
          <p class="text-lg">{{ strip_tags($Faq->answer) }}</p>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>
@endsection