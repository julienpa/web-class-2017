fetch('http://localhost/api/public/articles')
	.then((result) => result.json())
	.then((json) => {
		const data = json.data;
		for (var i = 0 ; i < data.length ; i++) {
			document.getElementsByTagName('body')[0].insertAdjacentHTML('beforeend', '<p>'+ data[i].title +'</p>');
		}
	});
