@extends("layouts.app2")

@section("content")
    <div class="flex justify-center flex-wrap bg-gray-200 p-4 mt-5">
        <div class="text-center">
            <h1 class="mb-5">{{ __("Listado de proyectos") }}</h1>
            <a href="{{ route('projects.create') }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                {{ __("Crear proyecto") }}
            </a>
        </div>
    </div>

    <table class="border-separate border-2 text-center border-gray-500 mt-3" style="width: 100%">
        <thead>
        <tr>
            <th class="px-4 py-2">{{ __("Nombre") }}</th>
            <th class="px-4 py-2">{{ __("Usuario") }}</th>
            <th class="px-4 py-2">{{ __("Alta") }}</th>
            <th class="px-4 py-2">{{ __("Acciones") }}</th>
        </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
                <tr>
                    <td class="border px-4 py-2">{{ $project->name }}</td>
                    <td class="border px-4 py-2">{{ $project->user->name }}</td>
                    <td class="border px-4 py-2">{{ date_format($project->created_at, "d/m/Y") }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('projects.edit', ['project' => $project]) }}" class="text-blue-400">{{ __("Editar") }}</a> |
                        <a
                            href="#"
                            class="text-red-400"
                            onclick="event.preventDefault();
                                document.getElementById('delete-project-{{ $project->id }}-form').submit();"
                        >{{ __("Eliminar") }}
                        </a>
                        <form id="delete-project-{{ $project->id }}-form" action="{{ route('projects.destroy', ['project' => $project]) }}" method="POST" class="hidden">
                            @method("DELETE")
                            @csrf
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">
                        <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <p><strong class="font-bold">{{ __("No hay proyectos") }}</strong></p>
                            <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
 
  @if($projects->count())
        <div class="mt-3">
            {{ $projects->links() }}
           
        </div>
    @endif

@endsection
