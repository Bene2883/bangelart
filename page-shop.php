<?php
/**
 * The template for displaying front page
 */

get_header();
?>

<template>
	<article class="grid-menu">
      	<div class="img"></div>
		<div class="overlay"></div>
      	<div class="info">
			<h3 class="title"></h3>
			<p class="price"></p>
      </div>
    </article>
</template>

<style>
	#primary {
	  max-width: 1200px;
	  margin: 0 auto;
	}

	#filter {
		display: grid;
     	grid-template-columns: repeat(auto-fill, minmax(187px, 1fr));
		gap: 10px 20px;
		font-size: 20px;
		padding-top: 30px; 
	}

	#filter button {
		display: flex;
		justify-content: center;
		align-items: center;
		height: 40px;
		padding: 0;
		background: none;
		border: 2px solid grey;
		color: grey;
	}

	#filter button:hover {
		border: 2px solid black;
		color: black;
		text-decoration: none;
	}

	#filter .selected {
		border: 2px solid black;
		color: black;
		text-decoration: none;
	}

	#container {
	  padding-top: 20px;
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 40px 20px;
    }

    .grid-menu {
      cursor: pointer;
	  display: grid;
	  border-radius: 10px;
    }

    .grid-menu .img, .grid-menu .overlay {
	  object-fit: cover;
      background-position: center;
	  background-size: cover;
      aspect-ratio: 3/4;
	  grid-row: 1/2;
	  grid-column: 1/2;
	  transition: 500ms;
    }

	.grid-menu .overlay {
		opacity: 0;
	}

	.grid-menu .overlay:hover {
		opacity: 1;
	}

	.title {
		margin: 5px 0;
		font-size: 14px;
	}
	.price {
		margin: 5px 0;
		font-size: 20px;
	}

	#content {
		padding: 70px 0;
	}

	@media (max-width: 545px) {
		#filter {
			padding-top: 10px; 
		}
		#content {
			padding: 30px 0 50px;
		}
	}

</style>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<h1>Produkter</h1>
			<nav id="filter">
				<button data-produkt="alle" class="selected">Alle værker</button>
				<button data-produkt="19">Kærlighedskvinder</button>
				<button data-produkt="22">Stjernetegn</button>
				<button data-produkt="21">Originaler</button>
				<button data-produkt="22">Plakater</button>
			</nav>
			<section id="container"></section>
		</main><!-- #main -->
		
		<script>
			let produkter;
			let categories;
			let filterProdukt = "alle";
			const select = document.querySelector("#filter select");

			const dbUrl = "https://tessafan.dk/bangelart/wp-json/wp/v2/produkt?per_page=100";
			const catUrl = "https://tessafan.dk/bangelart/wp-json/wp/v2/categories?per_page=100";

			async function getJson() {
				const data = await fetch(dbUrl);
				const catdata = await fetch(catUrl);
				produkter = await data.json();
				categories = await catdata.json();
				console.log(produkter);
				console.log(categories);
				visProdukter();
				addEventListenerToButtons()
			}

			function addEventListenerToButtons() {
				document.querySelectorAll("#filter button").forEach(element => {
					element.addEventListener("click", filtrering)
				})
			}

			function filtrering() {
				filterProdukt = this.dataset.produkt;
				document.querySelector(".selected").classList.remove("selected");
     			this.classList.add("selected");
				visProdukter();
				console.log(filterProdukt);
			}

			function visProdukter() {
				let container = document.querySelector("#container");
     			let temp = document.querySelector("template");
				container.innerHTML = ""; 
				produkter.forEach(produkt => {
					if (filterProdukt == "alle" || produkt.categories.includes(parseInt(filterProdukt))) {
						console.log(produkt.categories);
						let klon = temp.cloneNode(true).content;
						klon.querySelector(".img").style.backgroundImage = `url("${produkt.image[0].guid}")`;
						klon.querySelector(".overlay").style.backgroundImage = `url("${produkt.image[1].guid}")`;
						klon.querySelector(".title").textContent = produkt.title.rendered;
						if (produkt.categories.includes(6)) {
							klon.querySelector(".info").classList.add("globalt-medborgerskab");
						} else if (produkt.categories.includes(5)) {
							klon.querySelector(".info").classList.add("baeredygtig-udvikling");
						} else if (produkt.categories.includes(24)) {
							klon.querySelector(".info").classList.add("unesco-verdensmalsskoler");
						}
						
						klon.querySelector(".price").textContent = `${produkt.price} DKK`;
						klon.querySelector("article").addEventListener("click", () => {
							location.href = produkt.link;
						})
						container.appendChild(klon);
					}
				})
			}
			getJson();
			


		</script>
	</div><!-- #primary -->

<?php
get_footer();
