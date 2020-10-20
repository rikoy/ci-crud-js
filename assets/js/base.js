$(function () {
	
	
	$('.subnavbar').find ('li').each (function (i) {
	
		var mod = i % 3;
		
		if (mod === 2) {
			$(this).addClass ('subnavbar-open-right');
		}
		
	});
	
	
	
});

function loadMainContent(url)
{
	$.post(site_url+url
			,{}
			,function(result) {
				$('#app-content').html(result);
			}					
			,"html"
		);
}