window.onload = function() {
    const rows = 20;
    const manipulate = $(".grid-container")
    for (let i=0; i<rows; i++){
        let txt = "product_" + String(i)
        let product_price = $("<i/>", {
            text: String(i),
            class: "fa-solid fa-dollar-sign",
        });

        let img = $("<img />", {
            src: "../.utils/images/logo.png",
            width: "100%"
        });
        let button = $("<button/>", {
            class: "button-add fa-solid fa-cart-plus",
            onclick: "changeIcon(this);"
        });
        let br = document.createElement("br")
        let product_name = $("<p/>", {
            text: txt,
        })
        let div = $("<div/>", {
            class: "card",      // ('class' is still better in quotes)
            appendTo: "manipulate"      // Finally, append to any selector
        }); // << no need to do anything here as we defined the properties internally.
        let div_grid = $("<div/>", {
            class: "grid-item",      // ('class' is still better in quotes)
            appendTo: "manipulate"      // Finally, append to any selector
        });
        div.append([img, product_name, br, product_price, br, button])
        div_grid.append(div);
        manipulate.append(div_grid)
    }
}

/*
<div class="grid-item">
                <div class="card">
                  <img src="../.utils/images/logo.png" alt="Avatar" style="width:100%">
                  <h4>Lorem, ipsum.</h4>
                  <p>Price <i class="fa-solid fa-dollar"></i></p>
                  <button class="button-add fa fa-cart-plus" onclick="changeIcon(this)"></button>
                </div>
              </div>
*/