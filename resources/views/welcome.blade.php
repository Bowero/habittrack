<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Laravel</title>
</head>
<body class="antialiased">
<!-- Navigation -->
<nav class="fixed flex justify-between py-6 w-full lg:px-48 md:px-12 px-4 content-center bg-secondary z-10">
    <div class="flex items-center">
        <a href="/" class="font-bold text-2xl">
            ✅ Habit Track
        </a>
    </div>
    <div class="font-montserrat hidden md:block">
        @auth
            <a href="{{ route('dashboard') }}" class="py-2 px-4 text-white bg-black rounded-3xl font-bold">
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}" class="mr-6 font-bold">
                Log back in
            </a>
            <a href="{{ route('register') }}" class="py-2 px-4 text-white bg-black rounded-3xl font-bold">
                Get started
            </a>
        @endauth
    </div>
    <div id="showMenu" class="md:hidden">
        <img src="{{ asset('images/logos/Menu.svg') }}" alt="Menu icon"/>
    </div>
</nav>
<div id="mobileNav" class="hidden px-4 py-6 fixed top-0 left-0 h-full w-full bg-secondary z-20 animate-fade-in-down">
    <div id="hideMenu" class="flex justify-end">
        <img src="{{ asset('images/logos/Cross.svg') }}" alt="" class="h-16 w-16"/>
    </div>
    <ul class="font-montserrat flex flex-col mx-8 my-24 items-center text-3xl">
        @auth
            <li>
                <a href="{{ route('dashboard') }}">
                    Dashboard
                </a>
            </li>
        @else
            <li class="my-6">
                <a href="{{ route('login') }}">
                    Log back in</a>
            </li>
            <li class="my-6">
                <a href="{{ route('register') }}">
                    Get started</a>
            </li>
        @endif
    </ul>
</div>

<!-- Hero -->
<section
    class="pt-24 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-left md:flex-row md:justify-between md:items-center lg:px-48 md:px-12 px-4 bg-secondary">
    <div class="md:flex-1 md:mr-10">
        <h1 class="font-sans text-5xl font-bold mb-7">
            Stick to your
            <span class="bg-underline1 bg-left-bottom bg-no-repeat pb-2 bg-100%">
                    new year resolutions
                </span>
        </h1>
        <p class="font-sans font-normal mb-7">
            Let Habit Track help you stay on track and stay motivated. Use the tricks from
            <a class="underline" href="https://jamesclear.com/atomic-habits" target="_blank">
                Atomic Habits</a> to stick to your
            resolutions this time.
        </p>
        <div class="font-montserrat">
            <a href="{{ route('register') }}"
               class="bg-black px-6 py-4 rounded-lg border-2 border-black border-solid text-white mr-2 mb-2 font-bold">
                Get started
            </a>
        </div>
    </div>
    <div class="flex justify-around md:block mt-8 md:mt-0 md:flex-1">
        <div class="relative">
            <img src="{{ asset('images/Highlight1.svg') }}" alt="" class="absolute -top-16 -left-10"/>
        </div>
        <img src="{{ asset('images/atomic-habits.jpg') }}" alt="A pile of books (one of which is Atomic Habits)"/>
        <div class="relative">
            <img src="{{ asset('images/Highlight2.svg') }}" alt="" class="absolute -bottom-10 -right-6"/>
        </div>
    </div>
</section>

