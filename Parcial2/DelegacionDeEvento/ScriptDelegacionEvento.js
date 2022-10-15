window.onload = function()
{
    document.getElementById("idcontenedor").addEventListener("click",function(e)
    {
        console.log(e.target.id)
        
        if(e.target.id !== "idcontenedor")
        document.getElementById(e.target.id).classList.toggle("cajaToggle");
        
    });
}