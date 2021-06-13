class Storage{
    constructor(parent){
        this.parent = parent || "items";
        if(!localStorage.getItem(parent)){
            localStorage.setItem(parent, JSON.stringify({}));
        }
    }
    get(key){
        const storage = JSON.parse( localStorage.getItem(this.parent));
        return storage[key];
    }
    set(key, value){
        const storage = JSON.parse(localStorage.getItem(this.parent));
        storage[key] = value;
        localStorage.setItem(this.parent, JSON.stringify(storage));
    }
    getAll(){
        return JSON.parse(localStorage.getItem(this.parent));
    }
    delete(key){
        const storage = JSON.parse(localStorage.getItem(this.parent));
        delete storage[key];
        localStorage.setItem(this.parent, JSON.stringify(storage));
    }
    destroy(){
        localStorage.setItem(this.parent, JSON.stringify({}));
    }
}