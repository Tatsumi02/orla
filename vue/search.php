<!DOCTYPE html>
<html>

<head>
	<title>comparateur e-commerce</title>
	<link rel="stylesheet" href="vue/ORLA-SHOP/web/css/bootstrap.css">
    <link rel="stylesheet" href="vue/ORLA-SHOP/web/css/style.css">
</head>
<!--<body>
	<div class="container">
		<div class="home">
		<a href="index.php" class="logo">ORLA-SHOP</a>
		<p class="home__tagline">Find.Compare.Save</p>
		<div class="home__form">
			<form method='GET'  action="index.php">
				<div class="search-form">
					<div class="search-form__input-container">
						<input  name="q" type="text" placeholder="What are you shopping for?" autofocus="autofocus" value class="search-form__input"><a href="ORLA-SHOP/web/index2.php"></a>
						<input type="hidden" name="page" value="search">
						<button  type="submit" class="search-form__search-button">
							<svg class="search-form__icon-loupe">
								<use Xlink: href="#icon-loupe">
								#shadow-root(closed)
								 <svg id="icon-loupe" viewBox="0 0 100 100">
								 	<path d="M 76.9 8.6 C 61.9 -2.5 40.8 0.7 29.8 15.7 c -9.5 12.9 -8.4 30.3 1.6 42 L 10.9 85.4 C 8.4 89 9.1 94 12.6 96.5 s 8.6 1.8 11.1 -1.8 L 44.3 67 c 13.9 5.7 30.4 1.5 39.8 -11.2 c 11 -15 7.8 -36.1 -7.2 -47.2 Z m -0.4 41.8 c -7.9 10.7 -23.2 12.9 -33.9 5 s -12.9 -23.2 -5 -33.9 s 23.2 -13.2 33.9 -5 c 10.8 7.8 12.9 23.2 5 33.9 Z"></path>
								</svg>
							</use>
						</svg>
						</button> 
						
					</div>
					
				</div>
			</form>
		</div>
        <p class="home__baseline">Resultat de recherche <b><?php echo $q; ?></b></p>

	</div>



	<div class="resultat">

		
	</div>



	<div class="browse-category">
		<a href="#all-categories" data-i18n-label="browse by category" class="browse-category__link">browse-category</a>
	</div>
	<div data-cy="all-categories" monitor-categories-list="true" class="categories">
		<h2 id="all-categories" class="categories__title">All Categories</h2>
		<div class="categories__list">

			<div data-cy="caregory" class="categories__item">
				<a href="#" alt="Mobile" class="categories__link">Mobile</a>
			</div>
			<div data-cy="caregory" class="categories__item">
				<a href="#" alt="Tablets" class="categories__link">Tablets</a>
			</div>
			<div data-cy="caregory" class="categories__item">
				<a href="#" alt="Laptops" class="categories__link">Laptops</a>
			</div>
			<div data-cy="caregory" class="categories__item">
				<a href="#" alt="Cameras" class="categories__link">Cameras</a>
			</div>
			<div data-cy="caregory" class="categories__item">
				<a href="#" alt="Watches" class="categories__link">Watches</a>
			</div>
			<div data-cy="caregory" class="categories__item">
				<a href="#" alt="Ebooks" class="categories__link">Ebooks</a>
			</div>
			<div data-cy="caregory" class="categories__item">
				<a href="#" alt="T-shirts" class="categories__link">T-shirts</a>
			</div>
			<div data-cy="caregory" class="categories__item">
				<a href="#" alt="T-shirts" class="categories__link">Jeans</a>
			</div>
			<div data-cy="caregory" class="categories__item">
				<a href="#" alt="Perfumes" class="categories__link">Perfumes</a>
			</div>
			<div data-cy="caregory" class="categories__item">
				<a href="#" alt="Sofas" class="categories__link">Sofas</a>
			</div>
			<div data-cy="caregory" class="categories__item">
				<a href="#" alt="Sunglasses" class="categories__link">Sunglasses</a>
			</div>
		</div>
	</div>
	<h2 class="title">
			Profitez de bons plans Shooping!
		</h2>
	</div>

</body>-->
<header data-cy="header" class="header">
<div class="header__container">
<div class="header__wrapper">
<a href="ORLA-SHOP" class="header__logo" data-cy="header-logo nuxt-link-active">
<img src="#" alt="ORLA-SHOP" class="header__image">
<p class="header__baseline "> Cherscher.Comparer.Economiser</p>
</a>
<div class="header__form">
	<form role="search" data-cy="search-form" class="search-form__input-container">
		<div class="search-form__input-container">
						<input name="q" type="text" placeholder="What are you shopping for?" autofocus="autofocus" value class="search-form__input "><a href="index.php"></a>
						<input type="hidden" name="page" value="search">
						<button  type="submit" class="search-form__search-button">
							<svg class="search-form__icon-loupe">
								<use Xlink: href="#icon-loupe">
								#shadow-root(closed)
								 <svg id="icon-loupe" viewBox="0 0 100 100">
								 	<path d="M 76.9 8.6 C 61.9 -2.5 40.8 0.7 29.8 15.7 c -9.5 12.9 -8.4 30.3 1.6 42 L 10.9 85.4 C 8.4 89 9.1 94 12.6 96.5 s 8.6 1.8 11.1 -1.8 L 44.3 67 c 13.9 5.7 30.4 1.5 39.8 -11.2 c 11 -15 7.8 -36.1 -7.2 -47.2 Z m -0.4 41.8 c -7.9 10.7 -23.2 12.9 -33.9 5 s -12.9 -23.2 -5 -33.9 s 23.2 -13.2 33.9 -5 c 10.8 7.8 12.9 23.2 5 33.9 Z"></path>
								</svg>
							</use>
						</svg>
						</button> 

						</div>
						<ul id="search-form-results" data-cy="search-form" class="search-form__results" style="display: none;">
							
						</ul>
	</form>
</div>
<div class="header__categories">
	<div data-cy="categories-dropdown-button" class="button button_dropdown button_small  button_border-large">
		<span class="button__label  hidden-for-modile color-blue1">
			Catégories
		</span>
		<svg class="button_dropdown__chevron">
			<use xlink:href="#icon-chevron">
				#shadow-root(closed)
				<svg id="icon-chevron" viewBox="0 0 451.846">
					<path d="M 76.9 8.6 C 61.9 -2.5 40.8 0.7 29.8 15.7 c -9.5 12.9 -8.4 30.3 1.6 42 L 10.9 85.4 C 8.4 89 9.1 94 12.6 96.5 s 8.6 1.8 11.1 -1.8 L 44.3 67 c 13.9 5.7 30.4 1.5 39.8 -11.2 c 11 -15 7.8 -36.1 -7.2 -47.2 Z m -0.4 41.8 c -7.9 10.7 -23.2 12.9 -33.9 5 s -12.9 -23.2 -5 -33.9 s 23.2 -13.2 33.9 -5 c 10.8 7.8 12.9 23.2 5 33.9 Z"></path>
				</svg>
			</use>
		</svg>
		
	</div>
</div>
</div>
</div>
</header>
<div class="page">
	<div class="page--container">
		<ul data-cy="breadcrumb-home" class="breadcrumb">
			<li data-cy="breadcrumb-home"class="breadcrumb--item breadcrumb--item--home">
			<a href="#" class="breadcrumb--link nuxt-link-active">
				<span>Shopping</span>
			</a>
		</li>
		<li data-cy="breadcrumb-home-icon" class="breadcrumb--item breadcrumb--item--home-icon
		"></li>
		</ul>
	</div>
</div>

</html>

