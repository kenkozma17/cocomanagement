<section class="border-black border-2 md:mb-[3rem] mb-[1rem]">
    <div class="bg-primary-red md:px-[2.18rem] px-[1.75rem] md:py-[1.25rem] py-[1rem]">
      <h2 class="text-white leading-[60px] text-[3rem]">{{ $set['title'] }}</h2>
      <p class="text-white font-bold">{{ $set['description'] }}</p>
    </div>
    <statamic:form:contact_form class="bg-white md:px-[3.125rem] px-[1rem] md:py-[2rem] py-[1.25rem]">
      <div
        class="grid grid-cols-12 gap-[1rem]"
      >
        @foreach($fields as $field)
            @if($field['type'] == 'text' || $field['type'] == 'tel' || $field['type'] == 'email' || $field['type'] == 'textarea')
                <div class="form-field flex flex-col gap-[.25rem] col-span-12 {{ $field['width'] === 50 ? 'lg:col-span-6' : 'col-span-12' }}">
                    <label for="First Name" class="font-bold text-primary-gray">{{$field['display']}}</label>
                    {!! $field['field'] !!}
                </div>
            @endif

            @if($field['type'] == 'checkboxes')
                <div class="form-field form-field-checkboxes col-span-12 {{ $field['width'] === 50 ? 'lg:col-span-6' : 'col-span-12' }}">
                    <label for="First Name" class="font-bold text-primary-gray">{{$field['display']}}</label>
                    {!! $field['field'] !!}
                </div>
            @endif
        @endforeach

        <div class="flex flex-col gap-[.25rem] lg:col-span-6 col-span-12">
          <label for="First Name" class="font-bold text-primary-gray">First Name</label>
          <input
            class="border-[#808080] border-opacity-50 border rounded px-[1rem] py-[.5rem]"
            type="text"
            placeholder="First Name"
          />
        </div>
        <div class="flex flex-col gap-[.25rem] lg:col-span-6 col-span-12">
          <label for="Last Name" class="font-bold text-primary-gray">Last Name</label>
          <input
            class="border-[#808080] border-opacity-50 border rounded px-[1rem] py-[.5rem]"
            type="text"
            placeholder="Last Name"
          />
        </div>
        <div class="flex flex-col gap-[.25rem] lg:col-span-6 col-span-12">
          <label for="Email" class="font-bold text-primary-gray">Email</label>
          <input
            class="border-[#808080] border-opacity-50 border rounded px-[1rem] py-[.5rem]"
            type="text"
            placeholder="name@email.com"
          />
        </div>
        <div class="flex flex-col gap-[.25rem] lg:col-span-6 col-span-12">
          <label for="Phone" class="font-bold text-primary-gray">Phone</label>
          <input
            class="border-[#808080] border-opacity-50 border rounded px-[1rem] py-[.5rem]"
            type="text"
            placeholder="+63 987 654 3210"
          />
        </div>
        <div class="flex flex-col gap-[.25rem] col-span-12">
          <label for="Message" class="font-bold text-primary-gray">Message</label>
          <textarea
            class="border-[#808080] border-opacity-50 border rounded px-[1rem] py-[.5rem]"
            name=""
            id=""
            rows="6"
            placeholder="Leave us a message"
          ></textarea>
        </div>
        <div class="flex flex-col gap-[.25rem] col-span-12">
          <label for="Message" class="font-bold text-primary-gray">Select Your Inquiry Type</label>
          <div>
            <label for="gen-questions">
              <input type="checkbox" id="gen-questions" />
              General Questions
            </label>
          </div>

          <div>
            <label for="event-hosting">
              <input type="checkbox" id="event-hosting" />
              Event Hosting
            </label>
          </div>

          <div>
            <label for="feedback">
              <input type="checkbox" id="feedback" />
              Feedback & Suggestions
            </label>
          </div>

          <div>
            <label for="victor-hall">
              <input type="checkbox" id="victor-hall-rental" />
              Victor Hall Venue Rental
            </label>
          </div>

          <div>
            <label for="metrowalk-events">
              <input type="checkbox" id="metrowalk-events" />
              Metrowalk Events
            </label>
          </div>

          <div>
            <label for="business-partnership">
              <input type="checkbox" id="business-partnership" />
              Business Partnerships
            </label>
          </div>
        </div>
      </div>

      <button
        class="bg-primary-red hover:bg-white hover:text-primary-red transition-colors text-white font-bold border-black border-2 mt-[1.75rem] md:w-auto w-full"
      >
        <a href="#" class="py-[.875rem] px-[1.25rem] inline-block">
          Submit
        </a>
      </button>
    </statamic:form:contact_form>
  </section>
