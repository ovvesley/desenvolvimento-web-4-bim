var baseUrlImgPoster = "https://image.tmdb.org/t/p/w500";
function fetchMovies() {
  var apiKey = "85f88502058b0253f06934679a1c8f3b";
  var pageSize = generatePage();
  var url = `https://api.themoviedb.org/3/movie/popular?api_key=${apiKey}&language=pt-BR&page=${pageSize}`;
  return fetch(url)
    .then(response => response.json())
    .then(data => data)
    .catch(error => console.log("error is", error));
}

function generatePage() {
  return parseInt(Math.random() * 10 + 1);
}
function generateIndexPage(length) {
  return parseInt(Math.random() * (length - 1) );
}

function selectRandMovie(movies) {
  var indexMovie = generateIndexPage(movies.results.length);
  console.log(indexMovie);
  return movies.results[indexMovie];
}

function getYearFromDate(date) {
  return date.split("-")[0];
}
function attrIdFilme(id) {
  var idsFilme = $(".idFilme");
  idsFilme[0].value = id;
  idsFilme[1].value = id;
  console.log(idsFilme);
}

function renderMovie(movies) {
  var movie = selectRandMovie(movies);

  $("#titulo").text(movie.original_title);
  $("#image-poster").attr("src", baseUrlImgPoster + movie.poster_path);
  $("#ano").text(getYearFromDate(movie.release_date));
  attrIdFilme(movie.id);
  console.log(movie);
}
fetchMovies().then(renderMovie);
