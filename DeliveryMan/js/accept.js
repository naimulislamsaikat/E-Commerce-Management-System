function orderview(orderID, status, price, location, city, type, category, customerID, date){
    var bdy = document.getElementById("orders");

    var card = document.createElement("div");
    card.className = "order-card";

    card.innerHTML = `
        <h3>Order #${orderID}</h3>
        <p><b>Status:</b> <span class="status-text">${status}</span></p>
        <p><b>Price:</b> ${price}</p>
        <p><b>Location:</b> ${location}, ${city}</p>
        <p><b>Type:</b> ${type}</p>
        <p><b>Category:</b> ${category}</p>
        <p><b>Customer ID:</b> ${customerID}</p>
        <p><b>Date:</b> ${date}</p>
    `;
     

    //accept button
    var btnPicked = document.createElement("button");
    btnPicked.className = "accept";
    btnPicked.innerHTML = "accept";
    btnPicked.onclick = function(){
        window.location.href = "../db/OrderStatus.php?orderID=" + orderID + "&status=Picked";
    };
    // Picked button
    var btnPicked = document.createElement("button");
    btnPicked.className = "picked";
    btnPicked.innerHTML = "Picked";
    btnPicked.onclick = function(){
        window.location.href = "../db/OrderStatus.php?orderID=" + orderID + "&status=Picked";
    };
    card.appendChild(btnPicked);

    // Delivered button
    var btnDelivered = document.createElement("button");
    btnDelivered.className = "delivered";
    btnDelivered.innerHTML = "Delivered";
    btnDelivered.onclick = function(){
        window.location.href = "../db/OrderStatus.php?orderID=" + orderID + "&status=Delivered";
    };
    card.appendChild(btnDelivered);

    bdy.appendChild(card);
}
