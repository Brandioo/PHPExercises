class Storage {

    constructor(parent) {
        this.parent = parent || "items";
        if (!localStorage.getItem(parent)) {
            localStorage.setItem(parent, JSON.stringify({}));
        }
    }

    get(key) {
        const storage = JSON.parse(localStorage.getItem(this.parent));
        return storage[key];
    }

    set(key, value) {
        const storage = JSON.parse(localStorage.getItem(this.parent));
        storage[key] = value;
        localStorage.setItem(this.parent, JSON.stringify(storage));
    }

    getAll() {
        return JSON.parse(localStorage.getItem(this.parent))
    }

    delete(key) {
        const storage = JSON.parse(localStorage.getItem(this.parent));
        delete storage[key];
        localStorage.setItem(this.parent, JSON.stringify(storage));
    }

    destroy() {
        localStorage.setItem(this.parent, JSON.stringify({}));
    }
}

const storage = new Storage("orders");
storage.destroy()
console.log(storage.getAll())
// const order1 = {
//     product: "Bluze",
//     size: "L",
//     price: "$350"
// }
// const order2 = {
//     product: "Kmish",
//     size: "L",
//     price: "$350"
// }
// storage.set("order_1", order1);
// storage.set("order_2", order2);
// console.log(storage.get("order_1"));
