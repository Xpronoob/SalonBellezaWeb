<x-app-layout>
    <!-- Appointments -->
    <div class="flex justify-center">
        <div class="max-w-lg w-full mt-2">
            <h2 class="text-xl font-semibold mb-2">{{ __('Mis Citas') }}</h2>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                @if ($appointments->isEmpty())
                    <p>No tienes citas programadas.</p>
                @else
                    <ul>
                        @foreach ($appointments as $appointment)
                            <li>
                                <strong>Fecha:</strong> {{ $appointment->appointment_date }}<br>
                                <strong>Ubicación:</strong> {{ $appointment->location }}<br>
                                <strong>Estilista:</strong> {{ $appointment->stylist }}<br>
                                <strong>Descripción:</strong> {{ $appointment->description }}<br>
                                <strong>Costo: ₡</strong> {{ $appointment->cost }}<br>

                                <!-- Modal de confirmación -->
                                <button type="button" class="text-red-500 hover:text-red-700"
                                    onclick="openModal('{{ $appointment->id }}')">
                                    Eliminar
                                </button>

                                <div id="modal-{{ $appointment->id }}" class="fixed z-10 inset-0 overflow-y-auto hidden"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div
                                        class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                            aria-hidden="true"></div>
                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                            aria-hidden="true">&#8203;</span>
                                        <div
                                            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                <div class="sm:flex sm:items-start">
                                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                        <h3 class="text-lg leading-6 font-medium text-gray-900 ml-8"
                                                            id="modal-headline">
                                                            ¿Estás seguro de que deseas eliminar esta cita?
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                <form action="{{ route('appointments.destroy', $appointment->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none sm:ml-3 sm:w-auto sm:text-sm">
                                                        Eliminar
                                                    </button>
                                                </form>
                                                <button type="button" onclick="closeModal('{{ $appointment->id }}')"
                                                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-white text-base font-medium text-black hover:bg-gray-50 focus:outline-none  sm:ml-3 sm:w-auto sm:text-sm">
                                                    Cancelar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <hr class="my-4">
                        @endforeach
                    </ul>
                @endif

                @if (session('deleted'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                        role="alert">
                        <span class="block sm:inline">{{ session('deleted') }}</span>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        function openModal(id) {
            document.getElementById(`modal-${id}`).classList.remove('hidden');
        }

        function closeModal(id) {
            document.getElementById(`modal-${id}`).classList.add('hidden');
        }
    </script>
</x-app-layout>
