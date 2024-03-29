<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Ellas Shoes</title>
   
</head>
<body class="relative h-full w-full bg-gradient-to-r from bg-neutral-900">


<!-- component -->

<nav class="relative px-4 py-4 flex justify-between items-center ">
		<a class="text-3xl font-bold leading-none ml-10" href="#">
			<img src="logo2.svg" alt="">
		</a>
		<div class="lg:hidden">
			<button class="navbar-burger flex items-center text-blue-600 p-3">
				<svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<title>Mobile menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
				</svg>
			</button>
		</div>
		<ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto  lg:items-center lg:w-auto lg:space-x-6">
			<li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Inicio</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm text-white  font-bold" href="#">Productos</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Ofertas</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Contacto</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			
		</ul>
		<a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-fuchsia-900 hover:bg-gray-100 text-sm text-white hover:text-fuchsia-900 font-bold  rounded-xl transition duration-200" href="#">Compras</a>
		
	</nav>
	<div class="navbar-menu relative z-50 hidden">
		<div class="navbar-backdrop fixed inset-0 bg-fuchsia-900 opacity-25"></div>
		<nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-fuchsia-900 border-r overflow-y-auto">
			<div class="flex items-center mb-8">
				<a class="mr-auto text-3xl font-bold leading-none" href="#">
					<img src="/logo2.svg" alt="">   
				</a>
				<button class="navbar-close" >
					<svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div>
				<ul>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-fuchsia-900 rounded" href="#">Inicio</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-fuchsia-900 rounded" href="#">Nosotros</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-fuchsia-900 rounded" href="#">Perritos</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-fuchsia-900 rounded" href="#">Contacto</a>
					</li>
					
				</ul>
			</div>
			<div class="mt-auto">
				<div class="pt-6">
					<a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold  bg-gray-50 hover:bg-gray-100 rounded-xl" href="#">Compras</a>
					
				</div>
			
			</div>
		</nav>
	</div>


	<div class="max-w-3xl mx-auto mt-10 relative rounded-lg overflow-hidden">
        <div class="carousel overflow-hidden">
            <div class="carousel-inner flex transition-transform ease  ">
                <img class="carousel-slide w-full bg-blue-200" src="https://via.placeholder.com/800x400?text=Slide+1" alt="Slide 1">
                <img class="carousel-slide w-full bg-green-200" src="https://via.placeholder.com/800x400?text=Slide+2" alt="Slide 2">
                <img class="carousel-slide w-full bg-yellow-200" src="https://via.placeholder.com/800x400?text=Slide+3" alt="Slide 3">
            </div>
            <div class="carousel-controls absolute top-1/2 transform -translate-y-1/2 left-0 right-0 flex justify-between">
                <button class="carousel-control p-2 bg-gray-800 text-white rounded-full" id="prevBtn">&#10094;</button>
                <button class="carousel-control p-2 bg-gray-800 text-white rounded-full" id="nextBtn">&#10095;</button>
            </div>
        </div>
    </div>


	<section class="p-16">

	<div class="max-w-3xl mx-auto mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <div class="bg-white rounded-lg overflow-hidden shadow-md transition duration-300 transform hover:scale-105">
            <img src="https://via.placeholder.com/300x200" alt="Product Image" class="w-full">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Product Name</h3>
                <p class="text-gray-600">$99.99</p>
                <a href="https://www.example.com" class="mt-4 px-4 py-2 bg-fuchsia-900 text-white rounded hover:text-fuchsia-900 hover:bg-slate-50 inline-block">Comprar</a>
            </div>
        </div>

        <!-- Repite este bloque para cada producto -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md transition duration-300 transform hover:scale-105">
            <img src="https://via.placeholder.com/300x200" alt="Product Image" class="w-full">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Product Name</h3>
                <p class="text-gray-600">$99.99</p>
                <a href="https://www.example.com" class="mt-4 px-4 py-2 bg-fuchsia-900 text-white rounded hover:bg-white inline-block">Comprar</a>
            </div>
        </div>

        <div class="bg-white rounded-lg overflow-hidden shadow-md transition duration-300 transform hover:scale-105">
            <img src="https://via.placeholder.com/300x200" alt="Product Image" class="w-full">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Product Name</h3>
                <p class="text-gray-600">$99.99</p>
                <a href="https://www.example.com" class="mt-4 px-4 py-2 bg-fuchsia-900 text-white rounded hover:bg-white inline-block">Comprar</a>
            </div>
        </div>

        <div class="bg-white rounded-lg overflow-hidden shadow-md transition duration-300 transform hover:scale-105">
            <img src="https://via.placeholder.com/300x200" alt="Product Image" class="w-full">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Product Name</h3>
                <p class="text-gray-600">$99.99</p>
                <a href="https://www.example.com" class="mt-4 px-4 py-2 bg-fuchsia-900 text-white rounded hover:bg-white inline-block">Comprar</a>
            </div>
        </div>

        <div class="bg-white rounded-lg overflow-hidden shadow-md transition duration-300 transform hover:scale-105">
            <img src="https://via.placeholder.com/300x200" alt="Product Image" class="w-full">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Product Name</h3>
                <p class="text-gray-600">$99.99</p>
                <a href="https://www.example.com" class="mt-4 px-4 py-2 bg-fuchsia-900 text-white rounded hover:bg-white inline-block">Comprar</a>
            </div>
        </div>

        <div class="bg-white rounded-lg overflow-hidden shadow-md transition duration-300 transform hover:scale-105">
            <img src="https://via.placeholder.com/300x200" alt="Product Image" class="w-full">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Product Name</h3>
                <p class="text-gray-600">$99.99</p>
                <a href="https://www.example.com" class="mt-4 px-4 py-2 bg-fuchsia-900 text-white rounded hover:bg-white inline-block">Comprar</a>
            </div>
        </div>
    </div>

	</section>

    

<script>
// Burger menus
document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }
});



const carouselInner = document.querySelector('.carousel-inner');
        const slides = document.querySelectorAll('.carousel-slide');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        let currentIndex = 0;

        function goToSlide(index) {
            carouselInner.style.transform = `translateX(-${index * 100}%)`;
        }

        function goToNextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            goToSlide(currentIndex);
        }

        function goToPrevSlide() {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            goToSlide(currentIndex);
        }

        nextBtn.addEventListener('click', goToNextSlide);
        prevBtn.addEventListener('click', goToPrevSlide);

        // Autoplay
        setInterval(goToNextSlide, 3000); // Cambia de slide cada 3 segundos
</script>
</body>
</html>