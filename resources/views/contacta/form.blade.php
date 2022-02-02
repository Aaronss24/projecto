
<form class="w-full max-w-lg border-4 " method="POST" action="{{ route('contacta.store') }}">
    @csrf
     <h1 class="font-semibold py-5 text-blue mb-10 bg-blue-900 text-white px-5"> Formulario </h1>
    
    <div class="flex flex-wrap -mt-10">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="name">
                {{ __("Nombre") }}
            </label>
            <input name="name" value="{{ Auth::user()->name }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" type="text">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Nombre del usuario") }}</p>
            @error("name")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="email">
                {{ __("Email") }}
            </label>
            <input name="email" value="{{ Auth::user()->email }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" type="text">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Email de contacto") }}</p>
            @error("email")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap mt-3">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="mensaje">
                {{ __("Mensaje") }}
            </label>
            <textarea name="mensaje" class="no-resize appearance-none block w-full bg-gray-300 
            text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none 
            focus:bg-white focus:border-gray-500 h-48 resize-none" id="mensaje"></textarea>
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Escribe tu mensaje") }}</p>
            @error("mensaje")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="md:flex md:items-center">
        <div class="md:w-1/3">
            <button class="shadow bg-teal-400 mt-5 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                {{ 'Enviar mensaje' }}
            </button>
        </div>
    </div>
</form>
</div>
