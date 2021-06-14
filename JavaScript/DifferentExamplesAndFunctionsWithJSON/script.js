const items = [
    {name: 'Bike', price: 100},
    {name: 'TV', price: 200},
    {name: 'Album', price: 10},
    {name: 'Book', price: 5},
    {name: 'Phone', price: 500},
    {name: 'Computer', price: 1000},
    {name: 'Keyboard', price: 25}
]

// const filteredItems = items.filter((item) => {
//     return item.price <= 100
// })

// console.log(items)
// console.log(filteredItems);

// const itemNames=items.map((item)=>{
//     return item.name;
// })
//
//
// console.log(itemNames);

// const itemPrices=items.map((item)=>{
//     return item.price;
// })
//
//
// console.log(itemPrices);

// const foundItem=items.find((item)=>{
//     return item.name==='Album'
// })
//
//
// console.log(foundItem);


// items.forEach((item)=>{
//     console.log(item.price)
// })

// items.forEach((item)=>{
//     console.log(item.name)
// })

// some items
// const hasInexpensiveItems=items.some((item)=>{
//     return item.price>=112100;
// })
//Return False
// console.log(hasInexpensiveItems);

// all items  are less or equal of 10000
// const hasInexpensiveItems=items.every((item)=>{
//     return item.price<=10000;
// })
// // Return False
// console.log(hasInexpensiveItems);


//sum of all prices

// const total=items.reduce((currentTotal, item)=>{
//     return item.price+currentTotal
// },0)
// console.log(total)


// // const items2 = [1, 2, 3, 4, 5];
// const includesTwo = items.includes(2);
// console.log(includesTwo);

const hasInexpensiveItems = items.find((item) => {
    if (item.price === 100) {
        return "Yes";
    } else {
        return "No";
    }
    // return item.price<=10000;
})

console.log(hasInexpensiveItems);
