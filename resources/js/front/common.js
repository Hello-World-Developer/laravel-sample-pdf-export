
window.$el = (value) => {
    return document.querySelector(value)
}

window.range = (val) => {
    return [...Array(val).keys()].map(x => x + 1);
}

