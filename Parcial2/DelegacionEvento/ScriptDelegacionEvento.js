window.onload = function()
{
    document.getElementById("cont").addEventListener("click",function(e)
    {
        console.log(e.target.id)
        
        if(e.target.id !== "cont")
        document.getElementById(e.target.id).classList.toggle("cajaNueva");
        
    });
}