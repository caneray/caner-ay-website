const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Host': 'online-movie-database.p.rapidapi.com',
		'X-RapidAPI-Key': '90ff2f4f1fmsh222c24ae3f627cfp112e87jsn4cb2539ede77'
	}
};

fetch('https://online-movie-database.p.rapidapi.com/auto-complete?q=game', options)
	.then(response => response.json())
	.then(data => {
		const list = data.d;
		list.map((item) => {
			const name = item.l; 
			const poster = item.i.imageUrl;
			const movie =   `<li><img src= "${poster}"> <h2> <a href="https://www.google.com/search?q=${name}">${name}</a> </h2></li>`
			document.querySelector('.movies').innerHTML += movie;
		})

		
	})
	.then(response => console.log(response))
	.catch(err => console.error(err));