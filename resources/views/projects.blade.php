<x-layout>
    <div class="max-w-5xl mx-auto py-12 mt-16 px-6">

        <h1 class="text-3xl font-bold mb-8 text-center">
            Mis proyectos
        </h1>
        @if ($projects->isEmpty())
            <div class="bg-gray-100 p-8 rounded-xl text-center">
                <p class="text-gray-600 mb-6">
                    Aún no has creado ningún proyecto.
                </p>

                <a href="{{ route('projects.create') }}" class="btn btn-primary bg-blue-950 text-white w-35 h-10 rounded-4xl">
                    Crear primer proyecto
                </a>
            </div>

        @else
            <div class="mb-6 text-right">
                <a href="{{ route('projects.create') }}" class="btn btn-primary bg-blue-950 text-white p-3 rounded-2xl">
                    Crear nuevo proyecto
                </a>
            </div>

            <div class="space-y-4">
                @foreach ($projects as $project)
                    <div class="bg-white p-6 rounded-xl shadow flex justify-between items-start">

                        {{-- Info del proyecto --}}
                        <div>
                            <h2 class="text-xl font-semibold">{{ $project->name }}</h2>
                            <p class="text-gray-600 mt-2">{{ $project->description }}</p>
                        </div>

                        <div class="flex gap-3">

                            <a href="{{ route('projects.edit', $project) }}" class="btn btn-sm btn-outline bg-blue-950 text-white rounded-2xl w-16 p-3">
                                Editar
                            </a>
                            <form
                                method="POST"
                                action="{{ route('projects.destroy', $project) }}"
                                onsubmit="return confirm('¿Seguro que quieres eliminar este proyecto?')"
                            >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-error bg-blue-950 text-white rounded-2xl w-21 p-3">
                                    Eliminar
                                </button>
                            </form>

                        </div>
                    </div>
                @endforeach
            </div>
        @endif

    </div>
</x-layout>
