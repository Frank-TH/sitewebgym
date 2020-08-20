// Get the modal
window.addEventListener("load",inicio)
function inicio(){

    var modal = document.getElementById('login')
            
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none"
        }
    }

}