function sum_money(){
	$.ajax({
		url: "donation.php",
		type: "POST",
		data: ''
	})
	.success(function(result){
		var obj=jQuery.parseJSON(result);
		//console.log(obj);
		document.getElementById("sing-phase-hidden").textContent=obj;
	});
}
setInterval(sum_money,100);