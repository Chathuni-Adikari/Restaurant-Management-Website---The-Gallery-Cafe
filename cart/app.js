let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [


    {
        id: 1,
        name: 'Fish Cutlets',
        image: 'a1.png',
        price: 1150
    },
    {
        id: 2,
        name: 'Spicy Prawn Cocktail',
        image: 'a2.png',
        price: 1400
    },
    {
        id: 3,
        name: 'Vegetable Roti',
        image: 'a3.png',
        price: 1350
    },

    {
        id: 4,
        name: 'Chicken Dumplings',
        image: 'a4.png',
        price: 1750
    },
    {
        id: 5,
        name: 'Crispy Prawn Wontons',
        image: 'a5.png',
        price: 1400
    },
    {
        id: 6,
        name: 'Vegetable Lettuce Wraps',
        image: 'a6.png',
        price: 1350
    },{
        id: 7,
        name: 'Bruschetta',
        image: 'a7.png',
        price: 1250
    },
    {
        id: 8,
        name: 'Caprese Salad',
        image: 'a8.png',
        price: 1100
    },
    {
        id: 9,
        name: 'Antipasto Platter',
        image: 'a9.png',
        price: 1350
    },


    {
        id: 10,
        name: 'Prawn Curry',
        image: 'm1.png',
        price: 1850
    },
    {
        id: 11,
        name: 'Crab Curry',
        image: 'm2.png',
        price: 1650
    },
    {
        id: 12,
        name: 'Fish Ambul Thiyal',
        image: 'm3.png',
        price: 1600
    },
    {
        id: 13,
        name: 'Kung Chicken',
        image: 'm4.png',
        price: 1850
    },
    {
        id: 14,
        name: 'Beef with Broccoli',
        image: 'm5.png',
        price: 1670
    },
    {
        id: 15,
        name: 'Mapo Tofu',
        image: 'm6.png',
        price: 1600
    },
    {
        id: 16,
        name: 'Pepperoni Pizza',
        image: 'm7.png',
        price: 1650
    },
    {
        id: 17,
        name: 'Lasagna',
        image: 'm8.png',
        price: 1800
    },
    {
        id: 18,
        name: 'Chicken Parmigiana',
        image: 'm9.png',
        price: 1600
    },


    {
        id: 19,
        name: 'Lamprais',
        image: 'r1.png',
        price: 1750
    },
    {
        id: 20,
        name: 'String Hoppers with Curry',
        image: 'r2.png',
        price: 1500
    },
    {
        id: 21,
        name: 'Hoppers with Lunu Miris',
        image: 'r3.png',
        price: 1200
    },
    {
        id: 22,
        name: 'Yangzhou Fried Rice',
        image: 'r4.png',
        price: 1750
    },
    {
        id: 23,
        name: 'Hokkien Noodles',
        image: 'r5.png',
        price: 1500
    },
    {
        id: 24,
        name: 'Steamed Jasmine Rice',
        image: 'r6.png',
        price: 1200
    },
    {
        id: 25,
        name: 'Spaghetti Carbonara',
        image: 'r7.png',
        price: 1500
    },
    {
        id: 28,
        name: 'Risotto Milanese',
        image: 'r8.png',
        price: 1500
    },
    {
        id: 27,
        name: 'Fettuccine Alfredo',
        image: 'r9.png',
        price: 1350
    },

    {
        id: 28,
        name: 'Watalappam',
        image: 'd1.png',
        price: 450
    },
    {
        id: 29,
        name: 'Kiri Pani',
        image: 'd2.png',
        price: 350
    },
    {
        id: 30,
        name: 'Coconut Pancake',
        image: 'd3.png',
        price: 550
    },
    {
        id: 31,
        name: 'Mango Pudding',
        image: 'd4.png',
        price: 750
    },
    {
        id: 32,
        name: 'Sesame Balls',
        image: 'd5.png',
        price: 800
    },
    {
        id: 33,
        name: 'Fried Banana with Ice Cream',
        image: 'd6.png',
        price: 1000
    },
    {
        id: 34,
        name: 'Tiramisu',
        image: 'd7.png',
        price: 1050
    },
    {
        id: 35,
        name: 'Panna Cotta',
        image: 'd8.png',
        price: 1100
    },
    {
        id: 36,
        name: 'Gelato',
        image: 'd9.png',
        price: 1000
    },


    {
        id: 37,
        name: 'King Coconut',
        image: 'bv1.png',
        price: 350
    },
    {
        id: 38,
        name: 'Milk Tea',
        image: 'bv2.png',
        price: 250
    },
    {
        id: 39,
        name: 'Fruit Juice (Mango, Pineapple)',
        image: 'bv3.png',
        price: 650
    },

    {
        id: 40,
        name: 'Chinese Tea',
        image: 'bv4.png',
        price: 450
    },
    {
        id: 41,
        name: 'Lychee Juice',
        image: 'bv5.png',
        price: 850
    },
    {
        id: 42,
        name: 'Chilled Lemon Tea',
        image: 'bv6.png',
        price: 950
    },
    {
        id: 43,
        name: 'Espresso',
        image: 'bv7.png',
        price: 550
    },
    {
        id: 44,
        name: 'Cappuccino',
        image: 'bv8.png',
        price: 650
    },
    {
        id: 45,
        name: 'Italian Lemonade',
        image: 'bv9.png',
        price: 950
    },
   
];


let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">LKR ${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key) => {
        if(value != null){
            totalPrice += value.price;
            count += value.quantity;
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="image/${value.image}"/></div>
                <div>${value.name}</div>
                <div>LKR ${value.price.toLocaleString('en-LK')}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
            listCard.appendChild(newDiv);
        }
    });
    total.innerText = `LKR ${totalPrice.toLocaleString('en-LK')}`; 
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}

