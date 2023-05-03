function randomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function startPreloader() {
    setInterval(() => {
        this.$refs.preloader.textContent = this.preloaderContent;
    }, this.preloaderInterval);
}

function getRandomChar() {
    const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-=_+[]{}|;:\'",<>.?/';
    return chars.charAt(Math.floor(Math.random() * chars.length));
}

function startPreloader() {
    setInterval(() => {
        this.$refs.preloader.textContent = this.preloaderContent;
    }, this.preloaderInterval);
}

function displayProduct(product) {
    if (product.type === 'iPhone') {
        return `
    <h3>${product.name}</h3>
    <p>Price: $${product.price}</p>
    <img src="${product.imageUrl}" alt="${product.name}" />
    <p>${product.description}</p>
    <p>Release Date: ${product.releaseDate}</p>
  `;
    } else if (product.type === 'Accessory') {
        return `
    <h3>${product.name}</h3>
    <p>Price: $${product.price}</p>
    <img src="${product.imageUrl}" alt="${product.name}" />
    <p>${product.description}</p>
    <p>Compatible with: ${product.compatibility.join(', ')}</p>
  `;
    }
}
module.exports = {
    randomInt,
    startPreloader,
    getRandomChar,
    displayProduct
};    