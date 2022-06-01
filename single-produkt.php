<?php
/**
 * The template for displaying front page
 */

get_header();
?>

	<style>
		/* max-width */
		.single-view {
			max-width: 1200px;
			margin: 0 auto;
			display: grid;
			grid-template-columns: 1fr 1fr;
			gap: 50px;
		}

		/* galleri opsætning */
		.item-gallery {
			display: flex;
			flex-wrap: wrap;
			gap: 20px;
			width: 100%;
		}

		.item {
			width: 100%;
			aspect-ratio: 3/4;
			background-size: cover;
			background-position: center;
		}

		/* opsætning af billeder afhængigt af antal af billeder i database */
		.item:nth-of-type(1) {
			flex: 0 0 100%;
		}

		.item:nth-of-type(2), .item:nth-of-type(3) {
			flex: 1;
		}

		.item:nth-of-type(4) {
			flex: 0 0 100%;
		}

		/* styling af produkt info del */
		.top, 
		.bottom {
			display: flex;
			flex-direction: column;
		}

		.item-info {
			display: flex;
			flex-direction: column;
			gap: 50px;
		}

		/* knapper */
		.amount-btn, a.buy-btn {
			display: flex;
			background: white;
			justify-content: center;
			cursor: pointer;
			margin-bottom: 1rem;
			transition: none;
			user-select: none;
		}

		.amount-btn {
			align-self: flex-start;
		}

		.remove, .add, .amount {
			width: 50px;
			padding: 1rem;
			text-align: center;
		}

		/* knapper hover effekt */
		.remove:hover, .add:hover {
			background: lightgrey;
		}

		.remove:active, .add:active {
			background: grey;
		}

		.buy-btn:hover {
			background: lightgrey;
		}

		.buy-btn:active {
			background: grey;
		}

		.buy-btn {
			padding: 1rem;
			text-decoration: none;
			color: black;
		}

		/* typografi */
		p, h1 {
			margin: 0;
		}

		#content {
			padding: 70px 0;
		}
		
		/* mobil størrelse */
		@media (max-width: 545px) {
			#content {
				padding: 30px 0 50px;
			}
			.single-view {
				grid-template-columns: 1fr;
				gap: 20px;
			}
			.item-gallery {
				flex-wrap: nowrap;
			}
		}
	</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article class="single-view">
				<div class="item-gallery"></div>
				<div class="item-info">
					<div class="top">
						<p>B.ANGEL_ART</p>
						<h1 class="title"></h1>
						<p class="price"></p>
						<p>Inklusiv skat. Levering beregnes ved betaling.</p>
					</div>
					<div class="bottom">
						<p>Antal</p>
						<div class="amount-btn">
							<div class="remove">-</div>
							<div class="amount">1</div>
							<div class="add">+</div>
						</div>
						<a class="buy-btn">Læg i indkøbskurven</a>
						<div class="desc"></div>
					</div>
				</div>
			</article>
		</main><!-- #main -->
		<script>
			let produkt;
			let amount = 1;

			// fjern antal produkt knap
			document.querySelector(".remove").addEventListener("click", removeItem)

			//fjern antal 
			function removeItem() {
				if (amount > 1) {
					amount--;
				}
				document.querySelector(".amount").textContent = amount;
			}

			// tilføj antal produkt knap
			document.querySelector(".add").addEventListener("click", addItem)

			// tilføj produkt
			function addItem() {
				amount++;
				document.querySelector(".amount").textContent = amount;
			}

			// køb knap
			document.querySelector(".buy-btn").addEventListener("click", buyItem)

			// køb knap nulstil antal produkter
			function buyItem() {
				amount = 1;
				document.querySelector(".amount").textContent = amount;
				document.querySelector(".buy-btn").textContent = "Lagt i kurven"
				setTimeout(() => {
					document.querySelector(".buy-btn").textContent = "Læg i indkøbskurven"
				}, 1000);
			}

			// hent produkt data
			const dbUrl = "https://tessafan.dk/bangelart/wp-json/wp/v2/produkt/"+<?php echo get_the_ID() ?>;

			async function getJson() {
				const data = await fetch(dbUrl);
				produkt = await data.json();
				visProdukt();
			}

			function visProdukt() {
				const images = produkt.image;
				// tilføj alle billeder i arrayet
				images.forEach(e => {
					document.querySelector(".item-gallery").innerHTML += `<div style="background-image: url(${e.guid})" class="item">` 
				});
				document.querySelector(".title").innerHTML = produkt.title.rendered;
				document.querySelector(".price").textContent = `${produkt.price} DKK`;
				document.querySelector(".desc").innerHTML = produkt.description;
			}
			getJson();
		</script>
	</div><!-- #primary -->

<?php
get_footer();
