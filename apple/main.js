Vue.createApp({
    data() {
      return {
        products: [
          {
            id: 1,
            type: 'iPhone',
            name: 'iPhone 14 Pro',
            price: 999,
            imageUrl: './img/iPhone14.jpg',
            description: "It's a great year.",
            releaseDate: '11.13',
          },
          {
            id: 2,
            type: 'iPhone',
            name: 'iPhone 14',
            price: 799,
            imageUrl: './img/s-2.jpg',
            description: 'Blast past fast',
            releaseDate: '11.13',
          },
          {
            id: 3,
            type: 'Accessory',
            name: 'iPhone 14 Pro & iPhone 14 Case',
            price: 49,
            imageUrl: './img/iPhoneCase.jpg',
            description:
              'A stylish and durable case for your iPhone 14 Pro and iPhone 14.',
            compatibility: ['iPhone 14 Pro', 'iPhone 14'],
          },
        ],
        preloaderWidth: 40,
        preloaderHeight: 40,
        preloaderInterval: 100,
      };
    },
    computed: {
      preloaderContent() {
        let content = '';
        for (let i = 0; i < this.preloaderHeight; i++) {
          for (let j = 0; j < this.preloaderWidth; j++) {
            content += this.getRandomChar();
          }
          content += '\n';
        }
        return content;
      },
    },
    methods: {
      displayProduct(product) {
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
      },
      getRandomChar() {
        const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-=_+[]{}|;:\'",<>.?/';
        return chars.charAt(Math.floor(Math.random() * chars.length));
      },
      startPreloader() {
        setInterval(() => {
          this.$refs.preloader.textContent = this.preloaderContent;
        }, this.preloaderInterval);
      },
    },
    mounted() {
      this.startPreloader();
    },
  }).mount('#app');  