document.querySelectorAll(".accordion-header").forEach((button) => {
  button.addEventListener("click", () => {
    const body=button.nextElementSibling;
    body.classList.toggle("open");
  });
});
