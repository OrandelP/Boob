const title = document.querySelector(".title");

title.innerHTML = title.innerText
  .split("")
  .map((ltr, idx) => {
    return `<span class="ltr" style="--delay: ${idx * 20}ms">${ltr}</span>`;
  })
  .join("");

console.log(title);

const ltrs = document.querySelectorAll(".title .ltr");

ltrs.forEach((ltr) => {
  ltr.addEventListener("animationend", () => {
    ltr.classList.add("show");
  });
});
        