<?php
/*
Template Name: New Book Page
*/
?>
<?php

    if(isset($_POST['bookIsbn'])){
        
        $initialBooks = get_field('books', 34);
        $bookPayload = array(
            'isbn' => $_POST['bookIsbn'],
            'title' => $_POST['bookTitle'],
            'author' => $_POST['bookAuthor'],
            'pages' => $_POST['bookPages'],
            'review' => $_POST['bookReview'],
            'stars' => $_POST['bookStars'],
            'start_date' => $_POST['start_date'],
            'end_date' => $_POST['end_date']
        );
        array_push($initialBooks, $bookPayload);

        update_field('books', $initialBooks, 34);

        echo '<script>alert("Livro cadastrado com sucesso!")</script>';
    }

?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/pages/newBook-page.min.css">
<main id="Novo">
    <div class="container">
        <div class="breadcrumbs">
			<ul>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/house.svg" alt="">
				</li>
				<li>
					<a href="<?php echo site_url(); ?>">Meus livros</a>
				</li>
				<li>Adicionar Novo</li>
			</ul>
		</div>    
        <h1 class="tituloPagina">Adicionar Livro</h1>
        <div class="inputBookWrapper">
            <div>
                <div class="searchBook">
                    <label>Informe o nome do livro</label>
                    <input
                        type="search"
                        id="searchBook"
                        placeholder="Pesquisar o livro"
                    />
                    <img src="<?php echo get_template_directory_uri(); ?>/images/search.svg" alt="search icon">
                    <div class="dropdownBooks">
                        <ul>
                        </ul>
                    </div>
                </div>
                <span>
                    <button class="btn btn-transparent addManualButton">
                        <img src="<?php echo get_template_directory_uri();?>/images/plus.svg" alt="plus icon">
                        Preencher manualmente
                    </button>
                </span>
		    </div>            
            <div>
                <div class="bookInput apiInput">
                    <div class="bookCover">
                        <div class="content">
                            <img src='' alt='book cover' />
                        </div>
                    </div>
                    <div class="bookInfo">
                        <form action="" method="post">
                            <input type="hidden" name="bookIsbn" id="bookIsbnInput">
                            <input type="hidden" name="bookTitle" id="bookTitleInput">
                            <input type="hidden" name="bookAuthor" id="bookAuthorInput">
                            <input type="hidden" name="bookStars" class="bookStarsInput">
                            <input type="hidden" name="bookPages" id="bookPagesInput">
                            <h2></h2>
                            <p class="author">
                                <span class="authorName"></span>
                                <span class="pages"></span>
                            </p>
                            <div class="inputWrapper">
                                <label htmlFor="">Comecei a ler:</label>
                                <input type="date" name="start_date"/>
                            </div>
                            <div class="inputWrapper">
                                <label htmlFor="">Terminei de ler: </label>
                                <input type="date" name="end_date"/>
                            </div>
                            <div class="inputWrapper starsSelect">
                                <p>Sua avaliação</p>
                                <div>
                                    <img src="<?php echo get_template_directory_uri();?>/images/star-gray.svg" alt="stars rating">
                                    <img src="<?php echo get_template_directory_uri();?>/images/star-gray.svg" alt="stars rating">
                                    <img src="<?php echo get_template_directory_uri();?>/images/star-gray.svg" alt="stars rating">
                                    <img src="<?php echo get_template_directory_uri();?>/images/star-gray.svg" alt="stars rating">
                                    <img src="<?php echo get_template_directory_uri();?>/images/star-gray.svg" alt="stars rating">
                                </div>
                            </div>
                            <div class="inputWrapper">
                                <p>Escreva uma Resenha</p>
                                <textarea
                                    id=""
                                    cols="30"
                                    rows="5"
                                    placeholder="Escrever"
                                    name="bookReview"
                                ></textarea>
                            </div>
                            <div class="bookInputButtons">
                                <button type="submit" class="btn btn-default submitData">
                                    Cadastrar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="bookInput manualInput">
                    <div class="bookInfo">
                        <form action="" method="post">
                            <input type="hidden" name="bookStars" class="bookStarsInput">
                            <div class="inputWrapper">
                                <p>ISBN</p>
                                <input type="text" name="bookIsbn" />
                            </div>
                            <div class="inputWrapper">
                                <p>Título do livro:</p>
                                <input type="text" name="bookTitle"/>
                            </div>
                            <div class="inputWrapper">
                                <p>Nome do autor:</p>
                                <input type="text" name="bookAuthor"/>
                            </div>
                            <div class="inputWrapper">
                                <p>Número de páginas:</p>
                                <input type="tel" name="bookPages"/>
                            </div>
                            <div class="inputWrapper">
                                <label htmlFor="">Comecei a ler:</label>
                                <input type="date" name="start_date"/>
                            </div>
                            <div class="inputWrapper">
                                <label htmlFor="">Terminei de ler: </label>
                                <input type="date" name="end_date"/>
                            </div>
                            <div class="inputWrapper starsSelect">
                                <p>Sua avaliação</p>
                                <img src="<?php echo get_template_directory_uri();?>/images/star-gray.svg" alt="stars rating">
                                <img src="<?php echo get_template_directory_uri();?>/images/star-gray.svg" alt="stars rating">
                                <img src="<?php echo get_template_directory_uri();?>/images/star-gray.svg" alt="stars rating">
                                <img src="<?php echo get_template_directory_uri();?>/images/star-gray.svg" alt="stars rating">
                                <img src="<?php echo get_template_directory_uri();?>/images/star-gray.svg" alt="stars rating">
                            </div>
                            <div class="inputWrapper">
                                <p>Escreva uma Resenha</p>
                                <textarea
                                    name="bookReview"
                                    cols="30"
                                    rows="5"
                                    placeholder="Escrever"
                                ></textarea>
                            </div>
                            <div class="bookInputButtons">
                                <button class="btn btn-default submitData">
                                    Cadastrar
                                </button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/page-new-book.js"></script>