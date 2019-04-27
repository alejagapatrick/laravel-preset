<nav class="bg-header section">
    <div class="container mx-auto">
        <div class="flex justify-between items-center py-1">

            <!-- Left Side Of Navbar -->
            <div class="flex items-center">

                <!-- Branding Image -->
                <h1 class="flex items-center flex-no-shrink text-white mr-6">
{{--                     <a href="/" class="navbar-brand">
                        <img class="main_menu_logo" src="{{ Storage::url('main_menu_logo.jpg') }}" style="height: 40px;">
                    </a> --}}
                </h1>

            </div>

            {{-- Right side of navbar --}}
            <div class="flex items-center">

                @guest
                    <div class="relative group">
                        <a href="{{ route('login') }}" class="no-underline text-grey-darker flex items-center p-4 group-hover:bg-grey group-hover:border-grey-light">
                            Logg inn
                        </a>
                    </div>
                @endguest

                @auth
                    <div class="relative group">
                        <a href="#" class="no-underline text-grey-darker flex items-center p-4 group-hover:bg-grey group-hover:border-grey-light">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="items-center absolute border rounded-b-sm shadow-md bg-white invisible group-hover:visible w-auto">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="px-5 py-3 block text-grey-darker no-underline hover:bg-grey-lightest text-nowrap">Logg ut</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
