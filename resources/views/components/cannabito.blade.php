<div class="flex justify-center items-center h-screen">
    <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-2xl">
        <div class="flex flex-col h-[500px]">
            <!-- Área de mensajes -->
            <div class="flex-1 overflow-y-auto">
                {{-- <!-- Mensaje de Cannabito -->
                <div class="mb-4"> <!-- Aumento el margen entre mensajes -->
                    <div class="flex items-center space-x-2"> <!-- Aumento el espacio entre el icono y el texto -->
                        <!-- Icono o imagen -->
                        <div
                            class="flex items-center justify-center h-10 w-10 rounded-full bg-emerald-200 flex-shrink-0">
                            <img class="w-8 h-8 rounded-full" src="{{ asset('storage/images/cannabis.png') }}"
                                alt="Cannabito">
                        </div>
                        <!-- Texto al lado del icono -->
                        <span class="text-gray-800 text-sm font-medium">Cannabito</span>
                    </div>
                    <div class="p-2 bg-emerald-200 rounded-lg">
                        <p class="text-sm">Hola, ¿cómo estás?</p>
                    </div>
                </div>
                <!-- Mensaje de respuesta -->
                <div class="mb-4 text-right"> <!-- Aumento el margen y alineación a la derecha -->
                    <div class="flex items-center justify-end space-x-2">
                        <!-- Alineación y espaciado correctos para respuesta -->
                        <!-- Icono o imagen -->
                        <div class="flex items-center justify-center h-10 w-10 rounded-full bg-gray-100 flex-shrink-0">
                            Tú
                        </div>
                    </div>
                    <div class="p-2 bg-gray-100 rounded-lg">
                        <p class="text-sm">¡Bien, gracias! ¿Y tú?</p>
                    </div>
                </div> --}}
            </div>
            <!-- Área de entrada de texto fija -->
            <div class="flex justify-center items-center h-screen">
                <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-2xl"
                    style="position: fixed; bottom: 0; left: 50%; transform: translateX(-50%); padding: 20px; width: 100%; max-width: 1204px;">
                    <div class="flex flex-col h-[500px]">
                        <div class="flex-1 overflow-y-auto">
                            <div class="mb-4">
                                {{-- <form action="{{ url('/chat') }}" method="POST">
                                    @csrf
                                    <input type="text" name="message"
                                        class="w-full p-2 border-gray-300 rounded-lg focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                                        placeholder="Escribe tu mensaje aquí...">
                                </form> --}}
                                <form action="{{ url('/chat') }}" method="POST" class="flex items-center">
                                    @csrf
                                    <input type="text" name="message" placeholder="Escribe tu mensaje aquí..." class="flex-1 p-2 border-gray-300 rounded-l-lg focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-r-lg">
                                        Enviar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
