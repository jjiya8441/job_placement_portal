// Get references to the HTML elements using their IDs
const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

// Add event listener to the signUpButton
signUpButton.addEventListener("click", () => {
  // Add the 'right-panel-active' class to the container
  container.classList.add("right-panel-active");
});

// Add event listener to the signInButton
signInButton.addEventListener("click", () => {
  // Remove the 'right-panel-active' class from the container
  container.classList.remove("right-panel-active");
});
