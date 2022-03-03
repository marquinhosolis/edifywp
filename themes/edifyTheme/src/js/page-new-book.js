$(document).ready(function () {
	function populateDropdown(data) {
		$('.dropdownBooks ul').children('li').remove();
		$('.dropdownBooks').addClass('dropdownBooks--visible');

		data.forEach((book) => {
			$('.dropdownBooks ul').append(
				'<li><div class="bookCover"><div class="content"><img src="https://covers.openlibrary.org/b/isbn/' +
					book.volumeInfo.industryIdentifiers[0].identifier +
					'-L.jpg" alt="A guerra dos tronos"/></div></div><div class="bookInfo"><h2>' +
					book.volumeInfo.title +
					'</h2><p class="author">' +
					book.volumeInfo.authors +
					'</p><p class="pageCount"><span>' +
					book.volumeInfo.pageCount +
					'</span> páginas</p> <p class="isbn">ISBN: <span>' +
					book.volumeInfo.industryIdentifiers[0].identifier +
					'</span></p></div></li>'
			);
		});
	}

	$('#searchBook').keyup(function () {
		$('.bookInput').removeClass('bookInput--visible');
		var term = $(this).val();
		if ($(this).val().length > 3) {
			$.ajax({
				url:
					'https://www.googleapis.com/books/v1/volumes?langRestrict=pt-BR&q=' +
					term,
				type: 'GET',
				success: function (data) {
					populateDropdown(data.items);
				},
			});
		}
	});

	$('.dropdownBooks').on('click', 'li', function () {
		var selectedBook = {};
		selectedBook.title = $(this).find('.bookInfo h2').text();
		selectedBook.author = $(this).find('.bookInfo p.author').text();
		selectedBook.pageCount = $(this)
			.find('.bookInfo .pageCount span')
			.text();
		selectedBook.cover = $(this).find('.bookCover img').attr('src');
		selectedBook.isbn = $(this).find('.bookInfo .isbn span').text();

		localStorage.setItem('selectedBook', JSON.stringify(selectedBook));

		$('.dropdownBooks').removeClass('dropdownBooks--visible');
		$('.apiInput').addClass('bookInput--visible');

		populateBookInput();

		$('#searchBook').val('');
	});

	function populateBookInput() {
		var selectedBook = JSON.parse(localStorage.getItem('selectedBook'));
		$('#bookIsbnInput').val(selectedBook.isbn);

		$('.apiInput .bookInfo h2').text(selectedBook.title);
		$('#bookTitleInput').val(selectedBook.title);

		$('.apiInput .authorName').text(selectedBook.author);
		$('#bookAuthorInput').val(selectedBook.author);

		$('.apiInput .pages').text(selectedBook.pageCount + ' páginas');
		$('#bookPagesInput').val(selectedBook.pageCount);

		$('.apiInput .bookCover img').attr('src', selectedBook.cover);
	}

	$('.starsSelect img').click(function () {
		var starGray =
			'http://localhost:8000/wp-content/themes/edifyTheme/src/images/star-gray.svg';
		var starSelected =
			'http://localhost:8000/wp-content/themes/edifyTheme/src/images/star.svg';
		$('.starsSelect img').attr('src', starGray);
		$(this).attr('src', starSelected);
		$(this).prevAll().attr('src', starSelected);
		var index = $(this).index() + 1;
		$('.bookStarsInput').val(index);
	});

	$('.addManualButton').click(function () {
		$('.apiInput').removeClass('bookInput--visible');
		$('.manualInput').addClass('bookInput--visible');
	});
});
