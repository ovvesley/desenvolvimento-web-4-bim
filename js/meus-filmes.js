var baseUrlImgPoster = "https://image.tmdb.org/t/p/w500";
var apiKey = "85f88502058b0253f06934679a1c8f3b";
function myMoviesSetup() {
  const myMovies = getMyMovies();
  myMovies.forEach(item => {
    setupMovie(item);
  });
}

myMoviesSetup();
function getMyMovies() {
  const myMoviesDOM = document.querySelector("#mymovies").children;
  return Array.from(myMoviesDOM);
}

async function setupMovie(domElement) {
    var id = getIdMovie(domElement);
    const movie = await getMovie(id);
    setupCardMovie(movie, id);
    
    
}

function getIdMovie(domElement) {
  return domElement.id;
}

function getMovie(movieId) {
  var url = `https://api.themoviedb.org/3/movie/${movieId}?api_key=${apiKey}&language=pt-BR`;
  return fetch(url)
    .then(response => response.json())
    .then(data => data)
    .catch(error => console.log("error is", error));
}

function setupCardMovie(movie, id){
    $(`#titulo-${id}`).text(movie.title);
    $(`#imagem-${id}`).attr("src", baseUrlImgPoster+ movie.poster_path);
    $(`#ano-${id}`).text(movie.release_date.split("-")[0]);
    console.log(movie);
}
