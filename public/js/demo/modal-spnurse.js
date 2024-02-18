const dischargespnurse = document.getElementById('dischargespnurse');
dischargespnurse.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget;
    const recipient = button.getAttribute('data-bs-whatever');
    const recipient2 = button.getAttribute('data-bs-whatever2');

    const modalBodyInput = dischargespnurse.querySelector('#recipient');
    const modalBodyInput2 = dischargespnurse.querySelector('#recipient2');

    modalBodyInput.value = recipient;
    modalBodyInput2.value = recipient2;
});