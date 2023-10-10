<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')

</head>
<body class=" font-nunito font-medium">

    <!-- header -->
  <nav class="container relative max-w-full shadow-sm" >
    <!-- flex -->
    <div class="flex justify-between items-center bg-[#0D324D] w-full">
        <!-- logo -->
        <div class="ml-14">
          <a href="/"><img class="h-20 w-40" src="image003.png" alt="logo"></a>
        </div>
        <!-- menu -->
        <div class="text-white hidden space-x-6 md:flex ml-80">
          <a href="https://forexcargodeals.com/edmonton/book-online" class="hover:border-b-2 hover:border-[#ffdd02] duration-75"> Send Goods</a>
          <a href="https://calgarytracking.forexcargodeals.com" class=" hover:border-b-2 hover:border-[#ffdd02] duration-75">Track Calgary</a>
     
        </div>
        <!-- button -->
        <a
          href="https://www.google.com/maps/dir/51.196021,-113.9976068/forex+edmonton/@52.376909,-114.9471636,8z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x53a0213b074b3cc1:0xaedabd42713f8626!2m2!1d-113.6104868!2d53.5616109?entry=ttu"
          class=" hidden text-white p-3 px-6 pt-2 rounded-full border-solid border-[#ffdd02] border-2 baseline mr-32 hover:text-[#355691] duration-300 md:block"
          >Direction</a>
          <!-- Hamburger Icon -->
        <button
          id="menu-btn"
          class="block hamburger md:hidden focus:outline-none mr-6"
        >
          <span class="hamburger-top"></span>
          <span class="hamburger-middle"></span>
          <span class="hamburger-bottom"></span>
        </button>
      </div>

      <!-- Mobile Menu -->
      <div class="md:hidden">
        <div
          id="menu"
          class=" text-[#355691] absolute flex-col items-center hidden self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md"
        >
          <a href="https://forexcargodeals.com/edmonton/book-online">Send Goods</a>
          <a href="https://calgarytracking.forexcargodeals.com">Track Calgary</a>
         
        </div>
      </div>
    </div>
</nav>

<!-- Transaction status -->
<section id="hero">

    <div class=" container md:w-1/2 md:ml-96 mx-auto ml-6">
        <div class="flex flex-col text-left mt-16 space-y-4 ">
             <h1 class="text-4xl ">Track Invoice</h1>
             <p class="text-xl font-bold ">Your Invoice Number Does Not Found<i class="fa-solid fa-ban ml-4" style="color: #FF0000;"></i></p>
             <p class="text-2xl font-black ">{{ $invoice1 }}</p>
        </div>

  <div class="mt-16">
  <a
          href="/"
          class=" rounded-full bg-[#ffdd02] p-3 baseline px-6 "
          >Track Another One</a>  
  </div>

</div> 
  
</div>


   
</section>

<!-- javascript -->
<script>
    const btn = document.getElementById('menu-btn')
    const nav = document.getElementById('menu')

btn.addEventListener('click', () => {
  btn.classList.toggle('open')
  nav.classList.toggle('flex')
  nav.classList.toggle('hidden')
})

</script>
</body>
</html>