<!-- How it works -->
<section class="bg-black text-white sectionSize">
    <div>
        <h2 class="secondaryTitle bg-underline2 bg-100%">How it works</h2>
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="flex-1 mx-8 flex flex-col items-center my-4">
            <div
                class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
                1
            </div>
            <h3 class="font-montserrat font-medium text-xl mb-2">Determine your goals</h3>
            <p class="text-center font-montserrat">
                Try aiming for actionable and measurable goals. <em>Reading 15 pages per day</em> is better than <em>Reading
                    every day</em>
            </p>
        </div>
        <div class="flex-1 mx-8 flex flex-col items-center my-4">
            <div
                class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
                2
            </div>
            <h3 class="font-montserrat font-medium text-xl mb-2">Register your goals in Habit Track</h3>
            <p class="text-center font-montserrat">
                Once you've determined your goals, you can register them in Habit Track. This way you can keep track of
                your progress.
            </p>
        </div>
        <div class="flex-1 mx-8 flex flex-col items-center my-4">
            <div
                class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
                3
            </div>
            <h3 class="font-montserrat font-medium text-xl mb-2">Stick to your goals</h3>
            <p class="text-center font-montserrat">
                This is the hardest part. After reaching a target, make sure to register your progress. Try to chain
                your days together.
            </p>
        </div>
    </div>
</section>

<!-- Features -->
<section class="sectionSize bg-secondary">
    <div>
        <h2 class="secondaryTitle bg-underline3 bg-100%">Features</h2>
    </div>
    <div class="md:grid md:grid-cols-2 md:grid-rows-2">

        <div class="flex items-start font-montserrat my-6 mr-10">
            <img src="{{ asset('images/logos/Heart.svg') }}" alt='' class="h-7 mr-4"/>
            <div>
                <h3 class="font-semibold text-2xl">Track multiple habits</h3>
                <p>
                    People are products of their habits. So you don't want to track only one habit. You want to track
                    multiple habits. Habit Track allows you to track multiple habits at once.
                </p>
            </div>
        </div>

        <div class="flex items-start font-montserrat my-6 mr-10">
            <img src="{{ asset('images/logos/Heart.svg') }}" alt='' class="h-7 mr-4"/>
            <div>
                <h3 class="font-semibold text-2xl">Share your progress</h3>
                <p>
                    Peer pressure can be very effective. You can share your progress with your friends and family
                    easily. This way you can help each other reach their goals.
                </p>
            </div>
        </div>

        <div class="flex items-start font-montserrat my-6 mr-10">
            <img src="{{ asset('images/logos/Heart.svg') }}" alt='' class="h-7 mr-4"/>
            <div>
                <h3 class="font-semibold text-2xl">Use Habit Track from any device</h3>
                <p>
                    When you're going for a walk or when you're at work, you still want to track your progress. Habit
                    Track is available on any device. You can use it on your phone, tablet or computer.
                </p>
            </div>
        </div>

        <div class="flex items-start font-montserrat my-6 mr-10">
            <img src="{{ asset('images/logos/Heart.svg') }}" alt='' class="h-7 mr-4"/>
            <div>
                <h3 class="font-semibold text-2xl">Go back in time</h3>
                <p>
                    Forgot to update your progress? You should register it in Habit Track! Just kidding. You can go back
                    in time and update your progress. No problem.
                </p>
            </div>
        </div>

    </div>
</section>

