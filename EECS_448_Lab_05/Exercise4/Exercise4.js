function onSubmit()
{
    var border = document.getElementById('border').value;
    var background = document.getElementById('background').value;
    var width = document.getElementById('width').value;
    console.log(typeof(border), typeof(background));
    var validBorder = validateBorder(border);
    var validBackground = validateBackground(background);
    console.log(validBorder, validBackground);
    if(validBorder == true)
    {
        var paragraph = document.getElementById("manipulation");
        paragraph.style.borderStyle = "solid";
        paragraph.style.borderColor = border;
        paragraph.style.borderWidth = width + "px";
        
    }
    if(validBackground == true)
    {
        var paragraph = document.getElementById("manipulation");
        paragraph.style.backgroundColor = background;
    }
}

function validateBorder(border)
{
    if(border.toLowerCase() == "red" || border.toLowerCase() == "green" || border.toLowerCase() == "blue")
    {
        return true;
    }
    else
    {
        return false;
    }
}

function validateBackground(background)
{
    if(background.toLowerCase() == "red" || background.toLowerCase() == "green" || background.toLowerCase() == "blue")
    {
        return true;
    }
    else
    {
        return false;
    }
}