const pepin = document.getElementById("pepin");
if (pepin) {
    pepin.addEventListener("click", function() {
        window.open("pepinChat.php", "Emergente", "resizable=no, menubar=no, width=400, height=650, scrollbars=no, toolbar=no, tittlebar=no, status=yes")
    });
}