@include('layouts.header-contents')
<div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0" style="flex-direction:column; background-color:#4F3C8A">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 ">
            <img src="data:image/svg+xml;base64,PHN2ZyBpZD0iRkQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDU1My42MiAxMjcuNCI+PGRlZnM+PHN0eWxlPi5jbHMtMSwuY2xzLTN7ZmlsbDojZmZmO30uY2xzLTJ7aXNvbGF0aW9uOmlzb2xhdGU7fS5jbHMtM3tmaWxsLXJ1bGU6ZXZlbm9kZDt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPmZsYXVudC1sb2dvLXdoaXRlPC90aXRsZT48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0zMi4wOSwyMzYuNDZINTkuNTR2OC4zMkg0MS4xdjguMzJoMTd2OC4zMmgtMTd2MTUuOTVoLTlWMjM2LjQ2WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTguNTEgLTE5My4yOSkiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik04MC41MSwyMzYuMTFxOS41MywwLDE0LjY4LDQuODV0NS4xNCwxNC43OUEzMy40LDMzLjQsMCwwLDEsOTkuMTgsMjY1YTE3LjIyLDE3LjIyLDAsMCwxLTMuNTgsNi43NiwxNS41MiwxNS41MiwwLDAsMS02LjE4LDQuMTksMjQuNzgsMjQuNzgsMCwwLDEtOC45LDEuNDRINjYuMzVWMjM2LjExSDgwLjUxWk04MSwyNzIuNzVhMjIuOTIsMjIuOTIsMCwwLDAsMi4zMS0uMTQsMTIuODcsMTIuODcsMCwwLDAsMi45NS0uNjksMTMuNDQsMTMuNDQsMCwwLDAsMy4wOS0xLjU5LDEwLjQ0LDEwLjQ0LDAsMCwwLDIuNzQtMi44MywxNS44NCwxNS44NCwwLDAsMCwyLTQuNDgsMjMuNTUsMjMuNTUsMCwwLDAsLjc4LTYuNSwyNy42MiwyNy42MiwwLDAsMC0uNzItNi42MiwxMi42OSwxMi42OSwwLDAsMC0yLjM3LTUsMTAuNDEsMTAuNDEsMCwwLDAtNC4yNS0zLjEyLDE2LjkxLDE2LjkxLDAsMCwwLTYuNDEtMS4wN0g3MS44NHYzMkg4MVoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC04LjUxIC0xOTMuMjkpIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTQyLjYyLDIzNi45MmgyNnY3Ljg3SDE1MS4xNXY3Ljg3aDE2LjEydjcuODdIMTUxLjE1djE1LjA4aC04LjUyVjIzNi45MloiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC04LjUxIC0xOTMuMjkpIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTc1LDIzNi45Mmg4LjUydjMwLjgyaDE1Ljc5djcuODdIMTc1VjIzNi45MloiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC04LjUxIC0xOTMuMjkpIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMjE2Ljc4LDIzNi45Mmg3bDE2LjgzLDM4LjY5SDIzMWwtMy4zMy04LjJoLTE1bC0zLjIyLDguMmgtOS40Wm0zLjI4LDExLjI2LTQuNywxMmg5LjQ1WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTguNTEgLTE5My4yOSkiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0yNzcuMTYsMjYwLjY5YTE4LjY3LDE4LjY3LDAsMCwxLTEsNi4zNCwxNCwxNCwwLDAsMS0zLjA5LDUsMTQuMTMsMTQuMTMsMCwwLDEtNS4xMSwzLjMzLDIxLjQzLDIxLjQzLDAsMCwxLTE0LjE1LDAsMTQuMTMsMTQuMTMsMCwwLDEtNS4xMS0zLjMzLDE0LDE0LDAsMCwxLTMuMDktNSwxOC42NiwxOC42NiwwLDAsMS0xLTYuMzRWMjM2LjkyaDguNTJ2MjMuNDRhOS40MSw5LjQxLDAsMCwwLC41NywzLjMzLDgsOCwwLDAsMCwxLjYxLDIuNjUsNy4zMSw3LjMxLDAsMCwwLDIuNDksMS43NSw3LjgsNy44LDAsMCwwLDMuMTQuNjMsNy42Miw3LjYyLDAsMCwwLDMuMTEtLjYzLDcuNCw3LjQsMCwwLDAsMi40Ni0xLjc1LDgsOCwwLDAsMCwxLjYxLTIuNjUsOS40Miw5LjQyLDAsMCwwLC41Ny0zLjMzVjIzNi45Mmg4LjUydjIzLjc3WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTguNTEgLTE5My4yOSkiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0yODUsMjM2LjkyaDExLjU4bDE2LjQ1LDI2Ljg5aDAuMTFWMjM2LjkyaDguNTJ2MzguNjlIMzEwLjU1bC0xNi44OS0yNy41NGgtMC4xMXYyNy41NEgyODVWMjM2LjkyWiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTguNTEgLTE5My4yOSkiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0zMzcuMDUsMjQ0LjQ2SDMyNnYtNy41NGgzMC42djcuNTRoLTExdjMxLjE1aC04LjUyVjI0NC40NloiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC04LjUxIC0xOTMuMjkpIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMzc0LjY1LDIzNi41OXE5LDAsMTMuODgsNC41OXQ0Ljg2LDE0YTMxLjU4LDMxLjU4LDAsMCwxLTEuMDksOC43MiwxNi4yOCwxNi4yOCwwLDAsMS0zLjM5LDYuMzksMTQuNjgsMTQuNjgsMCwwLDEtNS44NSw0LDIzLjQyLDIzLjQyLDAsMCwxLTguNDIsMS4zN0gzNjEuMjZ2LTM5aDEzLjM5Wm0wLjQ0LDM0LjY1YTIxLjgyLDIxLjgyLDAsMCwwLDIuMTktLjE0LDEyLjIyLDEyLjIyLDAsMCwwLDIuNzktLjY2LDEyLjcyLDEyLjcyLDAsMCwwLDIuOTItMS41LDkuODcsOS44NywwLDAsMCwyLjYtMi42OCwxNSwxNSwwLDAsMCwxLjg4LTQuMjMsMjIuMjYsMjIuMjYsMCwwLDAsLjc0LTYuMTUsMjYuMTMsMjYuMTMsMCwwLDAtLjY4LTYuMjYsMTIsMTIsMCwwLDAtMi4yNC00LjcsOS44NSw5Ljg1LDAsMCwwLTQtMywxNiwxNiwwLDAsMC02LjA3LTFoLTguNzR2MzAuMjdoOC42M1oiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC04LjUxIC0xOTMuMjkpIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNDA1LjE0LDIzNi41OXYzOWgtNS4xOXYtMzloNS4xOVoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC04LjUxIC0xOTMuMjkpIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNDM3LjM4LDI3NS4xNGExOC40NSwxOC40NSwwLDAsMS02LjgzLDEuMzQsMTguMjQsMTguMjQsMCwwLDEtNy44MS0xLjYxLDE3LjY0LDE3LjY0LDAsMCwxLTUuODUtNC4zNCwxOSwxOSwwLDAsMS0zLjY2LTYuMjgsMjIsMjIsMCwwLDEtMS4yNi03LjM4LDI3LjY3LDI3LjY3LDAsMCwxLDEuMTctOC4xMiwyMCwyMCwwLDAsMSwzLjUtNi43NSwxNywxNywwLDAsMSw1Ljc5LTQuNjIsMTguMDUsMTguMDUsMCwwLDEsOC4xMi0xLjcyLDIzLjU1LDIzLjU1LDAsMCwxLDYsLjc0LDE1LjE1LDE1LjE1LDAsMCwxLDUsMi4zMiwxMy44LDEzLjgsMCwwLDEsMy43Miw0LDE1LjgsMTUuOCwwLDAsMSwyLDUuODhoLTUuMTlhMTAuMjQsMTAuMjQsMCwwLDAtMS40Mi0zLjg1LDkuMTYsOS4xNiwwLDAsMC0yLjU3LTIuNjUsMTEuNCwxMS40LDAsMCwwLTMuNDctMS41NiwxNS45MiwxNS45MiwwLDAsMC00LjEyLS41MiwxMS44NiwxMS44NiwwLDAsMC0xMC4yNSw1LjE2LDE2LjMsMTYuMywwLDAsMC0yLjM4LDUuMywyNC4zNywyNC4zNywwLDAsMC0uNzcsNi4wOSwxOS42NywxOS42NywwLDAsMCwuODcsNS44NywxNS4zNCwxNS4zNCwwLDAsMCwyLjU3LDUsMTIuNTYsMTIuNTYsMCwwLDAsNC4xOCwzLjQ0LDEyLjM5LDEyLjM5LDAsMCwwLDUuNzcsMS4yOCwxMy45LDEzLjksMCwwLDAsNS40MS0xLDExLjE0LDExLjE0LDAsMCwwLDYuMzktNi43NSwxMy4yNywxMy4yNywwLDAsMCwuNzEtNUg0MzAuNnYtNC4zN2gxNy4xdjIwLjU1aC0zLjI4bC0xLjM3LTQuODZBMTMsMTMsMCwwLDEsNDM3LjM4LDI3NS4xNFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC04LjUxIC0xOTMuMjkpIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNDYwLjc3LDIzNi41OXYzOWgtNS4xOXYtMzloNS4xOVoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC04LjUxIC0xOTMuMjkpIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNDY1LjM2LDI0MXYtNC4zN2gzMS4yVjI0MWgtMTN2MzQuNjVoLTUuMTlWMjQxaC0xM1oiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC04LjUxIC0xOTMuMjkpIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNTE3LjIxLDIzNi41OWwxNS4yNSwzOWgtNS43NGwtNC4yNi0xMS43NUg1MDZsLTQuMzcsMTEuNzVoLTUuM2wxNS4xOS0zOWg1Ljc0Wm0zLjYxLDIyLjktNi41LTE4LjJoLTAuMTFsLTYuNjEsMTguMmgxMy4yMloiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC04LjUxIC0xOTMuMjkpIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNTQxLjQ4LDIzNi41OXYzNC42NWgyMC42NnY0LjM3SDUzNi4yOXYtMzloNS4xOVoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC04LjUxIC0xOTMuMjkpIi8+PGcgaWQ9IkZvcm1hXzEiIGRhdGEtbmFtZT0iRm9ybWEgMSIgY2xhc3M9ImNscy0yIj48ZyBpZD0iRm9ybWFfMS0yIiBkYXRhLW5hbWU9IkZvcm1hIDEiPjxwYXRoIGNsYXNzPSJjbHMtMyIgZD0iTTY0LjMzLDE5My4yOUw5LjA5LDIyNC42NGwtMC41OCw2My43LDU0LjY2LDMyLjM1LDU1LjI0LTMxLjM1LDAuNTgtNjMuN1ptNDkuMzYsOTMuMjVMNjMuMjIsMzE1LjE5LDEzLjI4LDI4NS42M2wwLjUzLTU4LjIsNTAuNDctMjguNjQsNDkuOTQsMjkuNTZaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtOC41MSAtMTkzLjI5KSIvPjwvZz48L2c+PC9zdmc+" alt="Flaunt Digital">
        </div>

        <h2 style="color: white">Wizards of the Week</h2>
        <section class="flex items-top justify-center  sm:items-center sm:pt-0 dashboard-content">
            <div class="pt-8 w-full max-w-6xl mx-auto sm:px-6 lg:px-8 container">
                <div class="mb-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div style="display:flex; flex-direction: row; text-align: center;">
                        @foreach ($wizards as $wizard)
                            <a href="{{ route('wizardify', $wizard->id) }}" style="line-height: 0; padding-bottom: 5px">
                                <div class="p-6 m-6 bg-gray-100 overflow-hidden shadow sm:rounded-lg groups-card" style="display:flex; flex-direction: column;">
                                    @if ($wizard->wizard)
                                        <img src="{{ asset('images/wizard-hat_3.jpg') }}" style="max-height: 50px" />
                                    @else
                                        <div style="padding-bottom: 50px;" ></div>
                                    @endif
                                    <a href="{{ route('wizards.show', $wizard->id) }}">{{ $wizard->name }}</a>
                                    <hr>
                                    <a style="color: green" href="{{ route('wizards.edit', $wizard->id) }}">Edit</a>
                                    <form action="{{ route('wizards.destroy', $wizard->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
    <a href="{{ route('dewizardify') }}" style="padding-top: 10px; color: white">Clear all</a>
</div>
@include('layouts.footer-contents')