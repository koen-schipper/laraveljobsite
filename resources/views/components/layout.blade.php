<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#0072bc",
                    },
                },
            },
        };
    </script>
    <title>JobListings | Find Jobs & Projects</title>
    <style>
        input[type=range] {
            height: 38px;
            -webkit-appearance: none;
            margin: 10px 0;
            width: 100%;
        }

        input[type=range]:focus {
            outline: none;
        }

        input[type=range]::-webkit-slider-runnable-track {
            width: 100%;
            height: 10px;
            cursor: pointer;
            animate: 0.2s;
            box-shadow: 1px 1px 1px #000000;
            background: #1bb1e7;
            border-radius: 5px;
            border: 1px solid #000000;
        }

        input[type=range]::-webkit-slider-thumb {
            box-shadow: 1px 1px 1px #000000;
            border: 1px solid #000000;
            height: 20px;
            width: 15px;
            border-radius: 5px;
            background: #FFFFFF;
            cursor: pointer;
            -webkit-appearance: none;
            margin-top: -6px;
        }

        input[type=range]:focus::-webkit-slider-runnable-track {
            background: #1bb1e7;
        }

        input[type=range]::-moz-range-track {
            width: 100%;
            height: 10px;
            cursor: pointer;
            animate: 0.2s;
            box-shadow: 1px 1px 1px #000000;
            background: #1bb1e7;
            border-radius: 5px;
            border: 1px solid #000000;
        }

        input[type=range]::-moz-range-thumb {
            box-shadow: 1px 1px 1px #000000;
            border: 1px solid #000000;
            height: 30px;
            width: 15px;
            border-radius: 5px;
            background: #FFFFFF;
            cursor: pointer;
        }

        input[type=range]::-ms-track {
            width: 100%;
            height: 10px;
            cursor: pointer;
            animate: 0.2s;
            background: transparent;
            border-color: transparent;
            color: transparent;
        }

        input[type=range]::-ms-fill-lower {
            background: #1bb1e7;
            border: 1px solid #000000;
            border-radius: 10px;
            box-shadow: 1px 1px 1px #000000;
        }

        input[type=range]::-ms-fill-upper {
            background: #1bb1e7;
            border: 1px solid #000000;
            border-radius: 10px;
            box-shadow: 1px 1px 1px #000000;
        }

        input[type=range]::-ms-thumb {
            margin-top: 1px;
            box-shadow: 1px 1px 1px #000000;
            border: 1px solid #000000;
            height: 30px;
            width: 15px;
            border-radius: 5px;
            background: #FFFFFF;
            cursor: pointer;
        }

        input[type=range]:focus::-ms-fill-lower {
            background: #1bb1e7;
        }

        input[type=range]:focus::-ms-fill-upper {
            background: #1bb1e7;
        }
    </style>
</head>

<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href="/"><img class="w-24" src="{{ asset('images/logo.png') }}" alt="" class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            <li>
                <a href='/openai/question' class="hover:text-laravel"><i class="fa-solid fa-question"></i> Ask a
                    Question</a>
            </li>
            <li>
                <a href='/posts' class="hover:text-laravel"><i class="fa-solid fa-pen"></i> Posts</a>
            </li>
            @auth
                <li>
                    <span class="font-bold uppercase">
                        Welcome {{ auth()->user()->name }}
                    </span>
                </li>
                <li>
                    <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i>
                        Manage Listings</a>
                </li>
                <li>
                    <form class='inline' action='/logout' method='POST'>
                        @csrf
                        <button type='submit' class="hover:text-laravel">
                            <i class="fa-solid fa-door-closed"></i> Logout</button>
                    </form>
                </li>
            @else
                <li>
                    <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a>
                </li>
            @endauth
        </ul>
    </nav>

    <main>
        {{ $slot }}
    </main>
    <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2023, All Rights reserved</p>

        <a href="/listings/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post a Job</a>
    </footer>
    <x-flash-message />
</body>

</html>
