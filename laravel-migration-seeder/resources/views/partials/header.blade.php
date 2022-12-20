<header class="bg-dark ">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class=" nav-link text-uppercase {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">home</a>
        </li>
        <li class="nav-item">
            <a class=" nav-link text-uppercase {{Route::currentRouteName() == 'train' ? 'active' : ''}}" href="{{route('train')}}">train</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-uppercase {{Route::currentRouteName() == 'about' ? 'active' : ''}}" href="{{route('about')}}">about</a>
        </li>
    </ul>
</header>