<button class="btn btn-ghost btn-square {{$class??''}}" {{$attributes}} x-data="toggleTheme" @click="toggle">
    <x-fad-sun class="h-6 w-6 md:h-5 md:2-5 dark:hidden"/>
    <x-fad-moon class="h-6 w-6 md:h-5 md:2-5 hidden dark:block"/>
</button>

