<header class="p-4 border-b-2 shadow-lg bg-slate-200 dark:bg-slate-700 border-slate-400 sticky top-0 z-[999]">
    <nav class="flex items-center justify-center gap-32" aria-label="Main navigation">
        <div>
            <a href="/" class="flex items-center gap-2">
                <img src="{{ url('images/logo.svg') }}" alt="Laravel Logo" class="w-8 h-8">
                <h1 class="text-lg"><x-app-name /></h1>
            </a>
        </div>
        <div>
            <ul class="flex gap-4">
                <li class="nav-link"><a href="/posts">Posts</a></li>
                @auth
                    <li class="nav-link"><a href="/account">Account</a></li>
                    <li class="nav-link">
                        <form action="/logout" method="POST">
                            @csrf
                            <input type="submit" value="Logout" />
                        </form>
                    </li>
                @else
                    <li class="nav-link"><a href="/signin">Signin</a></li>
                    <li class="nav-link"><a href="/register">Signup</a></li>
                @endauth
            </ul>
        </div>
    </nav>
</header>
