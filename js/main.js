const productsContainer = document.getElementById("productsContainer");

axios.get("api/products.php")
.then(resp => {
    const data = resp.data.dati;


    data.forEach(element => {
        .innerHTML()
    });
})