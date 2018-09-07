$(function () {
	//検索ボタンをクリックされたときに実行
	$("#search_btn").click(function () {
		//入力値をセット
		var param = {zipcode: $('#zipcode').val()};
		var send_url = "/users/search";
		$.ajax({
			type: "post",
			data: param,
			url: send_url,
		//	dataType: "json",
			success: function (res) {
				//該当する住所を表示
				var html = '';
				html +=  res['id'];
				html +=  res.state;
				html +=  res.city;
				html +=  res.street;
				$('#zip_result').html(html);
				alert(res);

			},
			error: function (res, status, errors) {
				alert(res + ', ' + status + ', ' + errors);
			}
		});
		return false;
	});
});
