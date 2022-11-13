function _reset()
{
    window.location.reload(true);
}

function onSubmit()
{
    var item1 = document.getElementById('item-1').value;
    var item2 = document.getElementById('item-2').value;
    var item3 = document.getElementById('item-3').value;

    var shippingFree = document.getElementById('free').checked;
    var shippingOverNight = document.getElementById('overnight').checked;
    var shippingThreeDay = document.getElementById('threeday').checked;
    var submitted = true;

    if(item1 < 0)
    {
        alert("ERROR! # of Krabby Patties Cannot Put Number Less than 0!!! Arrrgg!!!!!");
        submitted = false;
    }
    if(item2 < 0)
    {
        alert("ERROR! # of Kelp Rings Cannot Put Number Less than 0!!! Arrrgg!!!!!");
        submitted = false;
    }
    if(item3 < 0)
    {
        alert("ERROR! # of Kelp Shake Cannot Put Number Less than 0!!! Arrrgg!!!!!");
        submitted = false;
    }
    if(shippingFree == false && shippingOverNight == false && shippingThreeDay == false)
    {
        alert("ERROR! Must choose Shipping Option!!! Money doesn't fall from the sky Arrrgg!!!!");
        submitted = false;
    }

}