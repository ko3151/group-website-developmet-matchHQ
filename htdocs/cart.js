if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var remove_items_button = document.getElementsByClassName('remove')
    for (var i = 0; i < remove_items_button.length; i++) {
        var button = remove_items_button[i]
        button.addEventListener('click', remove_items)
    }

    var input_quantity = document.getElementsByClassName('count')
    for (var i = 0; i < input_quantity.length; i++) {
        var input = input_quantity[i]
        input.addEventListener('change', change_quantity)
    }

    var addto_cart = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addto_cart.length; i++) {
        var button = addto_cart[i]
        button.addEventListener('click', click_addto_cart)
    }
}

function remove_items(event) {
    var button_clicked = event.target
    button_clicked.parentElement.parentElement.remove()
    update_total_amount()
}

function change_quantity(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    update_total_amount()
}

function click_addto_cart(event) {
    var button = event.target
    var menu_item = button.parentElement.parentElement
    var title = menu_item.getElementsByClassName('shop-item-title')[0].innerText
    var price = menu_item.getElementsByClassName('shop-item-price')[0].innerText
    var imageSrc = menu_item.getElementsByClassName('shop-item-image')[0].src
    add_item_to_cart(title, price, imageSrc)
    update_total_amount()
}

function add_item_to_cart(title, price, imageSrc) {
    var cart_row = document.createElement('div')
    cart_row.classList.add('row')
    var cart_items = document.getElementsByClassName('items')[0]
    var cart_item_title = cart_items.getElementsByClassName('title')
    for (var i = 0; i < cart_item_title.length; i++) {
        if (cart_item_title[i].innerText == title) {
            alert('This item is already added to the cart.')
            return
        }
    }
    alert('Item added to cart successfully.')
    var cart_row_content = `
        <div class="image_box">
            <img src="${imageSrc}">
        </div>

        <div class="content">
            <h1 class="title">${title}</h1>
            <h3 class="price">${price}</h3>
        </div>

        <div class="counter">
            <input class="count" type="number" max="20" value="1">
        </div>

        <div class="item_amount">
            <div class="amount">RM9.90</div>
        </div>

        <div class="item_remove">
            <button class="remove">X</button>
        </div>`

    cart_row.innerHTML = cart_row_content
    cart_items.append(cart_row)
    cart_row.getElementsByClassName('remove')[0].addEventListener('click', remove_items)
    cart_row.getElementsByClassName('count')[0].addEventListener('change', change_quantity)
}

function update_total_amount() {
    var cart_container = document.getElementsByClassName('items')[0]
    var cart_rows = cart_container.getElementsByClassName('row')
    var item_total = 0
    var total = 0
    for (var i = 0; i < cart_rows.length; i++) {
        var cart_row = cart_rows[i]
        var price_element = cart_row.getElementsByClassName('price')[0]
        var quantity_element = cart_row.getElementsByClassName('count')[0]
        var price = parseFloat(price_element.innerText.replace('RM', ''))
        var quantity = quantity_element.value
        item_total = price * quantity
        total = total + (price * quantity)
        item_total = Math.round(item_total * 100) / 100
        document.getElementsByClassName('amount')[i].innerText = 'RM' + item_total.toFixed(2)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('total_amount')[0].innerText = 'RM' + total.toFixed(2)

    quantity_element.addEventListener('mouseover', function(){localStorage.setItem("Total Amount", total.toFixed(2))})

    document.querySelector("#updatePrice").addEventListener("click", function(){
        document.querySelector("#totalPrice").innerHTML = localStorage.getItem("Total Amount");
        document.querySelector("#totalPrice").value = localStorage.getItem("Total Amount");
      })
}

const picker = document.getElementById('date');
picker.addEventListener('input', function(e){
    var day = new Date(this.value).getUTCDay();
    if([0].includes(day)){
        e.preventDefault();
        this.value = '';
        alert('We are not open on Sunday :)');
    }
});

var today = new Date().toISOString().split('T')[0];
document.getElementsByName("date")[0].setAttribute('min', today);



