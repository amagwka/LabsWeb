class Product {
    constructor(name, price, imageUrl, description) {
        this.name = name;
        this.price = price;
        this.imageUrl = imageUrl;
        this.description = description;
    }

    displayProduct() {
        return `
        <h3>${this.name}</h3>
        <p>Price: $${this.price}</p>
        <img src="${this.imageUrl}" alt="${this.name}" />
        <p>${this.description}</p>
      `;
    }
}

class iPhone extends Product {
    constructor(name, price, imageUrl, description, releaseDate) {
        super(name, price, imageUrl, description);
        this.releaseDate = releaseDate;
    }

    displayProduct() {
        return `
        ${super.displayProduct()}
        <p>Release Date: ${this.releaseDate}</p>
      `;
    }
}

class Accessory extends Product {
    constructor(name, price, imageUrl, description, compatibility) {
        super(name, price, imageUrl, description);
        this.compatibility = compatibility;
    }

    displayProduct() {
        return `
        ${super.displayProduct()}
        <p>Compatible with: ${this.compatibility.join(', ')}</p>
      `;
    }
}

const iPhone14Pro = new iPhone(
    "iPhone 14 Pro",
    999,
    "./img/iPhone14.jpg",
    "It's a great year.",
    "11.13"
);

const iPhone14 = new iPhone(
    "iPhone 14", 799,
    "./img/s-2.jpg",
    "Blast past fast",
    "11.13"
);

const iPhoneCase = new Accessory(
    "iPhone 14 Pro & iPhone 14 Case",
    49,
    "./img/iPhoneCase.jpg",
    "A stylish and durable case for your iPhone 14 Pro and iPhone 14.",
    ["iPhone 14 Pro", "iPhone 14"]
);

function displayProducts() {
    document.querySelector(".section1 .top__title").innerHTML = iPhone14Pro.displayProduct();
    document.querySelector(".section2 .top__title").innerHTML = iPhone14.displayProduct();
    document.querySelector(".section3 .top__title").innerHTML = iPhoneCase.displayProduct();
}

displayProducts();

function getRandomChar() {
    const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-=_+[]{}|;':\"<>,.?/";
    return chars.charAt(Math.floor(Math.random() * chars.length));
}

function generatePreloaderContent(width, height) {
    let content = "";

    for (let i = 0; i < height; i++) {
        for (let j = 0; j < width; j++) {
            content += getRandomChar();
        }
        content += "\n";
    }

    return content;
}
function startPreloader() {
    const preloaderElement = document.getElementById("preloader");
    const width = 40;
    const height = 40;
    const interval = 100;

    setInterval(() => {
        preloaderElement.textContent = generatePreloaderContent(width, height);
    }, interval);
}
startPreloader();