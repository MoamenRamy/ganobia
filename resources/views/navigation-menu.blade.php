<nav x-data="{ open: false }" class="navm-bg-white navm-border-b navm-border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="navm-max-w-7xl navm-mx-auto navm-px-4 navm-sm-px-6 navm-lg-px-8">
        <div class="navm-flex navm-justify-between navm-h-16">
            <div class="navm-flex">
                <!-- Logo -->
                <div class="navm-shrink-0 navm-flex navm-items-center">
                    <a href="{{ route('home') }}">
                        <x-application-mark class="navm-block navm-h-9 navm-w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="navm-hidden navm-space-x-8 navm-sm--my-px navm-sm-ms-10 navm-sm-flex">
                    <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="navm-hidden navm-sm-flex navm-sm-items-center navm-sm-ms-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="navm-ms-3 navm-relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="navm-inline-flex navm-rounded-md">
                                    <button type="button" class="navm-inline-flex navm-items-center navm-px-3 navm-py-2 navm-border navm-border-transparent navm-text-sm navm-leading-4 navm-font-medium navm-rounded-md navm-text-gray-500 navm-bg-white navm-hover-text-gray-700 navm-focus-outline-none navm-focus-bg-gray-50 navm-active-bg-gray-50 navm-transition navm-ease-in-out navm-duration-150">
                                        {{ Auth::user()->currentTeam->name }}
                                        <svg class="navm-ms-2 navm--me-0.5 navm-size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="navm-w-60">
                                    <!-- Team Management -->
                                    <div class="navm-block navm-px-4 navm-py-2 navm-text-xs navm-text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <!-- Team Switcher -->
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <div class="navm-border-t navm-border-gray-200"></div>
                                        <div class="navm-block navm-px-4 navm-py-2 navm-text-xs navm-text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>
                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    @endif
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="navm-ms-3 navm-relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="navm-flex navm-text-sm navm-border-2 navm-border-transparent navm-rounded-full navm-focus-outline-none navm-focus-border-gray-300 navm-transition">
                                    <img class="navm-size-8 navm-rounded-full navm-object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="navm-inline-flex navm-rounded-md">
                                    <button type="button" class="navm-inline-flex navm-items-center navm-px-3 navm-py-2 navm-border navm-border-transparent navm-text-sm navm-leading-4 navm-font-medium navm-rounded-md navm-text-gray-500 navm-bg-white navm-hover-text-gray-700 navm-focus-outline-none navm-focus-bg-gray-50 navm-active-bg-gray-50 navm-transition navm-ease-in-out navm-duration-150">
                                        {{ Auth::user()->name }}
                                        <svg class="navm-ms-2 navm--me-0.5 navm-size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="navm-block navm-px-4 navm-py-2 navm-text-xs navm-text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="navm-border-t navm-border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="navm--me-2 navm-flex navm-items-center navm-sm-hidden">
                <button @click="open = ! open" class="navm-inline-flex navm-items-center navm-justify-center navm-p-2 navm-rounded-md navm-text-gray-400 navm-hover-text-gray-500 navm-hover-bg-gray-100 navm-focus-outline-none navm-focus-bg-gray-100 navm-focus-text-gray-500 navm-transition navm-duration-150 navm-ease-in-out">
                    <svg class="navm-size-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open}" class="navm-inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open}" class="navm-hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="navm-hidden navm-sm-hidden">
        <div class="navm-pt-2 navm-pb-3 navm-space-y-1">
            <x-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="navm-pt-4 navm-pb-1 navm-border-t navm-border-gray-200">
            <div class="navm-flex navm-items-center navm-px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="navm-shrink-0 navm-me-3">
                        <img class="navm-size-10 navm-rounded-full navm-object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="navm-font-medium navm-text-base navm-text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="navm-font-medium navm-text-sm navm-text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="navm-mt-3 navm-space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="navm-border-t navm-border-gray-200"></div>
                    <div class="navm-block navm-px-4 navm-py-2 navm-text-xs navm-text-gray-400">
                        {{ __('Manage Team') }}
                    </div>
                    <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-responsive-nav-link>
                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-responsive-nav-link>
                    @endcan
                    @if (Auth::user()->allTeams()->count() > 1)
                        <div class="navm-border-t navm-border-gray-200"></div>
                        <div class="navm-block navm-px-4 navm-py-2 navm-text-xs navm-text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>
                        @foreach (Auth::user()->allTeams() as $team)
                            <x-switchable-team :team="$team" component="responsive-nav-link" />
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </div>
</nav>
