<div class="bg-base-100">
    <div class="container">
        <div class="navbar md:h-16 md:flex grid grid-cols-3 grid-rows-2 h-32 px-0 gap-3 grow">
            <label for="top-menu-drawer" class="btn btn-ghost hover:bg-transparent md:hidden justify-self-start xs:col-start-1 col-start-2">
                <x-fad-bars class="h-5 w-5"/>
            </label>
            <a href="/" class="btn btn-ghost normal-case hover:bg-transparent px-0 justify-self-center col-start-1 row-start-1 xs:col-start-2">
                <img src="/img/logo-light.png" alt="راکولو" class="!max-h-full !w-auto hidden dark:block">
                <img src="/img/logo.png" alt="راکولو" class="!max-h-full !w-auto block dark:hidden">
            </a>
            <div class="grow col-span-full">
                {{-- search --}}
                <div class="form-control grow">
                    <div class="input-group w-full">
                        <input type="text" placeholder="جستجو ..." class="input input-bordered focus:outline-0 w-full bg-base-300 focus:bg-base-100 focus:shadow-xl"/>
                        <button class="btn btn-square">
                            <x-fad-magnifying-glass class="h-5 w-5"/>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-0 gap-1 justify-end row-start-1 col-start-3">
                <x-app.toggle-theme class="hover:bg-transparent"/>
                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="btn btn-ghost btn-square">
                        <div class="indicator">
                            <x-fad-cart-shopping class="h-5 w-5"/>
                            <span class="badge badge-sm badge-primary indicator-item ">8</span>
                        </div>
                    </label>
                    <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-base-100 shadow">
                        <div class="card-body">
                            <span class="font-bold text-lg">8 Items</span>
                            <span class="text-info">Subtotal: $999</span>
                            <div class="card-actions">
                                <button class="btn btn-primary btn-block">View cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="btn btn-ghost btn-square avatar placeholder">
                        <div class="w-10 rounded">
                            <x-fad-user class="h-5 w-5"/>
                        </div>
                    </label>
                    <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                        <li>
                            <a class="justify-between">
                                Profile
                                <span class="badge">New</span>
                            </a>
                        </li>
                        <li><a>Settings</a></li>
                        <li><a>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="navbar hidden md:block md:h-16 flex pb-0 px-0">
            <ul class="h-full flex justify-between">
                <ul class="flex h-full">
                    <li class="px-2 flex items-center h-full hover:border-primary transition-all duration-300 border-b-2 border-transparent cursor-pointer">
                        <label for="top-menu-drawer" class="cursor-pointer">
                            <x-fad-bars class="h-5 w-5 inline"/>
                            دسته بندی محصولات
                        </label>
                    </li>
                    <li class="flex items-center h-full">
                        <div class="divider divider-horizontal py-4 mx-0"></div>
                    </li>
                    <li class="px-2 flex items-center h-full hover:border-primary transition-all duration-300 border-b-2 border-transparent cursor-pointer">
                        <a href="/">
                            <x-fad-house class="inline-block h-5 w-5"/>
                            خانه</a></li>
                    <li class="px-2 flex items-center h-full hover:border-primary transition-all duration-300 border-b-2 border-transparent cursor-pointer">
                        <a href="/">
                            <x-fad-scale-balanced class="inline-block h-5 w-5"/>
                            شرایط و ضوابط</a></li>
                    <li class="px-2 flex items-center h-full hover:border-primary transition-all duration-300 border-b-2 border-transparent cursor-pointer">
                        <a href="/">
                            <x-fad-address-book class="inline-block h-5 w-5"/>
                            تماس با ما</a></li>
                </ul>
                <ul class="flex h-full">
                    <li class="px-2 flex gap-2 flex-row-reverse items-center end h-full hover:border-primary transition-all duration-300 border-b-2 border-transparent cursor-pointer">
                        <x-fad-phone-office class="inline-block h-5 w-5"/>
                        <div class="flex flex-col text-left">
                            <div class="text-sm">
                                با ما تماس بگیرید
                            </div>
                            <div>
                                051-91010350
                            </div>
                        </div>
                    </li>
                </ul>

            </ul>
        </div>
    </div>
</div>
