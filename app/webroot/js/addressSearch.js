$(function () {
	//検索ボタンをクリックされたときに実行
	$("#search_btn").click(function () {
		//入力値をセット
		var param = {zipcode: $('#zipcode').val()}
		var send_url = "/users/search";
		$.ajax({
			type: "post",
			cache: false,
			data: {name: "tanaka"},
			url: send_url,
			success: function (res) {
					//該当する住所を表示
					//var html = '';
					//	html +=  res.id;
					//	html +=  res.state;
					//	html +=  res.state;
					//	html +=  res.street;
				//	$('#zip_result').html(html);
				alert(res);

			},
			error: function (res, status, errors) {
				alert(res + status + errors);
			}
		});
	});
});
