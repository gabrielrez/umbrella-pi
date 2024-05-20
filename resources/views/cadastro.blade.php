@extends('config')
@section('content')

<div class="pt-4 bg-cBase1 h-screen bg-no-repeat mx-auto text-center">
  <h1 class="login-title text-3xl poppins-semibold text-white">Criar Conta</h1>
  <form class="mt-8 w-90 max-w-sm mx-auto bg-white p-10 rounded-lg shadow-lg">
    <div class="flex flex-wrap -mx-2">
      <div class="input mb-4 w-full md:w-1/2 px-2">
        <label class="block text-left poppins-medium text-gray-700">Nome</label>
        <input type="text" class="roboto-regular w-full p-4 mt-2 bg-white rounded-lg border border-gray-300" placeholder="Nome*" required>
      </div>
      <div class="input mb-4 w-full md:w-1/2 px-2">
        <label class="block text-left poppins-medium text-gray-700">Email</label>
        <input type="email" class="roboto-regular w-full p-4 mt-2 bg-white rounded-lg border border-gray-300" placeholder="Email*" required>
      </div>
      <div class="input mb-4 w-full md:w-1/2 px-2">
        <label class="block text-left poppins-medium text-gray-700">CNPJ</label>
        <input type="text" class="roboto-regular w-full p-4 mt-2 bg-white rounded-lg border border-gray-300" placeholder="CNPJ*" required>
      </div>
      <div class="input mb-4 w-full md:w-1/2 px-2">
        <label class="block text-left poppins-medium text-gray-700">Senha</label>
        <input type="password" class="roboto-regular w-full p-4 mt-2 bg-white rounded-lg border border-gray-300" placeholder="Senha*" required>
      </div>
    </div>
    <button class="w-full py-4 mt-6 bg-cBase1 text-white rounded-lg text-lg poppins-semibold">Entrar</button>
    <a class="form-link block mt-4 underline roboto-regular text-gray-600">Já possui uma conta?</a>
  </form>
</div>

@endsection