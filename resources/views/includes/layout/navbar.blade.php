<header class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container-fluid">
        <x-a class="navbar-brand" route="home" :text="config('app.name')" />

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <nav class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <x-a class="btn btn-sm btn-primary" route="signin" :text="__('sign in')"/>
                        <x-a class="btn btn-sm btn-light" route="signup" :text="__('sign up')"/>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <x-a class="nav-link dropdown-toggle badge badge-dark p-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->username }}
                        </x-a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <x-a
                                class="dropdown-item"
                                route="signout"
                                :text="__('sign out')"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            </x-a>
                        </div>
                    </li>
                @endguest
            </ul>
        </nav>
    </div>
</header>
