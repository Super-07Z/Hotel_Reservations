<x-app-layout>
    <h1 class="text-center font-semibold text-2xl my-8">Editar Reservación</h1>
 
    <div class="max-w-lg mx-auto my-8">
        <form action="{{ route('admin.bokkings.update', $bokking->id) }}" method="post" autocomplete="off">
            @csrf
            @method('put')

            <x-input-error :messages="$errors->get('entry')" class="mt-2" />
            <div class="mb-4">
                <label for="entry" class="block font-medium text-sm text-gray-700 mb-2">Fecha de entrada</label>
                <input 
                    id="entry"
                    name="entry"
                    type="date"
                    value="{{ old('entry', $bokking->entry) }}"
                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                >
            </div>

            <x-input-error :messages="$errors->get('departure')" class="mt-2" />
            <div class="mb-4">
                <label for="departure" class="block font-medium text-sm text-gray-700 mb-2">Fecha de salida</label>
                <input 
                    id="departure"
                    name="departure"
                    type="date"
                    value="{{ old('departure', $bokking->departure) }}"
                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                >
            </div>

            <x-input-error :messages="$errors->get('amount')" class="mt-2" />
            <div class="mb-4">
                <label for="amount" class="block font-medium text-sm text-gray-700 mb-2">Cantidad</label>
                <input 
                    id="amount"
                    name="amount"
                    type="number"
                    value="{{ old('amount', $bokking->amount) }}"
                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                >
            </div>

            <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
            <div class="mb-4">
                <label for="user_id" class="block font-medium text-sm text-gray-700 mb-2">ID del usuario</label>
                <input 
                    id="user_id"
                    name="user_id"
                    type="text"
                    value="{{ old('user_id', $bokking->user_id) }}"
                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                >
            </div>

            <x-input-error :messages="$errors->get('room_id')" class="mt-2" />
            <div class="mb-4">
                <label for="room_id" class="block font-medium text-sm text-gray-700 mb-2">ID de la habitación</label>
                <input 
                    id="room_id"
                    name="room_id"
                    type="text"
                    value="{{ old('room_id', $bokking->room_id) }}"
                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                >
            </div>

            <x-input-error :messages="$errors->get('costo')" class="mt-2" />
            <div class="mb-4">
                <label for="costo" class="block font-medium text-sm text-gray-700 mb-2">Costo</label>
                <input 
                    id="costo"
                    name="costo"
                    type="number"
                    value="{{ old('costo', $bokking->costo) }}"
                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                >
            </div>

            <x-input-error :messages="$errors->get('paymenth_id')" class="mt-2" />
            <div class="mb-4">
                <label for="paymenth_id" class="block font-medium text-sm text-gray-700 mb-2">ID del método de pago</label>
                <input 
                    id="paymenth_id"
                    name="paymenth_id"
                    type="text"
                    value="{{ old('paymenth_id', $bokking->paymenth_id) }}"
                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"
                >
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-sm text-gray-100 hover:text-white px-4 py-2 rounded mt-8">
                    Actualizar
                </button>
            </div>
        </form>
    </div>
</x-app-layout>

