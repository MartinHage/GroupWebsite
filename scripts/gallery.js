let container = document.createElement('div')
let row = document.createElement('div')

container.className = "container-fluid"
row.className = "row"

let src = "../img/gallery/";

for (let i = 1; i <= 27; i++) {
    let col = document.createElement("div")
    col.className = "col-xl-4"
    let img = document.createElement("img")
    img.className = "animal-pic"
    img.src = src + i + ".jpg"
    col.appendChild(img);
    row.appendChild(col)
}

container.appendChild(row)

document.body.appendChild(container)

// let animalPics = document.getElementsByClassName("animal-pic")
// for (let i = 0; i < animalPics.length; i++) {
//     let animalPic = animalPics.item(i)
//     animalPic.addEventListener("mousedown", resizeImg(animalPic))
//     console.log("listener")
// }

// function resizeImg(pic) {
//     pic.style.width = "1000px"
//     console.log("click")
// }