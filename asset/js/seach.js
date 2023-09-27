function searchProducts() {
    var searchText = document.querySelector('.search-input').value.toLowerCase();
    var category = document.querySelector('.category-select').value;
    var products = document.querySelectorAll('.card');
    var searchResultsList = document.querySelector('.search-results-list');
    var searchDropdown = document.querySelector('.search-dropdown');
  
    searchResultsList.innerHTML = '';
    searchDropdown.classList.remove('active');
  
    var searchCount = 0;
    var hasSearchText = searchText.trim() !== '';
  
    for (var i = 0; i < products.length; i++) {
      var product = products[i];
      var title = product.querySelector('.card-text font:first-child font:first-child').textContent.toLowerCase();
      var categoryValue = product.querySelector('.card-text span:last-child').textContent.toLowerCase();
  
      var matchSearchText = title.indexOf(searchText) !== -1;
      var matchCategory = category === 'all' || categoryValue.indexOf(category) !== -1;
  
      if (hasSearchText && matchSearchText && matchCategory) {
        product.style.display = 'block';
  
        var listItem = document.createElement('li');
        var link = document.createElement('a');
  
        if (i === 0) {
            link.href = 'chitiet.html';
          } else if (i === 1) {
            link.href = 'chitiet.html';
          } else if (i === 2) {
            link.href = 'chitiet.html';
          } else if (i === 3) {
            link.href = 'chitiet.html';
          } else if (i === 4) {
            link.href = 'chitiet.html';
          } else if (i === 5) {
            link.href = 'chitiet.html';
          }else if (i === 6) {
            link.href = 'chitiet.html';
          }else if (i === 7) {
            link.href = 'chitiet.html';
          }
          
  
        link.textContent = title;
        link.style.cursor = 'pointer';
        link.onclick = function() {
          window.location.href = this.href;
        };
        listItem.appendChild(link);
        searchResultsList.appendChild(listItem);
  
        searchCount++;
      }
    }
  
    if (hasSearchText && searchCount > 0) {
      searchDropdown.classList.add('active');
    }
  }