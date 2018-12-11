$(document).ready(function(){
	var tok = '7126735684.605f1a0.b59d9854f73044648e93d84eff96a9cb', 
    userid = 7126735684, // ID пользователя
    kolichestvo = 3,
    item = ''; 
			 
	$.ajax({
		url: 'https://api.instagram.com/v1/users/' + userid + '/media/recent',
		dataType: 'jsonp',
		type: 'GET',
		data: {access_token: tok, count: kolichestvo}, // передаем параметры, которые мы указывали выше
		success: function(result){
	 		console.log(result);
			for( x in result.data ){
				$('#ph').append('<a href="https://www.instagram.com/simbirsk_toys"><img src="'+result.data[x].images.low_resolution.url+'"><text class="white">...</text></a>'); 
				// result.data[x].images.low_resolution.url - это URL картинки среднего разрешения, 306х306
				// result.data[x].images.thumbnail.url - URL картинки 150х150
				// result.data[x].images.standard_resolution.url - URL картинки 612х612
				// result.data[x].link - URL страницы данного поста в Инстаграм 
			}
		},
		error: function(result){
			console.log(result); // пишем в консоль об ошибках
		}
	});
});