document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');
    const carouselItems = document.querySelectorAll('.swiper-slide');

    function handleCarouselItemClick() {
        const productName = this.textContent;
        searchInput.value = productName;

        // Buscar el índice del elemento del carrusel correspondiente al resultado
        const index = Array.from(carouselItems).findIndex(item => item.querySelector('h1').textContent.toLowerCase() === productName.toLowerCase());

        // Hacer scroll al elemento en el carrusel
        if (index !== -1) {
            carouselItems[index].scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        searchResults.innerHTML = '';
    }

    searchInput.addEventListener('input', function() {
        const searchQuery = this.value.toLowerCase();

        searchResults.innerHTML = '';

        carouselItems.forEach(item => {
            const productName = item.querySelector('h1').textContent.toLowerCase();
            const productDescription = item.querySelector('p').textContent.toLowerCase();

            if (productName.includes(searchQuery) || productDescription.includes(searchQuery)) {
                const resultItem = document.createElement('div');
                resultItem.className = 'search-result-item';
                resultItem.textContent = productName;

                // Manejar clic en un resultado
                resultItem.addEventListener('click', handleCarouselItemClick);

                searchResults.appendChild(resultItem);
            }
        });

        if (searchQuery.length > 0 && searchResults.children.length > 0) {
            searchResults.style.display = 'block';
        } else {
            searchResults.style.display = 'none';
        }
    });

    document.addEventListener('click', function(event) {
        if (!searchResults.contains(event.target) && event.target !== searchInput) {
            searchResults.style.display = 'none';
        }
    });
});
