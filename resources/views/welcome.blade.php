<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="icon" href="img/umbrella.svg">
  <title>Umbrella - Landing Page</title>
  @vite('resources/css/app.css')
</head>

<body class="box-border">
  <header id="home" class="max-w-screen-xl m-auto p-5 flex items-center justify-between text-cBlack">
    <img src="img/umbrella-logo.svg">
    <nav class="flex items-center gap-12">
      <ul data-scroll="smooth" class="flex gap-12">
        <li><a href="#about" class="py-4 font-poppins font-medium">Sobre Nós</a></li>
        <li><a href="#benefits" class="py-4 font-poppins font-medium">Vantagens</a></li>
        <li><a href="#faq" class="py-4 font-poppins font-medium">FAQ</a></li>
      </ul>
      <a href="./html/login.html" class="py-2 px-12 bg-cBase text-gray-50 rounded-lg font-poppins font-semibold text-sm">ENTRAR</a>
    </nav>
  </header>


  <main data-anima="show-up" class="max-w-screen-xl m-auto p-5 grid grid-cols-2 gap-10 mt-16">
    <div class="self-center">
      <h1 class="font-poppins text-6xl font-semibold leading-tight mb-8">Inove na Gestão<br>da sua Clínica<span class="text-cBase">.</span></h1>
      <p class="font-roboto text-2xl mb-5 text-gray-700">Agende consultas, gerencie pacientes, acompanhe registros médicos e controle finanças de forma integrada e segura.</p>
      <a class="px-6 py-4 bg-cBase text-gray-50 font-bold rounded-lg shadow-md inline-block cursor-pointer">COMEÇAR AGORA</a>
    </div>
    <img src="img/home-img.png">
    <!-- <img src="img/home-img-mobile.svg"> -->
  </main>


  <section id="about" class="mt-16 max-w-screen-lg mx-auto p-5 text-center">
    <div data-anima="show-left">
      <h1 class="text-6xl font-semibold font-poppins leading-tight mb-8">Sobre Nós<span class="text-cBase">.</span></h1>
      <span class="w-40 h-1 bg-cBase block mx-auto mb-8"></span>
      <p class="text-xl leading-relaxed font-roboto text-gray-700 flex flex-col items-center gap-8">Nosso objetivo é oferecer uma solução abrangente que permita aos médicos e administradores focarem no que realmente importa: o cuidado com os pacientes. Desde o agendamento de consultas até o acompanhamento do histórico médico, o Umbrella oferece ferramentas flexíveis e eficientes para otimizar todos os aspectos da operação clínica.</p>
      <img src="img/about-img.svg" width="500" class="mx-auto mt-12">
    </div>
  </section>


  <section id="benefits" class="bg-cBase2 mt-16 p-10">
    <div class="max-w-screen-xl m-auto p-5">
      <h1 data-anima="show-left" class="text-6xl font-semibold font-poppins text-center leading-tight mb-8 text-4xl text-gray-50">Vantagens<span class="text-cBase3">.</span></h1>
      <span class="w-40 h-1 bg-cBase3 block mx-auto mb-8"></span>
      <div class="mt-28 grid grid-cols-3 justify-between items-baseline gap-10">
        <div data-anima="show-up" class="flex flex-col items-center text-center mb-10">
          <img src="img/schedule.svg">
          <h3 class="mt-6 text-3xl font-poppins font-medium leading-relaxed text-cBase3">Gestão de Agenda</h3>
          <p class="mt-1 text-base font-roboto leading-relaxed text-gray-50">Simplifique a gestão dos seus compromissos com um sistema prático de agendamento. Otimize a administração com facilidade!</p>
        </div>
        <div data-anima="show-down" class="flex flex-col items-center text-center mb-10">
          <img src="img/folder.svg">
          <h3 class="mt-6 text-3xl font-poppins font-medium leading-relaxed text-cBase3">Prontuário Eletrônico</h3>
          <p class="mt-1 text-base font-roboto leading-relaxed text-gray-50">Registre informações de pacientes em cada sessão e acesse os prontuários de forma conveniente, em qualquer lugar e a qualquer momento.</p>
        </div>
        <div data-anima="show-up" class="flex flex-col items-center text-center mb-10">
          <img src="img/people.svg">
          <h3 class="mt-6 text-3xl font-poppins font-medium leading-relaxed text-cBase3">Gestão de Pacientes</h3>
          <p class="mt-1 text-base font-roboto leading-relaxed text-gray-50">Cadastre seus pacientes e tenha todos os dados essenciais na palma da mão, proporcionando uma gestão eficiente e acessível a qualquer momento.</p>
        </div>
      </div>
    </div>
  </section>


  <section id="faq" class="max-w-screen-xl m-auto p-5 mt-16">
    <h1 data-anima="show-left" class="text-6xl font-semibold font-poppins text-center leading-tight mb-8 text-cBlack">Perguntas Frequentes<span class="text-cBase">.</span></h1>
    <span class="w-40 h-1 bg-cBase block mx-auto mb-8"></span>
    <dl data-accordion="accordion" data-anima="show-up" class="mt-16">
      <div id="accordion" class="p-5 rounded-lg cursor-pointer bg-gray-100">
        <dt class="text-lg font-poppins font-semibold flex items-center gap-2 text-base leading-5 text-cBlack"><span class="duration-75 inline-block w-4 h-2 bg-cBase3"></span>Para quem é direcionada a plataforma?</dt>
        <dd class="animate-accordion font-roboto ml-4 mt-4 max-w-screen-ch text-base leading-relaxed max-w-prose">
          O sistema da Umbrella é direcionado para clínicas, médicos e pacientes que querem facilidade no agendamento e no acompanhamento de consultas.
        </dd>
      </div>
      <div id="accordion" class="p-5 rounded-lg cursor-pointer">
        <dt class="text-lg font-poppins font-semibold flex items-center gap-2 text-base leading-5 text-cBlack"><span class="duration-75 inline-block w-2 h-4 bg-cBase3"></span>Como posso entrar em contato?</dt>
        <dd class="animate-accordion font-roboto ml-4 mt-4 max-w-screen-ch text-base leading-relaxed max-w-prose hidden">
          Você poed entrar em contato pelo email ou pelo telefone: <br>
          Email: umbrella@umbrela.com <br>
          Telefone: (99) 9999-9999
        </dd>
      </div>
      <div id="accordion" class="p-5 rounded-lg cursor-pointer bg-gray-100">
        <dt class="text-lg font-poppins font-semibold flex items-center gap-2 text-base leading-5 text-cBlack"><span class="duration-75 inline-block w-2 h-4 bg-cBase3"></span>É seguro?</dt>
        <dd class="animate-accordion font-roboto ml-4 mt-4 max-w-screen-ch text-base leading-relaxed max-w-prose hidden">
          Sim, os dados são armazenados de forma segura no sistema, seguindo todas as diretrizes de privacidade e segurança de dados.
        </dd>
      </div>
      <div id="accordion" class="p-5 rounded-lg cursor-pointer">
        <dt class="text-lg font-poppins font-semibold flex items-center gap-2 text-base leading-5 text-cBlack"><span class="duration-75 inline-block w-2 h-4 bg-cBase3"></span>Posso acessar os prontuários de qualquer lugar?</dt>
        <dd class="animate-accordion font-roboto ml-4 mt-4 max-w-screen-ch text-base leading-relaxed max-w-prose hidden">Sim, você pode acessar os prontuários de qualquer lugar, desde que tenha uma conexão à internet e acesso ao sistema.</dd>
      </div>
    </dl>
  </section>


  <footer class="bg-cBase2 mt-16 p-10">
    <div class="max-w-screen-xl m-auto py-15 px-5 grid grid-cols-3 gap-10">
      <img src="img/umbrella-logo-footer.svg">
      <div>
        <h3 class="text-xl font-poppins text-gray-50 mb-8 text-lg leading-relaxed">Contato</h3>
        <ul data-scroll="smooth" class="mb-4">
          <li class="font-roboto mb-2 text-base leading-relaxed"><a class="text-gray-400" href="tel:+5599999999">+55 (99) 9999-9999</a></li>
          <li class="font-roboto mb-2 text-base leading-relaxed"><a class="text-gray-400" href="mailto:umbrella@umbrella.com">umbrella@umbrella.com</a></li>
        </ul>
      </div>
      <div>
        <h3 class="text-xl font-poppins text-gray-50 mb-8 text-lg leading-relaxed">Informações</h3>
        <ul data-scroll="smooth" class="mb-2">
          <li class="font-roboto mb-2 text-base leading-relaxed"><a class="text-gray-400" href="#home">Início</a></li>
          <li class="font-roboto mb-2 text-base leading-relaxed"><a class="text-gray-400" href="#about">Sobre Nós</a></li>
          <li class="font-roboto mb-2 text-base leading-relaxed"><a class="text-gray-400" href="#benefits">Vantagens</a></li>
          <li class="font-roboto mb-2 text-base leading-relaxed"><a class="text-gray-400" href="#faq">Perguntas Frequentes</a></li>
        </ul>
      </div>
      <p class="font-roboto text-gray-400">Umbrella © Direitos reservados.</p>
    </div>
  </footer>

  <script src="/scripts/lp.js"></script>
</body>

</html>