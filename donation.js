function sum_money(){
	$.ajax({
		url: "sum_donation.php",
		type: "POST",
		data: ''
	})
	.success(function(result){
		var obj=result;
		//console.log(obj);
		document.getElementById("sing-phase-hidden").textContent=obj;
	});
}
setInterval(sum_money,100);