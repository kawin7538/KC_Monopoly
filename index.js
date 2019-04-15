function submit(){
	var score=$("#score").val();
	$.post("process.php",{score:score},function(data){
		document.getElementByClassName("title").textContent=data;
	});
}