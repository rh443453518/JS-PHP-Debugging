var request = $.ajax({
	type: 'GET',
	url: "data/pokemon.json",
	dataType: "json"
});

request.finished(function(data) {
	var pokemonArray = $.map(data, function(value, index) {
		return [value];
	});
	pokemonArray.forEach(function(item) {
		var pokemon = new Pokemon(item.name, item.weight, item.sprites, item.stats);
		$(".results .row").append(pokemon.render);
	});
});

$("#font-select").change(function() {
	
});

$("#hide-sprites").change(function() {

});

$("#add-font-size").click(function(){

});

$(".search").keyup(function() {

});

$("#sort-select").change(function() {

});