<!-- Pricing -->
<section class="sectionSize bg-secondary py-0">
    <div>
        <h2 class="secondaryTitle bg-underline4 mb-0 bg-100%">Pricing</h2>
    </div>
    <div class="flex w-full flex-col md:flex-row">

        <div
            class='flex-1 flex flex-col mx-6 shadow-2xl relative bg-secondary rounded-2xl py-5 px-8 my-8 md:top-24'>
            <h3 class="font-sans font-normal text-2xl mb-4">
                Personal
            </h3>
            <div class="font-montserrat font-bold text-2xl mb-4">
                Free
            </div>

            <div class="flex">
                <img src="{{ asset('images/logos/CheckedBox.svg') }}" alt="" class="mr-1"/>
                <p>Track up to <strong>3</strong> habits</p>
            </div>
            <div class="flex">
                <img src="{{ asset('images/logos/CheckedBox.svg') }}" alt="" class="mr-1"/>
                <p>Share your progress with others</p>
            </div>
            <div class="flex">
                <img src="{{ asset('images/logos/CheckedBox.svg') }}" alt="" class="mr-1"/>
                <p>Use Habit Track from any device</p>
            </div>

            <a href="{{ route('register') }}"
               class="px-4 border-2 border-solid border-black rounded-xl text-lg py-3 mt-4 font-bold hover:bg-black hover:text-white">
                Start for free
            </a>
        </div>

        <div
            class='flex-1 flex flex-col mx-6 shadow-2xl relative bg-secondary rounded-2xl py-5 px-8 my-8 md:top-24'>
            <h3 class="font-sans font-normal text-2xl mb-4">
                Committed
            </h3>
            <div class="font-montserrat font-bold text-2xl mb-4">
                $4
                <span class="font-normal text-base"> / month</span>
            </div>

            <div class="flex">
                <img src="{{ asset('images/logos/CheckedBox.svg') }}" alt="" class="mr-1"/>
                <p>Track <strong>unlimited</strong> habits</p>
            </div>
            <div class="flex">
                <img src="{{ asset('images/logos/CheckedBox.svg') }}" alt="" class="mr-1"/>
                <p>Go back in time to fix what you forgot to update</p>
            </div>
            <div class="flex">
                <img src="{{ asset('images/logos/CheckedBox.svg') }}" alt="" class="mr-1"/>
                <p>Support an indie developer &hearts;</p>
            </div>

            <a href="{{ route('register') }}"
               class="px-4 border-2 border-solid border-black rounded-xl text-lg py-3 mt-4 font-bold hover:bg-black hover:text-white opacity-25">
                Coming soon
            </a>
        </div>
    </div>
</section>

<!-- FAQ  -->
<section class="sectionSize items-start pt-8 md:pt-36 bg-black text-white">
    <div>
        <h2 class="secondaryTitle bg-highlight3 p-10 mb-0 bg-center bg-100%">
            FAQ
        </h2>
    </div>

    <div toggleElement class="w-full py-4">
        <div class="flex justify-between items-center">
            <div question class="font-montserrat font-medium mr-auto">
                Is free really free?
            </div>
            <img src="{{ asset('images/logos/CaretRight.svg') }}" alt="" class="transform transition-transform"/>
        </div>
        <div answer class="font-montserrat pb-8 hidden">
            Yes. If you register a free account now, you'll always have access.
        </div>
    </div>
    <hr class="w-full bg-white"/>

    <div toggleElement class="w-full py-4">
        <div class="flex justify-between items-center">
            <div question class="font-montserrat font-medium mr-auto">
                Can I share my progress with others?
            </div>
            <img src="{{ asset('images/logos/CaretRight.svg') }}" alt="" class="transform transition-transform"/>
        </div>
        <div answer class="font-montserrat pb-8 hidden">
            Yes, we make it super easy to share images of your progress on social media.
        </div>
    </div>
    <hr class="w-full bg-white"/>

    <div toggleElement class="w-full py-4">
        <div class="flex justify-between items-center">
            <div question class="font-montserrat font-medium mr-auto">
                Am I awesome?
            </div>
            <img src="{{ asset('images/logos/CaretRight.svg') }}" alt="" class="transform transition-transform"/>
        </div>
        <div answer class="font-montserrat pb-8 hidden">
            Yes! No doubt about it.
        </div>
    </div>
    <hr class="w-full bg-white"/>

</section>

<!-- Footer -->
<section class="bg-black sectionSize">
    <div class="flex mb-8">
        <a href="https://twitter.com/RobinMartijn" target="_blank">
            <img src="{{ asset('images/logos/Twitter.svg') }}" alt="Twitter logo" class="mx-4"/>
        </a>
    </div>
    <div class="text-white font-montserrat text-sm">
        © 2021 Habit Track. All rights reserved
    </div>
</section>

<script src="{{ asset('js/layout.js') }}"></script>
</body>
</html>
