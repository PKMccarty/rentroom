const exampleModal16 = document.getElementById('exampleModal16')
exampleModal16.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget
    const recipient = button.getAttribute('data-bs-whatever')
    const modalBodyInput = exampleModal16.querySelector('.modal-body input')
    modalBodyInput.value = recipient
})