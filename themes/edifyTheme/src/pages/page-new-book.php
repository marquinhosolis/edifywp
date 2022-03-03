<?php
/*
Template Name: New Book Page
*/
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
                            <li>
                                nenhum livro encontrado!
                            </li>
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
                        <h2></h2>
                        <p class="author">
                            <span class="authorName"></span>
                            <span class="pages"></span>
                        </p>
                        <div class="inputWrapper">
                            <label htmlFor="">Comecei a ler:</label>
                            <input type="date" />
                        </div>
                        <div class="inputWrapper">
                            <label htmlFor="">Terminei de ler: </label>
                            <input type="date" />
                        </div>
                        <div class="inputWrapper">
                            <p>Sua avaliação</p>
                            <img src="<?php echo get_template_directory_uri();?>/images/star.svg" alt="stars rating">
                            <img src="<?php echo get_template_directory_uri();?>/images/star.svg" alt="stars rating">
                            <img src="<?php echo get_template_directory_uri();?>/images/star.svg" alt="stars rating">
                            <img src="<?php echo get_template_directory_uri();?>/images/star.svg" alt="stars rating">
                            <img src="<?php echo get_template_directory_uri();?>/images/star.svg" alt="stars rating">
                        </div>
                        <div class="inputWrapper">
                            <p>Escreva uma Resenha</p>
                            <textarea
                                name=""
                                id=""
                                cols="30"
                                rows="5"
                                placeholder="Escrever"
                            ></textarea>
                        </div>
                        <div class="bookInputButtons">
                            <Button class="btn btn-default">
                                Cadastrar
                            </Button>
                        </div>
                    </div>
                </div>
                <div class="bookInput manualInput">
                    <div class="bookInfo">
                        <div class="inputWrapper">
                            <p>ISBN</p>
                            <input type="text" />
                        </div>
                        <div class="inputWrapper">
                            <p>Título do livro:</p>
                            <input type="text" />
                        </div>
                        <div class="inputWrapper">
                            <p>Nome do autor:</p>
                            <input type="text" />
                        </div>
                        <div class="inputWrapper">
                            <p>Número de páginas:</p>
                            <input type="tel" />
                        </div>
                        <div class="inputWrapper">
                            <label htmlFor="">Comecei a ler:</label>
                            <input type="date" />
                        </div>
                        <div class="inputWrapper">
                            <label htmlFor="">Terminei de ler: </label>
                            <input type="date" />
                        </div>
                        <div class="inputWrapper">
                            <p>Sua avaliação</p>
                            <img src="<?php echo get_template_directory_uri();?>/images/star.svg" alt="stars rating">
                            <img src="<?php echo get_template_directory_uri();?>/images/star.svg" alt="stars rating">
                            <img src="<?php echo get_template_directory_uri();?>/images/star.svg" alt="stars rating">
                            <img src="<?php echo get_template_directory_uri();?>/images/star.svg" alt="stars rating">
                            <img src="<?php echo get_template_directory_uri();?>/images/star.svg" alt="stars rating">
                        </div>
                        <div class="inputWrapper">
                            <p>Escreva uma Resenha</p>
                            <textarea
                                name=""
                                id=""
                                cols="30"
                                rows="5"
                                placeholder="Escrever"
                            ></textarea>
                        </div>
                        <div class="bookInputButtons">
                            <button class="btn btn-default">
                                Cadastrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/page-new-book.js"></script>