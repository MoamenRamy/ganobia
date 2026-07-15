<x-guest-layout>
    <div class="policy-page pt-4 bg-gray-100">
        <div class="policy-wrapper min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-authentication-card-logo />
            </div>
            <div class="policy-content w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                {!! $policy !!}
            </div>
        </div>
    </div>
</x-guest-layout>
