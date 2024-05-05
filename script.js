const btnGetData = document.getElementById('btnGetData');
const dataContainer = document.getElementById('data-container');

btnGetData.addEventListener('click', () => {
    fetch('api.php')
        .then(response => response.text())
        .then(data => {
            dataContainer.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
});