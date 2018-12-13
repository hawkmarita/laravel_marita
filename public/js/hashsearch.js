$(document).ready(function(){
	var token = '71ef3614d17189518da1c77cfb9615166adb79a1f2b05b8bbc6c37251f003e65536c2f2619f45aa4d7605',
    hashtag='simbirsk_toys', // hashtag without # symbol
    num_photos = 4,
    item = ''; 
 
	$.ajax({
		url: 'https://api.vk.com/method/newsfeed.get?filters=photo&count='+ num_photos +'&access_token=' + token + '&v=5.21',
		dataType: 'jsonp',
		type: 'GET',
		data: {access_token: token, count: num_photos},
		success: function(data){
			console.log(data);
			for(x in data.data){
				$('#uls').append('<img src="'+data.data[x].images.standart_resolution.url+'">');  
			}
		},
		error: function(data){
			console.log(data);
		}
	});
});

