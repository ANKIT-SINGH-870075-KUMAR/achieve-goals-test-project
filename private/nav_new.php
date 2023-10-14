<body class="antialiased bg-white">
    <div>
        <nav x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-gray-800">
            <div class="container px-6 mx-auto lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center justify-between flex-grow">
                        <div class="flex-shrink-0">
                            <a href="<?=$baseurl;?>" class="logo my-10 ">
                                <img class="w-20 h-20 rounded-full" src="assets/images/logo.png" alt="">
                            </a>
                        </div>
                        <div class="hidden lg:block">
                            <div class="flex items-center">
                                <a href="<?=$baseurl;?>"
                                    class="flex flex-row items-center px-3 py-2 ml-4 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">
                                    <i class="fas fa-home fonthome"></i>
                                    <span class="ml-2">Home</span>
                                </a>
                                <a href="<?=$baseurl;?>about"
                                    class="flex flex-row items-center px-3 py-2 ml-4 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">
                                    <i class="fas fa-align-left about"></i>
                                    <span class="ml-2">About Us</span>
                                </a>
                                <div class="relative" x-data="{ open: false}">
                                    <button @click="open = !open"
                                        class="flex flex-row items-center px-3 py-2 ml-4 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">
                                        <i class="fab fa-buffer works"></i>
                                        <span class="mx-2">Services</span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            :class="{'rotate-180': open, 'rotate-0': !open}"
                                            class="w-4 h-4 mt-1 transform" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-chevron-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </button>
                                    <div @click.away="open = false" x-cloak x-show="open"
                                        x-transition:enter="transition ease-out duration-100"
                                        x-transition:enter-start="transform opacity-0 scale-95"
                                        x-transition:enter-end="transform opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-75"
                                        x-transition:leave-start="transform opacity-100 scale-100"
                                        x-transition:leave-end="transform opacity-0 scale-95"
                                        class="absolute right-0 w-48 mt-2 origin-top-right rounded-md shadow-lg">
                                        <div class="py-1 bg-white rounded-md shadow-xs">
                                            <?php foreach($services as $p):?>
                                <a href="<?=$baseurl;?>service?service=<?=$p->id;?>"
                                    class="flex flex-row items-center px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-200 focus:outline-none focus:text-gray-900 focus:bg-gray-200"
                                    role="menuitem">
                                   <?=$p->name;?>
                                </a>
                                
                                <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>

                                <a href="<?=$baseurl;?>#contact"
                                    class="flex flex-row items-center px-3 py-2 ml-4 text-sm font-medium text-gray-300 rounded-md text-white bg-gray-700 hover:text-gray hover:bg-gray-800 focus:outline-none focus:text-white focus:bg-gray-700">
                                    <i class="fas fa-headset contact"></i>
                                    <span class="ml-2">Contact Us</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex -mr-2 lg:hidden">
                        <button @click="open = !open"
                            class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white"
                            x-bind:aria-label="open ? 'Close main menu' : 'Main menu'" x-bind:aria-expanded="open">
                            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div :class="{'block': open, 'hidden': !open}" class="hidden lg:hidden">
                <div class="container px-6 mx-auto">
                    <div class="pt-2 pb-3">
                        <a href="<?=$baseurl;?>#top"
                            class="flex flex-row items-center px-3 py-2 mt-1 text-base font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">
                            <i class="fas fa-home fonthome"></i>
                            <span class="ml-2">Home</span>
                        </a>
                        <a href="<?=$baseurl;?>about"
                            class="flex flex-row items-center px-3 py-2 mt-1 text-base font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">
                            <i class="fas fa-align-left about"></i>
                            <span class="ml-2">About Us</span>
                        </a>
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = true"
                                class="flex flex-row items-center w-full px-3 py-2 mt-1 text-base font-medium text-left text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">
                                <i class="fab fa-buffer works"></i>
                                <span class="mx-2">Services</span>
                                <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': open, 'rotate-0': !open}"
                                    class="w-4 h-4 mt-1 transform" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-down">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </button>
                            <div x-show="open" @click.away="open = false"
                                class="px-2 py-2 mt-2 bg-white rounded-md shadow-xs" role="menu"
                                aria-orientation="vertical" aria-labelledby="user-menu" role="menuitem">
                                <?php foreach($services as $p):?>
                                <a href="<?=$baseurl;?>service?service=<?=$p->id;?>"
                                    class="flex flex-row items-center px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-200 focus:outline-none focus:text-gray-900 focus:bg-gray-200"
                                    role="menuitem">
                                   <?=$p->name;?>
                                </a>
                                
                                <?php endforeach; ?>
                               
                            </div>
                        </div>
                        <a href="<?=$baseurl;?>#contact"
                            class="flex flex-row items-center px-3 py-2 mt-1 text-base font-medium text-gray-300 rounded-md text-white bg-gray-700 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 hover:text-gray hover:bg-gray-800 ">
                            <i class="fas fa-headset contact"></i>
                            <span class="ml-2">Contact Us</span>
                        </a>

                    </div>
                </div>
            </div>
        </nav>
    </div>

    <script src="assets/js/alpine.js"></script>
</body>