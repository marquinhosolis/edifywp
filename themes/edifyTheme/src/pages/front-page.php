<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/home-page.min.css">
<main id="home">
	<div class="container">
		<div class="bookList">
			<div class="bookListHeader">
				<h1>Lendo atualmente</h1>
			</div>
			<ul>
				<?php 
					$books = get_field('books', 34);
					foreach ($books as $book) { ?>
						<li>
							<div class="bookCover">
								<div class="content">
									<img src='https://covers.openlibrary.org/b/isbn/<?php echo $book['isbn']; ?>-L.jpg' alt='<?php echo $book['title']; ?>' />
								</div>
							</div>
							<div class="bookData">
								<div class="bookTitle">
									<h2><?php echo $book['title']; ?></h2>
								</div>
								<p class="authors"><?php echo $book['author']; ?></p>
								<div class="stars">
									<?php 
										$stars = $book['stars'];
										for ($i=0; $i < $stars ; $i++) { ?>
											<img src="<?php echo get_template_directory_uri();?>/images/star.svg" alt="stars rating">
										<?php }
									?>
								</div>
								<p class="date">
									Você começou a ler em:
									<strong><?php echo $book['start_date']; ?></strong>
								</p>
								<p class="date">
									Você terminou de ler em:
									<strong><?php echo $book['end_date']; ?></strong>
								</p>
							</div>
						</li>
					<?php }
				?>
				
			</ul>
		</div>
		<div class="addBookButtonWrapper">
			<a href="<?php echo site_url(); ?>/new-book/">
				<div class="btn btn-default">Adicionar Livro</div>
			</a>
		</div>
	</div>
</main>
<?php get_footer(); ?>