var request = require('request');
var querystring = require('querystring');
var fs = require('fs');
var video_id = '45YyPTgCtJs';
var quality = 'hd1080'; // hd1080, hd720, large
request('http://www.youtube.com/get_video_info?video_id=' + video_id, function(error, response, body){
  var query = querystring.parse(body);
	if(query.url_encoded_fmt_stream_map){
		var stream = null;
		var stream_map = query.url_encoded_fmt_stream_map.split(',');
		stream_map.forEach(function(senc){
			var s = querystring.parse(senc);
			if((/^video\/mp4/).test(s.type) && s.quality === quality){
				stream = s;
			}
		});
		if(stream){
			request(stream.url + '&signature=' + stream.sig).pipe(fs.createWriteStream(video_id + '.mp4'));
		}
	}
});
