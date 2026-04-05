if (document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready)
} else{
    ready()
}


// prices
var prices = document.getElementsByClassName('pastry1')[0]

console.log(prices)

// code for buttons
function ready(){
    // cart
    var removeItemButton = document.getElementsByClassName('btn-remove')
    for (var i = 0; i < removeItemButton.length; i++) {
        var button = removeItemButton[i]
        button.addEventListener('click', remove_Button)

    }

    var quantityInput = document.getElementsByClassName('quantity')
    for (var i = 0; i < quantityInput.length; i++) {
        var input = quantityInput[i]
        input.addEventListener('change', quantityChanged)
    }

    // Store
    var addToCartButton = document.getElementsByClassName('item1-buy-button')
    for (var i = 0; i < addToCartButton.length; i++) {
        var button = addToCartButton[i]
        button.addEventListener('click', addToCart)
    }
    document.getElementsByClassName('checkout-button')[0].addEventListener('click', checkoutDone)


}



//  Store

function checkoutDone(){
    alert('Purchase Completed')
    var cartContainer = document.getElementsByClassName('sc-product-container ')[0]
    while ( cartContainer.hasChildNodes()){
        cartContainer.removeChild(cartContainer.firstChild)
    }
    updateGrandTotal()
}

function addToCart(event){
    var button = event.target
    var itemGroup = button.parentElement.parentElement
    var title = itemGroup.getElementsByClassName('item1-name')[0].innerText
    var price = itemGroup.getElementsByClassName('item1-price')[0].innerText
    var img = itemGroup.getElementsByClassName('item1-img')[0].src
    addItemtoCart(title, price, img)
    var quantity1 = document.getElementsByClassName('item1-buy-button')[0]
    if (isNaN(quantity1)){
        quantity1 = 1
        console.log(quantity1)
    }
    updateGrandTotal()
}

function addItemtoCart(title, price, img){
    var cartRow = document.createElement('div')
    var cartGroup = document.getElementsByClassName('sc-product-container')[0]


    var productNames = cartGroup.getElementsByClassName('product-name')
    for ( var i = 0; i < productNames.length; i++){
        if (productNames[i].textContent == title){
            alert("Item Already in Cart")
            return
        }
    }

    var cartGroupRow = `
    <div class="product-group">
        <img src="${img}" alt="img" class = "product-img">
        <p class = "product-name">${title}</p>
        <div class="pricing-container">
            <p class="price"> ${price}</p>
            <input class = "quantity" type = "number" onkeypress="return /[0-9]/i.test(event.key)" min = "1">
        </div>
        <!-- <div class="product-total"></div> -->
        <button class="btn-remove">remove</button>
    </div>`
    cartRow.innerHTML = cartGroupRow
    cartGroup.append(cartRow)
    cartRow.getElementsByClassName('btn-remove')[0].addEventListener('click', remove_Button)
    cartRow.getElementsByClassName('quantity')[0].addEventListener('change', quantityChanged)
    updateGrandTotal()
}

// Cart


function remove_Button(event){
    var buttonClicked = event.target
        buttonClicked.parentElement.parentElement.remove()
        updateGrandTotal()
}


function quantityChanged(event){
    var input = event.target
    if (isNaN(input.value) || input.value <= 0){
        input.value = 1
    }

    if (input.value >= 999){
        input.value = 999
    }
    updateGrandTotal()
}

function updateGrandTotal(){
    var shoppingCartContainer = document.getElementsByClassName('sc-container')[0]
    
    var contentContainer = shoppingCartContainer.getElementsByClassName('sc-content-container')[0]

    var productContainer = contentContainer.getElementsByClassName('sc-product-container')[0]

    var productGroups = productContainer.getElementsByClassName('product-group')

    var total = 0

    for (var i = 0; i < productGroups.length; i++){
        var productGroup = productGroups[i]
        var priceElement = productGroup.getElementsByClassName('price')[0]
        var quantityElement = productGroup.getElementsByClassName('quantity')[0]

        var price = parseFloat(priceElement.innerText.replace('₱', ''))
        var quantityfix = quantityElement.value
        var quantity = parseFloat(quantityfix)

        

        total = total + (price*quantity)
        
    }
    total = Math.round(total*100)/100
    document.getElementsByClassName('grand-total')[0].innerText = "₱" + total

}

// TEMP PRODUCTS
const pastryList = {
    "p1" : ["pastry1", 100],
}

function func1(){
    alert(p1)
}