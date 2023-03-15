function fillParagraph() {
    const maxNumber = 5;
    let saveButton = document.getElementById('save-list');

    let list = document.querySelector('div > ol');


    if (list.children.length >= maxNumber) {
        alert('You can only add 5 items per list');
        return false;

    }
    let input = document.getElementById('list-input');
    let defaultItem = document.getElementById('default-item');

    const newListItem = document.createElement('li');
    newListItem.setAttribute('class', 'list-item');
    const newTextItem = document.createTextNode(input.value);

    newListItem.appendChild(newTextItem);

    if (defaultItem !== null) {
        list.replaceChild(newListItem, defaultItem);
    }

    list.insertBefore(newListItem, null);

    list.style.color = 'green';

    if (list.children.length === 5) {
        saveButton.disabled = false;
        let collection = document.querySelectorAll('.list-item');
        collection.forEach(function (item) {
            console.log(item.innerText);
        })
    }
}

async function save(list) {
    let response = await fetch(`http://localhost:8888/src/save.php?q=${list}`, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
        }
    });
    return await response.json();
}

