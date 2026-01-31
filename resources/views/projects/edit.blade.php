<x-layout>
    <div class="max-w-2xl mx-auto py-12 px-6 mt-16">
        <h1 class="text-3xl font-bold mb-6">Editar proyecto</h1>

        <form action="{{ route('projects.update', $project) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block mb-1 font-semibold" for="name">Nombre del proyecto</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    class="input input-bordered w-full border border-black rounded-2xl pl-3"
                    value="{{ old('name', $project->name) }}"
                    required
                >
            </div>

            <div>
                <label class="block mb-1 font-semibold" for="description">Descripción</label>
                <textarea
                    name="description"
                    id="description"
                    class="textarea textarea-bordered w-full border border-black rounded-2xl pl-3"
                >{{ old('description', $project->description) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary  bg-blue-950 text-white p-3 rounded-2xl">Actualizar proyecto</button>
        </form>
    </div>

</x-layout>
