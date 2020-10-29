<!DOCTYPE html>
<html>
<head>
	<title>page de recherche</title>
	<link rel="stylesheet" href="css/boostrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="page">
	<div class="page__container">
		<ul data-cy="breadcrumb" class="breadcrumb">		
			<li data-cy="breadcrumb-home" class="breadcrumb__item breadcrumb-item--home">
			<a href="index.php" class="breadcrumb__link  nuxt-link-active">
				<span>Shopping</span>
			</a>
		</li>
		<li data-cy="breadcrumb-item" class="breadcrumb__item">
			<a href="ORLA-SHOP/Web/products.php" aria-current="page" class="breadcrumb__link  nuxt-link-exact-active nuxt-link-active">
			  Téléphones & Ordinateurs
			</a>
		</li>
	</ul>
	<div class="result-title">
		<h1 data-cy="h1-title" class="search__title search__title--disclaimer-displayed">
			Téléphones & Ordinateurs
		</h1>
	</div>
	<div data-cy="top-legal-text" class="legal-bar">
		<div class="legal-bar--link">
			<a href="informations.php" data-cy="top-legal-modal-trigger">
				Annonces payantes et non exahaustives
				<span class="question-container">
					<svg class=" question-container__icon-question">
						<use xlink:href="#icon-question">
							#shadow-root(closed)
							<svg id="icon-question" viewBox="0 0 559.393 559.393">
								<path d="M 324.45 502.477 c 0 -7.752 -1.431 -15.096 -4.284 -22.029 c -2.856 -6.938 -6.938 -12.954 -12.24 -18.057 c -5.304 -5.1 -11.424 -9.18 -18.36 -12.237 c -6.936 -3.063 -14.279 -4.593 -22.031 -4.593 s -15.096 1.53 -22.032 4.593 c -6.936 3.06 -12.954 7.14 -18.054 12.237 c -5.1 5.103 -9.078 11.118 -11.934 18.057 c -2.856 6.936 -4.284 14.277 -4.284 22.029 c 0 7.753 1.428 15.099 4.284 22.032 c 2.856 6.938 6.834 12.954 11.934 18.055 c 5.1 5.102 11.118 9.182 18.054 12.239 c 6.936 3.063 14.28 4.59 22.032 4.59 s 15.096 -1.527 22.031 -4.59 c 6.938 -3.06 13.059 -7.14 18.36 -12.239 c 5.304 -5.101 9.384 -11.116 12.24 -18.055 C 323.021 517.573 324.45 510.229 324.45 502.477 Z M 271.818 420.469 h -4.896 c -13.056 -1.632 -23.766 -7.548 -32.13 -17.748 c -8.364 -10.197 -11.934 -21.828 -10.71 -34.884 c 2.448 -22.438 8.058 -44.166 16.83 -65.178 c 8.772 -21.013 20.094 -39.679 33.966 -55.999 c 4.488 -5.712 9.383 -10.914 14.687 -15.606 c 5.307 -4.692 10.608 -9.282 15.912 -13.77 c 13.464 -11.424 23.769 -21.624 30.906 -30.6 s 10.71 -19.992 10.71 -33.048 c 0 -11.424 -2.346 -20.808 -7.038 -28.152 c -4.689 -7.344 -10.403 -13.158 -17.136 -17.442 c -6.733 -4.284 -13.771 -7.344 -21.114 -9.18 c -7.344 -1.836 -13.872 -2.754 -19.584 -2.754 h -1.224 c -11.424 0 -20.808 1.53 -28.152 4.59 s -13.566 7.344 -18.666 12.852 c -5.1 5.508 -9.384 12.138 -12.852 19.89 s -7.038 16.116 -10.71 25.092 c -4.896 12.648 -10.812 21.522 -17.748 26.622 s -13.872 8.058 -20.808 8.874 c -7.752 1.632 -15.708 1.02 -23.868 -1.836 c -8.16 -3.264 -14.688 -7.956 -19.584 -14.076 c -4.488 -5.304 -7.956 -12.138 -10.404 -20.502 c -2.448 -8.364 -1.632 -18.666 2.448 -30.906 c 2.448 -7.752 6.732 -18.87 12.852 -33.354 s 15.402 -28.662 27.846 -42.534 s 28.458 -25.908 48.042 -36.108 s 44.064 -15.096 73.439 -14.688 c 19.584 0.408 38.862 3.978 57.834 10.71 s 36.006 16.626 51.102 29.682 c 15.099 13.056 27.336 29.07 36.723 48.042 c 9.384 18.972 14.073 40.698 14.073 65.178 c 0 17.952 -2.445 33.864 -7.344 47.736 c -4.896 13.872 -11.118 26.316 -18.666 37.332 s -15.708 20.604 -24.479 28.764 c -8.772 8.16 -16.83 15.504 -24.174 22.033 c -4.08 3.672 -7.956 7.038 -11.631 10.098 c -3.672 3.063 -6.525 6.021 -8.565 8.874 c -7.344 8.979 -13.566 19.482 -18.666 31.521 c -5.103 12.036 -8.262 24.582 -9.486 37.638 c -1.224 12.648 -6.426 22.95 -15.604 30.906 C 294.767 416.491 284.058 420.469 271.818 420.469 Z">
								</svg>
						</use>
					</svg>
				</span>
			</a>
		</div>
		<div class="search__results">
			<div data-cy="filters-panel" class="filters">
				<div class="filters__container">
					<div data-cy="filters-panel-title" class="filters__title">
						Afficher les résultars pour
					</div>
					<div data-cy="close-filter-button" class="filters__button-close">
						<svg class="filters__icon-close--button">
							<use xlink:href="icon-close">
								#shadow-root(closed)
								<svg id="icon-close" viewBox="0 0 47.971 47.971">
									<path d="M 28.228 23.986 L 47.092 5.122 c 1.172 -1.171 1.172 -3.071 0 -4.242 c -1.172 -1.172 -3.07 -1.172 -4.242 0 L 23.986 19.744 L 5.121 0.88 c -1.172 -1.172 -3.07 -1.172 -4.242 0 c -1.172 1.171 -1.172 3.071 0 4.242 l 18.865 18.864 L 0.879 42.85 c -1.172 1.171 -1.172 3.071 0 4.242 C 1.465 47.677 2.233 47.97 3 47.97 s 1.535 -0.293 2.121 -0.879 l 18.865 -18.864 L 42.85 47.091 c 0.586 0.586 1.354 0.879 2.121 0.879 s 1.535 -0.293 2.121 -0.879 c 1.172 -1.171 1.172 -3.071 0 -4.242 L 28.228 23.986 Z"></path>
								</svg>
							</use>
						</svg>
					</div>
					<div data-cy="filter-block" class="filter__block">
						<div data-cy="filter-prix">
							<div class="filters__subtitle">
								<span class="filter__link">Prix</span>
								<svg data-cy="filters-toggle-icon" class="filters__chevron filters__chevron--opened">
									<use xlink:href="#icon-chevron">
										#shadow-root(closed)
										<svg id="icon-chevron" viewBox="0 0 451.846 451.847">
											 <path d="M 345.441 248.292 L 151.154 442.573 c -12.359 12.365 -32.397 12.365 -44.75 0 c -12.354 -12.354 -12.354 -32.391 0 -44.744 L 278.318 225.92 L 106.409 54.017 c -12.354 -12.359 -12.354 -32.394 0 -44.748 c 12.354 -12.359 32.391 -12.359 44.75 0 l 194.287 194.284 c 6.177 6.18 9.262 14.271 9.262 22.366 C 354.708 234.018 351.617 242.115 345.441 248.292 Z"></path>
										</svg>
									</use>
								</svg>
							</div>
							<ul data-cy="filters-list" class="filters__list" style="display: ;">
								<li class="filters__item">
									<a href="tel&ordimoins50000.php" class="filters__link">moins de 50 000 fcfa(30)</a>
								</li>
								<li class="filters__item">
									<a href="tel&ordi50000-900000.php"f class="filters__link">50 000-900 000 fcfa(50)</a>
								</li>
							</ul>
						</div>
					</div>
					<div data-cy="filters-block" class="filters__block">
						<div data-cy="filter-marchand">
							<div class="filters__subtitle">
								<span class="filters__link">Marchand</span>
								<svg data-cy="filters-toggle-icon" class="filters__chevron">
									<use xlink:href="#icon-chevron">
										#shadow-root(closed)
										<svg id="icon-chevron" viewBox="0 0 451.846 451.847">
											<path d="M 345.441 248.292 L 151.154 442.573 c -12.359 12.365 -32.397 12.365 -44.75 0 c -12.354 -12.354 -12.354 -32.391 0 -44.744 L 278.318 225.92 L 106.409 54.017 c -12.354 -12.359 -12.354 -32.394 0 -44.748 c 12.354 -12.359 32.391 -12.359 44.75 0 l 194.287 194.284 c 6.177 6.18 9.262 14.271 9.262 22.366 C 354.708 234.018 351.617 242.115 345.441 248.292 Z"></path>
										</svg>
									</use>
								</svg>
							</div>
							<ul data-cy="filters-list" class="filters__list" style="display:none;">
								<li class="filters__item">
									<a href="alibaba.com">Alibaba</a>
								</li>
								<li class="filters__item">
									<a href="ORLA-SHOP"> ORLA-SHOP</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="offers" class="offers-anchor"></div>
			<div data-cy="offers-grid" class="result-offers--menu">
				
			</div>
		</div>
	</div>
</div>
</div>
</body>
</html>