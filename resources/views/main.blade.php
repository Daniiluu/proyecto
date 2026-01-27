<x-layout>
    <div
        class="hero min-h-screen"
        style="background-image: url(https://images.unsplash.com/photo-1508027347466-400cc1518d61?q=80&w=1332&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);"
    >
        <div class="hero-overlay bg-opacity-60"></div>

        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md text-white">
                <h1 class="mb-5 text-5xl font-bold ">
                    {{ __("Bienvenido a la aplicación") }}
                </h1>

                <p class="mb-5">
                    {{ __("Aquí puedes ver nuestras utilidades aprendiendo Laravel") }}
                </p>

                <button class="btn btn-primary">
                    {{ __("Empezar") }}
                </button>
            </div>
        </div>
    </div>

</x-layout>
