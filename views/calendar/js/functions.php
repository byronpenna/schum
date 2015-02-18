function searchBar(){
	frm = serializeToJson($(".searchBarBackground :input").serializeArray());
	url = <?php echo "'".site_url("listings/searchHome")."'"  ?> ;
	console.log(frm);
	$.each(frm,function(i,value){
		url += "/"+value;
	});
	console.log(url);
	location.href=url;

	
	// window.location=url+"/"+frm;
	// url = url+"/"+frm;
	// console.log(url);
	// relocate()
}