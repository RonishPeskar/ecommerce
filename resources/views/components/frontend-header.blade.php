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
                <form action="" method="get">
                    <div class="flex items-center">
                        <input type="search" name="search" id="search" placeholder="search">
                        <button type="submit" class="bg-[#ababab] border border-[#ababab] text-white px-4 py-2">compare<i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
            <div class="flex gap-2 items-center">
                <a href="" class="btn-primary">Sign in</a>
                <a href="" class="btn-secondary">Sign up</a>
            </div>
        </div>
    </nav>
</header>
