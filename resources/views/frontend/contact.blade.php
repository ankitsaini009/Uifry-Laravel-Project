@extends('frontend.layout.main')
@section('manage_front')
<section class="our-mission lg:pt-20 pt-[60px]">
  <div class="container mx-auto">
    <h1 class="lg:text-[62px] text-[42px] font-semibold text-[#011632] tracking-[-2px] md:text-center"><span class="heading-after">Get in Touch</span></h1>
    <p class="text-[#3C4959] text-lg font-normal md:text-center mt-5">Book an Appointment to treat your teeth right now.</p>
    <div class="grid grid-cols-11 lg:mt-20 mt-[50px] lg:px-[32px] lg:gap-y-0 gap-y-20">
      <div class="md:col-span-5 col-span-11 md:order-1 order-2 md:pr-2.5">
        <div class="map">
          <iframe class="w-full md:h-[311px] h-[450px] lg:rounded-xl rounded-lg border border-[#25B4F8]" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d63387.25157843114!2d39.206766690439174!3d-6.8059102849727315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1stanzania%20bureau%20of%20standards!5e0!3m2!1sen!2sin!4v1738757700827!5m2!1sen!2sin"></iframe>
        </div>
        <div class="mt-5 shadow-lg border border-gray-400 p-5 rounded-xl flex items-center gap-4">
          <div class="bg-[#1376F8] h-[53px] shrink-0 w-[53px] rounded-full flex items-center justify-center"><img src="images/uifry-time-icon.svg" width="27" height="27" alt="time-icon"></div>
          <div>
            <h4 class="text-[#011632] text-lg font-medium">Office Timings</h4>
            <p class="text-base font-normal text-[#3C4959] mt-0.5 lg:max-w-[300px]">Monday - Saturday (9:00am to 5pm) Sunday (Closed)</p>
          </div>
        </div>
        <div class="mt-5 shadow-lg border border-gray-400 p-5 rounded-xl flex items-center gap-4">
          <div class="bg-[#1376F8] h-[53px] w-[53px] rounded-full flex items-center justify-center"><img src="images/uifry-address-icon.svg" width="27" height="27" alt="address-icon"></div>
          <div>
            <h4 class="text-[#011632] text-lg font-medium">Emai Address</h4>
            <p class="text-base font-normal text-[#3C4959] mt-0.5"><a href="mailto:smile01@gmail.com">Smile01@gmail.com</a></p>
          </div>
        </div>
        <div class="mt-5 shadow-lg border border-gray-400 p-5 rounded-xl flex items-center gap-4">
          <div class="bg-[#1376F8] h-[53px] w-[53px] rounded-full flex items-center justify-center"><img src="images/uifry-phone-icon.svg" width="27" height="27" alt="phone-icon"></div>
          <div>
            <h4 class="text-[#011632] text-lg font-medium">Phone Number</h4>
            <p class="text-base font-normal text-[#3C4959] mt-0.5"><a href="tel:0900-78601">0900-78601</a></p>
          </div>
        </div>
        <div class="mt-5 shadow-lg border border-gray-400 p-5 rounded-xl flex items-center gap-4">
          <div class="bg-[#1376F8] h-[53px] w-[53px] rounded-full flex items-center justify-center"><img src="images/uifry-chat-icon.svg" width="32" height="32" alt="chat-icon"></div>
          <div>
            <h4 class="text-[#011632] text-lg font-medium">Live chat</h4>
          </div>
        </div>
      </div>
      <div class="md:col-span-6 col-span-11 md:order-2 order-1 md:pl-[25px]">
        <div class="lg:border border-[#25B4F8] rounded-xl lg:px-11 lg:pt-10 lg:pb-8">
          <div class="grid grid-cols-12 lg:gap-x-8 gap-y-2.5">
            <div class="lg:col-span-6 col-span-12">
              <label for="first-name" class="text-lg text-[#3C4959]">First name</label>
              <input id="first-name" type="text" placeholder="First name" class="outline-none h-auto bg-white text-[#667085] mt-2.5 w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm">
            </div>
            <div class="lg:col-span-6 col-span-12">
              <label for="last-name" class="text-lg text-[#3C4959]">Last name</label>
              <input id="last-name" type="text" placeholder="Last name" class="outline-none h-auto bg-white text-[#667085] mt-2.5 w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm">
            </div>
            <div class="col-span-12">
              <label for="email" class="text-lg text-[#3C4959]">Email</label>
              <input id="email" type="text" placeholder="you@company.com" class="outline-none h-auto bg-white text-[#667085] mt-2.5 w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm">
            </div>
            <div class="col-span-12">
              <label for="number" class="text-lg text-[#3C4959]">Phone number</label>
              <div class="mt-2.5 bg-white flex gap-3 text-sm border border-[#D0D5DD] rounded-lg px-4 p-4">
                <select class="w-10 outline-none pl-0 text-[#667085]" aria-label="select">
                  <option disabled selected>Us</option>
                  <option>Sci-fi</option>
                  <option>Drama</option>
                  <option>Action</option>
                </select>
                <input id="number" class="bg-white outline-none text-[#667085] w-full px-0" placeholder="+1 (555) 000-0000">
              </div>
            </div>
            <div class="col-span-12">
              <label for="date" class="text-lg text-[#3C4959]">Select date</label>
              <input id="date" type="date" class="bg-white outline-none text-[#667085] h-auto mt-2.5 w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm">
            </div>
            <div class="col-span-12">
              <label for="message" class="text-lg text-[#3C4959]">Message</label>
              <textarea id="message" class="outline-none resize-none bg-white text-[#667085] h-[185px] mt-2.5 w-full text-sm border border-[#D0D5DD] p-4 rounded-lg shadow-sm"></textarea>
            </div>
            <div class="col-span-12 text-center lg:mt-7.5 mt-2">
              <button type="submit" class="bg-[#1376F8] hover:bg-[#011632] duration-700 text-white font-semibold text-base rounded-[10px] inline-block lg:py-3.5 py-3 px-[30px]">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="ask-questions lg:pt-[120px] pt-[70px] lg:pb-[100px] pb-[70px]">
  <div class="container mx-auto">
    <div class="md:text-center">
      <h2 class="lg:text-[42px] text-3xl text-[#011632] font-semibold inline-block">
        <span class="heading-border">Frequently Ask Question</span>
      </h2>
      <p class="text-[#3C4959] lg:text-lg text-base lg:mt-5 mt-3 font-normal lg:text-center max-w-[440px] mx-auto">We use only the best quality materials on the market in order to provide the best products to our patients. <span class="lg:hidden inline">So don’t worry about anything and book yourself.</span></p>
    </div>
    <div class="lg:max-w-[625px] md:max-w-[500px] mx-auto lg:mt-14 mt-8">
      <div class="border-b border-b-[#CFCFCF] accord-item rounded-lg active">
        <button class="accordion-btn relative w-full flex items-center gap-2 justify-between lg:pl-10 pl-8 lg:pr-[20px] pr-4 py-[20px] text-left text-lg text-[#011632] font-medium active before:content-[''] before:absolute lg:before:top-[49%] before:top-[35%] lg:before:left-[3%] before:left-[5%] before:bg-[#011632] before:rounded-full before:w-1.5 before:h-1.5" onclick="toggleAccordion(this)">
          Can I see who reads my email campaigns?
          <span class="toggle-icon border border-[#011632] h-6 w-6 rounded-full text-center shrink-0 leading-[21px] text-3xl">−</span>
        </button>
        <div class="accordion-content lg:px-10 px-4 active">
          <p class="text-lg">Lorem ipsum dolor sit amet consectetur. Convallis cras placerat dignissim aliquam massa. Aliquet volutpat rhoncus in convallis consectetur. Cras adipiscing volutpat non hac enim odio enim.</p>
        </div>
      </div>
      <div class="border-b border-b-[#CFCFCF] accord-item rounded-lg active">
        <button class="accordion-btn w-full flex items-center  gap-2 justify-between lg:pl-10 pl-8 lg:pr-[20px] pr-4 py-[20px] text-left text-lg text-[#011632] font-medium relative before:content-[''] before:absolute lg:before:top-[49%] before:top-[35%] lg:before:left-[3%] before:left-[5%] before:bg-[#011632] before:rounded-full before:w-1.5 before:h-1.5" onclick="toggleAccordion(this)">
          Do you offer non-profit discounts?
          <span class="toggle-icon border border-[#011632] h-6 w-6 rounded-full text-center shrink-0 leading-[21px] text-3xl">+</span>
        </button>
        <div class="accordion-content bg-gray-50 lg:px-10 px-4">
          <p class="text-lg">Lorem ipsum dolor sit amet consectetur. Convallis cras placerat dignissim aliquam massa. Aliquet volutpat rhoncus in convallis consectetur. Cras adipiscing volutpat non hac enim odio enim.</p>
        </div>
      </div>
      <div class="border-b border-b-[#CFCFCF] accord-item rounded-lg active">
        <button class="accordion-btn w-full flex items-center gap-2 justify-between lg:pl-10 pl-8 lg:pr-[20px] pr-4 py-[20px] text-left text-lg text-[#011632] font-medium relative before:content-[''] before:absolute lg:before:top-[49%] before:top-[35%] lg:before:left-[3%] before:left-[5%] before:bg-[#011632] before:rounded-full before:w-1.5 before:h-1.5" onclick="toggleAccordion(this)">
          Can I see who reads my email campaigns?
          <span class="toggle-icon border border-[#011632] h-6 w-6 rounded-full text-center shrink-0 leading-[21px] text-3xl">+</span>
        </button>
        <div class="accordion-content bg-gray-50 lg:px-10 px-4">
          <p class="text-lg">Lorem ipsum dolor sit amet consectetur. Convallis cras placerat dignissim aliquam massa. Aliquet volutpat rhoncus in convallis consectetur. Cras adipiscing volutpat non hac enim odio enim.</p>
        </div>
      </div>
      <div class="border-b border-b-transparent accord-item rounded-lg active">
        <button class="accordion-btn w-full flex items-center  gap-2 justify-between lg:pl-10 pl-8 lg:pr-[20px] pr-4 py-[20px] text-left text-lg text-[#011632] font-medium relative before:content-[''] before:absolute lg:before:top-[49%] before:top-[35%] lg:before:left-[3%] before:left-[5%] before:bg-[#011632] before:rounded-full before:w-1.5 before:h-1.5" onclick="toggleAccordion(this)">
          Can I see who reads my email campaigns?
          <span class="toggle-icon border border-[#011632] h-6 w-6 rounded-full text-center shrink-0 leading-[21px] text-3xl">+</span>
        </button>
        <div class="accordion-content bg-gray-50 lg:px-10 px-4">
          <p class="text-lg">Lorem ipsum dolor sit amet consectetur. Convallis cras placerat dignissim aliquam massa. Aliquet volutpat rhoncus in convallis consectetur. Cras adipiscing volutpat non hac enim odio enim.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection