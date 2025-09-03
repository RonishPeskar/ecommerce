<header>
    <div class="bg-primary">
        <div class="text-center text-white py-1 relative container">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, ducimus.</p>
            <button type="button" class="absolute right-0 top-[50%] translate-y-[-50%] cursor-pointer">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
    </div>
    <nav class="shadow-lg">
        <div class="container flex flex-col md:flex-row gap-5 justify-between items-center py-3">
            <div>
                <a href="{{ route('home') }}">
                    <img class="h-12" src="https://codeit.com.np/storage/01K2GVP981XXP8CQB7CB2TQX1T.png" alt="logo">
                </a>
            </div>
            <div>
                <form action="{{ route('compare') }}" method="get">
                    <div class="flex items-center">
                        <input type="search" name="q" id="search" placeholder="search">
                        <button type="submit"
                            class="bg-[#ababab] border border-[#ababab] text-white px-4 py-2">compare<i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
            <div class="flex gap-2 items-center">
                @if (!Auth::user())
                    <a href="{{ route('login') }}" class="btn-primary">Sign in</a>
                    <a href="{{ route('register') }}" class="btn-secondary">Sign up</a>
                @else
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="bg-red-600 px-2 py-1 text-white rounded">Logout</button>
                    </form>
                @endif
            </div>
        </div>
    </nav>
</header>
