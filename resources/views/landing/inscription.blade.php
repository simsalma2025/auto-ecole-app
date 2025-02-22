<x-guest-layout>
    <x-auth-card>     
        <x-slot name="logo">
            <img src="{{asset("img/car.svg")}}" width="300px" height="300px" alt="">
        </x-slot>

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('demande_inscription') }}">
            @csrf
            <div class="row">
            <!-- Email Address -->
            <div class="col-6 mb-4">
                <x-label for="email" :value="__('E-mail Address')" />
                <x-input id="email" class="block mt-1 w-full h-50" type="email" name="email" required placeholder="Email address" />
            </div>
        
            <!-- Full Name -->
            <div class="col-6 mb-4">
                <x-label for="fullname" :value="__('Full Name')" />
                <x-input id="fullname" class="block mt-1 w-full h-50" type="text" name="fullname" required placeholder="Full Name" />
            </div>               
            </div>
            <!-- Phone Number -->
            <div class="mb-4">
                <x-label for="phoneNo" :value="__('Phone Number')" />
                <x-input id="phoneNo" class="block mt-1 w-full h-50" type="number" name="phoneNo" required maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="Enter your phone number here" />
            </div>
        
           <div class="row">
            <!-- Driving School Name -->
            <div class="col-6 mb-4">
                <x-label for="schoolName" :value="__('Driving School Name')" />
                <x-input id="schoolName" class="block mt-1 w-full h-50" type="text" name="schoolName" required placeholder="Driving School Name" />
            </div>
        
            <!-- City -->
            <div class="col-6 mb-4">
                <x-label for="city" :value="__('City')" />
                <x-input id="city" class="block mt-1 w-full h-50" type="text" name="city" required placeholder="Enter the city" />
            </div>
        </div>
            <!-- Driving School Address -->
            <div class="mb-4">
                <x-label for="address" :value="__('Driving School Address')" />
                <x-input id="address" class="block mt-1 w-full h-50" type="text" name="schoolAddress" required placeholder="Enter the address of the driving school" />
            </div>
            
            <!-- Submit Button -->
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 me-3" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
                <x-button class="ml-3 bg-primary">
                    {{ __('Send request') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>