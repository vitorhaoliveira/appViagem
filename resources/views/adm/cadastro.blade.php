<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="form-container">
                        <h2 class="text-center">Cadastro das Cidades</h2>
                        <form>
                            <div class="mb-3">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade" required>
                            </div>


                            <div class="mb-3">
                                <label for="descricaoCard" class="form-label">Descrição para o Card</label>
                                <textarea class="form-control" id="descricaoCard" rows="2" maxlength="100"
                                    required></textarea>
                                <small class="form-text text-muted">Máximo de 100 caracteres</small>
                            </div>


                            <div class="mb-3">
                                <label for="descricaoCompleta" class="form-label">Descrição Completa</label>
                                <textarea class="form-control" id="descricaoCompleta" rows="5" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="valor" class="form-label">Valor</label>
                                <input type="number" class="form-control" id="valor" required>
                            </div>


                            <div class="mb-3">
                                <label for="fotoCard" class="form-label">Foto para o Card</label>
                                <input type="file" class="form-control" id="fotoCard" accept="image/*" required>
                            </div>


                            <div class="mb-3">
                                <label for="fotoDescricao" class="form-label">Foto para a Descrição</label>
                                <input type="file" class="form-control" id="fotoDescricao" accept="image/*" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
