function searchProducts() {
    var inputValue = document.getElementById("input").value;    
    var productInfos = document.getElementsByClassName("productInfo");    
    for (var i = 0; i < productInfos.length; i++) {
      var productContent = productInfos[i].getElementsByClassName("productContent")[0];      
      if (productContent.innerHTML.toLowerCase().includes(inputValue.toLowerCase())) {
        productInfos[i].style.display = "block";
      } else {
        productInfos[i].style.display = "none";
      }
    }
  }

  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  var buttons = document.getElementsByClassName("buyButton");

  var span = document.querySelector(".close");

  for (var i = 0; i < buttons.length; i++) {
    buttons[i].onclick = function() {
      modal.style.display = "block";
    }
  }
  span.onclick = function() {
    modal.style.display = "none";
  }