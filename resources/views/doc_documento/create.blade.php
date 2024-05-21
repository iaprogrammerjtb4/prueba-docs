@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} D O C U M E N T O
@endsection

@section('content')
<body class="antialiased bg-gray-100 flex justify-center items-center h-screen">
    <div id="app" class="w-full max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
        <div v-if="message" :class="messageClass">@{{message}}</div>
        <form @submit.prevent="uploadFile">
            <div class="mb-4">
                <label for="DOC_NOMBRE" class="block text-gray-700 text-sm font-bold mb-2">Nombre del Documento</label>
                <input type="text" id="DOC_NOMBRE" v-model="form.DOC_NOMBRE" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="DOC_CODIGO" class="block text-gray-700 text-sm font-bold mb-2">Código del Documento</label>
                <input type="text" id="DOC_CODIGO" v-model="form.DOC_CODIGO" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="DOC_ID_TIPO" class="block text-gray-700 text-sm font-bold mb-2">ID Tipo del Documento</label>
                <select  v-model="form.DOC_ID_TIPO"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value="">Seleccione un proceso</option>
                    @foreach (app(App\Http\Controllers\TIPTIPODOCController::class)->getTipo() as $tipo)
                        <option value="{{ $tipo->TIP_ID }}">{{$tipo->TIP_PREFIJO}} - {{ $tipo->TIP_NOMBRE }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="DOC_ID_PROCESO" class="block text-gray-700 text-sm font-bold mb-2">Proceso</label>
                <select v-model="form.DOC_ID_PROCESO"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value="">Seleccione un proceso</option>
                    @foreach (app(App\Http\Controllers\ProProcesoController::class)->getProcesos() as $proceso)
                        <option value="{{ $proceso->PRO_ID }}">{{$proceso->PRO_PREFIJO}} - {{ $proceso->PRO_NOMBRE }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="file" class="block text-gray-700 text-sm font-bold mb-2">Selecciona un archivo</label>
                <input type="file" id="file" @change="handleFileUpload" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Subir
                </button>
                <button type="reset" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" @click="resetForm">
                    Cancelar
                </button>
            </div>
        </form>
    </div>
    <script>
        const { createApp } = Vue;

        createApp({
            data() {
                return {
                    form: {
                        DOC_NOMBRE: '',
                        DOC_CODIGO: '',
                        DOC_ID_TIPO: '',
                        DOC_ID_PROCESO: '',
                        file: null,
                    },
                    message: '',
                    messageClass: '',
                };
            },
            methods: {
                handleFileUpload(event) {
                    this.form.file = event.target.files[0];
                },
                async uploadFile() {
                    const formData = new FormData();
                    formData.append('DOC_NOMBRE', this.form.DOC_NOMBRE);
                    formData.append('DOC_CODIGO', this.form.DOC_CODIGO);
                    formData.append('DOC_ID_TIPO', this.form.DOC_ID_TIPO);
                    formData.append('DOC_ID_PROCESO', this.form.DOC_ID_PROCESO);
                    formData.append('file', this.form.file);

                    try {
                        const response = await fetch('/api/doc-documentos', {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'Accept': 'application/json',
                            },
                        });

                        const data = await response.json();
                        if (response.ok) {
                            this.message = data.success;
                            this.messageClass = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4';
                            this.resetForm();
                        } else {
                            this.message = data.error;
                            this.messageClass = 'bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4';
                        }
                    } catch (error) {
                        console.error('Error al subir el archivo:', error);
                        this.message = 'Subido con éxito.';
                        this.messageClass = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4';
                    }
                },
                resetForm() {
                    this.form.DOC_NOMBRE = '';
                    this.form.DOC_CODIGO = '';
                    this.form.DOC_ID_TIPO = '';
                    this.form.DOC_ID_PROCESO = '';
                    this.form.file = null;
                    this.$refs.fileInput.value = null;
                    this.message = '';
                    this.messageClass = '';
                },
            },
        }).mount('#app');
    </script>
</body>
</html>

@endsection
