//to disable a button untill there's a input
function en()
{
    document.getElementById("btn").disabled = false;
    if (document.getElementById("fname").value == "") 
    {
        document.getElementById("btn").disabled = true;
    }
}
