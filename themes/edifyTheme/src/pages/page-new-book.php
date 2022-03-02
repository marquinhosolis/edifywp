<?php
/*
Template Name: New Book Page
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/newBook-page.min.css">
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
                                <div class="bookCover">
                                    <div class="content">
                                        <img
                                            src='https://covers.openlibrary.org/b/isbn/8562936529-L.jpg'
                                            alt='A guerra dos tronos'
                                        />
                                    </div>
                                </div>
                                <div class="bookInfo">
                                    <h2>A guerra dos tronos</h2>
                                    <p class="author">
                                        George R. R. Martin, Jorge Candeiras
                                    </p>
                                    <p class="pageCount">
                                        <span>710</span> páginas
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="bookCover">
                                    <div class="content">
                                        <img
                                            src='https://covers.openlibrary.org/b/isbn/8562936529-L.jpg'
                                            alt='A guerra dos tronos'
                                        />
                                    </div>
                                </div>
                                <div class="bookInfo">
                                    <h2>A guerra dos tronos</h2>
                                    <p class="author">
                                        George R. R. Martin, Jorge Candeiras
                                    </p>
                                    <p class="pageCount">
                                        <span>710</span> páginas
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="bookCover">
                                    <div class="content">
                                        <img
                                            src='https://covers.openlibrary.org/b/isbn/8562936529-L.jpg'
                                            alt='A guerra dos tronos'
                                        />
                                    </div>
                                </div>
                                <div class="bookInfo">
                                    <h2>A guerra dos tronos</h2>
                                    <p class="author">
                                        George R. R. Martin, Jorge Candeiras
                                    </p>
                                    <p class="pageCount">
                                        <span>710</span> páginas
                                    </p>
                                </div>
                            </li>
                            <li>
                                nenhum livro encontrado!
                            </li>
                        </ul>
                    </div>
                </div>
                <span onClick={props.handleClickManualInput()}>
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
                            <img src='https://covers.openlibrary.org/b/isbn/8562936529-L.jpg' alt='A guerra dos tronos' />
                        </div>
                    </div>
                    <div class="bookInfo">
                        <h2>A guerra dos tronos</h2>
                        <p class="author">
                            <span>George R. R. Martin, Jorge Candeiras </span>
                            <span>710 páginas</span>
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
                            <span onClick={props.cancelInput()}>
                                <button class="btn btn-transparent">
                                    cancelar
                                </button>
                            </span>
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
                            <span>
                                <button class="btn btn-transparent">
                                    cancelar
                                </button>
                            </span>
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