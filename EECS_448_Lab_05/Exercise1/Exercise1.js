function keyPressed(event)
{
	var key = event.keyCode || event.charCode || event.which;
	return key;
}


function validate()
		{
			
			var password_one = document.getElementById('password1').value;
			var password_two = document.getElementById('password2').value;
			
			if(password_one == "" && password_two == "")
			{
				alert("Error! Password Fields Cannot be Empty");
			}
			else
			{
				if(password_one != password_two)
				{
					alert("Error! Entered Passwords Don't Match");
				}
				else
				{
					if(password_one.length < 8 || password_two.length < 8)
					{
						alert("Error! Passwords Are Less Than 8 Characters");
					}
					else
					{
						alert("Passwords Match");
					}
				}
			}
			
		}