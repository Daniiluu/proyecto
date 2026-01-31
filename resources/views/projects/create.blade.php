<x-layout>
    <div class="max-w-2xl mx-auto py-12 px-6 mt-16">
        <h1 class="text-3xl font-bold mb-6">Crear nuevo proyecto</h1>

        <form action="{{ route('projects.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block mb-1 font-semibold" for="name">Nombre del proyecto</label>
                <input type="text" name="name" id="name" class="input input-bordered w-full border border-black rounded-2xl h-8 pl-3" required>
            </div>

            <div>
                <label class="block mb-1 font-semibold" for="description">Descripción</label>
                <textarea name="description" id="description" class="textarea textarea-bordered w-full border border-black rounded-2xl pl-3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary bg-blue-950 text-white w-35 h-10 rounded-4xl">Crear proyecto</button>
        </form>
    </div>
</x-layout>
