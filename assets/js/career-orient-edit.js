console.log('hi');

const editLinks = document.querySelectorAll('.edit-post-link');
const editForm = document.getElementById('editPostForm');

editLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        console.log(link.href);
        fetch(link.href)
        .then(result => result.json())
        .then(data => {

            editForm.id.value = data.id;
            editForm.title.value = data.name;
            editForm.description.value = data.description;

            console.log(data, editForm);

        })
        .catch(e => {
            console.log("can't find edit.")
        })
    })
})