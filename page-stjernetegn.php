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

	.horoskop_mobile {
		display: none;
	} 

    .horoskop_web {
        width: 100%;
        display: grid;
        justify-content: center;
		align-items: center;
		justify-items: center;
		padding: 150px 0 ;
    }

	.horoskop_web .circle {
		width: 500px;
		grid-row: 1;
		grid-column: 1;
	}

	.horoskop_web .sun {
		width: 200px;
		grid-row: 1;
		grid-column: 1;
	}

	.horoskop_web .zodiac {
		display: grid;
		grid-row: 1;
		grid-column: 1;
		transform: translate(-50%);
		justify-content: end;
	}

	.horoskop_web .zodiac div {
		display: flex;
		grid-row: 1;
		grid-column: 1;
		width: 250px;
		transform-origin: right;
		font-family: smoothy, sans-serif;
		font-size: 24px;
		position: relative;
	}

	.horoskop_web .zodiac div a img {
		position: absolute;
		width: 200px;
		height: 200px;
		object-fit: contain;
		left: -150px;
		top: -75px;
	}

	.horoskop_web .zodiac div a.flip img {
		left: unset;
		right: -150px;
		top: -75px;
	}

	.horoskop_web .zodiac div a {
		width: 125px;
		text-align: center;
		transform: scale(1);
		color: black;
	}

	.horoskop_web .zodiac div a:hover {
		transform: scale(1.1);
	}
	
	.horoskop_web .zodiac div a.flip {
		transform: scale(-1);
	}

	.horoskop_web .zodiac div a.flip:hover {
		transform: scale(-1.1);
	}

	.tyr {
		transform: rotate(105deg);
	}

	.tyr img {
		transform: rotate(75deg);
	}

	.tvilling {
		transform: rotate(135deg);
	}

	.tvilling img {
		transform: rotate(45deg);
	}

	.krebs {
		transform: rotate(165deg);
	}

	.krebs img {
		transform: rotate(15deg);
	}
	
	.løve {
		transform: rotate(195deg);
	}

	.løve img {
		transform: rotate(-15deg);
	}

	.jomfru {
		transform: rotate(225deg);
	}

	.jomfru img {
		transform: rotate(-45deg);
	}

	.vægt {
		transform: rotate(255deg);
	}

	.vægt img {
		transform: rotate(-75deg);
	}

	.skorpion {
		transform: rotate(285deg);
	}

	.skorpion img {
		transform: rotate(-285deg);
	}

	.skytte {
		transform: rotate(315deg);
	}

	.skytte img {
		transform: rotate(-315deg);
	}

	.stenbuk {
		transform: rotate(345deg);
	}

	.stenbuk img {
		transform: rotate(-345deg);
	}

	.vandbærer {
		transform: rotate(15deg);
	}

	.vandbærer img {
		transform: rotate(-15deg);
	}

	.fisk {
		transform: rotate(45deg);
	}

	.fisk img {
		transform: rotate(-45deg);
	}

	.vædder {
		transform: rotate(75deg);
	}

	.vædder img {
		transform: rotate(-75deg);
	}

	#container {
	  	padding-top: 20px;
      	display: grid;
      	grid-template-columns: repeat(auto-fill, minmax(275px, 1fr));
     	gap: 40px 20px;
    }

    .grid-menu {
		cursor: pointer;
		display: grid;
		border-radius: 10px;
		gap: .5rem;
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

	.underline {
		text-decoration: underline;
	}

	@media (max-width: 921px) {
		.horoskop_web {
			display: none;
		}
		.horoskop_mobile {
			display: block;
		}
		.horoskop_mobile .zodiac {
			display: flex;
			flex-direction: column;
			gap: 3rem;
		}
		.horoskop_mobile .zodiac div {
			transform: rotate(0deg);
			font-family: smoothy, sans-serif;
		}
		.horoskop_mobile .zodiac div a {
			display: flex;
			gap: 1rem;
			color: black;
			align-items: center;
		}
		.horoskop_mobile .zodiac div:nth-of-type(even) a {
			flex-direction: row-reverse;
			text-align: right;
		}
		.horoskop_mobile .zodiac div a img {
			transform: rotate(0deg);
			position: relative;
			width: 100%;
			max-width: 200px;
			max-height: 200px;
			object-fit: contain;
		}
	}

</style>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<h1>Stjernetegn</h1>
            <div class="horoskop_web">
				<div class="circle">
                	<img class="" src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_193345776.png" alt="">
				</div>
				<div class="sun">
					<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-06-01_014051612.png" alt="">
				</div>
				<div class="zodiac">
					<div class="tyr">
						<a class="flip" href="https://tessafan.dk/bangelart/produkt/tyren/">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_224649321.png" alt="">
							<h3>Tyr</h3>
						</a>
					</div>
					<div class="tvilling">
						<a class="flip" href="https://tessafan.dk/bangelart/produkt/tvillingen/">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_231157552.png" alt="">
							<h3>Tvilling</h3>
						</a>
					</div>
					<div class="krebs">
						<a class="flip" href="">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233130909.png" alt="">
							<h3>Krebs</h3>
						</a>
					</div>
					<div class="løve">
						<a class="flip" href="https://tessafan.dk/bangelart/produkt/loven/">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233152506.png" alt="">
							<h3>Løve</h3>
						</a>
					</div>
					<div class="jomfru">
						<a class="flip" href="https://tessafan.dk/bangelart/produkt/jomfruen/">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233242366.png" alt="">
							<h3>Jomfru</h3>
						</a>
					</div>
					<div class="vægt">
						<a class="flip" href="">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233258103.png" alt="">
							<h3>Vægt</h3>
						</a>
					</div>
					<div class="skorpion">
						<a href=""><img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233317675.png" alt="">
						<h3>Skorpion</h3>
					</a>
					</div>
					<div class="skytte">
						<a href="https://tessafan.dk/bangelart/produkt/skytten/">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233335861.png" alt="">
							<h3>Skytte</h3>
						</a>
					</div>
					<div class="stenbuk">
						<a href="">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233409407.png" alt="">
							<h3>Stenbuk</h3>
						</a>
					</div>
					<div class="vandbærer">
						<a href="">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233425075.png" alt="">
							<h3>Vandbærer</h3>
						</a>
					</div>
					<div class="fisk">
						<a href="https://tessafan.dk/bangelart/produkt/fisken/">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233438673.png" alt="">
							<h3>Fisk</h3>
						</a>
					</div>
					<div class="vædder">
						<a href="">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233455305.png" alt="">
							<h3>Vædder</h3>
						</a>
					</div>
				</div>
			</div>
			<div class="horoskop_mobile">
				<div class="zodiac">
					<div class="tyr">
						<a href="https://tessafan.dk/bangelart/produkt/tyren/">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_224649321.png" alt="">
							<div>
								<h3>Tyr</h3>
								<p>20. april – 21. maj</p>
								<p class="underline">Se maleri</p>
							</div>
						</a>
					</div>
					<div class="tvilling">
						<a href="https://tessafan.dk/bangelart/produkt/tvillingen/">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_231157552.png" alt="">
							<div>
								<h3>Tvilling</h3>
								<p>22. maj – 21. juni</p>
								<p class="underline">Se maleri</p>
							</div>
						</a>
					</div>
					<div class="krebs">
						<a href="">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233130909.png" alt="">
							<div>
								<h3>Krebs</h3>
								<p>22. juni – 22. juli</p>
								<p class="underline">Se maleri</p>
							</div>
						</a>
					</div>
					<div class="løve">
						<a href="https://tessafan.dk/bangelart/produkt/loven/">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233152506.png" alt="">
							<div>
								<h3>Løve</h3>
								<p>23. juli – 22. august</p>
								<p class="underline">Se maleri</p>
							</div>
						</a>
					</div>
					<div class="jomfru">
						<a href="https://tessafan.dk/bangelart/produkt/jomfruen/">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233242366.png" alt="">
							<div>
								<h3>Jomfru</h3>
								<p>23. august – 22. september</p>
								<p class="underline">Se maleri</p>
							</div>
						</a>
					</div>
					<div class="vægt">
						<a href="">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233258103.png" alt="">
							<div>
								<h3>Vægt</h3>
								<p>23. september – 22. oktober</p>
								<p class="underline">Se maleri</p>
							</div>
						</a>
					</div>
					<div class="skorpion">
						<a href="">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233317675.png" alt="">
							<div>
								<h3>Skorpion</h3>
								<p>23. oktober – 22. november</p>
								<p class="underline">Se maleri</p>
							</div>
					</a>
					</div>
					<div class="skytte">
						<a href="https://tessafan.dk/bangelart/produkt/skytten/">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233335861.png" alt="">
							<div>
								<h3>Skytte</h3>
								<p>23. november – 21. december</p>
								<p class="underline">Se maleri</p>
							</div>
						</a>
					</div>
					<div class="stenbuk">
						<a href="">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233409407.png" alt="">
							<div>
								<h3>Stenbuk</h3>
								<p>22 december – 20 januar</p>
								<p class="underline">Se maleri</p>
							</div>
						</a>
					</div>
					<div class="vandbærer">
						<a href="">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233425075.png" alt="">
							<div>
								<h3>Vandbærer</h3>
								<p>21. januar – 18. februar</p>
								<p class="underline">Se maleri</p>
							</div>
						</a>
					</div>
					<div class="fisk">
						<a href="https://tessafan.dk/bangelart/produkt/fisken/">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233438673.png" alt="">
							<div>
								<h3>Fisk</h3>
								<p>19. februar – 20. marts</p>
								<p class="underline">Se maleri</p>
							</div>
						</a>
					</div>
					<div class="vædder">
						<a href="">
							<img src="https://tessafan.dk/bangelart/wp-content/uploads/2022/05/image_2022-05-31_233455305.png" alt="">
							<div>
								<h3>Vædder</h3>
								<p>21. marts – 19. april</p>
								<p class="underline">Se maleri</p>
							</div>
						</a>
					</div>
				</div>
			</div>
            <h2>Produkter</h2>
            <section id="container"></section>
		</main><!-- #main -->
		
		<script>
			let produkter;
			let categories;
			let filterProdukt = "22";
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
					if (produkt.categories.includes(parseInt(filterProdukt))) {
						console.log(produkt.categories);
						let klon = temp.cloneNode(true).content;
						klon.querySelector(".img").style.backgroundImage = `url("${produkt.image[0].guid}")`;
						klon.querySelector(".overlay").style.backgroundImage = `url("${produkt.image[1].guid}")`;
						klon.querySelector(".title").innerHTML = produkt.title.rendered;
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
