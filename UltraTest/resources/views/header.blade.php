<div class="container ">
    @if (Route::has('login'))
        <header class="d-flex justify-content-center py-3">
            @auth
                <ul class="nav nav-pills">
                    <li class="nav-item "><a href="/" class="nav-link " aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="{{ url('basket')}}" class="nav-link active">@livewire('counter') Basket</a>
                    </li>
                    <li><a href="{{ url('dashboard') }}" class="nav-link">Dashboard</a></li>
                    @else
                        <ul class=" nav nav-pills">
                            <li class="nav-item "><a href="{{ route('login') }}" aria-current="page"
                                                     class="nav-link active">Log In</a></li>
                            @if (Route::has('register'))
                                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a>
                                </li>
                            @endif
                        </ul>

                </ul>

            @endauth
        </header>
    @endif
</div>
