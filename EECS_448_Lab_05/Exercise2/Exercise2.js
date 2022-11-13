var img_array = [];
var index = 0;
img_array.push("./rainbowmountains.jfif");
img_array.push("./glacier.jpg");
img_array.push("./himalayas.jfif");
img_array.push("./redwood.jpg");
img_array.push("./sahara.jfif");

function prev()
{
	if(index == 0)
	{
		index = img_array.length - 1;
		var img = document.getElementById('slide');
		img.src = img_array[index];
	}
	else
	{
		index -= 1;
		var img = document.getElementById('slide');
		img.src = img_array[index];
	}
}
function next()
{
	if(index == img_array.length - 1)
	{
		index = 0;
		var img = document.getElementById('slide');
		img.src = img_array[index];
	}
	else
	{
		index += 1;
		var img = document.getElementById('slide');
		img.src = img_array[index];
	}
			
}