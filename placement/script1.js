// Function to show the popup
function showPopup() {
    var popup = document.getElementById("successPopup");
    popup.style.display = "block";
}

// Function to close the popup
function closePopup() {
    var popup = document.getElementById("successPopup");
    popup.style.display = "none";
}

// Add event listeners to the Apply buttons
document.getElementById("apply1").addEventListener("click", function() {
    showPopup();
});
