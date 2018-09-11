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
			dataType: "json",
			success: function (res) {
				//該当する住所を表示
				var html = '';
				html +=  res[0].PostalCode.state;
				html +=  res[0].PostalCode.city;
				html +=  res[0].PostalCode.street;
				$('#zip_result').val(html);
			//	alert(JSON.stringify(res));

			},
			error: function (res, status, errors) {
				alert(res + ', ' + status + ', ' + errors);
			}
		});
		return false;
	});
});
